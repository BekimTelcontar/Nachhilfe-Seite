<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Passwort vergessen</title>
</head>
<body>
    <div class="container">
        <form method="post" action="NeuesPasswort.php">
            <div>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <i class="bi bi-eye-slash" id="togglePassword"></i>
                <input type="submit" value="Zurücksetzen">
            </div>
        </form>
      </div>
</body>
</html>