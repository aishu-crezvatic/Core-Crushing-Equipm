<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
// Load Composer's autoloader
// require 'path/to/vendor/autoload.php';

if(isset($_POST["send"])) {
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   =  'aishwaryapbhoir@gmail.com';  // Your Gmail email address
        $mail->Password   = 'yrlq htjj opas gfef';   // Your Gmail password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender and recipient settings
        $mail->setFrom('aishwaryapbhoir@gmail.com', 'Aish'); // Sender's email and name
        $mail->addAddress('aishwarya@crezvatic.com', 'Recipient Name'); // Recipient's email and name

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Subject of the Email';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

        $name =  $_POST['name'];
        $phoneno = $_POST['phone-no'];
        $emailid = $_POST['email-id'];
        $city = $_POST['city'];


        // Send the email
        $mail->send();
        echo "<script>alert('Email sent successfully!');</script>";
    } catch (Exception $e) {
        echo "<script>alert('Failed to send email. Error: {$mail->ErrorInfo}');</script>";
    }
} else {
    echo "<script>alert('Failed to send email. Form submission not detected.');</script>";
}
?>
