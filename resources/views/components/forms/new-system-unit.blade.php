@if (session('success'))
    <div class="grid justify-center pb-6">
        <p>{{ session('success') }}</p>
    </div>
@endif

<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New System Unit</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>
    
    <x-forms.partials.asset-form-container >
        @csrf

        <div class="formInputWrapper">

            <input class="col-span-2" id="systemUnitAssetTag" name="item"  value="system unit" type="text" hidden>

            <label class="font-semibold" for="systemUnitAssetTag">Asset Tag</label>
            <div class="col-span-2">
                <input class="w-full" id="systemUnitAssetTag" name="asset_tag" type="text" value="{{ $errors->has('asset_tag') ? old('') : old('asset_tag'); }}">
                @error('asset_tag')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
            
            <label class="font-semibold" for="systemUnitBrand">Brand</label>
            <div class="col-span-2">
                <input class="w-full" id="systemUnitBrand" name="brand" type="text" value="{{ $errors->has('brand') ? old('') : old('brand'); }}">
                @error('brand')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="systemUnitModel">Model</label>
            <div class="col-span-2">
                <input class="w-full" id="systemUnitModel" name="model" type="text" value="{{ $errors->has('model') ? old('') : old('model'); }}">
                @error('model')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="systemUnitBoard">Motherboard</label>
            <div class="col-span-2">
                <input class="w-full" id="systemUnitBoard" name="motherboard" type="text" value="{{ $errors->has('motherboard') ? old('') : old('motherboard'); }}">
            </div>

            <label class="font-semibold" for="systemUnitSN">Motherboard S/N</label>
            <div class="col-span-2">
                <input class="w-full" id="systemUnitSN" name="serial_number" type="text" value="{{ $errors->has('serial_number') ? old('') : old('serial_number'); }}">
                @error('serial_number')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="systemUnitProcessor">Processor</label>
            <div class="col-span-2">
                <input class="w-full" id="systemUnitProcessor" name="processor" type="text" value="{{ $errors->has('processor') ? old('') : old('processor'); }}">
            </div>

            <label class="font-semibold" for="systemUnitRAM">Memory</label>
            <div class="col-span-2">
                <input class="w-full" id="systemUnitRAM" name="memory" type="text" value="{{ $errors->has('memory') ? old('') : old('memory'); }}">
            </div>

            <label class="font-semibold" for="systemUnitStorage">Storage</label>
            <div class="col-span-2">
                <input class="w-full" id="systemUnitStorage" name="storage" type="text" value="{{ $errors->has('storage') ? old('') : old('storage'); }}">
            </div>

            <label class="font-semibold" for="systemUnitGPU">Graphics Card</label>
            <div class="col-span-2">
                <input class="w-full" id="systemUnitGPU" name="gpu" type="text" value="{{ $errors->has('gpu') ? old('') : old('gpu'); }}">
            </div>

            <x-forms.partials.vendor-dropdown :vendors='$vendors' />

            <label class="font-semibold" for="systemUnitPurchaseDate">Date Purchased</label>
            <div class="col-span-2">
                <input class="w-full" id="systemUnitPurchaseDate" name="purchase_date" type="date" value="{{ $errors->has('purchase_date') ? old('') : old('purchase_date'); }}">
                @error('purchase_date')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="systemUnitWarrantyExpiration">Warranty Expiration</label>
            <div class="col-span-2">
                <input class="w-full" id="systemUnitWarrantyExpiration" name="warranty" type="date" value="{{ $errors->has('warranty') ? old('') : old('warranty'); }}">
                @error('warranty')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="systemUnitDR">DR #</label>
            <div class="col-span-2">
                <input class="w-full" id="systemUnitDR" name="dr_number" type="text" value="{{ $errors->has('dr_number') ? old('') : old('dr_number'); }}">
                @error('dr_number')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="systemUnitPO">PO #</label>
            <div class="col-span-2">
                <input class="w-full" id="systemUnitPO" name="po_number" type="text" value="{{ $errors->has('po_number') ? old('') : old('po_number'); }}">
                @error('po_number')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="systemUnitPrice">Price</label>
            <div class="col-span-2">
                <input class="w-full" id="systemUnitPrice" name="price" type="number" value="{{ $errors->has('price') ? old('') : old('price'); }}">
                @error('price')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
        </div>

        <x-forms.partials.button-set />
    </x-forms.partials.asset-form-container>
</div>