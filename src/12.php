 <?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$to = "your@email.com";
$subject = "New message from $name";
$headers = 'From: $email' . "\r\n" . 'Reply-To: $email';
mail($to, $subject, $message, $headers);
?>