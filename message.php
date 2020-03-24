<?php


    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $details = $_POST["details"];

    echo "<pre>";
        $email_body="";
        $email_body .= "Name " . $name . "\n";
        $email_body .= "Gender " . $gender . "\n";
        $email_body .= "Email " . $email . "\n";
        $email_body .= "Message " . $details . "\n";
    echo $email_body;
    echo "</pre>";
?>