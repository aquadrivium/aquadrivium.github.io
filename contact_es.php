<?php 
if(isset($_POST['submit'])){
    $to = "a.quadrivium@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "Contacto Formulario Web (Español)";
    // $subject2 = "Hem rebut el teu correu";
    $message = "Nombre: " . $name .  "\n" .", email: " . $from . " ha escrito:" . "\n\n" . $_POST['msg'];
    // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['msg'];

    $headers = "From:" . $from;
    //$headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Gràcies per contactar amb nosaltres!\n\n";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    header( "Location: gracies_es.html" );
    die();
    }
?>
