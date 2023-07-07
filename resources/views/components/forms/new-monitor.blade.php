<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Monitor</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>

    <form action="#">
        
        <div class="formInputWrapper">
            <input class="col-span-2" id="monitorItem" name="item" value="monitor" type="text" hidden>

            <label class="font-semibold" for="monitorAssetTag">Asset Tag</label>
            <input class="col-span-2" id="monitorAssetTag" name="asset_tag" type="text">

            <label class="font-semibold" for="monitorBrand">Brand</label>
            <input class="col-span-2" id="monitorBrand" name="brand" type="text">

            <label class="font-semibold" for="monitorModel">Model</label>
            <input class="col-span-2" id="monitorModel" name="model" type="text">

            <label class="font-semibold" for="monitorSerial">Serial #</label>
            <input class="col-span-2" id="monitorSerial" name="serial_#" type="text">

            <x-forms.partials.vendor-dropdown :vendors='$vendors' />

            <label class="font-semibold" for="monitorPurchaseDate">Date Purchased</label>
            <input class="col-span-2" id="monitorPurchaseDate" name="purchase_date" type="date">

            <label class="font-semibold" for="monitorWarranty">Warranty Expiration</label>
            <input class="col-span-2" id="monitorWarranty" name="warranty" type="date">

            <label class="font-semibold" for="monitorDR">DR #</label>
            <input class="col-span-2" id="monitorDR" name="dr_#" type="text">

            <label class="font-semibold" for="monitorPurchaseDate">PO #</label>
            <input class="col-span-2" id="monitorPurchaseDate" name="po_#" type="text">

            <label class="font-semibold" for="monitorPrice">Price</label>
            <input class="col-span-2" id="monitorPrice" name="price" type="text">
        </div>

        <x-forms.partials.button-set />
    </form>
</div>