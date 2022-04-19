<x-layout>
    <form method="POST" action="/NutzerRegistrieren">
        @csrf
        <div class="container">
            <input type="text" name="benutzername" placeholder="Benutzername" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" id="password" placeholder="Passwort" required>
            <i class="bi bi-eye-slash" id="togglePassword"></i>
            <input type="password" name="passwordwiederholen" id="passwordwiederholen"
                placeholder="Passwort wiederholen" required>
            <i class="bi bi-eye-slash" id="togglePasswordwiederholen"></i>

            
            <input type="file" name="profilbild">

            <Button type="submit"> Registrieren </Button>
        </div>
    </form>
    <table>
        <td>Sie haben bereits einen Account? <a href="#">Anmelden</a></td>
      </table>
</x-layout>
