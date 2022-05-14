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

$id = $_GET['id'];
if (!$id) {
  die('Keine Id vorhanden');
}

$fachname = $_GET['fach'];
if (!$fachname) {
  die('Kein Fach vorhanden');
}

$sql = "SELECT * FROM fach";
$stunde = "SELECT * FROM stunde INNER JOIN nachhilfegeber ON stunde.nachhilfegeberid=nachhilfegeber.id WHERE fachid = :id";
$statement = $conn->prepare($stunde);

$params = [
':id' => $id
];

$statement->execute($params);

$result = $statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nachhilfe Website</title>
</head>
<body>
  <ul>
    <div class="container">
      <a href="Startseite.php"><img src="Bilder/Rairlogo.png" alt="Rairlogo" class="Rairlogo"></a>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Nachhilfe nehmen</a>
        <div class="dropdown-content">
        <?php
          foreach ($conn->query($sql) as $fach)
          {
            ?>
            <a href="Nachhilfenehmen.php?id=<?= $fach['id'] ?>&fach=<?= $fach['fachname'] ?>"><?= $fach['fachname'] ?></a>
            <?php
          }
          ?>
        </div>
      </li>
      <li class="dropdown">
        <a href="NachhilfeGeben.php" class="dropbtn">Nachhilfe geben</a>
      </li>
    </div>
  </ul>
  <div class="container fieldset">
    <br><br><br><br>
    <fieldset>
      <h1><?= $fachname ?></h1>
    </fieldset>
    <br>
    <?php
    foreach ($result as $stunde)
    {
      ?>
      <fieldset>
        <table>
          <tr>
            <td class="tdimg"><a href="NachhilfeGeber.php?userid=<?= $stunde['nachhilfegeberid'] ?>"><?= '<img src="data:image/jpeg;base64,'.base64_encode($stunde['profilbild']).'"/>'; ?></a></td>
            <td class="tdname"><a href="NachhilfeGeber.php?userid=<?= $stunde['nachhilfegeberid'] ?>"><h2><?= $stunde['benutzername']; ?></h2></a></td>
            <td class="tdstunde"><h3>Pro Stunde: <?= $stunde['kosten']; ?></h3></td>
          </tr>
        </table>
      </fieldset>
      <br>
      <?php
    }
    ?>
    <!-- <fieldset>
      <img src="Bilder/Walter.jpg" alt="Lehrer">
      &nbsp;<h2>Walter White</h2>
    </fieldset> -->
  </div>
</body>
</html>