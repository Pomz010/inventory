<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Software</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>

    <x-forms.partials.asset-form-container>
        @csrf
        
        <div class="formInputWrapper">

            <input class="col-span-2" id="softwareItem" name="item" value="software" type="text" hidden>

            <label class="font-semibold" for="laptopAssetTag">Name</label>
            <input class="col-span-2" id="laptopAssetTag" name="laptopAssetTag" type="text">

            <label class="font-semibold" for="brand">Description</label>
            <input class="col-span-2" id="laptopBrand" name="laptopBrand" type="text">

            <label class="font-semibold" for="laptopModel">Version</label>
            <input class="col-span-2" id="laptopModel" name="laptopModel" type="text">

            <label class="font-semibold" for="laptopProcessor">Category</label>
            <input class="col-span-2" id="laptopProcessor" name="laptopProcessor" type="text">

            <label class="font-semibold" for="laptopMemory">Product Key</label>
            <input class="col-span-2" id="laptopMemory" name="laptopMemory" type="text">

            <label class="font-semibold" for="laptopSerial">Purchase Type</label>
            <input class="col-span-2" id="laptopSerial" name="laptopSerial" type="text">

            <label class="font-semibold" for="laptopSerial">License Expiration</label>
            <input class="col-span-2" id="laptopSerial" name="laptopSerial" type="text">

            <label class="font-semibold" for="laptopSerial">Host Machine</label>
            <input class="col-span-2" id="laptopSerial" name="laptopSerial" type="text">

            <x-forms.partials.vendor-dropdown :vendors='$vendors' />

            <label class="font-semibold" for="laptopPurchaseDate">Date Purchased</label>
            <input class="col-span-2" id="laptopPurchaseDate" name="laptopPurchaseDate" type="date">
            
            <label class="font-semibold" for="laptopPurchaseDate">DR #</label>
            <input class="col-span-2" id="laptopPurchaseDate" name="laptopPurchaseDate" type="text">

            <label class="font-semibold" for="laptopPurchaseDate">PO #</label>
            <input class="col-span-2" id="laptopPurchaseDate" name="laptopPurchaseDate" type="text">

            <label class="font-semibold" for="laptopPurchaseDate">Price</label>
            <input class="col-span-2" id="laptopPurchaseDate" name="laptopPurchaseDate" type="number">
        </div>
        
        <x-forms.partials.button-set />
    </x-forms.partials.asset-form-container>
</div>