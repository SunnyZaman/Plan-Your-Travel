@extends('layouts.app')
@push('scripts')
<script type="text/javascript" src="{{asset('/js/dropdown.js') }}" defer></script>
@endpush

@section('content')
<div class="container">
<div class="form-row">
        <div class="form-group col-xs-12 col-md-4">
        <label for="continent">Continent:</label>
            <select name="continent" id="continent" class="form-control dynamic" data-dependent="country">
        <option value="">Select Continent</option>
        @foreach($continent_list as $continent)
        <option value="{{ $continent->continent}}">{{ $continent->continent }}</option>
        @endforeach
    </select>
        </div>
        <div id="countryContainer" class="form-group col-xs-12 col-md-4">
        <label for="country">Country:</label>
            <select name="country" id="country" class="form-control dynamic" data-dependent="attraction">
            <option value="">Select Country</option>
            </select>
        </div>
        <div id="attractionContainer" class="form-group col-xs-12 col-md-4">
        <label for="attraction">Attraction:</label>
            <select  name="attraction" id="attraction" class="form-control">
            <option value="">Select Attraction</option>
            </select>
        </div>
        {{ csrf_field() }}

    </div>
    <div class="form-row">
        <div class="form-group col-xs-12 col-md-4">
        <label for="popularPlaces">Popular Places:</label>
            <select name="popularPlaces" id="popularPlaces" class="form-control">
                 <option value="">Select Popular Place</option>
                    @foreach($popular_places as $places)
                <option value="{{ $places->place}}">{{ $places->place }}</option>
                    @endforeach
            </select>
        </div>
</div>
<div class="imageContainer">
    <div class="row justify-content-center m-20">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body img-med" id="img-med">
                </div>
                <div class="card-footer image-medium">
                    <h3>Place</h3>
                <div class="float-left">
                    <p>Location</p>
                </div>
                    <div class="float-right">
                        <a> Read more</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center m-20">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body img-sm" id="img1-sm">
                </div>
                <div class="card-footer image1-small">
                    <h3>Place</h3>
                <div class="float-left">
                    <p>Location</p>
                </div>
                    <div class="float-right">
                    <a> Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body img-sm" id="img2-sm">
                </div>
                <div class="card-footer image2-small">
                    <h3>Place</h3>
                <div class="float-left">
                    <p>Location</p>
                </div>
                    <div class="float-right">
                    <a> Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body img-sm" id="img3-sm">
                </div>
                <div class="card-footer image3-small">
                    <h3>Place</h3>
                <div class="float-left">
                    <p>Location</p>
                </div>
                    <div class="float-right">
                    <a> Read more</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</div>

@endsection
