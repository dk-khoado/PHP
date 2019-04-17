<?php
$host = "localhost";
$port = 3306;
$socket = "";
$user = "khoa";
$password = "Khoathu148";
$dbname = "database";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die('Could not connect to the database server' . mysqli_connect_error());

//$con->close();
class ConnetMYSQL
{
	public function getConnect()
	{
		$host = "localhost";
		$port = 3306;
		$socket = "";
		$user = "khoa";
		$password = "Khoathu148";
		$dbname = "database";

		$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
			or die('Could not connect to the database server' . mysqli_connect_error());
		return $con;
	}
}
?>