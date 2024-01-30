<?php
// Include PHPMailer Autoloader
include("./PHPMailer-master/src/PHPMailer.php");
include("./PHPMailer-master/src/SMTP.php");
include("./PHPMailer-master/src/Exception.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtpout.secureserver.net';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@ploywin.com';
    $mail->Password = 'Fouad.Adam.agency.011099';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 465;
    $to = 'wirdigt@gmail.com';
    $mail->setFrom('info@ploywin.com', 'Ploywin');
    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->Subject = 'New Inquiry';
    echo $_POST['serviceType'];
    $mail->Body = "First Name: {$_POST['fname']}<br>" .
                  "Last Name: {$_POST['lname']}<br>" .
                  "Email: {$_POST['email']}<br>" .
                  "Phone Number: {$_POST['phoneNb']}<br>" .
                  "Company Name: {$_POST['companyName']}<br>" .
                  "Service Type: {$_POST['serviceType']}<br>";

    // Send email and check for success
    if ($mail->send()) {
        // Redirect to the referring page upon success
        header("Location: {$_SERVER['HTTP_REFERER']}?email=sent?status=success");
        exit;
    } else {
        // Redirect back to the index page upon failure
        header("Location: index.html?email=failed?error=uknown");
        exit;
    }
} else {
    // If it's not a POST request, just redirect back to the form page
    header("Location: index.html?email=failed?error=uknown");
    exit;
}


?>
