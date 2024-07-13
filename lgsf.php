<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Submit'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    $data = "Name: $name\r\nEmail: $email\r\nMessage: $message\r\n---\r\n";
    
    $file = fopen("query.txt", "a");
    if ($file) {
        if (fwrite($file, $data) !== false) {
            fclose($file);
            echo '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Submission Successful</title>
                    </head>
                    <body>
                        <h3 align="center">Thank you! Your query has been submitted successfully. We will contact you soon.</h3>
                        <p align="center"><a href="index.html">Home</a></p>
                    </body>
                  </html>';
        } else {
            fclose($file);
            echo "Error: Unable to write to file!";
        }
    } else {
        echo "Error: Unable to open file!";
    }
} else {
    echo 'Error: Please submit the form.';
}
?>
