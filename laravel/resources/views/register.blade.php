<x-layout>

    @if (isset($msg))
    @endif
    <div class="container">
        <form method="POST" action="/NutzerRegistrieren" enctype="multipart/form-data">
            @csrf
            <div class="formfield">
                <input type="text" name="benutzername" placeholder="Benutzername" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" id="password" placeholder="Passwort" required>
                <i class="bi bi-eye-slash" id="togglePassword"></i>
                <input type="password" name="passwordwiederholen" id="passwordwiederholen"
                    placeholder="Passwort wiederholen" required>
                <i class="bi bi-eye-slash" id="togglePasswordwiederholen"></i>
                <input type="file" name="profilbild" id="profilbild">
                <Button type="submit"> Registrieren </Button>
            </div>
        </form>
        <table>
            <td style="color:white;">Sie haben bereits einen Account? <a href="/anmelden">Anmelden</a></td>
        </table>
    </div>
</x-layout>
