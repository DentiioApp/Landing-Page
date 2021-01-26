<?php
if (isset($_POST['submit'])) {
    $name = $_REQUEST['nom'];
    $prenom = $_REQUEST['prenom'];
    $email = $_REQUEST['mail'];
    $tel = $_REQUEST['tel'];
    $profession = $_REQUEST['profession'];
    $message = "Demande de test de ".$name." ".$prenom."\r\n Téléphone: ".$tel."\r\n Mail: ".$email." \r\n Métier:".$profession."";

    // Set your email address where you want to receive emails.
    $to = 'contact@dentiio.com';
    $subject = 'Demande de test !!!!';
    $headers = "From: ".$name." <".$email."> \r\n";
    mail($to,$subject,$message,$headers);

    echo 'success';

}

