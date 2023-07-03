<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Laptop</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>

    <form action="#">
        @csrf

        <div class="formInputWrapper">
            <input class="col-span-2 hidden" id="laptopAssetTag" name="laptopAssetTag" type="text">

            <label class="font-semibold" for="laptopAssetTag">Asset Tag</label>
            <input class="col-span-2" id="laptopAssetTag" name="laptopAssetTag" type="text">
    
            <label class="font-semibold" for="laptopBrand">Brand</label>
            <input class="col-span-2" id="laptopBrand" name="laptopBrand" type="text">
    
            <label class="font-semibold" for="laptopModel">Model</label>
            <input class="col-span-2" id="laptopModel" name="laptopModel" type="text">
    
            <label class="font-semibold" for="laptopProcessor">Processor</label>
            <input class="col-span-2" id="laptopProcessor" name="laptopProcessor" type="text">
    
            <label class="font-semibold" for="laptopRAM">Memory</label>
            <input class="col-span-2" id="laptopRAM" name="laptopRAM" type="text">
    
            <label class="font-semibold" for="laptopStorage">Storage</label>
            <input class="col-span-2" id="laptopStorage" name="laptopStorage" type="text">
    
            <label class="font-semibold" for="laptopGPU">Graphics Card</label>
            <input class="col-span-2" id="laptopGPU" name="laptopGPU" type="text">
    
            <label class="font-semibold" for="laptopSN">Serial #</label>
            <input class="col-span-2" id="laptopSN" name="laptopSN" type="text">
    
            <label class="font-semibold" for="laptopOS">OS</label>
            <input class="col-span-2" id="laptopOS" name="laptopOS" type="text">
    
            <label class="font-semibold" for="laptopOSProductKey">OS Product Key</label>
            <input class="col-span-2" id="laptopOSProductKey" name="laptopOSProductKey" type="text">
    
            <label class="font-semibold" for="laptopHostname">Hostname</label>
            <input class="col-span-2" id="laptopHostname" name="laptopHostname" type="text">
    
            <x-forms.partials.vendor-dropdown :vendors='$vendors' />
    
            <label class="font-semibold" for="laptopPurchaseDate">Date Purchased</label>
            <input class="col-span-2" id="laptopPurchaseDate" name="laptopPurchaseDate" type="date" value="{{ now()->format('Y-m-d') }}">
    
            <label class="font-semibold" for="laptopWarrantyExpiration">Warranty Expiration</label>
            <input class="col-span-2" id="laptopWarrantyExpiration" name="laptopWarrantyExpiration" type="date">
    
            <label class="font-semibold" for="laptopDR">DR #</label>
            <input class="col-span-2" id="laptopDR" name="laptopDR" type="text">
    
            <label class="font-semibold" for="laptopPO">PO #</label>
            <input class="col-span-2" id="laptopPO" name="laptopPO" type="text">
    
            <label class="font-semibold" for="laptopPrice">Price</label>
            <input class="col-span-2" id="laptopPrice" name="laptopPrice" type="number">
        </div>

        <x-forms.partials.button-set />
    </form>
</div>