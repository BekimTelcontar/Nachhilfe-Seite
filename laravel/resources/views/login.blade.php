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
            <table class="logintable">
                <td><a href="/register">Noch kein Account?</a></td>
                <td><a href="/forgotpassword">Passwort vergessen?</a></td>
            </table>
        </div>
    </div>
</x-layout>
