<?php
require("MysqlConnet.php");
$dir = "../upload/image/";

$file_name = $_FILES['image']['name'];
$target_file = $dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if ($imageFileType == "jpg" || $imageFileType == "pnj" || $imageFileType = "git") {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $query = "INSERT into image(name, link) values ('$file_name','$target_file')";
                $con->query($query);
            }
    }
$result =    $con->query("SELECT * from image");
foreach ($result as $value) {
    echo "<tr>";
    echo "<td>";
    echo "<img class='mx-3' src='" . $value['link'] . "' height='100px' width='100px'>";
    echo "</td>";
    echo "<td>";
    echo $value['name'];
    echo "</td>";
    echo "<td></td>";
    echo "</tr>";
    }
?>
