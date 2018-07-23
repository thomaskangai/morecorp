@extends('layouts.default')
@section('content')
    <div class="card">
        <div class="card-block">
            <h4 class="card-block__title mb-4">List of Products</h4>
            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
			<table id="data-table" class="table table-bordered table-hover">
				<thead>
				<th>#</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Description</th>
				<th>Views</th>
				<th></th>
			</thead>
			   <tbody>
			   	@foreach($products as $product)
			   	 <tr>
			   	 	<td>{{$product->product_id}}</td>
			   	 	<td>{{$product->name}}</td>
			   	 	<td>{{$product->price}}</td>
			   	 	 @php
                            if(strlen($product->description) > 20)
                              $description = substr($product->description, 0, 20).'...';
                              else
                              $description = $product->description;
                        @endphp
			   	 	<td>{{ $description}}</td>
			   	 	<td>{{$product->views}}</td>
			   	 	<td><a href="{{url('/product/edit/'.$product->product_id)}}">Edit</a>
			   	 		{!! Form::open(['method' => 'DELETE','route' => ['deleteProduct', $product->product_id],'style'=>'display:inline', 'class' =>'form-inline form-delete', 'id' => 'delete_product_form','onsubmit' => "return confirm('Are you sure you want to delete this product?')"]) !!}
			               <button type="submit" class="btn btn-link">Delete</button>
			           {!! Form::close() !!}
			           <a href="{{url('/product/'.$product->product_id.'/view')}}">View</a>
			   	 	</td>
			   	 </tr>
			   	@endforeach
			   </tbody>
			</table>
	@stop