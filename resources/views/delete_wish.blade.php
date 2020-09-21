@extends('layouts.app')

@extends('inc.header')
@section('content')

    <form action="delete_wish/delete" method="post">
        @csrf
        <select name="lijst_wensen">
        @if(count($wishes) > 0)
            @foreach($wishes as $wish)
                <option value="{{$wish->wens}}">{{$wish->wens}}</option>
            @endforeach
        @endif
        </select>
        <button type="submit">delete</button>
    </form>
@endsection
