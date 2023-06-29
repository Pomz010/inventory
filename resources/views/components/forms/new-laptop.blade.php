<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Laptop</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>

    <form action="#">

        <div class="formInputWrapper">
            <label class="font-semibold" for="laptopAssetTag">Asset Tag</label>
            <input id="laptopAssetTag" name="laptopAssetTag" type="text">
    
            <label class="font-semibold" for="laptopBrand">Brand</label>
            <input id="laptopBrand" name="laptopBrand" type="text">
    
            <label class="font-semibold" for="laptopModel">Model</label>
            <input id="laptopModel" name="laptopModel" type="text">
    
            <label class="font-semibold" for="laptopProcessor">Processor</label>
            <input id="laptopProcessor" name="laptopProcessor" type="text">
    
            <label class="font-semibold" for="laptopRAM">Memory</label>
            <input id="laptopRAM" name="laptopRAM" type="text">
    
            <label class="font-semibold" for="laptopStorage">Storage</label>
            <input id="laptopStorage" name="laptopStorage" type="text">
    
            <label class="font-semibold" for="laptopGPU">Graphics Card</label>
            <input id="laptopGPU" name="laptopGPU" type="text">
    
            <label class="font-semibold" for="laptopSN">Serial #</label>
            <input id="laptopSN" name="laptopSN" type="text">
    
            <label class="font-semibold" for="laptopOS">OS</label>
            <input id="laptopOS" name="laptopOS" type="text">
    
            <label class="font-semibold" for="laptopOSProductKey">OS Product Key</label>
            <input id="laptopOSProductKey" name="laptopOSProductKey" type="text">
    
            <label class="font-semibold" for="laptopHostname">Hostname</label>
            <input id="laptopHostname" name="laptopHostname" type="text">
    
            <label class="font-semibold" for="laptopVendor">Vendor</label>
            <select name="laptopVendor" id="laptopVendor">
                <option value="Cimetrix">Cimetrix Enterprise</option>
            </select>
    
            <label class="font-semibold" for="laptopPurchaseDate">Date Purchased</label>
            <input id="laptopPurchaseDate" name="laptopPurchaseDate" type="date">
    
            <label class="font-semibold" for="laptopWarrantyExpiration">Warranty Expiration</label>
            <input id="laptopWarrantyExpiration" name="laptopWarrantyExpiration" type="date">
    
            <label class="font-semibold" for="laptopDR">DR #</label>
            <input id="laptopDR" name="laptopDR" type="text">
    
            <label class="font-semibold" for="laptopPO">PO #</label>
            <input id="laptopPO" name="laptopPO" type="text">
    
            <label class="font-semibold" for="laptopPrice">Price</label>
            <input id="laptopPrice" name="laptopPrice" type="number">
        </div>

        <x-forms.partials.button-set />
    </form>
</div>