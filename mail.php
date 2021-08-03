<?phpclass EmailSend{
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

        // $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'ramshaiqbal2719@gmail.com';                 // SMTP username
        $mail->Password = 'elegant dress';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('ramshaiqbal2719@gmail.com', 'The Tutors Provider');
        $mail->addAddress("ramshaiqbal567@gmail.com");     // Add a recipient        
        $mail->addReplyTo('ramshaiqbal2719@gmail.com');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $Subject;
        $mail->Body    = "You are giving us non-client indication..:(";
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                }
}
$addresses = ramshaiqbal567@gmail.com;
            require_once('PHPMailerAutoload.php');
            require_once('class.phpmailer.php');
            require_once('class.smtp.php');
            $mail = new PHPMailer;

            $mail->SMTPDebug = 4;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'ramshaiqbal2719@gmail.com';                 // SMTP username
            $mail->Password = 'elegant dress';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom('ramshaiqbal2719@gmail.com', 'ASAP coupons');
            $mail->addAddress($addresses);     // Add a recipient        
            $mail->addReplyTo('ramshaiqbal567@gmail.com');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Coupon Released';
            $mail->Body    = 'A new Coupon '.$offer_box.' has been brought into the list. Check out at www.asapcoupon.com';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }
			$addresses = ramshaiqbal567@gmail.com;
            require_once('PHPMailerAutoload.php');
            require_once('class.phpmailer.php');
            require_once('class.smtp.php');
            $mail = new PHPMailer;

            $mail->SMTPDebug = 4;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'ramshaiqbal2719@gmail.com';                 // SMTP username
            $mail->Password = 'elegant dress';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom('ramshaiqbal2719@gmail.com', 'ASAP coupons');
            $mail->addAddress($addresses);     // Add a recipient        
            $mail->addReplyTo('ramshaiqbal567@gmail.com');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Coupon Released';
            $mail->Body    = 'A new Coupon '.$offer_box.' has been brought into the list. Check out at www.asapcoupon.com';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }
			?>
<!DOCTYPE html>
<html>
<head>
<title>admin-Details</title>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
	

	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phno=$_POST['phno'];

		$to='ramshaiqbal567@gmail.com';
		$subject='Complaint Submission';
		$message="Name :".$name."\n"."phone:".$phno."\n";
		$headers="From:".$email;

	if(mail($to, $subject,$message,$headers))
		{
			echo "Mail Send Successfully...!"."<b>"." \t".$name."</b>".",we will contact you shortly...!";
		}
		else
		{
			echo "Somthing went wrong, Do contact with the admin";
		}
	}
?>
<br><br><br><center>
<button type="button" onclick="javascript:window.close()" class="btn btn-danger">OK</button></center>
</body>
</html>

