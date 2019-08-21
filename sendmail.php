<?php
  if (isset($_POST['sendmail'])) {
    // echo "yes";

    require 'PHPMailerAutoload.php';
    require 'credential.php';


$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = '	smtp.mailtrap.io';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = PASS;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom("sachinprasad@gmail.com", 'Home Seva');
$mail->addAddress($_POST['email']);     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
$mail->addReplyTo("sachinprasad@gmail.com");

// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');
//
// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'service name='.$_POST['service_name'].'<br>name ='.$_POST['name']. '<br>Phone =' .$_POST['phone'].'<br>Address='.$_POST['address'];
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    // header("Location:index.php")


} else {
    // echo 'Message has been sent';
    echo "<script>
              alert('Thank You! We will contact you soon.');
              window.location.href='index.php';
              </script>";
}


  }
 ?>
