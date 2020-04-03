@extends('layouts.dashboard')

@section('content')
<div>
    <div class="!h-screen text-white">

        @if( Auth::user()->is_admin === 1) 
            <div class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem optio eligendi illo nam placeat, et dignissimos aspernatur exercitationem porro qui ut? Odio voluptatum nesciunt beatae vel voluptas! Culpa, nisi vitae!</div>

        @endif

        @foreach($users as $data)
            {{ $data->nim }}<br>
        @endforeach
    </div>
    
</div>
@endsection()