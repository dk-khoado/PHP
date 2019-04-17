<?php
require("DBconnet.php");
require("../models/ImageModel.php");

$CodeProduct= $_POST['codeProduct'];
$NameProduct= $_POST['nameProduct'];
$AmountProduct= $_POST['amount']; 

$Descrip;
$PriceProduct= $_POST['price'];
$image = new Image();
$MySQL = new MySQl();
if(isset($_POST['descript']))
{
    $Descrip= $_POST['descript'];
}else
{	
    $Descrip= "";
}
$file_image = $_FILES['image'];
if($file_image['size'] >0)
{
    //echo "đã up";
    $image->upLoadImage($file_image,"../upload/image/");
    $check = $MySQL->AddProduct($CodeProduct, $NameProduct, $AmountProduct, $Descrip, $PriceProduct, $image->getPath());
}else
{
    if(isset($_POST['choseImage']))
    {
        $choseImage = $_POST['choseImage'];
        $linkImage = $image->getPathImageByID($choseImage);
        $check = $MySQL->AddProduct($CodeProduct, $NameProduct, $AmountProduct, $Descrip, $PriceProduct, $linkImage);
    }
    else
    {
        $check = $MySQL->AddProduct($CodeProduct, $NameProduct, $AmountProduct, $Descrip, $PriceProduct, "../upload/image/default.jpg");

    }
}


if($check){
    header('Location: ../View/products_list.php');
}else{
    echo "alert('Thêm thất bại')";
    header('Location: ../View/addProduct.php');
}
?>