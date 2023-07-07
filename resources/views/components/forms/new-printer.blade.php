<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Printer</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>
    
    <form action="#">
        @csrf
        
        <div class="formInputWrapper">

            <input class="col-span-2" id="printerItem" name="item" value="printer" type="text" hidden>

            <label class="font-semibold" for="printerAssetTag">Asset Tag</label>
            <input class="col-span-2" id="printerAssetTag" name="asset_tag" type="text">
            
            <label class="font-semibold" for="printerBrand">Brand</label>
            <input class="col-span-2" id="printerBrand" name="brand" type="text">

            <label class="font-semibold" for="printerModel">Model</label>
            <input class="col-span-2" id="printerModel" name="model" type="text">

            <label class="font-semibold" for="printerType">Printer Type</label>
            <select class="col-span-2" id="printerType" name="printer_type" type="text">
                <option value="inkjet">Inkjet</option>
                <option value="laser">Laser</option>
                <option value="dot-matrix">Dot-matrix</option>
            </select>

            <label class="font-semibold" for="printerOutput">Printer Output</label>
            <select class="col-span-2" id="printerOutput" name="printer_output" type="text">
                <option value="colored">Colored</option>
                <option value="b&w">Black & White</option>
            </select>

            <label class="font-semibold" for="cartridgeModel">Cartridge Model</label>
            <input class="col-span-2" id="cartridgeModel" name="cartridge_model" type="text">

            <label class="font-semibold" for="printerSerial">Serial #</label>
            <input class="col-span-2" id="printerSerial" name="serial_#" type="text">

            <x-forms.partials.vendor-dropdown :vendors='$vendors' />

            <label class="font-semibold" for="printerOwnership">Ownership</label>
            <input class="col-span-2" id="printerOwnership" name="device_ownersip" type="text">

            <label class="font-semibold" for="printerPurchaseDate">Date Purchased</label>
            <input class="col-span-2" id="printerPurchaseDate" name="purchase_date" type="date">

            <label class="font-semibold" for="printerWarrantyExpiration">Warranty Expiration</label>
            <input class="col-span-2" id="printerWarrantyExpiration" name="warranty" type="date">

            <label class="font-semibold" for="printerDR">DR #</label>
            <input class="col-span-2" id="printerDR" name="dr_#" type="text">

            <label class="font-semibold" for="printerPO">PO #</label>
            <input class="col-span-2" id="printerPO" name="po_#" type="text">

            <label class="font-semibold" for="printerPrice">Price</label>
            <input class="col-span-2" id="printerPrice" name="price" type="text">
        </div>

        <x-forms.partials.button-set />
        
    </form>
</div>