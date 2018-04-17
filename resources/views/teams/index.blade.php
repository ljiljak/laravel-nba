

    @foreach($teams as $team)
        
            <p>
                <a href="/teams/{{ $team->id }}">{{ $team->name }}</a>   
            </p> 
           
    @endforeach
    