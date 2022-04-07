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



$sql = "SELECT * FROM nachhilfegeber WHERE benutzername = :bname AND passwort = :pass;";
$statement = $conn->prepare($sql);

$params = [
':bname' => $email,
':pass' => password_verify($password, PASSWORD_DEFAULT) 
];

$result2 = $statement->execute($params);

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
foreach($statement->fetchAll() as $v) {
  echo $v;
}
echo "<br><br><br>";
//$result = $statement->fetchAll();

var_dump($statement);
echo '<br><br>';
var_dump($statement->setFetchMode(PDO::FETCH_ASSOC));
echo '<br><br>';
var_dump($result2);
echo '<br><br>';

if($result == null){
    die('Kein User vorhanden');
} else {
    var_dump($result);
}

//require 'Startseite.php';
?>