<x-layout>

    <!--
$sql = "SELECT * FROM faches";
$stunde = "SELECT * FROM stundes INNER JOIN users ON stundes.userId=users.id WHERE userId = :u";
$statement = $conn->prepare($stunde);
-->
    <div class="container2 fieldset">
        <br><br><br><br>
        <fieldset>
            <table>
                <tr>
                    <td><img src="data:image/jpeg;base64, {{ $tutor['profilbild'] }}" alt="Lehrer"></td>
                    <td>
                        <h2>{{ $tutor['benutzername'] }}</h2>
                    </td>
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
                    <td colspan="5">
                        <h1>Angebote:</h1>
                    </td>
                    <td><a href="#"><button class="Buchen">Zurück zu den Angeboten</button></a></td>
                </tr>
                <tr class="big">
                    <td>Fächer:</td>
                    <td>Preis pro Stunde:</td>
                    <td>Tag:</td>
                    <td>Von:</td>
                    <td>Bis:</td>
                    <td></td>
                </tr>
                @foreach ($fach as $f)
                    @foreach ($stunde as $item)
                        @if ($item['fachId'] == $f['id'])
                            <tr>
                                <td>{{ $f['fachname'] }}</td>
                                <td>{{ $item['kosten'] }}</td>
                                <td>{{ $item['datum'] }}</td>
                                <td>{{ $item['von'] }}</td>
                                <td>{{ $item['bis'] }}</td>
                                <td><button class="Buchen">Buchen</button></td>
                            </tr>
                        @endif
                    @endforeach
                @endforeach
            </table>
        </fieldset>
    </div>
</x-layout>
