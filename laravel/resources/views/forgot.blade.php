<x-layout>
    <div class="container2">
        <div class="formwrapper">
            <h1>Passwort vergessen?</h1>
        <form method="post" action="/forgotpassword">
            @csrf
                <input type="email" name="email" id="email" placeholder="Email" required>
                <i class="bi bi-eye-slash" id="togglePassword"></i>
                <input type="submit" class="Hundert" value="Zurücksetzen">           
        </form>
    </div>
      </div>
</x-layout>