<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Router</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>

    <form action="#">
        @csrf
        
        <div class="formInputWrapper">

            <input class="col-span-2" id="routerItem" name="item" value="router" type="text" hidden>

            <label class="font-semibold" for="routerBrand">Brand</label>
            <input class="col-span-2" id="routerBrand" name="brand" type="text">

            <label class="font-semibold" for="routerModel">Model</label>
            <input class="col-span-2" id="routerModel" name="model" type="text">

            <label class="font-semibold" for="routerSerial">Serial #</label>
            <input class="col-span-2" id="routerSerial" name="serial_#" type="text">

            <label class="font-semibold" for="routerMacAddress">MAC Address</label>
            <input class="col-span-2" id="routerMacAddress" name="mac_address" type="text">

            <label class="font-semibold" for="routerIpAddress">IP Address</label>
            <input class="col-span-2" id="routerIpAddress" name="ip_address" type="text">

            <x-forms.partials.vendor-dropdown :vendors='$vendors' />

            <label class="font-semibold" for="routerPurchaseDate">Date Purchased</label>
            <input class="col-span-2" id="routerPurchaseDate" name="purchase_date" type="date">

            <label class="font-semibold" for="routerWarrantyExpiration">Warranty Expiration</label>
            <input class="col-span-2" id="routerWarrantyExpiration" name="warranty" type="date">

            <label class="font-semibold" for="routerDR">DR #</label>
            <input class="col-span-2" id="routerDR" name="dr_#" type="text">

            <label class="font-semibold" for="routerPO">PO #</label>
            <input class="col-span-2" id="routerPO" name="po_#" type="text">

            <label class="font-semibold" for="routerPrice">Price</label>
            <input class="col-span-2" id="routerPrice" name="price" type="text">
        </div>

        <x-forms.partials.button-set />
        
    </form>
</div>