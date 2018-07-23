<?php

namespace App{

	use Illuminate\Database\Eloquent\Model;

	class Bid extends Model
	{
	    /**
	      * @var $table
	      */
	    protected $table = 'bids';

	    /**
	      * @var $primaryKey
	      */
	    protected $primaryKey = 'bid_id';

	    public function product(){
	    	return $this->belongsTo(Product::class, 'product_id');
	    }
	}
}
