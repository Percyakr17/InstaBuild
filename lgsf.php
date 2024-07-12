<?php
if (isset($_POST['Submit'])) {
    // Sanitize user input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Prepare data to write to file
    $data = "Name: $name\r\nEmail: $email\r\nMessage: $message\r\n---\r\n";
    
    // Open the file in append mode
    $file = fopen("query.txt", "a") or die("Unable to open file!");
    fwrite($file, $data);
    fclose($file);
    
    // Display confirmation message
    echo '<html>
            <head>
                <title>Submission Successful</title>
            </head>
            <body>
                <h3 align="center">Thank you! Your query has been submitted successfully. We will contact you soon.</h3>
                <p align="center"><a href="index.html">Home</a></p>
            </body>
          </html>';
} else {
    echo 'Error: Please submit the form.';
}
?>
