<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SyscomProduct;
use App\Models\WoocommerceProduct;
use App\Models\User;

class Stats extends Component
{
    public function render()
    {
        return view('livewire.stats', [
            'userCount' => User::count(),
            'syscomProductCount' => SyscomProduct::count(),
            'woocommerceProductCount' => WoocommerceProduct::count(),
        ]);
    }
}


