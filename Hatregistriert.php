<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "nachhilfeweb";

$conn = null;

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}

$email = $_POST['email'];
$password = $_POST['password'];



$sql = "INSERT INTO nachhilfegeber(benutzername,passwort) VALUES (:email,:passwort);";
$statement = $conn->prepare($sql);

$params = [
':email' => $email,
':passwort' => $password
];

$statement->execute($params);

$result = $statement->fetchAll();

require 'Startseite.php';
?>