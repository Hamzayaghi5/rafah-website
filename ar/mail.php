<?php
//Checking For reCAPTCHA
$captcha;
if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
}
// Checking For correct reCAPTCHA
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeyFkUUAAAAAHoacweaHSxAArjNR7UnsllwRZD5&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
if (!$captcha || $response.success == false) {
    
    header('Location: http://rafah.ltd/contact.php');
    echo "<script type='text/javascript'>alert('you are a robot ');</script>";
    exit ;
} else {
    // Checking For Blank Fields..
    if ($_POST['author']== "" || $_POST['email'] == "" || $_POST['message'] == "") {
        echo "Fill All Fields..";
    } else {
        // Check if the "Sender's Email" input field is filled out
        $email = $_POST['email'];
        // Sanitize E-mail Address
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        // Validate E-mail Address
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email) {
            echo "Invalid Sender's Email";
        } else {
            $to = 'info@rafah-ltd.com';
            $subject =  $_POST['author'];
            $message = $_POST['message'];
            $headers = "From:".$_POST['email'] . "\r\n";
            // Sender's Email
            // Message lines should not exceed 70 characters (PHP rule), so wrap it
            $message = wordwrap($message, 70, "\r\n");
            // Send Mail By PHP Mail Function
            if (mail($to, $subject, $message, $headers)) {
                header('Location: http://rafah-ltd.com/contact.php');
            } else {
                header('Location: http://rafah-ltd.com/contact.php');
                echo "<script type='text/javascript'>alert('something went wrong');</script>";
                exit ;
            }
        }
    }
}
?>