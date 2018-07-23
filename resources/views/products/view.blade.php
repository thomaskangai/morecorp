@extends('layouts.app')
@section('content')
@section('page_title','View Product')

<div class="card">
    <div class="card-block">
        <h4 class="card-block__title mb-4">Product Details</h4>
        <div class="card-block">
            <dl class="row">
                <dt class="col-sm-3">Product #:</dt>
                <dd class="col-sm-9">{{$product->product_id}}</dd>
                <dt class="col-sm-3">Name: </dt>
                <dd class="col-sm-9"> {{$product->name}}</dd>
                <dt class="col-sm-3">Description: </dt>
                <dd class="col-sm-9">{{$product->description}}</dd>
                <dt class="col-sm-3">Price: </dt>
                <dd class="col-sm-9">R {{number_format($product->price, 2)}}</dd>
                <dt class="col-sm-3">Maximum Bid Amount:</dt>
                <dd class="col-sm-9">R {{number_format($max,2)}}</dd>
                <dt class="col-sm-3">Averrage Bid Amount:</dt>
                <dd class="col-sm-9">R {{number_format($avg_bid_amount,2)}}</dd>
            </dl>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-block">
        <h4 class="card-block__title mb-4">Bids Submitted</h4>
        <table id="data-table" class="table table-bordered table-hover">
            <thead class="thead-default">
            <tr>
                <th>Bidder's email</th>
                <th>Amount</th>
                <th>Date Submitted</th>
            </tr>
            </thead>
            <tbody>
            @foreach($product->bids as $bid)
                <tr>
                    <td>{{$bid->email}}</td>
                    <td>ZAR{{ number_format($bid->bid_amount, 2) }}</td>
                    <td>{{$bid->created_at}}</td>
  
                </tr>
            @endforeach
            </tbody>
        </table>

        <button type="submit" class="btn btn-primary">Add Bid</button>
    </div>
</div>
@stop