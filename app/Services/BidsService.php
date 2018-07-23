<?php 

	namespace App\Services{

		use App\Bid;
		use Illuminate\Support\Facades\Log;

		class BidsService{

			/**
			  * Creates a new bid
			  * @param int $product_id
			  * @param string $email
			  * @param float $bid_amount
			  * @throws \Exception
			  */
			public function createBid(int $product_id, string $email, float $bid_amount){
				try{
					$bid = new Bid;
					$bid->product_id = $product_id;
					$bid->email = $email;
					$bid->bid_amount = $bid_amount;
					$bid->save();
				}catch(\Exception $e){
					throw new \Exception($e->getMessage());
				}
			}

	
	}
}
 ?>