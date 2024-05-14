<?php

$servername = "localhost";
$username= "root";
$password= "";
$dbname = "restaurantly_db";
$dsn = "mysql:host=$servername;dbname=$dbname;charet=utf8";


try {
  $conn = new PDO($dsn, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch(PDOException $e) {
  echo "failed to connect: " . $e->getMessage();
}

?>