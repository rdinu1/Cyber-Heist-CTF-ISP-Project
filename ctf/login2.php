<?php
  session_start();
    
    //$cookie_name = "user";
    $pname=$_POST['pname'];
    $pwd=$_POST['pwd'];
    if ($_SESSION['passwd']==$pwd){
    require 'config.php';
    $sql2 = "UPDATE users SET name='$pname' WHERE name='x'";
    $result1 = $con->query($sql2);

    if ($result1)
        {
            header('location: instructions.php');
            
           
           
        }else
            echo "Error :( :".$con->error;
    

    }
    else{
        header('location: login.php');
    }
?>