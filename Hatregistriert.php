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

$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
$password = htmlspecialchars($_POST['password'], ENT_QUOTES);

if($email === null || $password === null){
  die('Eingabe war leer');
}


$sql = "INSERT INTO nachhilfegeber(benutzername, passwort) VALUES (:email, :passwort);";
$statement = $conn->prepare($sql);

$params = [
':email' => $email,
':passwort' => password_hash($password, PASSWORD_DEFAULT)
];

$statement->execute($params);

$result = $statement->fetchAll();

var_dump($statement);
var_dump($result);

//require 'Startseite.php';
?>