<?php
require("DBconnet.php");
$ID = $_GET['id'];
$MySQL = new MySQL();
$MySQL->DeleteProduct($ID);
echo $ID;
header("Location: ../View/products_list.php");
?>