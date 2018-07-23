@extends('layouts.default')
@section('content')
@section('page_title','Edit Product')
<div class="card">
    <div class="card-block">
        <h4 class="card-block__title mb-4">Edit Product Details</h4>
            {{Form::model($product, ['method' => 'patch','action' => ['ProductsController@edit', $product->product_id]])}}
                    <div class="form-group">
                        <label>Product Name</label>
                        {{Form::text('name',$product->name, ['class' => 'form-control'])}}
                        <i class="form-group__bar"></i>
                        @if($errors->has('name'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        {{Form::text('price',$product->price, ['class' => 'form-control'])}}
                        <i class="form-group__bar"></i>
                        @if($errors->has('price'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('price') }}
                            </div>
                        @endif
                    </div>
                      <div class="form-group">
                        <label>Description</label>
                        {{Form::textarea('description',$product->description, ['class' => 'form-control'])}}
                        <i class="form-group__bar"></i>
                        @if($errors->has('description'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('description') }}
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-outline-success">Submit</button>
              {{Form::close()}}
   </div>
</div>
@stop

