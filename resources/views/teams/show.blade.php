
<p>{{ $team->name }}</p>
<p>{{ $team->email }}</p>
<p>{{ $team->adress }}</p>
<p>{{ $team->city }}</p>

<ul>
	@foreach($team->players as $player)
		<li>
			<a href="/players/{{ $player->id }}">{{ $player->first_name }}</a>  
		</li>               
    @endforeach
</ul>