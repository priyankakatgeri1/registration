<?php
$name = $_GET["name"] ?? "N/A";
$email = $_GET["email"] ?? "N/A";
$phone = $_GET["phone"] ?? "N/A";
$message = $_GET["message"] ?? "N/A";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Submission Success!</h1>
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Phone:</strong> <?php echo $phone; ?></p>
        <p><strong>Message:</strong> <?php echo $message; ?></p>
        <a href="index.html"><button>Go Back</button></a>
    </div>
</body>
</html>
