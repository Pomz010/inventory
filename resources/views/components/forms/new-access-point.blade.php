<div class="bg-neutral-300 h-auto p-4 rounded-md shadow-lg">
    <div class="flex justify-between border-b border-slate-300 py-2 mb-2">
        <h2 class="font-bold">New Access Point</h2>
        <ul>
            <x-forms.partials.asset-entry-form-container id="newEntry"/>
        </ul>
    </div>

    <form class="grid grid-cols-2 gap-y-2 gap-x-4" action="#">
        
        <label class="font-semibold" for="brand">Brand</label>
        <input id="laptopBrand" name="laptopBrand" type="text">

        <label class="font-semibold" for="laptopModel">Model</label>
        <input id="laptopModel" name="laptopModel" type="text">

        <label class="font-semibold" for="laptopSerial">Serial #</label>
        <input id="laptopSerial" name="laptopSerial" type="text">

        <label class="font-semibold" for="laptopSerial">MAC Address</label>
        <input id="laptopSerial" name="laptopSerial" type="text">

        <label class="font-semibold" for="laptopSerial">Vendor</label>
        <input id="laptopSerial" name="laptopSerial" type="text">

        <label class="font-semibold" for="laptopPurchaseDate">Date Purchased</label>
        <input id="laptopPurchaseDate" name="laptopPurchaseDate" type="date">

        <label class="font-semibold" for="laptopCondition">Warranty Expiration</label>
        <input id="laptopCondition" name="laptopCondition" type="date">
    </form>
</div>