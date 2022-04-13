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

$nachhilfegeber = 2;
// $nachhilfegeber = $_POST['nachhilfegeber'];
$fach = $_POST['fach'];
$preis = $_POST['preis'];
$datum = $_POST['datum'];
$von = $_POST['von'];
$bis = $_POST['bis'];

$sql = "INSERT INTO stunde(kosten, fachid, von, bis, datum, nachhilfegeberid) VALUES (:preis, :fach, :von, :bis, :datum, :nachhilfegeber);";
$statement = $conn->prepare($sql);

$params = [
  ':nachhilfegeber' => $nachhilfegeber,
  ':preis' => $preis,
  ':fach' => $fach,
  ':von' => $von,
  ':bis' => $bis,
  ':datum' => $datum
];

$statement->execute($params);

$result = $statement->fetchAll();

require 'NachhilfeGeben.php';
?>