<x-layout>
    <nav>
        <img src="{{ asset('Bilder/Rairlogo.png') }}" alt="Rairlogo" class="Rairlogo">
        <a href="/registrieren">Registrieren</a>
        <a href="/anmelden">Login</a> 
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Nachhilfe nehmen</a>
            <div class="dropdown-content">
                @foreach ($fach as $item)
                    <a href="/nachhilfenehmen/{{ $item->id }}">{{ $item['fachname'] }}</a>
                @endforeach
            </div>
            </li>
    </nav> <br><br><br>
    <div class="container">
        <iframe width="100%" height="613" src="https://www.youtube.com/embed/gmt9GQSCcCU" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>

    </div>
    
    <p> Rair </p>
</x-layout>
