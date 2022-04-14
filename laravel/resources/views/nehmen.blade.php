<x-layout>
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
            <td class="tdimg"><?= '<img src="data:image/jpeg;base64,'.base64_encode($stunde['profilbild']).'"/>'; ?></td>
            <td class="tdimg"></td>
            <td class="tdname"><h2><?= $stunde['benutzername']; ?></h2></td>
            <td class="tdstunde"><h3>Pro Stunde: <?= $stunde['kosten']; ?></h3></td>
          </tr>
        </table>
      </fieldset>
      <br>
      <?php
    }
    ?>
    
  </div>
</x-layout>