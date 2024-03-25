<?php

  // emails para quem será enviado o formulário
  $emailenviar = "nautico@gmail.com";
  $destino = $_POST['email'];
  $assunto = "Recuperação de senha";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

  $enviaremail = mail($destino, $assunto, $headers);
  if(isset($_POST['submit']) && $enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
?>






// session_start();

// if(isset($_POST['submit'])){
// $to = $_POST['email'];
// $subject = 'Recuperação de senha';
// $message = 'Sua senha de recuperação é 123';

// mail($to,$subject,$message);

// echo 'Senha enviada com sucesso';
// }else{
//     echo 'E-mail não enviado';
// }


?>