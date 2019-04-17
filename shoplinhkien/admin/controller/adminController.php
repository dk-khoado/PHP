<?php
require("../models/adminModel.php");
$username = $_POST['username'];
$password = $_POST['password'];
$admin = new Admin();
if(isset($_POST['c_password']))
{
    $check =$admin->Register($username,md5( $password));
    if($check)
       // header("Location: ../index.html");
       echo "../index.html";
    else
    {        
        echo "false";
    }
}else
{
   $chek = $admin->Login($username, $password);
   if($chek)
   {
        echo "View/";
   }
   else
   {
       echo "false";
   }
}
?>