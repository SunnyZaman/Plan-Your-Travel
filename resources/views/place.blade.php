@extends('layouts.app')
@push('scripts')
<script type="text/javascript" src="{{asset('/js/reviews.js') }}" defer></script>
@endpush
@section('content')
<div class="container">
{{ csrf_field() }}
     @foreach($selected_place as $place)
<h3 id="selectedPlace">{{$place->selected_place}}</h3>
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
<!-- Button trigger modal -->
<div class="row m-20">
<div class="col-xs-12 col-md-12">
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#reviewModal">
  Write a Review
</button>
</div>
</div>
<!-- Show Reviews -->
@foreach($reviews as $review)
<div class="form-row">
        <div class="form-group col-xs-12 col-md-12">
        <div class="card">
            <div class="p-20">
        @for ($i = 1; $i <= $review->rating; $i++)
        <span class="fa fa-star checked m-20"></span>
    @endfor
    <p class="card-subtitle mb-2"> {{$review->review_date}} </p>
    <p class="card-subtitle mb-2"> {{$review->reviewer_name}} - {{$review->reviewer_email}} </p>
    <h4 class="card-subtitle mb-2"> {{$review->title}}</h4>
            <p>{{$review->description}}</p>
        </div>
        </div>
        </div>
    </div>
    @endforeach

<!-- Modal -->
<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="writeReview" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <form id="reviewForm" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
                <div class="form-group col-xs-12 col-md-8">
                    <label for="title">Title:</label>
                    <input class="form-control" name="title" id="title" type="text" required>
             </div>
             <div class="form-group col-xs-12 col-md-4">
                    <label for="rating">Rating:</label>
                    <select name="rating" id="rating" class="form-control">
                    @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i}}">{{ $i }}</option>
                    @endfor
                </select>
             </div>
            </div>
            <div class="form-row">
            <div class="form-group col-xs-12 col-md-12">
            <label for="description">Description:</label>
            <textarea class="form-control" name="description" id="description" rows="3"  required></textarea>
            </div>
            </div>
        </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save review</button>
            </div>  
        </form>
    </div>
  </div>
</div>

</div>
@endsection
