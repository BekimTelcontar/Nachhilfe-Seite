<x-layout>
    <div class="container2">
        @if (isset($msg))
            <h2 style="color:red;">{{ $msg }}</h2>
        @endif
        <div class="formwrapper">
            <h1>Registrieren</h1>
            <form method="POST" action="/registeringuser" enctype="multipart/form-data">
                @csrf
                <div class="formfield">
                    <label for="benutzername">Name eingeben:</label>
                    <input type="text" name="benutzername" placeholder="Benutzername" required>
                    <label for="email">Email eingeben:</label>
                    <input type="email" name="email" placeholder="Email" required>
                    <label for="password">Passwort eingeben:</label>
                    <input type="password" name="password" id="password" placeholder="Passwort" required>
                    <label for="passwordwiederholen">Passwort wiederholen:</label>
                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                    <input type="password" name="passwordwiederholen" id="passwordwiederholen"
                        placeholder="Passwort wiederholen" required>
                    <i class="bi bi-eye-slash" id="togglePasswordwiederholen"></i>
                    <label for="profilbild">Profilbild einfügen:</label>
                    <input type="file" name="profilbild" id="profilbild">
                    <Button type="submit" class="Hundert"> Registrieren </Button>
                </div>
            </form>
        </div>
        <table>
            <td>Sie haben bereits einen Account? <a href="/login">Anmelden</a></td>
        </table>
    </div>
</x-layout>
