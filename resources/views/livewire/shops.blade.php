<!-- resources/views/livewire/shops.blade.php -->
<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="mt-10 sm:mt-0">
        <x-form-section submit="updateSyscomInformation">
            <x-slot name="title">
                {{ __('Syscom Information') }}
            </x-slot>
        
            <x-slot name="description">
                {{ __('Update your Syscom account\'s information.') }}
            </x-slot>            
            <x-slot name="form">
                <!-- Syscom URL -->
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="sys_url" value="{{ __('Syscom API URL') }}" />
                    <x-input id="sys_url" type="url" class="mt-1 block w-full" wire:model="sys_url" required autocomplete="sys_url" />
                    <x-input-error for="sys_url" class="mt-2" />
                </div>
        
                <!-- Syscom Consumer Key -->
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="sysck" value="{{ __('Consumer Key') }}" />
                    <x-input id="sysck" type="password" class="mt-1 block w-full" wire:model="sys_ck" required autocomplete="sysck" />
                    <x-input-error for="sysck" class="mt-2" />           
                </div>
                
                <!-- Syscom Consumer Secret -->
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="syscs" value="{{ __('Consumer Secret') }}" />
                    <x-input id="syscs" type="password" class="mt-1 block w-full" wire:model="sys_cs" required autocomplete="syscs" />
                    <x-input-error for="syscs" class="mt-2" />           
                </div>
            </x-slot>
        
            <x-slot name="actions">
                <x-action-message class="me-3" on="saved">
                    {{ __('Saved.') }}
                </x-action-message>
        
                <x-button wire:loading.attr="disabled">
                    {{ __('Save') }}
                </x-button>
            </x-slot>
        </x-form-section>
    </div>

    <x-section-border />

    <div class="mt-10 sm:mt-0">
        <x-form-section submit="updateWoocommerceInformation">
            <x-slot name="title">
                {{ __('WooCommerce Information') }}
            </x-slot>
        
            <x-slot name="description">
                {{ __('Update your WooCommerce account\'s information.') }}
            </x-slot>
        
            <x-slot name="form">
                <!-- WooCommerce URL -->
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="woourl" value="{{ __('WooCommerce API URL') }}" />
                    <x-input id="woourl" type="url" class="mt-1 block w-full" wire:model="woo_url" required autocomplete="woourl" />
                    <x-input-error for="woo_url" class="mt-2" />
                </div>                 
        
                <!-- WooCommerce Consumer Key -->
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="woock" value="{{ __('Consumer Key') }}" />
                    <x-input id="woock" type="password" class="mt-1 block w-full" wire:model="woo_ck" required autocomplete="woock" />
                    <x-input-error for="woo_ck" class="mt-2" />           
                </div>
                
                <!-- WooCommerce Consumer Secret -->
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="woocs" value="{{ __('Consumer Secret') }}" />
                    <x-input id="woocs" type="password" class="mt-1 block w-full" wire:model="woo_cs" required autocomplete="woocs" />
                    <x-input-error for="woo_cs" class="mt-2" />           
                </div>
            </x-slot>
        
            <x-slot name="actions">
                <x-action-message class="me-3" on="saved">
                    {{ __('Saved.') }}
                </x-action-message>
        
                <x-button wire:loading.attr="disabled">
                    {{ __('Save') }}
                </x-button>
            </x-slot>
        </x-form-section>
    </div>
</div>
