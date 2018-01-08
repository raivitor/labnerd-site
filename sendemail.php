<?php
  $subject = $_POST['subject'];
  $emailsender = "contato@labnerd.com.br";
  if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
  elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
  else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");
  $emailremetente    = trim($_POST['email']);
  $emaildestinatario = $emailsender;
  $mensagem          = trim($_POST['message']); 
  $mensagemHTML = '<p>Nome: '. $_POST['name'].'</p><p> Email: '.$emailremetente.'<p>Mensagem: '.$mensagem.'</p><hr>'; 
  $headers = "MIME-Version: 1.1".$quebra_linha;
  $headers .= "Content-type: text/html; charset=utf-8".$quebra_linha;
  $headers .= "From: ".$emailremetente.$quebra_linha;
  $headers .= "Return-Path: " . $emailremetente . $quebra_linha;
  $headers .= "Reply-To: ".$emailremetente.$quebra_linha;

  if(mail($emaildestinatario, $subject, $mensagemHTML, $headers, "-r". $emailsender)){
      echo 1;
  }
  else{
      echo 0;
  }
?>