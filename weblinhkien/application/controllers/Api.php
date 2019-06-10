<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function user()
    {
        header("Content-Type: application/json; charset=UTF-8");
        $var =   $this->input->get_post("username", TRUE);
        //$var1 = $_POST['username'];
        echo  $var;
        // $data = array("londuy"=>array('status'=>'đụ đĩ me mày duy', 'response'=>'ok', 'result'=>1));
        // echo json_encode($data);

    }
    public function check($key)
    {
        $this->load->model('Customer');
        $this->load->model('Key');
        $data_key = $this->Key->getData($key);
        // print_r($data_key);
        $data_user = $this->Customer->getDataByID($data_key->ID_user);
        $data = array(
            "hello_name" => $this->Customer->getNameByID($data_key->ID_user),
            "key"=>$data_key->public_key,
            "keyuser"=>$data_key->key_user
        );
        $context = $this->load->view("form_mail/sendUser", $data, true);

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
        $this->email->from("khoado29k11@viendong.edu.vn", 'Chúa tể hội đồng quản trị');
        $this->email->to($data_user->EMAIL);
        // $this->email->to("violent12330@gmail.com");
        $this->email->subject("Chấp nhận yêu cầu");
        $this->email->message($context);
        if ($this->email->send()) {
            echo "đã yêu key xác nhận đến Thành Viên";            
         }else{
             echo "gửi không thành công";
         }
    }
    public function delete($key)
    {
        $this->load->model('Key');
        $this->Key->Delete($key);
        echo "đã hủy yêu cầu";
    }
    public function confirm($ID){
        $this->load->model('Customer');
        $data = $this->Customer->setActive($ID);
        echo "kích hoạt thành công";
    }
    public function finish($key){
        $this->load->model('User');
        $this->load->model("Key");
        $this->load->model('Customer');
        $data_key = $this->Key->getDataByKeyUser($key);
        $this->Customer->setMenber($data_key->ID_user);
        $data = $this->Customer->getDataByID($data_key->ID_user);
        $this->User->Insert($data->USER, $data->PASSWORD,$key,$data->EMAIL);
    }
    public function signOut(){        
        $this->session->unset_userdata("id_admin");
        $this->session->unset_userdata("name_admin");
        redirect("admin/index");
    }
    public function Search(){
        if(isset($_GET['tim_kiem'])){
            echo $_GET['tim_kiem'];
        }else{
            echo "null";
        }
    }
}
