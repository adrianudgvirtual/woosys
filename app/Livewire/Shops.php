<?php

namespace App\Livewire;

use App\Models\Shop;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Shops extends Component
{
    public $userid;
    public $shop;
    public $sys_url;
    public $sys_ck;
    public $sys_cs;
    public $woo_url;
    public $woo_ck;
    public $woo_cs;

    public function mount()
    {
        $this->userid = Auth::id();
        $this->shop = Shop::where('user_id', $this->userid)->first();

        if ($this->shop) {
            $this->sys_url = $this->shop->sys_url;
            $this->sys_ck = $this->shop->sys_ck;
            $this->sys_cs = $this->shop->sys_cs;
            $this->woo_url = $this->shop->woo_url;
            $this->woo_ck = $this->shop->woo_ck;
            $this->woo_cs = $this->shop->woo_cs;
        }
    }

    public function render()
    {
        return view('livewire.shops');
    }

    public function updateSyscomInformation()
    {
        $this->validate([
            'sys_url' => 'required|url',
            'sys_ck' => 'required',
            'sys_cs' => 'required',
        ]);

        if ($this->shop) {
            $this->shop->sys_url = $this->sys_url;
            $this->shop->sys_ck = $this->sys_ck;
            $this->shop->sys_cs = $this->sys_cs;
            $this->shop->save();

            $this->emit('saved'); // Emitir evento para mostrar mensaje de guardado
        }
    }

    public function updateWoocommerceInformation()
    {
        $this->validate([
            'woo_url' => 'required|url',
            'woo_ck' => 'required',
            'woo_cs' => 'required',
        ]);

        if ($this->shop) {
            $this->shop->woo_url = $this->woo_url;
            $this->shop->woo_ck = $this->woo_ck;
            $this->shop->woo_cs = $this->woo_cs;
            $this->shop->save();

            $this->emit('saved'); // Emitir evento para mostrar mensaje de guardado
        }
    }
}
