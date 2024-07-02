<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here, you can save the data to a database, send an email, etc.

    echo "Thank you, " . $name . "! Your message has been received.";
}
?>
