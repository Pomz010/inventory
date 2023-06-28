<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New System Unit</h2>
        <ul>
            <x-forms.partials.asset-entry-form-container id="newEntry"/>
        </ul>
    </div>
    
    <form action="#">

        <div class="formInputWrapper">
            <label class="font-semibold" for="systemUnitAssetTag">Asset Tag</label>
            <input id="systemUnitAssetTag" name="systemUnitAssetTag" type="text">
            
            <label class="font-semibold" for="systemUnitBrand">Brand</label>
            <input id="systemUnitBrand" name="systemUnitBrand" type="text">

            <label class="font-semibold" for="systemUnitModel">Model</label>
            <input id="systemUnitModel" name="systemUnitModel" type="text">

            <label class="font-semibold" for="systemUnitBoard">Motherboard</label>
            <input id="systemUnitBoard" name="systemUnitBoard" type="text">

            <label class="font-semibold" for="systemUnitSN">Motherboard S/N</label>
            <input id="systemUnitSN" name="systemUnitSN" type="text">

            <label class="font-semibold" for="systemUnitProcessor">Processor</label>
            <input id="systemUnitProcessor" name="systemUnitProcessor" type="text">

            <label class="font-semibold" for="systemUnitRAM">Memory</label>
            <input id="systemUnitRAM" name="systemUnitRAM" type="text">

            <label class="font-semibold" for="systemUnitStorage">Storage</label>
            <input id="systemUnitStorage" name="systemUnitStorage" type="text">

            <label class="font-semibold" for="systemUnitGPU">Graphics Card</label>
            <input id="systemUnitGPU" name="systemUnitGPU" type="text">

            <label class="font-semibold" for="vendor">Vendor</label>
            <select name="vendor" id="vendor">
                <option value="xxxx">Cimetrix Enterprise</option>
            </select>

            <label class="font-semibold" for="systemUnitPurchaseDate">Date Purchased</label>
            <input id="systemUnitPurchaseDate" name="systemUnitPurchaseDate" type="date">

            <label class="font-semibold" for="systemUnitWarrantyExpiration">Warranty Expiration</label>
            <input id="systemUnitWarrantyExpiration" name="systemUnitWarrantyExpiration" type="date">

            <label class="font-semibold" for="systemUnitDR">DR #</label>
            <input id="systemUnitDR" name="systemUnitDR" type="text">

            <label class="font-semibold" for="systemUnitPO">PO #</label>
            <input id="systemUnitPO" name="systemUnitPO" type="text">

            <label class="font-semibold" for="systemUnitPrice">Price</label>
            <input id="systemUnitPrice" name="systemUnitPrice" type="number">
        </div>

        <x-forms.partials.button-set />
    </form>
</div>