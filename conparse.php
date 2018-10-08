<?php

if ( !empty($_POST['name']) && ($_POST['email']) && ($_POST['subject']) && ($_POST['msg'])){

$name = htmlentities($_POST['name']);
$email = htmlentities($_POST['email']);
$subject = htmlentities($_POST['subject']);
$msg = htmlentities($_POST['msg']);

//email content
$to = 'youremail@test.com';
$from = $email;
$subject = $subject;
$message = '<h3>site message: '.$subject.'</h3><b>Name:</b> '.$name.' <br><b>Email:</b> '.$email.' <p>'.$msg.'</p>';
$headers = "From: $from\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";

// to mail
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    mail($to, $subject, $message, $headers); 
    echo "thank you for contacting us.";
    }else{
    echo "could not send. please try again.";
    }
}
?>