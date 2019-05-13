<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
    function user()
    {   
        header("Content-Type: application/json; charset=UTF-8");
        $var =   $this->input->get_post("username", TRUE);
        //$var1 = $_POST['username'];
        echo  $var;
        // $data = array("londuy"=>array('status'=>'đụ đĩ me mày duy', 'response'=>'ok', 'result'=>1));
        // echo json_encode($data);
        
    }
    function userpass()
    {
        if(isset($_POST['username'])){
            $data = array("quanly"=> array('user'=>'kakoi9586', 'pass'=>"khoathu148"));
            echo json_encode($data);
        }else
        {
            
        }
        
    }
}