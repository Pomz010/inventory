<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Firewall</h2>
        <ul>
            <x-forms.partials.asset-entry-form-container id="newEntry"/>
        </ul>
    </div>

    <form action="#">
        
        <div class="formInputWrapper">
            <label class="font-semibold" for="brand">Brand</label>
            <input id="laptopBrand" name="laptopBrand" type="text">

            <label class="font-semibold" for="laptopModel">Model</label>
            <input id="laptopModel" name="laptopModel" type="text">

            <label class="font-semibold" for="laptopSerial">Serial #</label>
            <input id="laptopSerial" name="laptopSerial" type="text">

            <label class="font-semibold" for="laptopSerial">MAC Address</label>
            <input id="laptopSerial" name="laptopSerial" type="text">

            <label class="font-semibold" for="laptopSerial">IP Address</label>
            <input id="laptopSerial" name="laptopSerial" type="text">

            <label class="font-semibold" for="laptopSerial">Vendor</label>
            <input id="laptopSerial" name="laptopSerial" type="text">

            <label class="font-semibold" for="laptopPurchaseDate">Date Purchased</label>
            <input id="laptopPurchaseDate" name="laptopPurchaseDate" type="date">

            <label class="font-semibold" for="laptopCondition">Warranty Expiration</label>
            <input id="laptopCondition" name="laptopCondition" type="date">
            
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