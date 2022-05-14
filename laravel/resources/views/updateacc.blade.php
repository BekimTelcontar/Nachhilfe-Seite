<x-layout>
    <div class="container">
        <div class="tab">
            <button class="tablinks btn1" style="width: 33%;" onclick="openCity(event, 'Profil')">Profil</button>
            <button class="tablinks btn1" style="width: 33%;" onclick="openCity(event, 'Angebote')">Angebote</button>
            <button class="tablinks btn2" style="width: 34%;" onclick="openCity(event, 'Buchungen')">Buchungen</button>
        </div>
        <div id="Profil" class="tabcontent"><br>
            @csrf
            <form action="/account" method="post">
                <b>Benutzername</b><br>
                <input type="text" id="myText" contentEditable="true" value="Leodigi"><br><br>
                <b>E-Mail</b><br>
                <input type="email" id="myText" contentEditable="true" value="Leodigi@rair.com"><br><br>
                <b>Passwort</b><br> 
                <input type="password" name="password" id="password" contentEditable="true" value="12345678">
                <i class="bi bi-eye-slash" id="togglePassword"></i><br><br>
                <b>Bild</b><br>
                <label>Wählen Sie ein Bild (*.jpg, *.png oder *.gif) zum Hochladen aus.
                <input type="file" name="Bild" accept="image/gif,image/jpeg,image/png">
                </label>
                <input type="submit" value="Speichern">
            </form>
        </div>
        <!-- Kann nur bearbeitet werden, wenn das Angebot noch nicht angenommen wurde -->
        <div id="Angebote" class="tabcontent">
            <div><br>
                <a href="/account"><button style="color: white; background-color: #286DBE;" class="Hundert">Speichern</button></a><br><br>
                <b>Fach auswählen:</b><br>
                <select class="Hundert">
                    <option value="1">Englisch</option>
                    <option value="2">Deutsch</option>
                    <!-- Foreach Schleife PHP Rair ka -->
                </select><br><br>
                <b>Preis pro Stunde in Franken:</b>
                <input type="number" name="Preis" value="50" required><br><br>
                <b>Tag:</b>
                <input type="date" name="datum" id="datum" required><br><br>
                <b>Uhrzeit:</b><br>
                <table>
                    <tr>
                        <td>Von</td>
                        <td>Bis</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="time" name="Zeit" id="zeit" required>
                        </td>
                        <td>
                            <input type="time" name="Zeit" id="zeit" required>
                        </td>
                    </tr>
                </table><br>
                <b>Angebot wurde angenommen&nbsp;<input type="checkbox"></b><br><br>
            </div>
            <hr>
            <div><br>
                <b>Fach auswählen:</b><br>
                <select class="Hundert">
                    <option value="1">Englisch</option>
                    <option value="2">Deutsch</option>
                    <!-- Foreach Schleife PHP Rair ka -->
                </select><br><br>
                <b>Preis pro Stunde in Franken:</b>
                <input type="number" name="Preis" value="50" required><br><br>
                <b>Tag:</b>
                <input type="date" name="datum" id="datum" required><br><br>
                <b>Uhrzeit:</b><br>
                <table>
                    <tr>
                        <td>Von</td>
                        <td>Bis</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="time" name="Zeit" id="zeit" required>
                        </td>
                        <td>
                            <input type="time" name="Zeit" id="zeit" required>
                        </td>
                    </tr>
                </table><br>
                <b>Angebot wurde angenommen&nbsp;<input type="checkbox"></b><br><br>
            </div>
        </div><br>
        <div id="Buchungen" class="tabcontent">
            <div>
                <a href="/account"><button style="color: white; background-color: #286DBE;" class="Hundert">Speichern</button></a><br><br>
                <b>Fach:</b><br>
                <label>Englisch</label><br><br>
                <b>Preis pro Stunde:</b><br>
                <label>50 Fr.</label><br><br>
                <b>Tag:</b><br>
                <label>04.04.2022</label><br><br>
                <b>Uhrzeit:</b><br>
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
            <button class="Hundert" onclick="myFunction()">Absagen</button>
            <hr>
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
                        <td>Von</td>
                        <td>Bis</td>
                    </tr>
                    <tr>
                        <td><label>13:00 Uhr</label></td>
                        <td><label>14:00 Uhr</label></td>
                    </tr>
                </table><br>
            </div>
            <button class="Hundert" onclick="myFunction()">Absagen</button>
        </div>    
    </div>
</x-layout>