@extends('layouts.app')

@section ('content')

<main class="py-4">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-8">
            	<div class="card">
                	<div class="card-header">Player List</div>

                		<div class="card-body">
                    		
                    	@foreach($players as $player)
							<p>
								<a href="/players/{{ $player->id }}">{{ $player->first_name }}</a>   
							</p>        
						@endforeach
                
                		</div>
            	</div>
        	</div>
    	</div>
	</div>
</main>

@endsection

