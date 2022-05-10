<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nachhilfe</title>

    <!-- Links to css and js file -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src=" {{ asset('js/script.js') }}"></script>

    <!-- background image -->
</head>

<body>
    <nav>
        <a href="/"><img src="{{ asset('Bilder/Rairlogo.png') }}" alt="Rairlogo" class="Rairlogo"></a>
        <div class="dropdown">
            <a href="javascript:void(0)" class="dropbtn"><img src="{{ asset('Bilder/User.png') }}" > Anmelden</a>
            <div class="dropdown-content">
                <a href="/registrieren">Registrieren</a>
                <a href="/anmelden">Login</a>
            </div>
            
        </div>
        <span class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Nachhilfe nehmen</a>
            <div class="dropdown-content">
                <a href="/nachhilfenehmen/1">Mathematik</a>
                <a href="/nachhilfenehmen/2">Deutsch</a>
                <a href="/nachhilfenehmen/3">Englisch</a>
                <a href="/nachhilfenehmen/4">Französisch</a>
                <a href="/nachhilfenehmen/5">Geschichte</a>
                <a href="/nachhilfenehmen/6">Geografie</a>
                <a href="/nachhilfenehmen/7">Physik</a>
                <a href="/nachhilfenehmen/8">Chemie</a>
                <a href="/nachhilfenehmen/9">Biologie</a>
                <a href="/nachhilfenehmen/10">Wirtschaft und Recht</a>
                <a href="/nachhilfenehmen/11">Finanz und Rechnungswesen</a>
                <a href="/nachhilfenehmen/12">Informatik</a>
                <a href="/nachhilfenehmen/13">Musik</a>
                <a href="/nachhilfenehmen/14">Sozialwissenschaften</a>
                <a href="/nachhilfenehmen/15">Bildn. Gestalten</a>
                <a href="/nachhilfenehmen/16">Religion und Ethik</a>
            </div>
        </span>
        <span class="dropdown">
            <a href="/nachhilfegeben" class="dropbtn">Nachhilfe geben</a>
        </span>
    </nav><br>
    {{ $slot }}

</body>

</html>
