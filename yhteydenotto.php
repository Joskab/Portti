<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'joska.riittinen00@gmail.com';
    $subject = 'Uusi yhteydenotto!';
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "Viestiä lähettäessä tapahtui odottamaton virhe.";
    }
}
?>