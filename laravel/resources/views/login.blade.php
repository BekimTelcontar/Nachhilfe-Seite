<x-layout>
    <div class="container">
        
        <form method="POST" action="/NutzerAnmelden">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="passwort" name="passwort" id="passwort" placeholder="Passwort" required>
            <Button type="submit"> Registrieren </Button>
        </form>
    </div>
</x-layout>
