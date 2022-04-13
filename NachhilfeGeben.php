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

$sql = "SELECT * FROM fach";
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
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
  <br><br><br><br><br>
  <div class="container">
    <form method="post" action="Angeboterstellt.php">
      <div>
        <b>Fach auswählen:</b><br>
        <select class="Hundert" name="fach">
          <?php
          foreach ($conn->query($sql) as $fach) {
            ?>
            <option value="<?= $fach['id'] ?>"><?= $fach['fachname'] ?></option>
            <?php
          }
          ?>
        </select><br><br>
        <b>Preis pro Stunde in Franken:</b>
        <input class="Hundert" type="number" name="preis" required><br><br>
        <b>An welchem Tag?</b>
        <input class="Hundert" type="date" name="datum" id="datum" required><br><br>
        <b>Wann haben Sie Zeit?</b><br>
        <table>
          <tr>
            <td>Von</td>
            <td>Bis</td>
          </tr>
          <tr>
            <td>
              <input class="Hundert" type="time" name="von" id="von" required>
            </td>
            <td>
              <input class="Hundert" type="time" name="bis" id="bis" required>
            </td>
          </tr>
        </table>
        <input class="Hundert" type="submit" value="Speichern">
      </div>
    </form>
    <a href="Startseite.php"><button class="Hundert">Schliessen</button></a>
  </div>
</body>
</html>
