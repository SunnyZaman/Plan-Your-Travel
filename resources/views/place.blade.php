@extends('layouts.app')
@section('content')
<div class="container">
     @foreach($selected_place as $place)
<h3>{{$place->selected_place}}</h3>
<div class="form-row">
        <div class="form-group col-xs-12 col-md-4">
        <div class="card">
                <div class="card-body img-sm">
                    <img ption src="{{ asset('uploads/'. $place->selected_image1) }}" width="100%" height="100%" alt="{{$place->selected_place . ' First Image'}}"/>
                </div>
            </div>
            </div>
        <div class="form-group col-xs-12 col-md-4">
        <div class="card">
                <div class="card-body img-sm">
                    <img ption src="{{ asset('uploads/'. $place->selected_image2) }}" width="100%" height="100%" alt="{{$place->selected_place . ' Second Image'}}"/>
                </div>
            </div>        
            </div>
        <div class="form-group col-xs-12 col-md-4">
        <div class="card img-sm">
                <div class="card-body overflow-auto">
                <h4 class="card-subtitle mb-2 text-muted">Location:</h4>
                    <p class="card-text">{{$place->location}}</p>
                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                    <p class="card-text">{{$place->description}}</p>
                </div>
            </div>    
         </div>
         <!-- {{ Auth::user()->name }}  -->
    </div>
     @endforeach


</div>
@endsection
