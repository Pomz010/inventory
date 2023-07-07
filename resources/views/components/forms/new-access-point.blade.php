<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Access Point</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>

    <form action="#">
        @csrf
        
        <div class="formInputWrapper">
            <label class="font-semibold" for="accessPointBrand">Brand</label>
            <input class="col-span-2" id="accessPointBrand" name="brand" type="text">
    
            <label class="font-semibold" for="accessPointModel">Model</label>
            <input class="col-span-2" id="accessPointModel" name="model" type="text">
    
            <label class="font-semibold" for="accessPointSerial">Serial #</label>
            <input class="col-span-2" id="accessPointSerial" name="serial_#" type="text">
    
            <label class="font-semibold" for="accessPointMacAddress">MAC Address</label>
            <input class="col-span-2" id="accessPointMacAddress" name="mac_address" type="text">
    
            <label class="font-semibold" for="accessPointSerial">IP Address</label>
            <input class="col-span-2" id="accessPointSerial" name="serial_#" type="text">

            <x-forms.partials.vendor-dropdown :vendors='$vendors' />
    
            <label class="font-semibold" for="accessPointPurchaseDate">Date Purchased</label>
            <input class="col-span-2" id="accessPointPurchaseDate" name="purchase_date" type="date">
    
            <label class="font-semibold" for="accessPointWarrantyExpiration">Warranty Expiration</label>
            <input class="col-span-2" id="accessPointWarrantyExpiration" name="warranty" type="date">
            
            <label class="font-semibold" for="accessPointDR">DR #</label>
            <input class="col-span-2" id="accessPointDR" name="dr_#" type="text">
    
            <label class="font-semibold" for="accessPointPO">PO #</label>
            <input class="col-span-2" id="accessPointPO" name="po_#" type="text">
    
            <label class="font-semibold" for="accessPointPrice">Price</label>
            <input class="col-span-2" id="accessPointPrice" name="price" type="text">
        </div>

        <x-forms.partials.button-set />
       
    </form>
</div>