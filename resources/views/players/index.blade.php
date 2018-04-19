

    @foreach($players as $player)
        
            <p>
                <a href="/players/{{ $player->id }}">{{ $player->first_name }}</a>   
            </p> 
           
    @endforeach