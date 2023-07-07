<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Mobile Device</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>

    <form action="#">
        @csrf
        
        <div class="formInputWrapper">

            <input class="col-span-2" id="mobileDeviceItem" name="item" value="mobileDevice" type="text" hidden>

            <label class="font-semibold" for="movileDeviceAssetTag">Asset Tag</label>
            <input class="col-span-2" id="movileDeviceAssetTag" name="asset_tag" type="text">

            <label class="font-semibold" for="movileDeviceBrand">Brand</label>
            <input class="col-span-2" id="movileDeviceBrand" name="brand" type="text">

            <label class="font-semibold" for="movileDeviceModel">Model</label>
            <input class="col-span-2" id="movileDeviceModel" name="model" type="text">

            <label class="font-semibold" for="movileDeviceStorage">Storage</label>
            <input class="col-span-2" id="movileDeviceStorage" name="storage" type="text">

            <label class="font-semibold" for="movileDeviceSerial">Serial #</label>
            <input class="col-span-2" id="movileDeviceSerial" name="serial_#" type="text">

            <label class="font-semibold" for="movileDeviceSim">Sim #</label>
            <input class="col-span-2" id="movileDeviceSim" name="mobile_sim_#" type="text">

            <label class="font-semibold" for="laptopSerial">Account #</label>
            <input class="col-span-2" id="laptopSerial" name="laptopSerial" type="text">

            <label class="font-semibold" for="dataPlan">Data Plan</label>
            <input class="col-span-2" id="dataPlan" name="data_plan" type="text">

            <label class="font-semibold" for="mobileDeviceMacAddress">MAC Address</label>
            <input class="col-span-2" id="mobileDeviceMacAddress" name="mac_address" type="text">

            <label class="font-semibold" for="mobileDeviceHostName">Hostname</label>
            <input class="col-span-2" id="mobileDeviceHostName" name="hostname" type="text">

            <x-forms.partials.vendor-dropdown :vendors='$vendors' />

            <label class="font-semibold" for="mobileDevicePurchaseDate">Date Purchased</label>
            <input class="col-span-2" id="mobileDevicePurchaseDate" name="purchase_date" type="date">

            <label class="font-semibold" for="mobileDeviceWarrantyExpiration">Warranty Expiration</label>
            <input class="col-span-2" id="mobileDeviceWarrantyExpiration" name="warranty" type="date">

            <label class="font-semibold" for="mobileDeviceDR">DR #</label>
            <input class="col-span-2" id="mobileDeviceDR" name="dr_#" type="text">

            <label class="font-semibold" for="mobileDevicePO">PO #</label>
            <input class="col-span-2" id="mobileDevicePO" name="po_#" type="text">

            <label class="font-semibold" for="mobileDevicePrice">Price</label>
            <input class="col-span-2" id="mobileDevicePrice" name="price" type="text">
        </div>

        <x-forms.partials.button-set />
        
    </form>
</div>