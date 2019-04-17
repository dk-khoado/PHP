<?php
require("MysqlConnet.php");
$ID = $_GET['id'];
if(isset($_GET['id']))
{
    $query = "SELECT *from image where ID_image = $ID";
    $result = $con->query($query);
    $row = $result->fetch_assoc();
    echo $row['link'];
}

?>
