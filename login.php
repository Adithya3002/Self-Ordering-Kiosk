<?php
// Include Composer's autoloader
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start(); // Start session to store user data

// Function to generate random OTP
function generateOTP($length = 6) {
    $characters = '0123456789';
    $otp = '';
    for ($i = 0; $i < $length; $i++) {
        $otp .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $otp;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate email and password (you should add your own validation)
    // For demonstration purpose, let's assume email and password are valid

    // Check if password is correct
    $correct_password = "password123"; // Replace with your actual password
    if ($password != $correct_password) {
        // Password is incorrect, generate OTP and send to email
        $otp = generateOTP();
        $_SESSION["otp"] = $otp; // Store OTP in session

        // Send OTP to user's email
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.example.com'; // SMTP server
            $mail->SMTPAuth   = true;
            $mail->Username   = 'your@example.com'; // SMTP username
            $mail->Password   = 'your_password';   // SMTP password
            $mail->SMTPSecure = 'tls';             // Enable TLS encryption
            $mail->Port       = 587;               // TCP port to connect to

            //Recipients
            $mail->setFrom('from@example.com', 'Your Name');
            $mail->addAddress($email);  // Add a recipient

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Your OTP for Login';
            $mail->Body    = 'Your OTP is: ' . $otp;

            $mail->send();
            echo 'An OTP has been sent to your email.';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        // Password is correct, proceed with login
        // You can redirect user to a dashboard or another page
        echo "Login successful!";
    }
}
?>
