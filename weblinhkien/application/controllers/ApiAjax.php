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
		$this->load->model('Country');
    }
    public function checkLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($this->Customer->Login($username, $password)) {
            echo "ok";
        } else {
            // echo "loading......";
            echo $username;
        }
    }
    public function Search()
    {
        //header("Content-type: application/json");
        $name  = $this->input->post("tim_kiem");
        $data = $this->Products->Search($name);

        if (isset($_POST['tim_kiem'])) {
            echo json_encode($data);
        } else {
            
            echo json_encode(array("response"=>"null"));
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
        $data = $this->Cart->checkExist($id_product,$id_user);
        print_r($data);
        if($data['result'] == 'true'){
            $addAmount = $data['data']->amount;
            $product = $this->Products->getByID($id_product);  
            $id_cart = $data['data']->id_cart;
            $this->Cart->Update($id_cart, $amount+ $addAmount);
        }else{
            $product = $this->Products->getByID($id_product);      
            $this->Cart->Insert($id_product, $id_user, $amount, $product->NameProduct, $product->Image, $product->PriceProduct);
        }

    }
    public function removeOncart(){
        $id_cart = $this->input->post("id_cart");
        $this->Cart->deleteByID($id_cart);
    }
    public function updateCart(){
        $id_user = $this->input->post("id_user");
        $id_product = $this->input->post("id_product");
        $amount = $this->input->post("amount");
        $data = $this->Cart->checkExist($id_product,$id_user);
        $id_cart = $data['data']->id_cart;
        $this->Cart->Update($id_cart, $amount);
    }
    public function orderdetail(){
        
        $idorder = $this->input->post('id_order');
        $this->load->model("Order");
        $data = $this->Order->getDetail($idorder);
        echo json_encode($data);
    }
    public function resetPass(){
        $email= $this->input->post("email");       
        $this->load->model("SendMail");
        $this->Customer->ResetPassword($email);
        $context =$this->load->view("form_mail/sendResetPass",array("email"=>$email), true);;
        $this->SendMail->sendResetPassword($email, $context);    
    }
	//Từ đây xuống dưới là của Duy nhá
	//thành công
	public function loadDistrist()
	{
        $this->load->model("Country");
		$distrist = $this->input->post("ID_city");
		$data = $this->Country->Distrist($distrist);
		echo json_encode($data);
	}
	//thành công
	public function insertcity()
	{
		$this->load->model("Country");
		$city = $this->input->post("city_name");
		$data = $this->Country->Insert($city);
	}
	//thành công
	public function loadcity()
	{
		$this->load->model("Country");
		$data = $this->Country->Province();
		echo json_encode($data);
	}
	//thàng công
	public function removeCity()
	{
		$ID_city = $this->input->post("ID_city");
        $this->Country->DeleteByID($ID_city);
	}
	//thành công
	public function AddDistrist()
	{
		$this->load->model("Country");
		$id_city = $this->input->post("ID_city");
		$quan_huyen = $this->input->post("quan_huyen_name");
		$data = $this->Country->InsertDis($id_city, $quan_huyen);
		
	}
	//thành công
	public function UpdateCity()
	{
		$this->load->model("Country");
		$city_name = $this->input->post("city_name");
		$ID_city = $this->input->post("ID_city");
		$this->Country->UpdateCity($city_name, $ID_city);
		
	}	
}
