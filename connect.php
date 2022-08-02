<?php
$servername = "localhost";
$username = "andreivergara";
$password = "LXqI0g3Ap9dqYR";

try {
  $conn = new PDO("mysql:host=localhost;dbname=andreivergara_AdvancedMusic", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>