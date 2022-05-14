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

$userid = $_GET['userid'];
if (!$userid) {
  die('Keine Id vorhanden');
}

$sql = "SELECT * FROM fach";
$stunde = "SELECT * FROM stunde INNER JOIN nachhilfegeber ON stunde.nachhilfegeberid=nachhilfegeber.id WHERE nachhilfegeberid = :userid";
$statement = $conn->prepare($stunde);

$params = [
':userid' => $userid
];

$statement->execute($params);

$result = $statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="NachhilfeGeber.css">
    <title>Nachhilfegeber Details</title>
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
            <table>
                <tr>
                    <td><img src="../Bilder/Walter.jpg" alt="Lehrer"></td>
                    <td><h2>Walter White</h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </fieldset>
        <br>
        <fieldset>

            <table>
                <tr>
                    <td colspan="5"><h1>Angebote:</h1></td>
                    <td><a href="NachhilfeNehmen.php"><button class="Buchen">Zurück zu den Angeboten</button></a></td>
                </tr>
                <tr class="big">
                    <td>Fächer:</td>
                    <td>Preis pro Stunde:</td>
                    <td>Tag:</td>
                    <td>Von:</td>
                    <td>Bis:</td>   
                    <td></td>
                </tr>
                <?php
                    foreach ($result as $stunde)
                    {
                        ?>
                        <tr>
                            <td><?= $stunde['fachid'] ?></td>
                            <td><?= $stunde['kosten'] ?></td>
                            <td><?= $stunde['datum'] ?></td>
                            <td><?= $stunde['von'] ?></td>
                            <td><?= $stunde['bis'] ?></td>
                            <td><button class="Buchen">Buchen</button></td>
                        </tr>
                    <?php
                    }
                    ?>
            </table>
        </fieldset>
      </div>
</body>
</html>