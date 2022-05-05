<x-layout>

    <div class="container">
        <div class="tab">
            <button class="tablinks" style="width: 33%;" onclick="openCity(event, 'Profil')">Profil</button>
            <button class="tablinks" style="width: 33%;" onclick="openCity(event, 'Angebote')">Angebote</button>
            <button class="tablinks" style="width: 34%;" onclick="openCity(event, 'Buchungen')">Buchungen</button>
        </div>
        <div id="Profil" class="tabcontent">
            <form action="/updateAccount" method="get">
                <b>Benutzername</b><br>
                <label>Benutzername</label><br><br> <!-- PHP Benutzername der Person anzeigen -->
                <b>E-Mail</b><br>
                <label>Email</label><br><br> <!-- PHP Email der Person anzeigen -->
                <b>Passwort</b><br>
                <label>Passwort</label><br><br> <!-- PHP Passwort der Person anzeigen -->
                <b>Bild</b><br>
                <input type="submit" value="Bearbeiten">
            </form>
            <a href="/"><button class="Hundert">Schliessen</button></a>
        </div>
        <div id="Angebote" class="tabcontent">
            <div>
                <a href="AccountBearbeiten.html"><button style="color: white; background-color: #286DBE;" class="Hundert">Bearbeiten</button></a>
                <a href="Startseite.html"><button class="Hundert">Schliessen</button></a>
                <b>Fach</b><br>
                <label>Englisch</label><br><br>
                <b>Preis pro Stunde</b><br>
                <label>50 Fr.</label><br><br>
                <b>Tag:</b><br>
                <label>04.04.2022</label><br><br>
                <b>Uhrzeit</b><br>
                <table>
                    <tr>
                        <td>Von:</td>
                        <td>Bis:</td>
                    </tr>
                    <tr>
                        <td><label>13:00 Uhr</label></td>
                        <td><label>14:00 Uhr</label></td>
                    </tr>
                </table><br>
                <b>Angebot wurde angenommen&nbsp;<input type="checkbox"></b>
                <a href="#" class="arrow">&#8249;</a>
                <a href="#" class="arrow">1</a>
                <a href="#" class="arrow">2</a>
                <a href="#" class="arrow">3</a>
                <a href="#" class="arrow">&#8250;</a>
            </div>
            <hr>
            <!-- Das soll erst auf button-click aufgerufen werden -->
            <div>
                <b>Fach</b><br>
                <label>Deutsch</label><br><br>
                <b>Preis pro Stunde</b><br>
                <label>30 Fr.</label><br><br>
                <b>Tag:</b><br>
                <label>06.04.2022</label><br><br>
                <b>Uhrzeit</b><br>
                <table>
                    <tr>
                        <td>Von:</td>
                        <td>Bis:</td>
                    </tr>
                    <tr>
                        <td><label>13:00 Uhr</label></td>
                        <td><label>14:00 Uhr</label></td>
                    </tr>
                </table><br>
                <b>Angebot wurde angenommen&nbsp;<input type="checkbox"></b>
            </div>
            <hr>
            <div>
                <b>Fach</b><br>
                <label>Sport</label><br><br>
                <b>Preis pro Stunde</b><br>
                <label>40 Fr.</label><br><br>
                <b>Tag:</b><br>
                <label>08.04.2022</label><br><br>
                <b>Uhrzeit</b><br>
                <table>
                    <tr>
                        <td>Von:</td>
                        <td>Bis:</td>
                    </tr>
                    <tr>
                        <td><label>13:00 Uhr</label></td>
                        <td><label>14:00 Uhr</label></td>
                    </tr>
                </table><br>
                <b>Angebot wurde angenommen&nbsp;<input type="checkbox"></b>
            </div>
        </div>
        <div id="Buchungen" class="tabcontent">
            <div>
                <a href="AccountBearbeiten.html"><button style="color: white; background-color: #286DBE;" class="Hundert">Bearbeiten</button></a>
                <a href="Startseite.html"><button class="Hundert">Schliessen</button></a>
                <b>Fach</b><br>
                <label>Englisch</label><br><br>
                <b>Preis pro Stunde</b><br>
                <label>50 Fr.</label><br><br>
                <b>Tag:</b><br>
                <label>04.04.2022</label><br><br>
                <b>Uhrzeit</b><br>
                <table>
                    <tr>
                        <td>Von:</td>
                        <td>Bis:</td>
                    </tr>
                    <tr>
                        <td><label>13:00 Uhr</label></td>
                        <td><label>14:00 Uhr</label></td>
                    </tr>
                </table><br>
                <a href="#" class="arrow">&#8249;</a>
                <a href="#" class="arrow">1</a>
                <a href="#" class="arrow">2</a>
                <a href="#" class="arrow">3</a>
                <a href="#" class="arrow">&#8250;</a>
            </div>
            <hr>
            <!-- Das soll erst auf button-click aufgerufen werden -->            
            <div>
                <b>Fach</b><br>
                <label>Englisch</label><br><br>
                <b>Preis pro Stunde</b><br>
                <label>50 Fr.</label><br><br>
                <b>Tag:</b><br>
                <label>04.04.2022</label><br><br>
                <b>Uhrzeit</b><br>
                <table>
                    <tr>
                        <td>Von:</td>
                        <td>Bis:</td>
                    </tr>
                    <tr>
                        <td><label>13:00 Uhr</label></td>
                        <td><label>14:00 Uhr</label></td>
                    </tr>
                </table><br>
            </div>
        </div>
    </div>



</x-layout>