@extends('layouts.app')
@extends('inc.header')
@section('content')
    <div class="container">
    @if(count($wishes) > 0)
        @foreach($wishes as $wish)
            <ul class="list_group">
                <li class="list-group-item">De wens: {{$wish->wens}}</li>
                <li class="list-group-item">De prijs: {{$wish->prijs}}</li>
                <li class="list-group-item">Bericht: {{$wish->bericht}}</li>
                <li class="list-group-item">Foto: {{$wish->foto}}</li>
                <li class="list-group-item">Link: {{$wish->link}}</li>
            </ul>
        @endforeach
    @endif
    </div>
@endsection
