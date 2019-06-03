<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller{
    public function index(){
        	       
    }
    public function login(){
        $username = $this->input->post("username");
		$password = $this->input->post("password");
		$this->load->model("User");
		if($this->User->Login($username, $password)){
			redirect('admin/index');
		}	
    } 
}