<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Toner Request</h2>
        <ul>
            <x-forms.partials.asset-entry-form-container id="newEntry"/>
        </ul>
    </div>
    
    <form action="#">

        <div class="formInputWrapper">
            <label class="font-semibold" for="dateRequested">Date</label>
            <input id="dateRequested" name="dateRequested" type="date">
            
            <label class="font-semibold" for="printerAssetCode">Asset Code</label>
            <select name="printerAssetCode" id="printerAssetCode">
                <option value="xxxx">xxxx</option>
            </select>

            <label class="font-semibold" for="blackQty">Black</label>
            <input id="blackQty" name="blackQty" type="number">

            <label class="font-semibold" for="cyanQty">Cyan</label>
            <input id="cyanQty" name="cyanQty" type="number">

            <label class="font-semibold" for="magentaQty">Magenta</label>
            <input id="magentaQty" name="magentaQty" type="number">

            <label class="font-semibold" for="yellowQty">Yellow</label>
            <input id="yellowQty" name="yellowQty" type="number">

            <label class="font-semibold" for="requestedBy">Requested By</label>
            <select name="requestedBy" id="requestedBy">
                <option value="xxxx">xxxx</option>
            </select>
        </div>

        <x-forms.partials.button-set />
    </form>
</div>