          
    @if (Auth::user()->is_favorites($micropost->id))
           
        
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-primary btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]])!!}
            {!! Form::submit('Favorite', ['class' => "btn btn-light btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
