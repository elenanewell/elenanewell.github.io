<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "if.comokafor@ymail.com"; // Replace with your own email address
  $subject = "New form submission";

  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $lname = $_POST["lname"];
  $subject = $_POST["subject"];

  // Do something with the form data
  // For example, store it in a database or send it in an email
     // Construct the message body
  $body = "First Name: $fname\n\n";
  $body .= "Last Name: $lname\n\n";
  //$body .= "Email: $email\n\n";
  $body .= "Subject:\n$subject\n";

  // Set the email headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    // If the email was sent successfully, redirect to a success page
    header("Location: success.php?name=" . urlencode($fname));
    exit();
  } else {
    // If the email failed to send, display an error message
    echo "There was an error sending your message. Please try again later.";
  }
}
  // Render a success page
  
//   header("Location: success.php?name=" . urlencode($fname));
//   exit();
}
?>
