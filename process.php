<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    // Redirect to display page with data in query parameters
    header("Location: display.php?name=$name&email=$email&phone=$phone&message=$message");
    exit();
}
?>

