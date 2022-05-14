<x-layout>
    <?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
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

$userid = $_GET['u'];
if (!$userid) {
  die('Keine Id vorhanden');
}

$sql = "SELECT * FROM faches";
$stunde = "SELECT * FROM stundes INNER JOIN users ON stundes.userId=users.id WHERE userId = :u";
$statement = $conn->prepare($stunde);

$params = [
':u' => $userid
];

$statement->execute($params);

$result = $statement->fetchAll();
?>
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
                            <td><?= $stunde['fachId'] ?></td>
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
</x-layout>