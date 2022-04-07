<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Neues Passwort</title>
</head>
<body>
  <div class="container">
    <form method="post" action="Startseite.php">
        <div>
            <input type="password" name="password" id="password" placeholder="Passwort" required>
            <i class="bi bi-eye-slash" id="togglePassword"></i>
            <input type="password" name="passwordwiederholen" id="passwordwiederholen" placeholder="Passwort wiederholen" required>
            <i class="bi bi-eye-slash" id="togglePasswordwiederholen"></i>
            <input type="submit" value="Neues Passwort speichern">
        </div>
    </form>
  </div>
</body>

<script src="script.js"></script>

</html>