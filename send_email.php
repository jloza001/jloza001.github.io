<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = "rjmtvending@gmail.com"
//   $_POST["email"];
  $name = $_POST["name"];
  $message = $_POST["message"];

  $headers = "From: webmaster@example.com" . "\r\n" .
             "Reply-To: webmaster@example.com" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  if (mail($recipient, $name, $message, $headers)) {
    echo "Email sent successfully";
  } else {
    echo "Email failed to send";
  }
}
?>
