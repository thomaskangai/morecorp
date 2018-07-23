<?php

namespace App\Listeners;

use App\Events\ProductViewed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Services\ProductsService;

class UpdateProductViews
{

    private $products_service;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(ProductsService $products_service)
    {
        $this->products_service = $products_service;
    }

    /**
     * Handle the event.
     *
     * @param  ProductViewed  $event
     * @return void
     */
    public function handle(ProductViewed $event)
    {
        $this->products_service->updateViews($event->product->product_id);
    }
}
