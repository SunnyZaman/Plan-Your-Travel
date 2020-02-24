@extends('layouts.app')
@push('scripts')
<script type="text/javascript" src="{{asset('/js/shop.js') }}" defer></script>
@endpush

@section('content')
<div class="container">
<div class="form-row">
        <div class="form-group col-xs-12 col-md-6">
        <div class="card">
        @foreach($plan_list as $plan)
        <div class="card-header">
        <h5 id="planTitle" class="card-title float-left">{{$plan->title}}</h5>
        <h5 id="totalPrice" class="float-right">${{$plan->total_price}}</h5>
        </div>
                <div class="card-body">
                <p class="card-subtitle mb-2"> Spend {{$plan->duration}} days travelling in:</p>
                <ul>
                @foreach($locations['data'] as $i=>$location)
                    <li>{{$location['place']}}</li>
                 @endforeach
                </ul>
                <p class="card-subtitle mb-2">Viewing the beautiful attractions of:</p>
                <ul>
                @foreach($attractions['data'] as $i=>$attraction)
                    <li>{{$attraction['place']}}</li>
                 @endforeach
                </ul>
                <h6 class="card-subtitle mb-2">Package Includes:</h6>
                <ul>
                @foreach($package_includes['data'] as $i=>$package)
                    <li>{{$package['package']}}</li>
                 @endforeach
                </ul>
                <p class="card-subtitle mb-2"><span class="font-weight-bold">Air Fare:</span> ${{$plan->air_fare}}</p>
                <p class="card-subtitle mb-2"><span class="font-weight-bold">Start Date:</span> {{$plan->start_date}}</p>
                <p class="card-subtitle mb-2"><span class="font-weight-bold">Tour ID Number:</span> {{$plan->tour_id}}</p>
                </div>
                <div class="card-footer text-center">
                <button type="button" id="planButton" class="btn btn-primary">
                    Select Plan
                </button>
                </div>
                @endforeach
        </div>
        
        </div>
        <div class="form-group col-xs-12 col-md-6">
            <div id="planQuery" class="card m-20">
            <form id="travellerForm" method="post">
            {{ csrf_field() }}
            <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                <button type="button" class="btn btn-primary float-right" id="addInput">
                        Add Traveller
                </button>
                </div></div>
            <div id="travellerAges">
                <div class="form-row">
                <div class="form-group col-xs-12 col-md-12">
                    <label for="age_1">Age of traveler:</label>
                    <input class="form-control" name="age_1" id="age_1" type="text" required>
                </div>
             </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success" id="confirmButton">
                    Confirm Purchase
                </button>
                </div>
            </div>
            </div>
                </form>
            </div>
            <!-- Invoice -->
            <div id="invoice" class="card">
        <div class="card-header">
        <h5 class="card-title">Invoice</h5>
            </div>
        <div class="card-body">
            <!-- Inovice table -->
            <div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Plan</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
                            </thead>
                            @foreach($plan_list as $plan)
    						<tbody>
    							<tr>
    								<td id="plan">{{$plan->title}}</td>
    								<td id="price" class="text-center"></td>
    								<td id="quantity" class="text-center">1</td>
    								<td id="totals" class="text-right"></td>
    							</tr>
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td id="subtotal" class="thick-line text-right"></td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Tax(15%)</strong></td>
    								<td id="tax" class="no-line text-right"></td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td id="total" class="no-line text-right"></td>
    							</tr>
                            </tbody>
                            @endforeach
    					</table>
    				</div>
        </div>
            </div>
            </div>


        </div>
    </div>

</div>

@endsection
