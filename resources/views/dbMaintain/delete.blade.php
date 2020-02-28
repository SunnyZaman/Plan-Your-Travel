@extends('layouts.app')
@push('scripts')
<script type="text/javascript" src="{{asset('/js/database.js') }}" defer></script>
@endpush
@section('content')
<div class="container">
    <h5 id="queryTitle">Delete</h5>
<div class="form-row">
        <div class="form-group col-xs-12 col-md-4">
        <label for="table">Choose Table from Database:</label>
            <select name="table" id="table" class="form-control">
        <option value="">Select table</option>
        @foreach($tables as $table)
        <option value="{{ $table->table}}">{{ $table->table }}</option>
        @endforeach
    </select>
        </div>
</div>
@endsection
