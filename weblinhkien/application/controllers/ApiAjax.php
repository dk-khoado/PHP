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
            $id = $this->input->post('id_user');
            $data = $this->Cart->getAllByIDUser($id);                          
            echo json_encode($data);
        } else {
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
    public function addToCart(){
        $id_user = $this->input->post("id_user");
        $id_product = $this->input->post("id_product");
        $amount = $this->input->post("amount");
        $product = $this->Products->getByID($id_product);
        $this->Cart->Insert($id_product, $id_user, $amount, $product->NameProduct, $product->Image, $product->PriceProduct);
        
    }
    public function removeOncart(){
        $id_cart = $this->input->post("id_cart");
        $this->Cart->deleteByID($id_cart);
    }
}
