<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Google\Client as GoogleClient;
use Google\Service\Sheets;

// --- Includes ---
require 'vendor/autoload.php';
require 'PHPMailer/PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer/PHPMailer.php';
require 'PHPMailer/PHPMailer/SMTP.php';

// --- Helper function ---
function clean_input($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// --- Save to Google Sheet ---


// --- POST Lead to External API ---
function postLeadToAPI($name, $email, $phone, $message, $source) {
    $apiUrl = "https://service.dholerasmartproperty.com/webhook/google-leads";

    $payload = [
        "source"  => $source,
        "name"    => $name,
        "email"   => $email,
        "phone"   => $phone,
        "message" => $message
    ];

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

    $response = curl_exec($ch);
    $error = curl_error($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // --- Log response to check if posting worked ---
    $log = "---- " . date('Y-m-d H:i:s') . " ----\n";
    $log .= "Payload: " . json_encode($payload) . "\n";
    $log .= "HTTP Code: $http_code\n";
    $log .= "Response: $response\n";
    $log .= "Error: $error\n\n";
    file_put_contents("lead_post_log.txt", $log, FILE_APPEND);

    return $http_code;
}

// --- MAIN FORM PROCESS ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = clean_input($_POST['name'] ?? '');
    $email    = clean_input($_POST['email'] ?? '');
    $phone    = clean_input($_POST['phone'] ?? '');
    $location = clean_input($_POST['location'] ?? '');
    $msg      = clean_input($_POST['message'] ?? '');
    $source   = clean_input($_POST['source'] ?? 'Website Form');

    // --- Validation ---
    if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        echo "<script>alert('Name must contain only letters.'); window.history.back();</script>"; exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Enter valid email.'); window.history.back();</script>"; exit;
    }
    if (empty($phone)) {
        echo "<script>alert('Phone is required.'); window.history.back();</script>"; exit;
    }
    if (empty($msg)) {
        echo "<script>alert('Message is required.'); window.history.back();</script>"; exit;
    }


    // --- Prepare Email Body ---
    $messageb  = "<font face='arial' size='3'><b>Get It From RSC Group Dholera</b><br>===============<br>";
    $messageb .= "<br><font face='arial' size='2'> Name : $name<br>";
    $messageb .= "<br><font face='arial' size='2'> Email : $email<br>";
    $messageb .= "<br><font face='arial' size='2'> Phone : $phone<br>";
    $messageb .= "<br><font face='arial' size='2'> Location : $location<br>";
    $messageb .= "<br><font face='arial' size='2'> Message : $msg<br>";

    // --- Send Email ---
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mail.indiantradebird@gmail.com';
        $mail->Password = 'bvyobyztypxrdhsb';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('mail.indiantradebird@gmail.com', 'RSC Group Dholera');
        $mail->addReplyTo($email);
       $mail->addAddress('support@rscgroupdholera.in');
        $mail->addBCC('jitendra@goadsindia.co.in');
        $mail->addBCC('rutvik@indiantradebird.com');
        $mail->Subject = 'New Inquiry - RSC Group';
        $mail->isHTML(true);
        $mail->Body = $messageb;

        $mail->send();

        // --- Log locally ---
        date_default_timezone_set('Asia/Kolkata');
        $logEntry = "Name: $name | Email: $email | Phone: $phone | Location: $location | Message: $msg | Source: $source | Time: " . date('Y-m-d H:i:s') . "\n";
        file_put_contents("inquirycontactus.txt", $logEntry, FILE_APPEND);

        // --- Save to Google Sheet ---
        saveToGoogleSheet($name, $email, $phone, $location, $msg, $source);

        // --- Post Lead to External API ---
        $status = postLeadToAPI($name, $email, $phone, $msg, $source);

        if ($status == 200 || $status == 201) {
            header('Location: thankyou.html');
        } else {
            echo "<script>alert('Lead API not responding. Please check log file lead_post_log.txt'); window.location.href='thankyou.html';</script>";
        }
        exit;

    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }

} else {
    echo "Form not submitted!";
    exit;
}
?>
