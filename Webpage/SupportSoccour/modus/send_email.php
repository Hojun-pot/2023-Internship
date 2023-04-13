<?php
  $to_email = "starmantoman@gmail.com";
  $subject = "New eamil sent by customer";
  $message = $_POST["Message"];
  $headers = "From: " . $_POST["Email"];

  // send an email
  mail($to_email, $subject, $message, $headers);
?>