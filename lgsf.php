<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Create or open the file
    $file = fopen("query.txt", "a");

    // Write the data to the file
    fwrite($file, "Name: $name\n");
    fwrite($file, "Email: $email\n");
    fwrite($file, "Message: $message\n");
    fwrite($file, "-------------------------\n");

    // Close the file
    fclose($file);

    echo "Thank you for your message!";
} else {
    echo "Please submit the form.";
}
?>
