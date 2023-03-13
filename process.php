<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "info@leandro-castagno.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "Email from EdgeCoin", $message . $phone . ' - ' . $name . ' - ' . $email, "From:" . $email);
    
    header('Location: http://edgecoin.leandro-castagno.com/success.html');
  }