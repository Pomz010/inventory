<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New UPS</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>
    
    <form action="#">
        @csrf
        
        <div class="formInputWrapper">
            <input class="col-span-2" id="upsItem" name="item" value="ups" type="text" hidden>

            <label class="font-semibold" for="upsAssetTag">Asset Tag</label>
            <input class="col-span-2" id="upsAssetTag" name="asset_tag" type="text">
            
            <label class="font-semibold" for="upsBrand">Brand</label>
            <input class="col-span-2" id="upsBrand" name="brand" type="text">

            <label class="font-semibold" for="upsModel">Model</label>
            <input class="col-span-2" id="upsModel" name="model" type="text">

            <label class="font-semibold" for="upsSerial">Serial #</label>
            <input class="col-span-2" id="upsSerial" name="serial_#" type="text">

            <x-forms.partials.vendor-dropdown :vendors='$vendors' />

            <label class="font-semibold" for="upsPurchaseDate">Date Purchased</label>
            <input class="col-span-2" id="upsPurchaseDate" name="purchase_date" type="date">

            <label class="font-semibold" for="upsWarrantyExpiration">Warranty Expiration</label>
            <input class="col-span-2" id="upsWarrantyExpiration" name="warranty" type="date">

            <label class="font-semibold" for="upsDR">DR #</label>
            <input class="col-span-2" id="upsDR" name="dr_#" type="text">

            <label class="font-semibold" for="upsPO">PO #</label>
            <input class="col-span-2" id="upsPO" name="po_#" type="text">

            <label class="font-semibold" for="upsPrice">Price</label>
            <input class="col-span-2" id="upsPrice" name="price" type="text">
        </div>

        <x-forms.partials.button-set />
        
    </form>
</div>