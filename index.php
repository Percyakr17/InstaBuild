<?php
if(isset($_POST['Submit'])) {
  $name = $_POST['Name'];
  $phone = $_POST['Number'];
  $address = $_POST['Address'];
  $mail = $_POST['Mail'];
  $data = $name. "\r" .$phone. "\r" .$mail. "\r" .$address. "\n";
  
  $file = fopen("data.txt", "a") or die("Unable to open file!");
  fwrite($file, $data);
  fclose($file);
}
?>
<html>
  <head>
    <title>Info</title>
  </head>
  <body>

    <h3 align = center> Thankyou ! Your Information Saved Successfully. <br>
    <a href="index.html">Home</a></h3>
  </body>
</html>
