<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $from = $email;
  $to = "contato@labnerd.com.br";
  $headers = "De:". $from;
  if(mail($to, $subject, $message, $headers)){
    echo 1;
  } else {
    echo 0;
  }
  
?>