@extends('layouts.app')
@push('scripts')
<script type="text/javascript" src="{{asset('/js/shop.js') }}" defer></script>
@endpush

@section('content')
<div class="container">
<div class="form-row">
        <div class="form-group col-xs-12 col-md-4">
       
        @foreach($package_includes['data'] as $i=>$package)
        <p>{{$package['package']}}</p>
        @endforeach
        </div>
    </div>

</div>

@endsection
