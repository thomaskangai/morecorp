@extends('layouts.app')
@section('content')
@section('page_title','Create new bid')
		<div class="card">
		    <div class="card-block">
		        <h4 class="card-block__title mb-4">Add New Bid</h4>
					<form method="POST" action="{{route('createBid')}}">
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control"/>
							   <i class="form-group__bar"></i>
				                @if($errors->has('email'))
				                    <div class="alert alert-danger" role="alert">
				                        {{ $errors->first('email') }}
				                    </div>
				                @endif
						</div>
						<div class="form-group">
							<label>Bid Amount</label>
							<input type="number" name="bid_amount" class="form-control" />
							<i class="form-group__bar"></i>
				                @if($errors->has('bid_amount'))
				                    <div class="alert alert-danger" role="alert">
				                        {{ $errors->first('bid_amoubnt') }}
				                    </div>
				                @endif
						</div>
						<input type="hidden" name="product_id" value="{{ request()->query('product_id') }}" />
						@csrf
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
	         </div>
       </div>
@stop