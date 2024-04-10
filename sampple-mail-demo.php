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

         // Common form fields
         $name = $_POST['name'];
         $email = $_POST['email'];
         $contact_no = $_POST['contact_no'];
         $company_name = $_POST['company_name'];
         $remark = $_POST['remark'];

        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   =  'aishwaryapbhoir@gmail.com';  // Your Gmail email address
        $mail->Password   = 'yrlq htjj opas gfef';   // Your Gmail password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender and recipient settings
        $mail->setFrom('aishwaryapbhoir@gmail.com', 'Aishwarya'); // Sender's email and name
        $mail->addAddress($email, 'Recipient Name'); // Recipient's email and name

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Contact Form Submission';

        // Form data
        $form_type = $_POST['form_type']; // Get the form type

       
        

        // Email body
        $mail->Body = "
            <h3>Contact Form Submission</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Contact No:</strong> $contact_no</p>
            <p><strong>Company Name:</strong> $company_name</p>
            <p><strong>Remark:</strong> $remark</p>
        ";

        // Additional form-specific fields and logic
        switch ($form_type) {
            case 'form1':
                $stone_type = $_POST['stone_type'];
                $input_size_from = $_POST['input_size_from'];
                $input_size_to = $_POST['input_size_to'];
                $plant_stages = $_POST['plant_stages'];
                $output_size = $_POST['output_size'];
                $output_capacity = $_POST['output_capacity'];
                $agree = isset($_POST['agree']) ? 'Yes' : 'No';

                // Append form 1 data to the email body
                $mail->Body .= "
                    <p><strong>Stone Type:</strong> $stone_type</p>
                    <p><strong>Input Size:</strong> From $input_size_from mm to $input_size_to mm</p>
                    <p><strong>Plant Stages:</strong> $plant_stages</p>
                    <p><strong>Output Size Required:</strong> $output_size mm</p>
                    <p><strong>Output Capacity Required:</strong> $output_capacity TPH</p>
                    <p><strong>Agreed to terms and conditions:</strong> $agree</p>
                ";
                break;

            case 'form2':
                $capacity_from = $_POST['capacity_from'];
                $capacity_to = $_POST['capacity_to'];
                $number_of_decks_from = $_POST['number_of_decks_from'];
                $number_of_decks_to = $_POST['number_of_decks_to'];
                $cut_point = $_POST['cut_point'];
                $agree = isset($_POST['agree']) ? 'Yes' : 'No';

                // Append form 2 data to the email body
                $mail->Body .= "
                    <p><strong>Capacity:</strong> From $capacity_from TPH to $capacity_to TPH</p>
                    <p><strong>Number of Decks:</strong> From $number_of_decks_from Deck to $number_of_decks_to Deck</p>
                    <p><strong>Cut Point:</strong> $cut_point</p>
                    <p><strong>Agreed to terms and conditions:</strong> $agree</p>
                ";
                break;

            case 'form3':
                $stone_type = $_POST['stone_type'];
                $input_size_from = $_POST['input_size_from'];
                $input_size_to = $_POST['input_size_to'];
                $plant_stages = $_POST['plant_stages'];
                $output_size = $_POST['output_size'];
                $output_capacity = $_POST['output_capacity'];
                $agree = isset($_POST['agree']) ? 'Yes' : 'No';

                // Append form 3 data to the email body
                $mail->Body .= "
                    <p><strong>Stone Type:</strong> $stone_type</p>
                    <p><strong>Input Size:</strong> From $input_size_from mm to $input_size_to mm</p>
                    <p><strong>Plant Stages:</strong> $plant_stages</p>
                    <p><strong>Output Size Required:</strong> $output_size mm</p>
                    <p><strong>Output Capacity Required:</strong> $output_capacity TPH</p>
                    <p><strong>Agreed to terms and conditions:</strong> $agree</p>
                ";
                break;
        }

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
