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
        <label for="attractionSelect">Attraction:</label>
            <select  name="attraction" id="attraction" class="form-control" id="attractionSelect">
            <option value="">Select Attraction</option>
            </select>
        </div>
        {{ csrf_field() }}

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
