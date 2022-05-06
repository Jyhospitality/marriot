<?php

$to = 'website@hospitalityminds.com'; //<-----Put Your email address here.
$name = $lname = $email = $message = "";

if (!empty($_POST['name']) && !empty($_POST['email'])) {


    $firstname = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = "Website Visitor: $name";
    $message = "You have received a new message. " .
            " Here are the details:\n Name: $name \n Surname: $lname \n Email: $email \n message: $message";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    //$headers .= 'From: Tripgyani Website <website@hospitalityminds>' . "\r\n";
    $headers .= "From: " . $name . " <" . $email . "> \r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


    mail($to, $subject, $message, $headers);

    header('refresh:3; Location: http://www.hotelminervaresidency.com');

    echo "Thank you. We will contact you shortly.";
} else {
    echo "Please enter your Name and Email ID properly";
}
?> 


