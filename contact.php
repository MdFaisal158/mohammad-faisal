<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    if(empty($email) || empty($phone) || empty($message)) {
        echo "Please fill all fields!";
        exit;
    }

    // MY Email 
    $to = "mohammadfaisalahmed45@gmail.com";  

    $subject = "New Contact Message from Portfolio";

    $body = "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message:\n$message";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)) {
        echo "Message Sent Successfully!";
    } else {
        echo "Failed to send message!";
    }
}
?>


