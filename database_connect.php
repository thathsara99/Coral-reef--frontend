<?php
    $conn=new mysqli("localhost:3306","root","","coralbarrer");
    
    if($conn->connect_error){
        die("Connection failed ".$conn->connect_error);
    }
    // else{
    //     echo "Connection Success";
    // }
?>