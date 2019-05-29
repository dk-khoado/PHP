<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ApiAjax  extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer');
    }
    public function checkLogin()
    {

        $this->Customer->Login();
    }
    public function Search()
    { }
    public function checkRegister()
    {

        $username = $this->input->post("username");
        $email = $this->input->post("email");

        if ($this->Customer->checkName($username)) {
            echo "username";
        } else if ($this->Customer->checkEmail($email)) {
            echo "email";
        } else {
            echo "ok";
        }
    }
}
