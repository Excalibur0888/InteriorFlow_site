<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
	$to = "interiorflow@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Tel:\n$tel";
    $headers = "From: $to \r\n";
    mail($to, $subject, $body, $headers);
    // Redirect to thank you page
    header("Location: thanks.html");
    exit();
}
?>
