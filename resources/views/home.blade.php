@extends('layouts.app')

@section('content')
<div class="container">
<div class="form-row">
        <div class="form-group col-xs-12 col-md-4">
        <label for="continentSelect">Continent:</label>
            <select class="form-control" id="continentSelect">
                <option>Default select</option>
            </select>
        </div>
        <div class="form-group col-xs-12 col-md-4">
        <label for="countrySelect">Country:</label>
            <select class="form-control" id="countrySelect">
                <option>Default select</option>
            </select>
        </div>
        <div class="form-group col-xs-12 col-md-4">
        <label for="attractionSelect">Attraction:</label>
            <select class="form-control" id="attractionSelect">
                <option>Default select</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-xs-12 col-md-4">
        <label for="popularPlacesSelect">Popular Places:</label>
            <select class="form-control" id="popularPlacesSelect">
                <option>Default select</option>
            </select>
        </div>
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection
