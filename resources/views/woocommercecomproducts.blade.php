<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('WooCommerce Products') }}
        </h2>
    </x-slot>
        <div>
            <livewire:Woocommerce-products>
        </div>
</x-app-layout>