<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New System Unit</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>
    
    <form action="#">

        <div class="formInputWrapper">

            <input class="col-span-2" id="systemUnitAssetTag" name="item"  value="system unit" type="text" hidden>

            <label class="font-semibold" for="systemUnitAssetTag">Asset Tag</label>
            <input class="col-span-2" id="systemUnitAssetTag" name="asset_tag" type="text">
            
            <label class="font-semibold" for="systemUnitBrand">Brand</label>
            <input class="col-span-2" id="systemUnitBrand" name="brand" type="text">

            <label class="font-semibold" for="systemUnitModel">Model</label>
            <input class="col-span-2" id="systemUnitModel" name="model" type="text">

            <label class="font-semibold" for="systemUnitBoard">Motherboard</label>
            <input class="col-span-2" id="systemUnitBoard" name="motherboard" type="text">

            <label class="font-semibold" for="systemUnitSN">Motherboard S/N</label>
            <input class="col-span-2" id="systemUnitSN" name="serial_#" type="text">

            <label class="font-semibold" for="systemUnitProcessor">Processor</label>
            <input class="col-span-2" id="systemUnitProcessor" name="processor" type="text">

            <label class="font-semibold" for="systemUnitRAM">Memory</label>
            <input class="col-span-2" id="systemUnitRAM" name="memory" type="text">

            <label class="font-semibold" for="systemUnitStorage">Storage</label>
            <input class="col-span-2" id="systemUnitStorage" name="storage" type="text">

            <label class="font-semibold" for="systemUnitGPU">Graphics Card</label>
            <input class="col-span-2" id="systemUnitGPU" name="gpu" type="text">

            <x-forms.partials.vendor-dropdown :vendors='$vendors' />

            <label class="font-semibold" for="systemUnitPurchaseDate">Date Purchased</label>
            <input class="col-span-2" id="systemUnitPurchaseDate" name="purchase_date" type="date">

            <label class="font-semibold" for="systemUnitWarrantyExpiration">Warranty Expiration</label>
            <input class="col-span-2" id="systemUnitWarrantyExpiration" name="warranty" type="date">

            <label class="font-semibold" for="systemUnitDR">DR #</label>
            <input class="col-span-2" id="systemUnitDR" name="dr_#" type="text">

            <label class="font-semibold" for="systemUnitPO">PO #</label>
            <input class="col-span-2" id="systemUnitPO" name="po_#" type="text">

            <label class="font-semibold" for="systemUnitPrice">Price</label>
            <input class="col-span-2" id="systemUnitPrice" name="price" type="number">
        </div>

        <x-forms.partials.button-set />
    </form>
</div>