<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
// print_r($_POST);

if (isset($_POST["send"])) {

  $url = "https://www.google.com/recaptcha/api/siteverify";
  $data = [
    'secret' => "6LdtqgIqAAAAANreUBXv0Ia3vR50vTMIoAGjto5B",
    'response' => $_POST['token'],
    'remoteip' => $_SERVER['REMOTE_ADDR']
  ];

  $options = array(
    'http' => array(
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'POST',
      'content' => http_build_query($data)
    )
  );

  $context  = stream_context_create($options);
  $response = file_get_contents($url, false, $context);

  // echo "<pre>";
  // print_r($_POST);
  // print_r($options);
  // print_r($response);
  // exit;

  $res = json_decode($response, true);
  if ($res['success'] == true) {

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
      // SMTP settings
      $mail->isSMTP();
      $mail->SMTPDebug = 2;
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'core@corecrushing.in';  // Your Gmail email address
      $mail->Password   = 'ujlhcclqlfraderw';   // Your Gmail password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port       = 587;
      // $mail->SMTPDebug = 2;  
      $mail->Debugoutput = 'html';


      // $mail = new PHPMailer(true);
      // Sender settings (used for both emails)
      $mail->setFrom('core@corecrushing.in', 'corecrushing');

      // Email content (can be reused with slight modifications)
      $mail->isHTML(true);

      // Email to owner
      $mail->Subject = 'Core Crushing Enquiry Form';
      $mail->addAddress('core@corecrushing.in', 'corecrushingdigital@gmail.com', 'Recipient Name');

      // $mail->Body = "
      //   <h3>Contact Form Submission</h3>
      //   <p><strong>Name:</strong> $name</p>
      //   <p><strong>Email:</strong> $email</p>
      //   <p><strong>Contact No:</strong> $contact_no</p>
      //   <p><strong>Company Name:</strong> $company_name</p>
      //   <p><strong>Remark:</strong> $remark</p>
      // ";

      // Common form fields
      $name = $_POST['name'];
      $email = $_POST['email'];
      $contact_no = $_POST['contact_no'];
      $company_name = $_POST['company_name'];
      $remark = $_POST['remark'];
      $form_type = $_POST['form_type'];

      $mail->Body = "
    <h3>Contact Form Submission</h3>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Contact No:</strong> $contact_no</p>
    <p><strong>Company Name:</strong> $company_name</p>
    <p><strong>Remark:</strong> $remark</p> ";

      // Additional form-specific fields and logic
      switch ($form_type) {
          // general form form1
        case 'form1':
          // Form 1 specific fields
          $stone_type = $_POST['stone_type'];
          $input_size_from = $_POST['input_size_from'];
          $input_size_to = $_POST['input_size_to'];
          $plant_stages = $_POST['plant_stages'];
          $output_size = $_POST['output_size'];
          $output_capacity = $_POST['output_capacity'];
          $agree = isset($_POST['agree']) ? 'Yes' : 'No';

          // Append form 1 data to the email body
          $mail->Body .= "
         <h3>Contact Form1 </h3>
          <p><strong>Stone Type:</strong> $stone_type</p>
          <p><strong>Input Size:</strong> From $input_size_from mm to $input_size_to mm</p>
          <p><strong>Plant Stages:</strong> $plant_stages</p>
          <p><strong>Output Size Required:</strong> $output_size mm</p>
          <p><strong>Output Capacity Required:</strong> $output_capacity TPH</p>
          <p><strong>Agreed to terms and conditions:</strong> $agree</p>
      ";
          break;

        case 'form2':
          // Form 2 specific fields
          $capacity_from = $_POST['capacity_from'];
          $capacity_to = $_POST['capacity_to'];
          // $number_of_decks_from = $_POST['number_of_decks_from'];
          // $number_of_decks_to = $_POST['number_of_decks_to'];
          $cut_point = $_POST['cut_point'];
          $agree = isset($_POST['agree']) ? 'Yes' : 'No';

          // Append form 2 data to the email body
          $mail->Body .= "
         <h3>Contact Form2 </h3>
                <p><strong>Capacity:</strong> From $capacity_from TPH to $capacity_to TPH</p>
                <p><strong>Number of Decks:</strong> From $number_of_decks_from Deck to $number_of_decks_to Deck</p>
                <p><strong>Cut Point:</strong> $cut_point</p>
                <p><strong>Agreed to terms and conditions:</strong> $agree</p>
            ";
          break;
          // Sand-Plant form 3
        case 'form3':
          // Form 3 specific fields
          $capacity_from = $_POST['capacity_from'];
          $capacity_to = $_POST['capacity_to'];
          $number_of_decks_from = $_POST['number_of_decks_from'];
          $number_of_decks_to = $_POST['number_of_decks_to'];
          $cut_point = $_POST['cut_point'];
          $agree = isset($_POST['agree']) ? 'Yes' : 'No';

          // Append form 3 data to the email body
          $mail->Body .= "
         <h3>Contact Form3 </h3>
      <p><strong>Capacity:</strong> From $capacity_from TPH to $capacity_to TPH</p>
      <p><strong>Number of Decks:</strong> From $number_of_decks_from Deck to $number_of_decks_to Deck</p>
      <p><strong>Cut Point:</strong> $cut_point</p>
      <p><strong>Agreed to terms and conditions:</strong> $agree</p>
  ";
          break;
      }

      $mail->send(); // Send email to owner

      // Reset recipient for email to sender
      $mail->ClearAddresses(); // Clear previous recipient
      $mail->addAddress($email, $name);

      // Email to sender
      $mail->Subject = 'Thank you for contacting us';
      $mail->Body = "
      <h3>Thank you for showing interest in Core Crushing. We value the opportunity to help you. Our team is currently reviewing your inquiry and will reach out to you soon. For immediate assistance, please reach us at +91 88062 67888.</h3> 
    ";

      $mail->send(); // Send email to sender

      echo "<script>window.location.href = 'ThankYou.php';</script>";
    } catch (Exception $e) {
      echo "<script>alert('Failed to send email. Error: {$mail->ErrorInfo}');</script>";
    }
  } else {
    // echo '<div class="alert alert-warning">
    //       <strong>Error!</strong> You are not a human.
    //     </div>';
    echo "<script>alert('Error!!! You are not a human.');
      // window.location.href = '404.php';
      </script>";
  }
} else {
  echo "<script>alert('Failed to send email. Form submission not valid');</script>";
}
