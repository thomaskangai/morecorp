@extends('layouts.default')
@section('content')
@section('page_title','Create new product')
		<div class="card">
		    <div class="card-block">
		        <h4 class="card-block__title mb-4">Add New Product</h4>
					<form method="POST" action="{{route('createProduct')}}">
						<div class="form-group">
							<label>Product Name</label>
							<input type="text" name="name" class="form-control"/>
							   <i class="form-group__bar"></i>
				                @if($errors->has('name'))
				                    <div class="alert alert-danger" role="alert">
				                        {{ $errors->first('name') }}
				                    </div>
				                @endif
						</div>
						<div class="form-group">
							<label>Price</label>
							<input type="number" name="price" class="form-control" />
							<i class="form-group__bar"></i>
				                @if($errors->has('price'))
				                    <div class="alert alert-danger" role="alert">
				                        {{ $errors->first('price') }}
				                    </div>
				                @endif
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea name="description" class="form-control"></textarea><br />
							@csrf
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
	         </div>
       </div>
@stop