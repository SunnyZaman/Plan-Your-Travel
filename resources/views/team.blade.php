@extends('layouts.app')

@section('content')
<div class="container">
  <div class="form-row">
    <div class="col-xs-12 col-md-4">
      <div class="card text-center">
        <div class="card-header">
          <h5 class="card-title">Sunny Zaman</h5>
        </div>
        <div class="card-body">
        <i class="fas fa-user"></i>
        </div>
        <div class="card-footer text-muted">
          {{$data[0]}}
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-md-4">
      <div class="card text-center">
        <div class="card-header">
          <h5 class="card-title">Don Khalil Alwani</h5>
        </div>
        <div class="card-body">
        <i class="fas fa-user"></i>
        </div>
        <div class="card-footer text-muted">
        {{$data[1]}}
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-md-4">
      <div class="card text-center">
        <div class="card-header">
          <h5 class="card-title">Talha Ahmed</h5>
        </div>
        <div class="card-body">
        <i class="fas fa-user"></i>
        </div>
        <div class="card-footer text-muted">
        {{$data[2]}}
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
