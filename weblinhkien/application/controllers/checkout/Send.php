<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Send extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer');
        $this->load->model('Cart');
        $this->load->model('Order');
    }
    public function index(){
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $quan_huyen = $this->input->post('quan_huyen');
        $numberPhone= $this->input->post('numberphone');
        $this->Customer->UpdateInformation($_SESSION['id'],$address, $numberPhone, $email, $name, $city, $quan_huyen);
        $data_cart = $this->Cart->getAllByIDUser($_SESSION['id']);
        $this->Order->Insert($_SESSION['id'], $name, $address, $city, $quan_huyen, $data_cart);
        //phần gửi mail cho khách hàng
        

    }
}