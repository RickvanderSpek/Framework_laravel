@extends('layouts.app')
@extends('inc.header')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Maak een wens</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @include('inc.messages')


                        <form method="post" action= "/update_wish/update">
                            @csrf
                            <select name="wens">
                                @if(count($wishes) > 0)
                                    @foreach($wishes as $wish)
                                        <option value="{{$wish->wens}}">{{$wish->wens}}</option>
                                    @endforeach
                                @endif
                            </select>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">wens</label>
                                <input name="naam_wens" type="text" class="form-control" id="formGroupExampleInput2">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Foto</label>
                                <input name="foto" type="text" class="form-control" id="formGroupExampleInput2">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Bericht</label>
                                <input name="bericht" type="text" class="form-control" id="formGroupExampleInput2">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Prijs</label>
                                <input name="prijs" type="text" class="form-control" id="formGroupExampleInput2">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Link</label>
                                <input name="link" type="text" class="form-control" id="formGroupExampleInput2">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Bericht</label>
                                <input name="bericht" type="text" class="form-control" id="formGroupExampleInput2" style="height: 150px">
                            </div>
                            <button type="submit">Verzend</button>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
