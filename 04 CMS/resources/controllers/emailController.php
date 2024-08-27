<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // require 'vendor/autoload.php';

    function send_email($email, $asunto, $mensaje) {
        $mail = new PHPMailer();
        $mail->isSmtp();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = '6bcb7fc6b0c726';
        $mail->Password = '62fe91ab669d57';
        $mail->Port = 25;
        $mail->SMTPSecure = 'tls';
        $mail->isHTML(true);
        $mail->Chartset = 'UTF-8';

        $mail->setFrom('regitros@mipagina.com', 'Registro');

        $mail->addAddress($email);
        $mail->Subject = $asunto;
        $mail->Body = $mensaje;

        if($mail->send()){
            $emailSent = true;
        }
    }

?>

