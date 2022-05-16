<x-layout>
    <div class="container2">
        <div class="formwrapper">
            <h1>Anmelden</h1>
            <form method="POST" action="/logginginuser">
                @csrf
                <div class="formfield">
                    <label for="email">Email eingeben:</label>
                    <input type="email" name="email" placeholder="Email" required>
                    <label for="email">Passwort eingeben:</label>
                    <input type="password" name="password" id="password" placeholder="Passwort" required>
                    <Button type="submit" class="Hundert">Anmelden</Button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
