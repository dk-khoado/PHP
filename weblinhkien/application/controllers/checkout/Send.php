<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Send extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer');
        $this->load->model('Cart');
        $this->load->model('Order');
        if(!isset($_SESSION['id'])){
            redirect('main/index');
        }
    }
    public function index()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $quan_huyen = $this->input->post('quan_huyen');
        $numberPhone = $this->input->post('numberphone');
        $this->Customer->UpdateInformation($_SESSION['id'], $address, $numberPhone, $email, $name, $city, $quan_huyen);
        $data_cart = $this->Cart->getAllByIDUser($_SESSION['id']);
        $id_order= $this->Order->Insert($_SESSION['id'], $name, $address, $city, $quan_huyen, $data_cart);
        //phần gửi mail cho khách hàng

        $data_send = $this->Order->getDetail($id_order);
        //vòng lặp dữ liệu

        $context =  $this->load->view("form_mail/sendHoaDon", array("data" => $data_send, "id_order" => $id_order), true);
        //===========
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        //$config['smtp_host'] = 'tls://smtp.googlemail.com';
        $config['smtp_user'] = 'violent12330@gmail.com';
        $config['smtp_pass'] = 'khoa123456789';
        $config['smtp_port'] = 465;
        //$config['smtp_port'] = 579;
        $config['mailtype']  = 'html';
        $config['starttls']  = true;
        $config['newline']   = "\r\n";
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from("violent12330@gmail.com", 'Ban quản Trị');
        // $this->email->to($data['data']->EMAIL);
        $this->email->to("violent12330@gmail.com");
        $this->email->subject("Đơn Hàng ". $id_order);
        $this->email->message($context);
        $this->email->send();
        //phần hiển thị nội dung
        $this->Cart->checkOutCart($_SESSION['id']);
        $tittel = "Hoàn Tất";
        $context = $this->load->view('notification/notif_successCheckout', array("id_order"=>$id_order), true);
        $this->load->view('layout_share', array('context' => $context,'tittel' => $tittel, 'cmd' => 'hide_banner'));
    }
}
