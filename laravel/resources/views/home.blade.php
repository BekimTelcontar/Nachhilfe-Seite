<x-layout>
    <nav>
        <img src="{{ asset('Bilder/Rairlogo.png') }}" alt="Rairlogo" class="Rairlogo">
        <a href="/registrieren">Registrieren</a>
        <a href="/anmelden">Login</a> 
        <span class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Nachhilfe nehmen</a>
            <div class="dropdown-content">
                @foreach ($fach as $item)
                    <a href="/nachhilfenehmen/{{ $item->id }}">{{ $item['fachname'] }}</a>
                @endforeach
            </div>
            </span>
    </nav>
    <div class="container mid">
        <a href="/account"><img class="logo" src="Bilder/Rair.png" alt="Accountlogo"></a>
      </div>
       <br><br><br>
   
    
    <p> Rair </p>
</x-layout>
