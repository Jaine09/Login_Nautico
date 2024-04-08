<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require '../PHPMailer-master/src/Exception.php';
// require '../PHPMailer-master/src/PHPMailer.php';
// require '../PHPMailer-master/src/SMTP.php';

// $mail = new PHPMailer();


// // TESTANDO SE ESTAR FUNCIONANDO
// /*try{
//   echo 'funcionando';
// } catch (Exception $e) {
//   echo 'foi não';
// }*/

// try {
//     $mail->SMTPDebug = 0;
//     $mail->isSMTP();
//     $mail->Host = 'smtp.gmail.com';
//     $mail->SMTPAuth = true;
//     $mail->Username = 'afonsecadesantana@gmail.com';
//     $mail->Password = '464859314Al';
//     $mail->SMTPSecure = 'tls';
//     $mail->Port = 587;
//     $mail->SMTPOptions = array(
//       'ssl' => array(
//         'verify_peer' => false,
//         'verify_peer_name' => false,
//         'allow_self_signed' => true
//       )
//     );
     

//   echo 'Conexão SMTP realizada com sucesso!';

// } catch (Exception $e) {
//   echo 'Erro ao conectar ao SMTP: ' . $e->getMessage();
//   die();
// }

// try{
//     $mail->setFrom('afonsecadesantana@gmail.com', 'Alan');
//     $mail->addAddress($email);
//     $mail->isHTML(true);
//     $mail->Subject = 'Recuperação de Senha';
//     $mail->Body = 'Sua senha de recuperação é 1234';

//     $mail->send();
//     print_r ('Email enviado com sucesso!');
   
     
// } catch (Exception $e) {
//     echo 'Erro ao enviar o email: ' . $mail->ErrorInfo;
// } finally {
//   // Desconecta do servidor SMTP
//   $mail->smtpClose();
// }

$to = 'afonsecadesantana@gmail.com';

$subject = 'Recuperação de Senha';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<html><head>Sua senha de recuperação é <strong>1234</strong></head></html>';

if (mail($to, $subject, $message, $headers)) {
    echo 'Email enviado com sucesso!';
} else {
    echo 'Erro ao enviar o email.';
}

?>