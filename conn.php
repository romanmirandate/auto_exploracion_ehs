<?php
  define('DB_SERVER', 'sql3.freesqldatabase.com');
  define('DB_USERNAME', 'sql3653898');
  define('DB_PASSWORD', 'ux8qzkYReP');
  define('DB_NAME', 'sql3653898');

  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

  if ($conn === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
?>