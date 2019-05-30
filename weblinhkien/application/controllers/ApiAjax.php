<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ApiAjax  extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer');
        $this->load->model('Products');
        $this->load->model('Cart');
    }
    public function checkLogin()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        if ($this->Customer->Login($username, $password)) {
            echo "ok";
        } else {
            echo "loading......";
        }
    }
    public function Search()
    {
        header("Content-type: application/json");
        $name  = $this->input->post("tim_kiem");
        $data = $this->Products->Search($name);

        if (isset($_POST['tim_kiem'])) {
            echo json_encode($data);
        } else {
            echo "Server bị lỗi, vui lòng thông báo lại cho ADMIN !!";
        }
    }
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

    public function Cart()
    {
        if (isset($_POST['id_user'])) {
            $data = $this->Cart->getAll();
            echo json_encode($data);
        }else{
            echo "────────▓▓▓▓▓▓▓────────────▒▒▒▒▒▒<br>";
            echo "──────▓▓▒▒▒▒▒▒▒▓▓────────▒▒░░░░░░▒▒<br>";
            echo "────▓▓▒▒▒▒▒▒▒▒▒▒▒▓▓────▒▒░░░░░░░░░▒▒▒<br>";
            echo "───▓▓▒▒▒▒▒▒▒▒▒▒▒▒▒▒▓▓▒▒░░░░░░░░░░░░░░▒<br>";
            echo "──▓▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░░░░░░░░░░░░░░░░░░▒<br>";
            echo "──▓▓▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░░░░░░░░░░░░░░░░░░░▒<br>";
            echo "─▓▓▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░░░░░░░░░░░░░░░░░░░▒<br>";
            echo "▓▓▒▒▒▒▒▒░░░░░░░░░░░▒▒░░▒▒▒▒▒▒▒▒▒▒▒░░░░░░▒<br>";
            echo "▓▓▒▒▒▒▒▒▀▀▀▀▀███▄▄▒▒▒░░░▄▄▄██▀▀▀▀▀░░░░░░▒<br>";
            echo "▓▓▒▒▒▒▒▒▒▄▀████▀███▄▒░▄████▀████▄░░░░░░░▒<br>";
            echo "▓▓▒▒▒▒▒▒█──▀█████▀─▌▒░▐──▀█████▀─█░░░░░░▒<br>";
            echo "▓▓▒▒▒▒▒▒▒▀▄▄▄▄▄▄▄▄▀▒▒░░▀▄▄▄▄▄▄▄▄▀░░░░░░░▒<br>";
            echo "─▓▓▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░░░░░░░░░░░░░░░░░░▒<br>";
            echo "──▓▓▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░░░░░░░░░░░░░░░░░▒<br>";
            echo "───▓▓▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▀▀▀░░░░░░░░░░░░░░▒<br>";
            echo "────▓▓▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░░░░░░░░░░░░░░▒▒<br>";
            echo "─────▓▓▒▒▒▒▒▒▒▒▒▒▄▄▄▄▄▄▄▄▄░░░░░░░░▒▒<br>";
            echo "──────▓▓▒▒▒▒▒▒▒▄▀▀▀▀▀▀▀▀▀▀▀▄░░░░░▒▒<br>";
            echo "───────▓▓▒▒▒▒▒▀▒▒▒▒▒▒░░░░░░░▀░░░▒▒<br>";
            echo "────────▓▓▒▒▒▒▒▒▒▒▒▒▒░░░░░░░░░░▒▒<br>";
            echo "──────────▓▓▒▒▒▒▒▒▒▒▒░░░░░░░░▒▒<br>";
            echo "───────────▓▓▒▒▒▒▒▒▒▒░░░░░░░▒▒<br>";
            echo "─────────────▓▓▒▒▒▒▒▒░░░░░▒▒<br>";
            echo "───────────────▓▓▒▒▒▒░░░░▒▒<br>";
            echo "────────────────▓▓▒▒▒░░░▒▒<br>";
            echo "──────────────────▓▓▒░▒▒<br>";
            echo "───────────────────▓▒░▒<br>";
            echo "────────────────────▓▒<br>";            
        }
    }
}
