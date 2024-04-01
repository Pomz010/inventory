<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Laptop</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>

    {{-- <x-forms.partials.update-form-container :asset="$asset" > --}}
    <form action="{{ route('assets.update', ['asset' => $attributes['asset']->id] )}}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="formInputWrapper">

            <input class="col-span-2" id="monitorItem" name="item" type="text" value="laptop" hidden>

            <label class="font-semibold" for="laptopAssetTag">Asset Tag</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopAssetTag" name="asset_tag" type="text" value="{{ old('asset_tag', $attributes['asset']->asset_tag) }}">
                @error('asset_tag')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
    
            <label class="font-semibold" for="laptopBrand">Brand</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopBrand" name="brand" type="text" value="{{ old('brand', $attributes['asset']->brand) }}">
                @error('brand')
                <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
    
            <label class="font-semibold" for="laptopModel">Model</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopModel" name="model" type="text" value="{{ old('model',  $attributes['asset']->model) }}">
                @error('model')
                <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
    
            <label class="font-semibold" for="laptopProcessor">Processor</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopProcessor" name="processor" type="text" value="{{ old('processor',  $attributes['asset']->processor) }}">
            </div>
    
            <label class="font-semibold" for="laptopRAM">Memory</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopRAM" name="memory" type="text" value="{{ old('memory',  $attributes['asset']->memory) }}">
            </div>
    
            <label class="font-semibold" for="laptopStorage">Storage</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopStorage" name="storage" type="text" value="{{ old('storaged',  $attributes['asset']->storaged) }}">
            </div>
    
            <label class="font-semibold" for="laptopGPU">Graphics Card</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopGPU" name="gpu" type="text" value="{{ old('gpu',  $attributes['asset']->gpu) }}">
            </div>
    
            <label class="font-semibold" for="laptopSN">Serial #</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopSN" name="serial_number" type="text" value="{{ old('serial_number',  $attributes['asset']->serial_number )}}">
                @error('serial_number')
                <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
    
            <label class="font-semibold" for="laptopOS">OS</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopOS" name="os_name" type="text" value="{{ old('os_name',  $attributes['asset']->os_name )}}">
            </div>

            <label class="font-semibold" for="osCategory">OS Category</label>
            <div class="col-span-2">
                <select class="w-full" id="osCategory" name="os_category" type="text" value="{{ old('os_category',  $attributes['asset']->os_category) }}">
                    <option value="oem">OEM</option>
                    <option value="retail">Retail</option>
                </select>
            </div>
    
            <label class="font-semibold" for="laptopOSProductKey">OS Product Key</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopOSProductKey" name="os_productKey" type="text" value="{{ old('os_productKey',  $attributes['asset']->os_productKey) }}">
                @error('os_productKey')
                <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
    
            <label class="font-semibold" for="laptopHostname">Hostname</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopHostname" name="hostname" type="text" value="{{ old('hostname',  $attributes['asset']->hostname) }}">
                @error('hostname')
                <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
    
            <x-forms.partials.vendor-dropdown :vendors='$attributes["vendors"]' />
    
            <label class="font-semibold" for="laptopPurchaseDate">Date Purchased</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopPurchaseDate" name="purchase_date" type="date" value="{{ old('purchase_date',  $attributes['asset']->purchase_date) }}">
                @error('purchase_date')
                <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
    
            <label class="font-semibold" for="laptopWarrantyExpiration">Warranty Expiration</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopWarrantyExpiration" name="warranty" type="date" value="{{ old('warranty', $attributes['asset']->warranty) }}">
                @error('warranty')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
    
            <label class="font-semibold" for="laptopDR">DR #</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopDR" name="dr_number" type="text" value="{{ old('dr_number', $attributes['asset']->dr_number) }}">
                @error('dr_number')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
    
            <label class="font-semibold" for="laptopPO">PO #</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopPO" name="po_number" type="text" value="{{ old('po_number', $attributes['asset']->po_number) }}">
                @error('po_number')
                <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
    
            <label class="font-semibold" for="laptopPrice">Price</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopPrice" name="price" type="number" value="{{ old('price', $attributes['asset']->price) }}">
                @error('price')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-2 col-start-2 border-t-2 border-slate-700 pt-4 z-0">
            <div class="flex justify-between col-start-2 gap-4">
                <a href="{{ route('redirect') }}" class="btnCancel bg-white w-6/12 text-center">Back</a>{{-- flex-col w-4/12 mx-auto  --}}
                <button class="btn w-6/12" type="submit">Update</button>
            </div> 
        </div>
    </form>
    {{-- </x-forms.partials.update-form-container> --}}
</div>