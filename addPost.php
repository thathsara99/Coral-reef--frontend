<?php
    $msg=$_POST['message'];
    echo $msg;
    echo $_FILES["post_img"]["name"];
    $target_dir = "assets/img/Article/";
    $target_file = $target_dir . basename($_FILES["post_img"]["name"]);
    if(!empty($target_file)){
        if (move_uploaded_file($_FILES["post_img"]["tmp_name"],$target_file)) {
            echo $_FILES["post_img"]["tmp_name"];
            header('location:Community.php');
        }
        else{
            echo "<script>alert('cant upload file')</script>";
        }
    }
?>