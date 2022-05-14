<x-layout>
    <div class="container">
        <form method="POST" action="/NutzerAnmelden">
            @csrf
            <div class="formfield">
                <input type="email" name="email" placeholder="Email" required>
                <input type="passwort" name="passwort" id="passwort" placeholder="Passwort" required>
                <Button type="submit"> Registrieren </Button>
            </div>
        </form>
    </div>
</x-layout>
