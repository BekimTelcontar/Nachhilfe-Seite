<x-layout>
    <div class="container2 fieldset">
        <br><br><br><br>
        <fieldset>
            <table>
                <tr>
                    <td><img src="data:image/jpeg;base64, {{ $user['profilbild'] }}" alt="Lehrer"></td>
                    <td>
                        <h2>{{ $user['benutzername'] }}</h2>
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
                    <td>Fach:</td>
                    <td>Preis pro Stunde:</td>
                    <td>Tag:</td>
                    <td>Von:</td>
                    <td>Bis:</td>
                    <td></td>
                </tr>
                
                            <tr>
                                <td>{{ $f['fachname'] }}</td>
                                <td>{{ $stunde['kosten'] }}</td>
                                <td>{{ $stunde['datum'] }}</td>
                                <td>{{ $stunde['von'] }}</td>
                                <td>{{ $stunde['bis'] }}</td>
                                <td><button class="Buchen">Buchen</button></td>
                            </tr>
                        
            </table>
        </fieldset>
    </div>
</x-layout>