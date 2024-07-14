<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $file = fopen("query.txt", "a");
    fwrite($file, "Name: $name\n");
    fwrite($file, "Email: $email\n");
    fwrite($file, "Message: $message\n");
    fwrite($file, "-------------------------\n");
    fclose($file);

    echo "Thank you for your message!";
} else {
    echo "Please submit the form.";
}
?>
