<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Monitor</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>

    <x-forms.partials.asset-form-container>
        @csrf
        
        <div class="formInputWrapper">

            <label class="font-semibold" for="monitorAssetTag">Asset Tag</label>
            <div class="col-span-2">
                <input class="w-full" id="monitorAssetTag" name="asset_tag" type="text" value="{{ $errors->has('asset_tag') ? old('') : old('asset_tag'); }}">
                @error('asset_tag')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="monitorBrand">Brand</label>
            <div class="col-span-2">
                <input class="w-full" id="monitorBrand" name="brand" type="text" value="{{ $errors->has('brand') ? old('') : old('brand'); }}">
                @error('brand')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="monitorModel">Model</label>
            <div class="col-span-2">
                <input class="w-full" id="monitorModel" name="model" type="text" value="{{ $errors->has('model') ? old('') : old('model'); }}">
                @error('model')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="monitorSerial">Serial #</label>
            <div class="col-span-2">
                <input class="w-full" id="monitorSerial" name="serial_#" type="text" value="{{ $errors->has('serial_#') ? old('') : old('serial_#'); }}">
                @error('serial_#')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <x-forms.partials.vendor-dropdown :vendors='$vendors' />

            <label class="font-semibold" for="monitorPurchaseDate">Date Purchased</label>
            <div class="col-span-2">
                <input class="w-full" id="monitorPurchaseDate" name="purchase_date" type="date" value="{{ $errors->has('purchase_date') ? old('') : old('purchase_date'); }}">
                @error('purchase_date')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="monitorWarranty">Warranty Expiration</label>
            <div class="col-span-2">
                <input class="w-full" id="monitorWarranty" name="warranty" type="date" value="{{ $errors->has('warranty') ? old('') : old('warranty'); }}">
                @error('warranty')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="monitorDR">DR #</label>
            <div class="col-span-2">
                <input class="w-full" id="monitorDR" name="dr_#" type="text" value="{{ $errors->has('dr_#') ? old('') : old('dr_#'); }}">
                @error('dr_#')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="monitorPurchaseDate">PO #</label>
            <div class="col-span-2">
                <input class="w-full" id="monitorPurchaseDate" name="po_#" type="text" value="{{ $errors->has('po_#') ? old('') : old('po_#'); }}">
                @error('po_#')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="monitorPrice">Price</label>
            <div class="col-span-2">
                <input class="w-full" id="monitorPrice" name="price" type="text" value="{{ $errors->has('price') ? old('') : old('price'); }}">
                @error('price')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

        </div>

        <x-forms.partials.button-set />
    </x-forms.partials.asset-form-container>
</div>