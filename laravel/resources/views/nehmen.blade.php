<x-layout>
    <nav>
        <img src="{{ asset('Bilder/Rairlogo.png') }}" alt="Rairlogo" class="Rairlogo">
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Nachhilfe nehmen</a>
            <div class="dropdown-content">
                @foreach($fachs as $item)
                <a href="/nachhilfenehmen/{{ $item->id }}">{{ $item['fachname'] }}</a>
                @endforeach
            </div>
        </li>
    </nav> <br><br><br>

    @if (!$fach == null)
        <div class="container">
            <br><br><br><br>
            <div class="wrapper" style="width:100%">
                <fieldset>
                    <h1>{{ $fach->fachname }}</h1>
                </fieldset>
            </div>
            <br>

            @foreach ($stunden as $item)
                <div class="wrapper">
                    @foreach ($users as $user)
                        @if ($item['userId'] == $user['id'])
                            <div class="person">
                                <div class="image">
                                    <img src="data:image/jpeg;base64,{{ $user->profilbild }}">
                                </div>
                                <div class="text">
                                    <strong>{{ $user['benutzername'] }}</strong>
                                    <p>
                                        Pro Stunde: {{ $item['kosten'] }} Fr.
                                    </p>
                                </div>
                                <div class="link">
                                    <a href="/StundeBuchen/{{ $item->id }}">Buchen!</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach

        </div>
    @endif
</x-layout>
