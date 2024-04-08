<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

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
        $mail->Subject = 'Contact Form Submission';

        // Form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact_no = $_POST['contact_no'];
        $company_name = $_POST['company_name'];
        $stone_type = $_POST['stone_type'];
        $input_size_from = $_POST['input_size_from'];
        $input_size_to = $_POST['input_size_to'];
        $plant_stages = $_POST['plant_stages'];
        $output_size = $_POST['output_size'];
        $output_capacity = $_POST['output_capacity'];
        $remark = $_POST['remark'];
        $agree = isset($_POST['agree']) ? 'Yes' : 'No';

        // Email body
        $mail->Body = "
            <h3>Contact Form Submission</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Contact No:</strong> $contact_no</p>
            <p><strong>Company Name:</strong> $company_name</p>
            <p><strong>Stone Type:</strong> $stone_type</p>
            <p><strong>Input Size:</strong> From $input_size_from mm to $input_size_to mm</p>
            <p><strong>Plant Stages:</strong> $plant_stages</p>
            <p><strong>Output Size Required:</strong> $output_size mm</p>
            <p><strong>Output Capacity Required:</strong> $output_capacity TPH</p>
            <p><strong>Remark:</strong> $remark</p>
            <p><strong>Agreed to terms and conditions:</strong> $agree</p>
        ";

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
