@if (session('success'))
    <div class="grid justify-center pb-6">
        <p>{{ session('success') }}</p>
    </div>
@endif

<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Laptop</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>

    <x-forms.partials.asset-form-container >
        @csrf
        
        <div class="formInputWrapper">

            <input class="col-span-2" id="laptopItem" name="item" value="laptop" type="text" hidden>

            <label class="font-semibold" for="laptopAssetTag">Asset Tag</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopAssetTag" name="asset_tag" type="text" value="{{ $errors->has('asset_tag') ? old('') : old('asset_tag'); }}">
                @error('asset_tag')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
    
            <label class="font-semibold" for="laptopBrand">Brand</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopBrand" name="brand" type="text" value="{{ $errors->has('brand') ? old('') : old('brand'); }}">
                @error('brand')
                <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
    
            <label class="font-semibold" for="laptopModel">Model</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopModel" name="model" type="text" value="{{ $errors->has('model') ? old('') : old('model'); }}">
                @error('model')
                <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
    
            <label class="font-semibold" for="laptopProcessor">Processor</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopProcessor" name="processor" type="text" value="{{ $errors->has('processor') ? old('') : old('processor'); }}">
            </div>
    
            <label class="font-semibold" for="laptopRAM">Memory</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopRAM" name="memory" type="text" value="{{ $errors->has('memory') ? old('') : old('memory'); }}">
            </div>
    
            <label class="font-semibold" for="laptopStorage">Storage</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopStorage" name="storage" type="text" value="{{ $errors->has('storage') ? old('') : old('storage'); }}">
            </div>
    
            <label class="font-semibold" for="laptopGPU">Graphics Card</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopGPU" name="gpu" type="text" value="{{ $errors->has('gpu') ? old('') : old('gpu'); }}">
            </div>
    
            <label class="font-semibold" for="laptopSN">Serial #</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopSN" name="serial_number" type="text" value="{{ $errors->has('serial_number') ? old('') : old('serial_number'); }}">
                @error('serial_number')
                <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
    
            <label class="font-semibold" for="laptopOS">OS</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopOS" name="os_name" type="text" value="{{ $errors->has('os_name') ? old('') : old('os_name'); }}">
            </div>

            {{-- <label class="font-semibold" for="osCategory">OS Category</label>
            <div class="col-span-2">
                <select class="w-full" id="osCategory" name="os_category" type="text" value="{{ $errors->has('os_category') ? old('') : old('os_category'); }}">
                    <option value="oem">OEM</option>
                    <option value="retail">Retail</option>
                </select>
            </div>
    
            <label class="font-semibold" for="laptopOSProductKey">OS Product Key</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopOSProductKey" name="os_productKey" type="text" value="{{ $errors->has('os_productKey') ? old('') : old('os_productKey'); }}">
                @error('os_productKey')
                <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div> --}}
    
            <label class="font-semibold" for="laptopHostname">Hostname</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopHostname" name="hostname" type="text" value="{{ $errors->has('hostname') ? old('') : old('hostname'); }}">
            </div>
    
            <x-forms.partials.vendor-dropdown :vendors='$vendors' />
    
            <label class="font-semibold" for="laptopPurchaseDate">Date Purchased</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopPurchaseDate" name="purchase_date" type="date" value="{{ now()->format('Y-m-d') }}" value="{{ $errors->has('purchase_date') ? old('') : old('purchase_date'); }}">
                @error('purchase_date')
                <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
    
            <label class="font-semibold" for="laptopWarrantyExpiration">Warranty Expiration</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopWarrantyExpiration" name="warranty" type="date" value="{{ $errors->has('warranty') ? old('') : old('warranty'); }}">
                @error('warranty')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
    
            <label class="font-semibold" for="laptopDR">DR #</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopDR" name="dr_number" type="text" value="{{ $errors->has('dr_number') ? old('') : old('dr_number'); }}">
                @error('dr_number')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
    
            <label class="font-semibold" for="laptopPO">PO #</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopPO" name="po_number" type="text" value="{{ $errors->has('po_number') ? old('') : old('po_number'); }}">
                @error('po_number')
                <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
    
            <label class="font-semibold" for="laptopPrice">Price</label>
            <div class="col-span-2">
                <input class="w-full" id="laptopPrice" name="price" type="number" value="{{ $errors->has('price') ? old('') : old('price'); }}">
                @error('price')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
        </div>

        <x-forms.partials.button-set />
    </x-forms.partials.asset-form-container>
</div>