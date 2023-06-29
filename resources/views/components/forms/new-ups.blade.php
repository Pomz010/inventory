<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New UPS</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>
    
    <form action="#">
        
        <div class="formInputWrapper">
            <label class="font-semibold" for="laptopAssetTag">Asset Tag</label>
        <input id="laptopAssetTag" name="laptopAssetTag" type="text">
        
        <label class="font-semibold" for="brand">Brand</label>
        <input id="laptopBrand" name="laptopBrand" type="text">

        <label class="font-semibold" for="laptopModel">Model</label>
        <input id="laptopModel" name="laptopModel" type="text">

        <label class="font-semibold" for="laptopModel">Serial #</label>
        <input id="laptopModel" name="laptopModel" type="text">

        <label class="font-semibold" for="laptopModel">Vendor</label>
        <input id="laptopModel" name="laptopModel" type="text">

        <label class="font-semibold" for="laptopPurchaseDate">Date Purchased</label>
        <input id="laptopPurchaseDate" name="laptopPurchaseDate" type="date">

        <label class="font-semibold" for="laptopUser">Warranty Expiration</label>
        <input id="laptopUser" name="laptopUser" type="date">

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