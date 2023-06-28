<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Software</h2>
        <ul>
            <x-forms.partials.asset-entry-form-container id="newEntry"/>
        </ul>
    </div>

    <form action="#">
        
        <div class="formInputWrapper">
            <label class="font-semibold" for="laptopAssetTag">Name</label>
            <input id="laptopAssetTag" name="laptopAssetTag" type="text">

            <label class="font-semibold" for="brand">Description</label>
            <input id="laptopBrand" name="laptopBrand" type="text">

            <label class="font-semibold" for="laptopModel">Version</label>
            <input id="laptopModel" name="laptopModel" type="text">

            <label class="font-semibold" for="laptopProcessor">Category</label>
            <input id="laptopProcessor" name="laptopProcessor" type="text">

            <label class="font-semibold" for="laptopMemory">Product Key</label>
            <input id="laptopMemory" name="laptopMemory" type="text">

            <label class="font-semibold" for="laptopStorage">Vendor</label>
            <input id="laptopStorage" name="laptopStorage" type="text">

            <label class="font-semibold" for="laptopSerial">Purchase Type</label>
            <input id="laptopSerial" name="laptopSerial" type="text">

            <label class="font-semibold" for="laptopSerial">License Expiration</label>
            <input id="laptopSerial" name="laptopSerial" type="text">

            <label class="font-semibold" for="laptopSerial">Host Machine</label>
            <input id="laptopSerial" name="laptopSerial" type="text">

            <label class="font-semibold" for="laptopModel">Vendor</label>
            <input id="laptopModel" name="laptopModel" type="text">

            <label class="font-semibold" for="laptopPurchaseDate">Date Purchased</label>
            <input id="laptopPurchaseDate" name="laptopPurchaseDate" type="date">
            
            <label class="font-semibold" for="laptopPurchaseDate">DR #</label>
            <input id="laptopPurchaseDate" name="laptopPurchaseDate" type="text">

            <label class="font-semibold" for="laptopPurchaseDate">PO #</label>
            <input id="laptopPurchaseDate" name="laptopPurchaseDate" type="text">

            <label class="font-semibold" for="laptopPurchaseDate">Price</label>
            <input id="laptopPurchaseDate" name="laptopPurchaseDate" type="text">
        </div>

        <x-forms.partials.button-set />
        
    </form>
</div>