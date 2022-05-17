<x-layout>
    <div class="container2">
        <div class="formwrapper">
            <form method="post" action="/savepassword">

                <input type="password" name="password" id="password" placeholder="Passwort" required>
                <i class="bi bi-eye-slash" id="togglePassword"></i>
                <input type="password" name="passwordwiederholen" id="passwordwiederholen"
                    placeholder="Passwort wiederholen" required>
                <i class="bi bi-eye-slash" id="togglePasswordwiederholen"></i>
                <input type="submit" value="Neues Passwort speichern">
            </form>
        </div>
    </div>
</x-layout>
