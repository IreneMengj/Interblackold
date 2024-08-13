<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $message = htmlspecialchars($_POST['message']);
  $name = htmlspecialchars($_POST['name']);
  $phone = htmlspecialchars($_POST['phone']);
  $email = htmlspecialchars($_POST['email']);
  $captcha = htmlspecialchars($_POST['captcha']);
  $to = "mengjiayu2021@gmail.com";
  $subject = "Contact Form Submission from " . $name;
  $body = "Message: $message\nName: $name\nPhone: $phone\nEmail: $email\nCaptcha: $captcha";
  $headers = "From: " . $email;
  if (mail($to, $subject, $body, $headers)) {
    echo "Info successfully sent!";
  } else {
    echo "Info sending failed!";
  }
} ?>