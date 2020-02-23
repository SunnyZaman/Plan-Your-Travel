@extends('layouts.app')
@section('content')
<div class="container">
<div class="form-row">
        <div class="form-group col-xs-12 col-md-4">
        <label for="continent">{{$imageName}}:</label>
        </div>
        <div id="countryContainer" class="form-group col-xs-12 col-md-4">
        <label for="country">Country:</label>
        </div>
        <div id="attractionContainer" class="form-group col-xs-12 col-md-4">
        <label for="attraction">Attraction:</label>
        </div>

    </div>

</div>
@endsection
