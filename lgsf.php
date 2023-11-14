<?php
if(isset($_POST['Submit'])) {
  $name = $_POST['name'];
  $mail = $_POST['email'];
    $message = $_POST['message'];
  $data = $name. "\r" .$mail. "\r" .$message. "\n";
  
  $file = fopen("query.txt", "a") or die("Unable to open file!");
  fwrite($file, $data);
  fclose($file);
}
?>
<html>
  <head>
    <title>Info</title>
  </head>
  <body>

    <h3 align = center> Thankyou ! Your Query submitted Successfully. <br>
    <a href="index.html">Home</a></h3>
  </body>
</html>