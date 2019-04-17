<?php 
require("DBconnet.php");
require("../models/ImageModel.php");
$ID = $_POST['ID'];
$CodeProduct= $_POST['codeProduct'];
$NameProduct= $_POST['nameProduct'];
$AmountProduct= $_POST['amount'];

$Descrip;
$PriceProduct= $_POST['price'];
$file_image = $_FILES['image'];
$MySQL = new MySQl();
$image = new Image();
if(isset($_POST['descript']))
{
    $Descrip= $_POST['descript'];
}else
{
    $Descrip= "";
}
if($file_image['size'] >0)
{
    $image->upLoadImage($file_image,"../upload/image/");
    $MySQL->UpdateProduct($ID, $CodeProduct, $NameProduct, $AmountProduct, $Descrip, $PriceProduct, $image->getPath());
}
else 
{
    if(isset($_POST['choseImage']))
    {
        $choseImage = $_POST['choseImage'];
        $linkImage = $image->getPathImageByID($choseImage);
        $MySQL->UpdateProduct($ID, $CodeProduct, $NameProduct, $AmountProduct, $Descrip, $PriceProduct, $linkImage);
    }
    else
    {
        $MySQL->UpdateProduct_NotImage($ID, $CodeProduct, $NameProduct, $AmountProduct, $Descrip, $PriceProduct);

    }
}
   
header("Location: ../View/products_list.php");
?>