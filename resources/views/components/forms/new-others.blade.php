<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">Others</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>

    <form action="#">
        @csrf
        
        <div class="formInputWrapper">
            
            <label class="font-semibold" for="othersAssetTag">Asset Tag</label>
            <input class="col-span-2" id="othersAssetTag" name="asset_tag" type="text">

            <label class="font-semibold" for="othersItem">Asset Type</label>
            <input class="col-span-2" id="othersItem" name="item" type="text">

            <label class="font-semibold" for="othersBrand">Brand</label>
            <input class="col-span-2" id="othersBrand" name="brand" type="text">

            <label class="font-semibold" for="othesrsModel">Model</label>
            <input class="col-span-2" id="othesrsModel" name="model" type="text">

            <label class="font-semibold" for="othersDescription">Description</label>
            <input class="col-span-2" id="othersDescription" name="description" type="text">

            <label class="font-semibold" for="othersSerial">Serial #</label>
            <input class="col-span-2" id="othersSerial" name="serial_#" type="text">

            <x-forms.partials.vendor-dropdown :vendors='$vendors' />

            <label class="font-semibold" for="othersPurchaseDate">Date Purchased</label>
            <input class="col-span-2" id="othersPurchaseDate" name="purchase_date" type="date">

            <label class="font-semibold" for="othersWarrantyExpiration">Warranty Expiration</label>
            <input class="col-span-2" id="othersWarrantyExpiration" name="warranty" type="date">

            <label class="font-semibold" for="othersDR">DR #</label>
            <input class="col-span-2" id="othersDR" name="dr_#" type="text">

            <label class="font-semibold" for="othersPO">PO #</label>
            <input class="col-span-2" id="othersPO" name="po_#" type="text">

            <label class="font-semibold" for="othersPrice">Price</label>
            <input class="col-span-2" id="othersPrice" name="price" type="number">
        </div>

        <x-forms.partials.button-set />
       
    </form>
</div>