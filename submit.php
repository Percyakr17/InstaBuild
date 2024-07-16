<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $number = htmlspecialchars($_POST['number']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $data = "Name : $name, Number : $number , Email : $email , Message : $message" . PHP_EOL;

    $file = 'data.txt';

    if(file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
        echo "Data successfully saved.";
    } else {
        echo "Error saving data.";
    }
} else {
    echo "No data received.";
}
?>
