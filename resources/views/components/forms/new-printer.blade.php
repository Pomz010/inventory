<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Printer</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>
    
    <x-forms.partials.asset-form-container >
        @csrf
        
        <div class="formInputWrapper">

            <input class="col-span-2" id="printerItem" name="item" value="printer" type="text" hidden>

            {{-- <label class="font-semibold" for="printerAssetTag">Asset Tag</label>
            <div class="col-span-2">
                <input class="w-full" id="printerAssetTag" name="asset_tag" type="text" value="{{ $errors->has('asset_tag') ? old('') : old('asset_tag'); }}">
                @error('asset_tag')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div> --}}

            <label class="font-semibold" for="printerBrand">Brand</label>
            <div class="col-span-2">
                <input class="w-full" id="printerBrand" name="brand" type="text" value="{{ $errors->has('brand') ? old('') : old('brand'); }}">
                @error('brand')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="printerModel">Model</label>
            <div class="col-span-2">
                <input class="w-full" id="printerModel" name="model" type="text" value="{{ $errors->has('model') ? old('') : old('model'); }}">
                @error('model')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="printerType">Printer Type</label>
            <div class="col-span-2">
                <select class="w-full" id="printerType" name="printer_type" type="text" value="{{ $errors->has('printer_type') ? old('') : old('printer_type'); }}">
                    <option value="inkjet">Inkjet</option>
                    <option value="laser">Laser</option>
                    <option value="dot-matrix">Dot-matrix</option>
                </select>
                @error('printer_type')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="printerOutput">Printer Output</label>
            <div class="col-span-2">
                <select class="w-full" id="printerOutput" name="printer_output" type="text" value="{{ $errors->has('printer_output') ? old('') : old('printer_output'); }}">
                    <option value="colored">Colored</option>
                    <option value="b&w">Black & White</option>
                </select>
                @error('printer_output')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="cartridgeModel">Cartridge Model</label>
            <div class="col-span-2">
                <input class="w-full" id="cartridgeModel" name="cartridge_model" type="text" value="{{ $errors->has('cartridge_model') ? old('') : old('cartridge_model'); }}">
                @error('cartridge_model')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="printerSerial">Serial #</label>
            <div class="col-span-2">
                <input class="w-full" id="printerSerial" name="serial_number" type="text" value="{{ $errors->has('serial_number') ? old('') : old('serial_number'); }}">
                @error('serial_number')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <x-forms.partials.vendor-dropdown :vendors='$vendors' />

            <label class="font-semibold" for="printerOwnership">Ownership</label>
            <div class="col-span-2">
                <input class="w-full" id="printerOwnership" name="device_ownership" type="text" value="{{ $errors->has('device_ownership') ? old('') : old('device_ownership'); }}">
                @error('device_ownership')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="printerPurchaseDate">Date Purchased</label>
            <div class="col-span-2">
                <input class="w-full" id="printerPurchaseDate" name="purchase_date" type="date" value="{{ $errors->has('purchase_date') ? old('') : old('purchase_date'); }}">
                @error('purchase_date')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="printerWarrantyExpiration">Warranty Expiration</label>
            <div class="col-span-2">
                <input class="w-full" id="printerWarrantyExpiration" name="warranty" type="date" value="{{ $errors->has('warranty') ? old('') : old('warranty'); }}">
                @error('warranty')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="printerDR">DR #</label>
            <div class="col-span-2">
                <input class="w-full" id="printerDR" name="dr_number" type="text" value="{{ $errors->has('dr_number') ? old('') : old('dr_number'); }}">
                @error('dr_number')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="printerPO">PO #</label>
            <div class="col-span-2">
                <input class="w-full" id="printerPO" name="po_number" type="text" value="{{ $errors->has('po_number') ? old('') : old('po_number'); }}">
                @error('po_number')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="printerPrice">Price</label>
            <div class="col-span-2">
                <input class="w-full" id="printerPrice" name="price" type="text" value="{{ $errors->has('price') ? old('') : old('price'); }}">
                @error('price')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>
        </div>

        <x-forms.partials.button-set />
        
    </x-forms.partials.asset-form-container>
</div>