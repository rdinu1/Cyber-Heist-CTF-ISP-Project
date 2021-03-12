<?php
  session_start();
    
    //$cookie_name = "user";
    $value=uniqid();
    $cookie_value=base64_encode($value);
    $_SESSION['passwd'] = $value;

    setcookie('cyberheist', $cookie_value, time() + (86400), "/");
    
    require 'config.php';
    $sql = "INSERT INTO users(name,code) VALUES ('x', '$value')";
    if ($con->query($sql))
        {
            header('location: login.php');
            
           
           
        }else
            echo "Error :( :".$con->error;
    


?>