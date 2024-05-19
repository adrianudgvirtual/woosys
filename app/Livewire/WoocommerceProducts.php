<?php

namespace App\Livewire;
use App\Models\WoocommerceProduct;
use Livewire\Component;

class WoocommerceProducts extends Component
{
    public function render()
    {
        $products = WoocommerceProduct::all();
        return view('livewire.woocommerce-products', compact('products'));
    }
}
