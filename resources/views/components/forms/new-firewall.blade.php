<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Firewall</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>

    <form action="#">
        @csrf
        
        <div class="formInputWrapper">
            <label class="font-semibold" for="firewBrand">Brand</label>
            <input class="col-span-2" id="firewallBrand" name="brand" type="text">

            <label class="font-semibold" for="firewallModel">Model</label>
            <input class="col-span-2" id="firewallModel" name="model" type="text">

            <label class="font-semibold" for="firewallSerial">Serial #</label>
            <input class="col-span-2" id="firewallSerial" name="serial_#" type="text">

            <label class="font-semibold" for="firewallMacAddress">MAC Address</label>
            <input class="col-span-2" id="firewallMacAddress" name="mac_address" type="text">

            <label class="font-semibold" for="firewallIpAddress">IP Address</label>
            <input class="col-span-2" id="firewallIpAddress" name="ip_address" type="text">

            <x-forms.partials.vendor-dropdown :vendors='$vendors' />

            <label class="font-semibold" for="firewallPurchaseDate">Date Purchased</label>
            <input class="col-span-2" id="firewallPurchaseDate" name="purchase_date" type="date">

            <label class="font-semibold" for="firewallWarrantyExpiration">Warranty Expiration</label>
            <input class="col-span-2" id="firewallWarrantyExpiration" name="warranty" type="date">
            
            <label class="font-semibold" for="firewallDR">DR #</label>
            <input class="col-span-2" id="firewallDR" name="dr_#" type="text">

            <label class="font-semibold" for="firewallPO">PO #</label>
            <input class="col-span-2" id="firewallPO" name="po_#" type="text">

            <label class="font-semibold" for="firewallPrice">Price</label>
            <input class="col-span-2" id="firewallPrice" name="price" type="text">
        </div>
        
        <x-forms.partials.button-set />

    </form>
</div>