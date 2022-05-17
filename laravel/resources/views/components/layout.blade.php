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
        <div class="block">
            <div class="dropdown">
                <a href="/tutoring" class="dropbtn">Nachhilfe geben</a>
            </div>

            <div class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Nachhilfe nehmen</a>
                <div class="dropdown-content">
                    <a href="/tutors/1">Mathematik</a>
                    <a href="/tutors/2">Deutsch</a>
                    <a href="/tutors/3">Englisch</a>
                    <a href="/tutors/4">Französisch</a>
                    <a href="/tutors/5">Geschichte</a>
                    <a href="/tutors/6">Geografie</a>
                    <a href="/tutors/7">Physik</a>
                    <a href="/tutors/8">Chemie</a>
                    <a href="/tutors/9">Biologie</a>
                    <a href="/tutors/10">Wirtschaft und Recht</a>
                    <a href="/tutors/11">Finanz und Rechnungswesen</a>
                    <a href="/tutors/12">Informatik</a>
                    <a href="/tutors/13">Musik</a>
                    <a href="/tutors/14">Sozialwissenschaften</a>
                    <a href="/tutors/15">Bildn. Gestalten</a>
                    <a href="/tutors/16">Religion und Ethik</a>
                </div>
            </div>

            <div class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">
                    <h4>
                        @guest
                            <img src="{{ asset('Bilder/User.png') }}">
                            Anmelden
                        @endguest
                        @auth
                            <img src="data:image/jpeg;base64,{{ Auth::user()['profilbild'] }}">
                            {{ Auth::user()['benutzername'] }}
                        @endauth

                    </h4>
                </a>
                <div class="dropdown-content">
                    <a href="/register">Registrieren</a>
                    @guest
                        <a href="/login">Anmelden</a>
                    @endguest
                    @auth
                        <a href="/account">Profil anschauen</a>
                        <a href="/fs">Abmelden</a>
                    @endauth
                </div>
            </div>
        </div>
        <Button class="hamburger-menu">
            <div class="overlay">
                <div class="sidebar-menu">
                    <h3>Menu</h3>

                    <a href="/tutors/1">Mathematik</a>
                    <a href="/tutors/2">Deutsch</a>
                    <a href="/tutors/3">Englisch</a>
                    <a href="/tutors/4">Französisch</a>
                    <a href="/tutors/5">Geschichte</a>
                    <a href="/tutors/6">Geografie</a>
                    <a href="/tutors/7">Physik</a>
                    <a href="/tutors/8">Chemie</a>
                    <a href="/tutors/9">Biologie</a>
                    <a href="/tutors/10">Wirtschaft und Recht</a>
                    <a href="/tutors/11">Finanz und Rechnungswesen</a>
                    <a href="/tutors/12">Informatik</a>
                    <a href="/tutors/13">Musik</a>
                    <a href="/tutors/14">Sozialwissenschaften</a>
                    <a href="/tutors/15">Bildn. Gestalten</a>
                    <a href="/tutors/16">Religion und Ethik</a>
                    <a href="/tutoring" >Nachhilfe geben</a>
                    <a href="/register">Registrieren</a>
                    @guest
                        <a href="/login">Anmelden</a>
                    @endguest
                    @auth
                        <a href="/account">Profil anschauen</a>
                        <a href="/fs">Abmelden</a>
                    @endauth

                </div>
        </button>
        </div>
    </nav><br>

    {{ $slot }}

</body>

</html>
