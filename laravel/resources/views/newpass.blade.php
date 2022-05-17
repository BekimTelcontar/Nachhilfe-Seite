<x-layout>
    <div class="container2">
        <div class="formwrapper">
            <h1>Neues Passwort eingeben</h1>
            <form method="post" action="/resetpassword">
                @csrf
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="password" name="password" id="password" placeholder="Passwort" required>
                <i class="bi bi-eye-slash" id="togglePassword"></i>
                <input type="password" name="passwordwiederholen" id="passwordwiederholen"
                    placeholder="Passwort wiederholen" required>
                <i class="bi bi-eye-slash" id="togglePasswordwiederholen"></i>
                <input type="submit" class="Hundert">
            </form>
        </div>
    </div>
</x-layout>
