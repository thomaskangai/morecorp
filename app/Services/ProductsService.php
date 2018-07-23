<?php

namespace App\Services{

    use App\Product;
    use Exception;
    use Illuminate\Support\Facades\Log;
    use Illuminate\Support\Facades\DB;

    class ProductsService{

        /**
         * Creates a new product in the system
         * @param string $name
         * @param string $description
         * @param decimal|float $price
         * @throws Exception
         */
        public function createProduct(string $name, string $description, float $price){
            //Write product detials to the log.
            Log::info("createProduct: Creating new product with details $name,$description,$price");
            try{
                $product = new Product;
                $product->name = $name;
                $product->description = $description;
                $product->price = $price;
                $product->save();
            }catch(Exception $e){
                Log::error("createProduct: An exception occured while setting up new product");
                throw new Exception($e->getMessage());
            }
        }

        /**
         * Retrieves a list of products in the database
         * @throws Exception
         */
        public function getProducts(){
            try{
                Log::info("getProducts:Retrieving a list of products");
                $products = Product::all();
                return $products;
            }catch(Exception $e){
                Log::error("getProducts:An error occured while getting the list of products");
                throw new Exception($e->getMessage());
            }
        }

        /**
         * Edits the product details
         * @param int $product_id
         * @param string $name
         * @param string $description
         * @param decimal $price
         * @throws Exception
         */
        public function editProduct(int $product_id, string $name, string $description, float $price){
            try{
                 Log::info("editProduct: Editing product with details $name,$description,$price,$product_id");
                $product = Product::findOrFail($product_id);
                $product->name = $name;
                $product->description = $description;
                $product->price = $price;
                $product->save();
            }catch(Exception $e){
                Log::error("editProduct:An error occured while editing product details");
                throw new Exception($e->getMessage());
            }
        }

        /**
         * Retrieve a product instance
         * @param int $product_id
         * @throws Exception
         */
        public function getProduct(int $product_id){
            try{
                Log::info("getProduct: Retrieving product details $product_id");
                $product = Product::findOrFail($product_id);
                return $product;
            }catch(Exception $e){
                Log::error("getProduct:An error occured while getting product $product_id");
                throw new Exception($e->getMessage());
            }
        }

        /**
          * Deletes a product from the database
          * @param int $product_id
          * @throws \Exception
          */
        public function deleteProduct(int $product_id){
            try{
                $product = Product::findOrFail($product_id);
                $product->delete();
            }catch(\Exception $e){
                throw new \Exception($e->getMessage());
            }
        }
        

            /**
              * Retrieves the maximum bid amount
              * @param int $product_id
              * @return float $bid_amount
              * @throws \Exception
              */
            public function getMaxAmount(int $product_id){
                try{
                    $product = Product::join('bids', 'bids.product_id','products.product_id')
                    ->where('bids.product_id', $product_id)
                    ->orderBy('bid_amount','desc')
                    ->select('bid_amount')
                    ->first();
                    if($product)
                      return $product->bid_amount;
                    else
                      return 0;
                }catch(\Exception $e){
                    throw new \Exception($e->getMessage());
                }
            }

            /**
              * Retrieves the average bid amount
              * @param int $product_id
              * @return float $avg_bid_amount
              * @throws \Exception
              */
            public function getAverageBidAmount(int $product_id){
                try{
                    $product = Product::join('bids', 'bids.product_id','products.product_id')
                    ->where('bids.product_id', $product_id)
                    ->orderBy('bid_amount','desc')
                    ->select(DB::raw('AVG(bid_amount) as avg_bid_amount'))
                    ->first();
                    if($product)
                      return $product->avg_bid_amount;
                    else
                     return 0;
                }catch(\Exception $e){
                    throw new \Exception($e->getMessage());
                }
            }

            /**
              * Updates the number of views when a product is viewed
              * @param int $product_id
              * @throws \Exception
              */
            public function updateViews(int $product_id){
                try{
                    $product = Product::findOrFail($product_id);
                    $product->views = $product->views+1;
                    $product->save();
                }catch(\Exception $e){
                    Log::error("updateViews:An error occured while updating product views");
                    throw new \Exception($e->getMessage());
                }
            }   
     }

}

?>