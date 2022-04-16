<x-layout>


  <!-- Navbar
  <ul>
    <div class="container">
      <a href="Startseite.php"><img src="Bilder/Rairlogo.png" alt="Rairlogo" class="Rairlogo"></a>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Nachhilfe nehmen</a>
        <div class="dropdown-content">
        
        </div>
      </li>
      <li class="dropdown">
        <a href="NachhilfeGeben.php" class="dropbtn">Nachhilfe geben</a>
      </li>
    </div>
  </ul>

-->
  <div class="container fieldset">
    <br><br><br><br>
    <fieldset>
      <h1>{{ $fach->fachname }}</h1>
    </fieldset>
    <br>

    @foreach($stunden  as $item)

    @foreach($users as $user)

    @if($item['userId'] == $user['id'])
    <fieldset>
      <table>
        <tr>
          <td class="tdimg"><img src="data:image/jpeg;base64,{{ $user->profilbild }}"></td>
          <td class="tdimg"></td>
          <td class="tdname"><h2>{{ $user['benutzername']; }}</h2></td>
          <td class="tdstunde"><h3>Pro Stunde: {{ $item['kosten']; }} </h3></td>
        </tr>
      </table>
    </fieldset>
    <br>

    @endif
    @endforeach

    @endforeach
    
    
  </div>
</x-layout>