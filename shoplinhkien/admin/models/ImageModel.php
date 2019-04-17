<?php
require("../controller/MysqlConnet.php");
class Image
{
    private $connect= null;
    private $currentPath ="";
    function __construct()
    {
        $con = new ConnetMYSQL();
        $this->connect = $con->getConnect();
    }
    function upLoadImage($file, $path){        
        $target_file = $path . basename($file["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if ($imageFileType == "jpg" || $imageFileType == "pnj" || $imageFileType = "git")
        {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                $file_name = $file["name"];
                $query = "INSERT into image(name, link) values ('$file_name','$target_file')";
                $this->connect->query($query);
                $this->currentPath=  $target_file;
            }
        }else
        {
            echo "file không phải ảnh";
        }
    }
    function getPath ()
    {
        return $this->currentPath;
    }
    function getPathImageByID($ID)
    {
        $result = $this->connect->query("SELECT * from Image where ID_image = $ID");
        $array = $result->fetch_assoc();
        return $array['link'];
    }
}
?>