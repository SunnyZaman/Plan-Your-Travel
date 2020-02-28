@extends('layouts.app')
@push('scripts')
<script type="text/javascript" src="{{asset('/js/dropdown.js') }}" defer></script>
<script type="text/javascript" src="{{asset('/js/search.js') }}" defer></script>

@endpush

@section('content')
<div class="container">
<div class="text-right">
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#searchModal"><i class="fas fa-search"></i> Search</button>
</div>
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

<div class="results-container">
<p class="caption">Results</p>
<table class="table table-striped" id="results-table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Continent</th>
      <th scope="col">Country</th>
      <th scope="col">Attraction</th>
      <th scope="col">Location</th>
    </tr>
  </thead>
  <tbody id="results-tbody">
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade"  id="searchModal" tabindex="-1" role="dialog" aria-labelledby="search" aria-hidden="true">
  <div class="modal-dialog search-dialog" role="document">
    <div class="modal-content">
        <form id="searchForm" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
                <div class="form-group col-xs-12 col-md-12">
                    <input class="form-control" name="search" id="search" type="text" required>
             </div>
             
            </div>
            
        </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Search</button>
            </div>  
        </form>
    </div>
  </div>
</div>
<!--  -->
</div>

@endsection
