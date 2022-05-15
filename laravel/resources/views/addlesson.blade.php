<x-layout>
    <div class="containernachhilfegeben">
        <form method="POST" action="/addlesson">
            @csrf
          
            <b>Fach auswählen:</b><br>
            <select class="Hundert" name="fach">
            @foreach ($fach as $item)
                <option value="{{ $item['id'] }}">{{ $item['fachname'] }}</option>
            @endforeach
            </select><br><br>
            <b>Preis pro Stunde in Franken:</b>
            <input class="Hundert" type="number" name="preis" required min="1" max="199"><br><br>
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
          
        </form>
        <a href="/"><button class="Hundert">Schliessen</button></a>
      </div>
</x-layout>