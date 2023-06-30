<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Toner Request</h2>
        <x-forms.partials.asset-entry-form-container id="newEntry"/>
    </div>
    
    <form action="#">

        <div class="formInputWrapper">
            <label class="font-semibold" for="dateRequested">Date</label>
            <input class="col-span-2" id="dateRequested" name="dateRequested" type="date">
            
            <label class="font-semibold" for="printerAssetCode">Asset Code</label>
            <select class="col-span-2" name="printerAssetCode" id="printerAssetCode">
                <option value="xxxx">xxxx</option>
            </select>

            <label class="font-semibold" for="blackQty">Black</label>
            <input class="col-span-2" id="blackQty" name="blackQty" type="number">

            <label class="font-semibold" for="cyanQty">Cyan</label>
            <input class="col-span-2" id="cyanQty" name="cyanQty" type="number">

            <label class="font-semibold" for="magentaQty">Magenta</label>
            <input class="col-span-2" id="magentaQty" name="magentaQty" type="number">

            <label class="font-semibold" for="yellowQty">Yellow</label>
            <input class="col-span-2" id="yellowQty" name="yellowQty" type="number">

            <label class="font-semibold" for="requestedBy">Requested By</label>
            <select class="col-span-2" name="requestedBy" id="requestedBy">
                <option value="xxxx">xxxx</option>
            </select>
        </div>

        <x-forms.partials.button-set />
    </form>
</div>