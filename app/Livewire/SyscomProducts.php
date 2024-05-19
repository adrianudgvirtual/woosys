<?php

namespace App\Livewire;
use App\Models\SyscomProduct;
use Livewire\Component;

class SyscomProducts extends Component
{
    public function render()
    {
        $products = SyscomProduct::all();
        return view('livewire.syscom-products', compact('products'));
    }

}
