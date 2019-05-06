<?php
//error_reporting(E_ALL);
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contact us. As early as possible  we will contact you '
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 

/*
    $name = @trim(stripslashes('SAI PRASAD')); 
    $email = @trim(stripslashes('saiprasad1996@hotmail.com')); 
    $subject = @trim(stripslashes('Test mail')); 
    $message = @trim(stripslashes('This is the test mail using php mail function')); 
*/
    $email_from = $email;
    $email_to = 'jagannath.sahoo@live.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    //echo json_encode($status);
    //echo '$success';
    if ($success)
    {
        header("Location: http://www.jagannathsahoo.tk/index.html#thankYou"); /* Redirect browser */
        exit();
    }
    die;
?>