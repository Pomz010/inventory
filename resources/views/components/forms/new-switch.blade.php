<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Switch</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>

    <form action="#">
        @csrf
        
        <div class="formInputWrapper">
            
            <input class="col-span-2" id="switchItem" name="item" value="switch" type="text" hidden>

            <label class="font-semibold" for="switchBrand">Brand</label>
            <input class="col-span-2" id="switchBrand" name="brand" type="text">

            <label class="font-semibold" for="switchModel">Model</label>
            <input class="col-span-2" id="switchModel" name="model" type="text">

            <label class="font-semibold" for="switchSerial">Serial #</label>
            <input class="col-span-2" id="switchSerial" name="serial_#" type="text">

            <label class="font-semibold" for="switchMacAddress">MAC Address</label>
            <input class="col-span-2" id="switchMacAddress" name="mac_address" type="text">

            <label class="font-semibold" for="switchIpAddress">IP Address</label>
            <input class="col-span-2" id="switchIpAddress" name="ip_address" type="text">

            <x-forms.partials.vendor-dropdown :vendors='$vendors' />

            <label class="font-semibold" for="switchPurchaseDate">Date Purchased</label>
            <input class="col-span-2" id="switchPurchaseDate" name="purchase_date" type="date">

            <label class="font-semibold" for="switchWarrantyExpiration">Warranty Expiration</label>
            <input class="col-span-2" id="switchWarrantyExpiration" name="warran" type="date">

            <label class="font-semibold" for="switchDR">DR #</label>
            <input class="col-span-2" id="switchDR" name="dr_#" type="text">

            <label class="font-semibold" for="switchPO">PO #</label>
            <input class="col-span-2" id="switchPO" name="po_#" type="text">

            <label class="font-semibold" for="switchPrice">Price</label>
            <input class="col-span-2" id="switchPrice" name="price" type="text">
        </div>

        <x-forms.partials.button-set />
        
    </form>
</div>