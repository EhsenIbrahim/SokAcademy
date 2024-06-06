<?php $page_title = "Thank You - Goalkeeper coaching for goalkeepers, by goalkeepers"; ?>
<?php $meta_keywords="Keyword"; ?>
<?php $meta_content=""; ?>
<?php $thisPage='Thank You'; ?>

<?php include_once('includes/header.php'); ?>

<?php

// Initialize variables
$name = '';
$phone = '';
$email = '';
$message = '';

if (isset($_POST['f-name'])){
    $name = htmlspecialchars($_POST['f-name']);
}
if (isset($_POST['phone-no'])){
    $phone = htmlspecialchars($_POST['phone-no']);
}
if (isset($_POST['email'])){
    $email = htmlspecialchars($_POST['email']);
}
if (isset($_POST['message'])){
    $message = htmlspecialchars($_POST['message']);
}

// Construct the HTML body with a table and inline CSS for styling
$body = '
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        img {
            width: auto;
            height: 90px;
            background: #222222 !important;
            padding: 10px 20px !important;
            border-radius: 10px !important;
        }
    </style>
</head>
<body>
<img src="https://sokacademy.themetafounders.com/images/Logo.png">
<h2>New Mail Come From Your Site:</h2>
    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Name:</td>
            <td>'.$name.'</td>
        </tr>
        <tr>
            <td>Phone No:</td>
            <td>'.$phone.'</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>'.$email.'</td>
        </tr>
        <tr>
            <td>Message:</td>
            <td>'.$message.'</td>
        </tr>
    </table>
</body>
</html>';

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0; // Disable debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'asharkamran5901@gmail.com';                     //SMTP username
    $mail->Password   = 'fbjl pnpb zhuj falp';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption, old phpmailer: ENCRYPTION_SMTPS
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('asharkamran5901@gmail.com', 'Sok Academy');
    $mail->addAddress('asharkamran5901@gmail.com', 'Sok Academy');     //Add a recipient
    $mail->addReplyTo('asharkamran5901@gmail.com', 'Sok Academy');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Sok Academy';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo '<section class="thankyou-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ContentMain">
                    <h2>Thank you for submitting!</h2>
                    <p>your message has been sent!</p>
                    <a href="index" class="BtnMain">Go Home</a>
                </div>
            </div>
        </div>
    </div>
</section>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>



<?php include_once('includes/footer.php'); ?>