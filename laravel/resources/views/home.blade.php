<x-layout>
    <nav>
        <img src="{{ asset('Bilder/Rairlogo.png') }}" alt="Rairlogo" class="Rairlogo">

        <div class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Nachhilfe nehmen</a>
            <div class="dropdown-content">
                @foreach($fach as $item)
                <a href="/nachhilfenehmen/{{ $item->id }}">{{ $item['fachname'] }}</a>
                @endforeach
            </div>
        </div>
    </nav> <br><br><br>

    <p> Rair </p>
</x-layout>