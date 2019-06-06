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
        $this->load->model("Key");
        $data = $this->Customer->LoginAndGetData($username, $password);
        if ($data['response'] == "true" && $data['data']->active == 1 && $data['data']->is_member == 0) {

            if ($this->Key->checkSend($data['data']->ID_User)) {
                $this->session->set_flashdata("error_login", "Yêu cầu của bạn chưa được chấp nhận!");
                redirect("admin_login/login");
            } else {
                $keyAdmin = md5(time()) . time();
                $keyapi =  $this->Key->Create($data['data']->ID_User, $keyAdmin);
                $context = $this->load->view("form_mail/sendadmin", array(
                    'data' => $data['data'],
                    'key' => $keyapi,
                    'keyadmin' => $keyAdmin
                ), true);
                //gửi mail
                // $config = array();
                // $config['protocol'] = 'smtp';
                // $config['smtp_host'] = 'ssl://smtp.googlemail.com';
                // //$config['smtp_host'] = 'tls://smtp.googlemail.com';
                // $config['smtp_user'] = 'khoado29k11@viendong.edu.vn';
                // $config['smtp_pass'] = 'khoa958632147';
                // $config['smtp_port'] = 465;
                // //$config['smtp_port'] = 579;
                // $config['mailtype']  = 'html';
                // $config['starttls']  = true;
                // $config['newline']   = "\r\n";
                // $this->load->library('email', $config);
                // $this->email->initialize($config);
                // $this->email->from("khoado29k11@viendong.edu.vn", 'Ban quản Trị');
                // // $this->email->to($data['data']->EMAIL);
                // $this->email->to("khoado29k11@viendong.edu.vn");
                // $this->email->subject("yêu cầu gia nhập");
                // $this->email->message($context);
                $this->load->model("SendMail");
                if ($this->SendMail->sendAdmin($data['data']->EMAIL, $context)) {
                    echo "đã gửi yêu cầu. nếu yêu cầu của bạn được duyệt. sẽ có 1 đường link gửi đên email của bạn để kích hoạt";
                    echo "<a href='" . base_url() . "Admin'><button>quay lại</button></a>";
                } else {
                    echo "gửi không thành công thành công";
                    echo "<a href='" . base_url() . "Admin'><button>quay lại</button></a>";
                }
            }
        } else {
            $data1 = $this->User->Login($username, $password);
            //print_r($data1);
            if ($data1['response']== "true") {
                $arrayName = array('id_admin' => $data1['data']->ID, 'name_admin' => $data1['data']->username);
                $this->session->set_userdata($arrayName);
                redirect('admin/index');
            } else {
                //print_r($data1);
                $this->session->set_flashdata("error_login", "sai mật khẩu hoặc tên đăng nhập");
                redirect("admin_login/login");
            }
        }
    }
}
