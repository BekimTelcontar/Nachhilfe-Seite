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

    <style>
        body {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

    </style>

</head>

<body style="background: url( {{ asset('Bilder/Startseite.png') }})">

    
<!--
    
    <ul>
        <div class="container">
            <a href="Startseite.php"><img src=" asset('Bilder/Rairlogo.png') }}" alt="Rairlogo"
                    class="Rairlogo"></a>
            
            <li class="dropdown">
                <a href="NachhilfeGeben.php" class="dropbtn">Nachhilfe geben</a>
            </li>
        </div>
    </ul>

              -->
    

    {{ $slot }}

</body>

</html>