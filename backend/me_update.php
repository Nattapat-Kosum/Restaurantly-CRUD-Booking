<?php
include '../connect/connect.php';

$dir = "img/";
        // $fileImage = $dir . basename($_FILES["img_photo"]["name"]);

        $filename = $_FILES["img_photo"]["name"];
        $extension = substr($filename, -3);
        $newname = "img_".date("YmdHis").".".$extension;
        $fileImage = $dir .basename($newname);

        move_uploaded_file($_FILES["img_photo"]["tmp_name"], $fileImage);

        if(isset($_POST['upload'])){
          $filename = $_FILES["img_photo"]["name"];
          $tempname = $_FILES["img_photo"]["tmp_name"];
          $folder = $_FILES["img_photo"]["tmp_name"];

          move_uploaded_file($tempname,$folder);

        }

?>