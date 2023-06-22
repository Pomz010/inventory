<div class="bg-neutral-300 h-auto p-4 rounded-md shadow-lg">
    <div class="flex justify-between border-b border-slate-300 py-2 mb-2">
        <h2 class="font-bold">New Printer</h2>
        <ul>
            <x-forms.partials.asset-entry-form-container id="newEntry"/>
        </ul>
    </div>
    
    <form class="grid grid-cols-2 gap-y-2 gap-x-4" action="#">
        
        <label class="font-semibold" for="laptopAssetTag">Asset Tag</label>
        <input id="laptopAssetTag" name="laptopAssetTag" type="text">
        
        <label class="font-semibold" for="brand">Brand</label>
        <input id="laptopBrand" name="laptopBrand" type="text">

        <label class="font-semibold" for="laptopModel">Model</label>
        <input id="laptopModel" name="laptopModel" type="text">

        <label class="font-semibold" for="laptopModel">Printer Type</label>
        <input id="laptopModel" name="laptopModel" type="text">

        <label class="font-semibold" for="laptopModel">Printer Output</label>
        <input id="laptopModel" name="laptopModel" type="text">

        <label class="font-semibold" for="laptopModel">Cartridge Model</label>
        <input id="laptopModel" name="laptopModel" type="text">

        <label class="font-semibold" for="laptopModel">Serial #</label>
        <input id="laptopModel" name="laptopModel" type="text">

        <label class="font-semibold" for="laptopPurchaseDate">Date Purchased</label>
        <input id="laptopPurchaseDate" name="laptopPurchaseDate" type="date">

        <label class="font-semibold" for="laptopUser">Warranty Expiration</label>
        <input id="laptopUser" name="laptopUser" type="date">
    </form>
</div>