<?php
class MySQL
{
    public $con = null;
    function __construct()
    {
        $host = "localhost";
        $port = 3306;
        $socket = "";
        $user = "khoa";
        $password = "Khoathu148";
        $dbname = "database";
        $this->con = new mysqli($host, $user, $password, $dbname, $port, $socket)
            or die('Could not connect to the database server' . mysqli_connect_error());

        
    }
    function DeleteProduct($ID)
    {
        $query = "DELETE from product where ID_PRODUCT = $ID";
        $this->con->query($query);
    }
    function AddProduct($CodeProduct, $NameProduct, $AmountProduct, $Descrip, $PriceProduct, $image)
    {
        $query = "INSERT into product(CodeProduct, NameProduct, AmountProduct, Descrip, PriceProduct, Image)values
                    ('$CodeProduct','$NameProduct', '$AmountProduct', '$Descrip', '$PriceProduct','$image')";
        $this->con->query($query);
        if($this->con->affected_rows > 0){
            return true;
        }else
        {
            return false; 
        }
    }
    function SelectAllProduct()
    {
        $query = "SELECT * FROM `database`.product";
        $result = $this->con->query($query);
        return $result;
		//$con->close();
    }
    function SelectProduct($ID)
    {
        $query = "SELECT * FROM `database`.product where ID_PRODUCT = $ID";
        $result = $this->con->query($query);

        return $result->fetch_assoc();
		//$con->close();
    }
    function UpdateProduct($ID, $CodeProduct, $NameProduct, $AmountProduct, $Descrip, $riceProduct, $image){
        $query = "UPDATE  `database`.product set CodeProduct = '$CodeProduct', NameProduct = '$NameProduct', AmountProduct = '$AmountProduct', Descrip = '$Descrip',
         PriceProduct = '$riceProduct', Image = '$image' where ID_PRODUCT = $ID";
        $this->con->query($query);
    }
    function UpdateProduct_NotImage($ID, $CodeProduct, $NameProduct, $AmountProduct, $Descrip, $riceProduct){
        $query = "UPDATE  `database`.product set CodeProduct = '$CodeProduct', NameProduct = '$NameProduct', AmountProduct = '$AmountProduct', Descrip = '$Descrip',
         PriceProduct = '$riceProduct' where ID_PRODUCT = $ID";
        $this->con->query($query);
    }
}

?>
