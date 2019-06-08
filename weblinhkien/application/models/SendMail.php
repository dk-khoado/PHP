<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SendMail extends CI_Model
{
    public function sendAdmin($from,$context)
    {
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        //$config['smtp_host'] = 'tls://smtp.googlemail.com';
        $config['smtp_user'] = 'khoado29k11@viendong.edu.vn';
        $config['smtp_pass'] = 'khoa958632147';
        $config['smtp_port'] = 465;
        //$config['smtp_port'] = 579;
        $config['mailtype']  = 'html';
        $config['starttls']  = true;
        $config['newline']   = "\r\n";

        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from($from, 'Yêu Cầu Gia Nhập');
        $this->email->to("khoado29k11@viendong.edu.vn");
        $this->email->subject('Yêu Cầu Gia Nhập');
        $this->email->message($context);
        return $this->email->send();
    }
    public function sendDonHang($email,$context,$id_order){
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        //$config['smtp_host'] = 'tls://smtp.googlemail.com';
        $config['smtp_user'] = 'khoado29k11@viendong.edu.vn';
        $config['smtp_pass'] = 'khoa958632147';
        $config['smtp_port'] = 465;
        //$config['smtp_port'] = 579;
        $config['mailtype']  = 'html';
        $config['starttls']  = true;
        $config['newline']   = "\r\n";
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from("khoado29k11@viendong.edu.vn", 'LinhKien9586');
        $this->email->to($email);
        // $this->email->to("khoado29k11@viendong.edu.vn");
        $this->email->subject("Đơn Hàng ". $id_order);
        $this->email->message($context);
        $this->email->send();
    }
    public function sendResetPassword($email,$context){
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        //$config['smtp_host'] = 'tls://smtp.googlemail.com';
        $config['smtp_user'] = 'khoado29k11@viendong.edu.vn';
        $config['smtp_pass'] = 'khoa958632147';
        $config['smtp_port'] = 465;
        //$config['smtp_port'] = 579;
        $config['mailtype']  = 'html';
        $config['starttls']  = true;
        $config['newline']   = "\r\n";
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from("khoado29k11@viendong.edu.vn", 'LinhKien9586');
        $this->email->to($email);
        // $this->email->to("khoado29k11@viendong.edu.vn");
        $this->email->subject("Quên mật khẩu");
        $this->email->message($context);
        $this->email->send();
    }
}
