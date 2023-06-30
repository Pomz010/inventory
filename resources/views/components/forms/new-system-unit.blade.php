<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New System Unit</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>
    
    <form action="#">

        <div class="formInputWrapper">
            <label class="font-semibold" for="systemUnitAssetTag">Asset Tag</label>
            <input class="col-span-2" id="systemUnitAssetTag" name="systemUnitAssetTag" type="text">
            
            <label class="font-semibold" for="systemUnitBrand">Brand</label>
            <input class="col-span-2" id="systemUnitBrand" name="systemUnitBrand" type="text">

            <label class="font-semibold" for="systemUnitModel">Model</label>
            <input class="col-span-2" id="systemUnitModel" name="systemUnitModel" type="text">

            <label class="font-semibold" for="systemUnitBoard">Motherboard</label>
            <input class="col-span-2" id="systemUnitBoard" name="systemUnitBoard" type="text">

            <label class="font-semibold" for="systemUnitSN">Motherboard S/N</label>
            <input class="col-span-2" id="systemUnitSN" name="systemUnitSN" type="text">

            <label class="font-semibold" for="systemUnitProcessor">Processor</label>
            <input class="col-span-2" id="systemUnitProcessor" name="systemUnitProcessor" type="text">

            <label class="font-semibold" for="systemUnitRAM">Memory</label>
            <input class="col-span-2" id="systemUnitRAM" name="systemUnitRAM" type="text">

            <label class="font-semibold" for="systemUnitStorage">Storage</label>
            <input class="col-span-2" id="systemUnitStorage" name="systemUnitStorage" type="text">

            <label class="font-semibold" for="systemUnitGPU">Graphics Card</label>
            <input class="col-span-2" id="systemUnitGPU" name="systemUnitGPU" type="text">

            <label class="font-semibold" for="vendor">Vendor</label>
            <select class="col-span-2" name="vendor" id="vendor">
                <option value="xxxx">Cimetrix Enterprise</option>
            </select>

            <label class="font-semibold" for="systemUnitPurchaseDate">Date Purchased</label>
            <input class="col-span-2" id="systemUnitPurchaseDate" name="systemUnitPurchaseDate" type="date">

            <label class="font-semibold" for="systemUnitWarrantyExpiration">Warranty Expiration</label>
            <input class="col-span-2" id="systemUnitWarrantyExpiration" name="systemUnitWarrantyExpiration" type="date">

            <label class="font-semibold" for="systemUnitDR">DR #</label>
            <input class="col-span-2" id="systemUnitDR" name="systemUnitDR" type="text">

            <label class="font-semibold" for="systemUnitPO">PO #</label>
            <input class="col-span-2" id="systemUnitPO" name="systemUnitPO" type="text">

            <label class="font-semibold" for="systemUnitPrice">Price</label>
            <input class="col-span-2" id="systemUnitPrice" name="systemUnitPrice" type="number">
        </div>

        <x-forms.partials.button-set />
    </form>
</div>