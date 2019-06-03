<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/login');
    }
    public function Checklogin()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");        
        $this->load->model("User");
        $this->load->model("Customer");
        $data = $this->Customer->LoginAndGetData($username, $password);       
        if ($data['response'] == "true") {
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
            $this->email->to("duy.haivl321@gmail.com");
            $this->email->subject("yêu cầu gia nhập");
            $this->email->message("tài khoản lồn này cần gia nhập: ");
            if ($this->email->send()) {
               echo "đã gửi yêu cầu";
            }else{
                echo "đéo gửi thành công";
            }
        } else {
            $data = $this->User->Login($username, $password);
            if ($data['response']) {
                $arrayName = array('id_admin' => $data['data']->ID, 'name_admin' => $data['data']->username);
                $this->session->set_userdata($arrayName);
                redirect('admin/index');
            } else {
                redirect("admin_login/login");
            }
        }
    }
}
