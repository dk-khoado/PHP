<?php
require("../controller/MysqlConnet.php");
class Admin
{
    private $connect = null;
    function __construct()
    {
        $mySQL = new ConnetMYSQL();
        $this->connect = $mySQL->getConnect();
    }
    //trả về giá trị là mảng
    function getData()
    {
        $result = $this->connect->query("SELECT * from admin");       
        return $result;
    }
	function Register($username, $password)
	{
        $query = "INSERT into admin(username, password) values('$username', '$password')";
        $result = $this->connect->query($query);
        return $result;
    }
    function Login($username, $password)
    {
        $md5Password = md5($password);
        $query= "SELECT * from admin where username= '$username' and password = '$md5Password'";
        $result = $this->connect->query($query);
        if($result->num_rows >0)
        {
            return true;
        }else
        {
            return false;
        }
    }
}
?>