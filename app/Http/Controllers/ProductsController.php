<?php

namespace App\Http\Controllers{

    use Illuminate\Http\Request;
    use App\Services\ProductsService;
    use Validator;
    use Session;
    use Event;
    use App\Events\ProductViewed;

    class ProductsController extends Controller
    {
        /**
         * @var $products_service
         */
        private $products_service;

        public function __construct(){
            $this->products_service = new ProductsService();
        }

        /**
         * Function to create a new product
         * @param Request $request
         * @return $this
         */
        public function create(Request $request){
            $validator = Validator::make($request->all(),['name' => 'required|string|min:2','price' => 'required|numeric','description' =>'required|string']);

            //If the validation fails, redirect back with the error messages and original input.
            if($validator->fails()){
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }

            $name = $request->get('name');
            $price = $request->get('price');
            $description = $request->get('description');

            //Create the product using the products service
            $this->products_service->createProduct($name, $description, (float) $price);
            Session("message", "New product created successfully.");
            return redirect('/products');
        }

        /**
         * Display edit view
         */
        public function displayEditView(int $product_id){
            //Retrieve the product by id
            $product = $this->products_service->getProduct($product_id);
            return view('products.edit')->with(['product' => $product]);
        }

        /**
         * Function to edit product
         * @param Request $request
         * @param int $product_id
         */
        public function edit(Request $request, int $product_id){
            $validator = Validator::make($request->all(),['name' => 'required|string','description' =>'required|string|min:2','price' => 'required|numeric']);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $name = $request->get('name');
            $price = $request->get('price');
            $description = $request->get('description');
            $this->products_service->editProduct($product_id,$name, $description, (float) $price);
            return redirect('/products');

        }

        /**
         * Retrieves a list of products
         */
        public function getProducts(){
            $products = $this->products_service->getProducts();
            return view('products.index')->with(['products' => $products]);
        }

        public function delete(int $product_id){
            $this->products_service->deleteProduct($product_id);
            return redirect('/products');
        }

        /**
         * @param int $product_id
         * @return $this
         */
        public function view(int $product_id){
            $product = $this->products_service->getProduct($product_id);
            $max = $this->products_service->getMaxAmount($product_id);
            $avg_bid_amount = $this->products_service->getAverageBidAmount($product_id);
            //Fire an event to update the number of views.
            Event::fire(new ProductViewed($product));
            return view('products.view')->with(['product' => $product, 'max' => $max, 'avg_bid_amount' =>  $avg_bid_amount]);
        }

        /**
         * @return $this
         */
        public function visitorView(){
            $products = $this->products_service->getProducts();
            return view('products.visitorIndex')->with(['products' => $products]);
        }
    }
}
