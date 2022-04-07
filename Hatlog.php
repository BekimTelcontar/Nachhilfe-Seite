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



$sql = "SELECT * FROM nachhilfegeber WHERE benutzername = :bname AND passwort = :pass;";
$statement = $conn->prepare($sql);

$params = [
':bname' => $email,
':pass' => $password
];

$statement->execute($params);

$result = $statement->fetch();

if($result === null){
    die('Kein User vorhanden');
} else {
    var_dump($result);
}

require 'Startseite.php';
?>