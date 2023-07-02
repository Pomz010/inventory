<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Firewall</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>

    <form action="#">
        
        <div class="formInputWrapper">
            <label class="font-semibold" for="brand">Brand</label>
            <input class="col-span-2" id="laptopBrand" name="laptopBrand" type="text">

            <label class="font-semibold" for="laptopModel">Model</label>
            <input class="col-span-2" id="laptopModel" name="laptopModel" type="text">

            <label class="font-semibold" for="laptopSerial">Serial #</label>
            <input class="col-span-2" id="laptopSerial" name="laptopSerial" type="text">

            <label class="font-semibold" for="laptopSerial">MAC Address</label>
            <input class="col-span-2" id="laptopSerial" name="laptopSerial" type="text">

            <label class="font-semibold" for="laptopSerial">IP Address</label>
            <input class="col-span-2" id="laptopSerial" name="laptopSerial" type="text">

            <x-forms.partials.vendor-dropdown :vendors='$vendors' />

            <label class="font-semibold" for="laptopPurchaseDate">Date Purchased</label>
            <input class="col-span-2" id="laptopPurchaseDate" name="laptopPurchaseDate" type="date">

            <label class="font-semibold" for="laptopCondition">Warranty Expiration</label>
            <input class="col-span-2" id="laptopCondition" name="laptopCondition" type="date">
            
            <label class="font-semibold" for="laptopPurchaseDate">DR #</label>
            <input class="col-span-2" id="laptopPurchaseDate" name="laptopPurchaseDate" type="text">

            <label class="font-semibold" for="laptopPurchaseDate">PO #</label>
            <input class="col-span-2" id="laptopPurchaseDate" name="laptopPurchaseDate" type="text">

            <label class="font-semibold" for="laptopPurchaseDate">Price</label>
            <input class="col-span-2" id="laptopPurchaseDate" name="laptopPurchaseDate" type="text">
        </div>
        
        <x-forms.partials.button-set />

    </form>
</div>