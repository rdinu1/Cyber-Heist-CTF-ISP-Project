<?php
if(!isset($_POST["submit"])){
    header('location: form.php');
}elseif($_POST["pwd"]=="lcswxrzomud"){
    header('location: error.php');
}else{
    header('location: form.php?error=Invalid password!');
}
    
?>