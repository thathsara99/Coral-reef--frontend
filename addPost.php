<?php
    require 'database_connect.php';
    require 'session.php';

    $msg=$_POST['message'];
    $email=$_SESSION['logged_email'];


    $target_dir = "assets/img/Article/";
    $target_file = $target_dir . basename($_FILES["post_img"]["name"]);
    if(!empty($target_file)){
        if (move_uploaded_file($_FILES["post_img"]["tmp_name"],$target_file)) {
            $query="insert into post(user_email,post,post_img,date,time) values('$email','$msg','$target_file',curdate(),current_time());";
            if(mysqli_query($conn,$query)){
                header('location:Community.php');
            }
            else{
                echo mysqli_error($conn);
            }

        }
        else{
            echo "<script>alert('cant upload file')</script>";
        }
    }
?>