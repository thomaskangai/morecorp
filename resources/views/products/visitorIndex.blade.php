@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-block">
            <h4 class="card-block__title mb-4">List of Products</h4>

         <div class="album py-5 bg-light">
        <div class="container">
     
          <div class="row">
          @foreach($products as $product)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ url('/img/product.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <span>{{$product->name}}</span>

                  <p class="card-text">{{$product->description}}.<br />
                    </p>
                     <span  style="color:red;font-weight:bold">ZAR {{number_format($product->price, 2)}}</span>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="{{ url('/product/'.$product->product_id.'/view') }}" class="btn btn-outline-primary">View</button>
                      <a href="{{ url('bid/create?product_id='.$product->product_id) }}" class="btn btn-outline-primary">Add Bid</a>
                    </div>
                    <small class="text-muted">{{sizeof($product->bids)}} bid(s)</small>
                  </div>
                </div>
              </div>
            </div>
         @endforeach
       </div>
        </div>
   </div>         
</div>
</div>

      

@stop