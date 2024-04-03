@php
    dump($errors);
@endphp
<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New UPS</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>
    
    <x-forms.partials.asset-form-container>
        @csrf
        
        <div class="formInputWrapper">
            <input class="col-span-2" id="upsItem" name="item" value="ups" type="text" hidden>

            <label class="font-semibold" for="upsAssetTag">Asset Tag</label>
            <div class="col-span-2">
                <input class="w-full" id="upsAssetTag" name="asset_tag" type="text" value="{{ $errors->has('asset_tag') ? old('') : old('asset_tag'); }}">
                @error('asset_tag')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
            
            <label class="font-semibold" for="upsBrand">Brand</label>
            <div class="col-span-2">
                <input class="w-full" id="upsBrand" name="brand" type="text" value="{{ $errors->has('brand') ? old('') : old('brand'); }}">
                @error('brand')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="upsModel">Model</label>
            <div class="col-span-2">
                <input class="w-full" id="upsModel" name="model" type="text" value="{{ $errors->has('model') ? old('') : old('model'); }}">
                @error('model')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="upsSerial">Serial #</label>
            <div class="col-span-2">
                <input class="w-full" id="upsSerial" name="serial_number" type="text" value="{{ $errors->has('serial_number') ? old('') : old('serial_number'); }}">
                @error('serial_number')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <x-forms.partials.vendor-dropdown :vendors='$vendors' />

            <label class="font-semibold" for="upsPurchaseDate">Date Purchased</label>
            <div class="col-span-2">
                <input class="w-full" id="upsPurchaseDate" name="purchase_date" type="date" value="{{ $errors->has('purchase_date') ? old('') : old('purchase_date'); }}">
                @error('purchase_date')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="upsWarrantyExpiration">Warranty Expiration</label>
            <div class="col-span-2">
                <input class="w-full" id="upsWarrantyExpiration" name="warranty" type="date" value="{{ $errors->has('warranty') ? old('') : old('warranty'); }}">
                @error('warranty')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="upsDR">DR #</label>
            <div class="col-span-2">
                <input class="w-full" id="upsDR" name="dr_number" type="text" value="{{ $errors->has('dr_number') ? old('') : old('dr_number'); }}">
                @error('dr_number')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="upsPO">PO #</label>
            <div class="col-span-2">
                <input class="w-full" id="upsPO" name="po_number" type="text" value="{{ $errors->has('po_number') ? old('') : old('po_number'); }}">
                @error('po_number')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="upsPrice">Price</label>
            <div class="col-span-2">
                <input class="w-full" id="upsPrice" name="price" type="text" value="{{ $errors->has('price') ? old('') : old('price'); }}">
                @error('price')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
        </div>

        <x-forms.partials.button-set />
        
    </x-forms.partials.asset-form-container>
</div>