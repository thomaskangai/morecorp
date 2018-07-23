<?php

namespace App{

		use Illuminate\Database\Eloquent\Model;
		use Illuminate\Database\Eloquent\SoftDeletes;

		class Product extends Model
		{
			use SoftDeletes; 
		    /**
		      * @var $table
		      */
		    protected $table = 'products';

		    /**
		      * @var $primaryKey
		      */
		    protected $primaryKey = 'product_id';

		    public function bids(){
		    	return $this->hasMany(Bid::class, 'product_id');
		    }

		}
}
