<?php
// session_star();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';


$mail = new PHPMailer(true);

// TESTANDO SE ESTAR FUNCIONANDO
/*try{
  echo 'funcionando';
} catch (Exception $e) {
  echo 'foi não';
}*/

try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'afonsecadesantana@gmail.com';
    $mail->Password = '464859314Al';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
     
    $mail->CharSet = 'UTF-8';
    $mail->setFrom('afonsecadesantana@gmail.com', 'Alan');
    $mail->addAddress('jainejesus0911@gmail.com', 'Jaine');
    $mail->isHTML(true);
    $mail->Subject = 'Recuperação de Senha';
    $mail->Body = 'Sua senha de recuperação é 1234';

    $mail->send();
    echo 'Email enviado com sucesso!';
    
} catch (Exception $e) {
    echo 'Erro ao enviar o email: ' . $mail->ErrorInfo;
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