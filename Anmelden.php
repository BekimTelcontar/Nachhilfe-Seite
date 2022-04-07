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


?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Anmelden</title>
</head>
<body>
    <div class="container">
        <form method="post" action="Hatlog.php">
            <div>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="password" name="password" id="password" placeholder="Passwort" required>
                <i class="bi bi-eye-slash" id="togglePassword"></i>
                <input type="submit" value="Anmelden">
                </form>
            </div><br>
            <table class="logintable">
                <td><a href="Registrieren.php">Registrieren</a></td>
                <td><a href="Passwortvergessen.php">Passwort vergessen?</a></td>
            </table>
        
    </div>
</body>

<script src="script.js"></script>

</html>