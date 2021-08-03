<?php
class EmailSend{
    //attributes
    public $Email;
    public $Subject;
    public $Body;

    //method

    public function SendEmail(){
        require_once('PHPMailerAutoload.php');
        require_once('class.phpmailer.php');
        require_once('class.smtp.php');
        $mail = new PHPMailer;

        $mail->SMTPDebug = 4;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'msmunami63@gmail.com';                 // SMTP username
        $mail->Password = 'msmunami1';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('msmunami63@gmail.com', 'The Tutors Provider');
        $mail->addAddress($Email);     // Add a recipient        
        $mail->addReplyTo('msmunami63@gmail.com');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $Subject;
        $mail->Body    = $Body;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }    
                }
}


// if(isset($_POST['Send']))
// {
//     $MyMail = new EmailSend();
//     $MyMail->Email = $_POST['Email'];
//     $MyMail->Body = $_POST['Subject'];
//     $MyMail->Subject = $_POST['Body'];
//     $MyMail->SendEmail();
// }
?>    
