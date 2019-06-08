<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Service extends CI_Controller
{
    public function _postEmail($email)
    {
        $this->load->view("app/postEmailFromLink", array("email" => $email));
    }
    public function Password()
    {
        $email = $this->input->get("email");
        if (isset($_GET['denied'])) {
            $query = "UPDATE custumers set is_resetPass = 0 where EMAIL = '$email'";
            $this->db->query($query);
            echo "Đã hủy yêu cầu";
            usleep(1000);
            redirect("main/index");
        } else if (isset($_GET['email'])) {
            // $query = "UPDATE custumers set is_resetPass = 0 where EMAIL = '$email'";
            // $this->db->query($query);
            //$this->load->view("App/changePassword");
            $tittel = "Quên mật khẩu";
            $data = $this->Type->getAll();
            $context = $this->load->view("App/changePassword", array("email" => $email), true);
            $this->load->view("layout_share", array('type' => $data, 'context' => $context, 'tittel' => $tittel, 'cmd' => 'hide_banner'));
        } else {
            redirect("main/index");
            $tittel = "Error";
            $data = $this->Type->getAll();
            $context = "<h1>Trang yêu cầu không tồn tại!!</h1>";
            $this->load->view("layout_share", array('type' => $data, 'context' => $context, 'tittel' => $tittel, 'cmd' => 'hide_banner'));
        }
    }
    public function d_password()
    {
        $email = $this->input->post('email');
        $this->load->model("Customer");
        if ($this->Customer->is_reset($email)) {
            $password = md5($this->input->post('c_pass1'));
            $query = "UPDATE custumers set is_resetPass = 0, PASSWORD ='$password'  where EMAIL = '$email'";
            $this->db->query($query);
            
            redirect("main/index");
        } else {
            echo "lỗi.......";
            //redirect("main/index");
        }
    }
}
