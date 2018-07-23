<?php

namespace App\Http\Controllers{

	use Illuminate\Http\Request;
	use Validator;
	use App\Services\BidsService;
	use Session;

	class BidsController extends Controller{

	    private $bids_service;
	    private $products_service;

	    public function __construct(){
	    	$this->bids_service = new BidsService();
	    }

	    public function createBid(Request $request){
	    	$validator = Validator::make($request->all(),['email' => 'required|email', 'bid_amount' => 'required|numeric']);

	    	if($validator->fails()){
	    		return redirect()->back()->withInput()->withErrors($validator->errors());
	    	}
	    	$product_id = $request->get('product_id');
	    	$email = $request->get('email');
	    	$bid_amount = $request->get('bid_amount');
	    	$this->bids_service->createBid($product_id, $email, $bid_amount);
	    	return redirect('/products/index');
	    }


	}
}
