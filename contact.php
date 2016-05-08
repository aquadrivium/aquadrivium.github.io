<?php
require 'vendor/autoload.php';
if(isset($_POST['submit'])){
    $sendgrid = new SendGrid('drocera', 'droCera0!');
    $email = new SendGrid/Email();

    $to = "a.quadrivium@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "Contacte Formulari Web (Català)";
    // $subject2 = "Hem rebut el teu correu";
    $message = "Nom: " . $name .  "\n" .", email: " . $from . " ha escrit:" . "\n\n" . $_POST['msg'];
    // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['msg'];

    $headers = "From:" . $from;
    //$headers2 = "From:" . $to;

    $email->addTo($to);
        ->addFrom($from);
        ->setSubject($subject);
        ->setText($message);

    $sendgrid->send($email);

    // mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Gràcies per contactar amb nosaltres!\n\n";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    header( "Location: http://www.quadrivium.cat/gracies.html" );
    die();
    }
?>
