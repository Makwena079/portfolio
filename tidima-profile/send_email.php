<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullName = $_POST["fullName"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Create a new PHPMailer instance
  $mail = new PHPMailer();

  // Set the recipient email address
  $mail->addAddress("makwena079@gmail.com");

  // Set email subject
  $mail->Subject = $subject;

  // Set email body
  $mail->Body = "From: $fullName\nEmail: $email\n\n$message";

  // Send the email
  if ($mail->send()) {
    // Email sent successfully
    echo "success";
  } else {
    // Email sending failed
    echo "error";
  }
}
?>
