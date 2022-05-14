<x-layout>
    <div class="container2">
        <div class="formwrapper">
            <h1>Anmelden</h1>
            <form method="POST" action="/logginginuser">
                @csrf
                <div class="formfield">
                    <label for="email">Email oder Benutzernamen eingeben:</label>
                    <input type="text" name="email" placeholder="Email oder Benutzername" required>
                    <label for="email">Passwort eingeben:</label>
                    <input type="password" name="passwort" id="passwort" placeholder="Passwort" required>
                    <Button type="submit" class="Hundert">Anmelden</Button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
