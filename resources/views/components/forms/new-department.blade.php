<div class="grid justify-center items-center h-screen">
    <div class="bg-neutral-300 h-auto p-4 rounded-md shadow-lg">
        <div class="flex justify-between border-b border-slate-300 py-2 mb-2">
            <h2 class="font-bold">New Department</h2>
            <x-forms.partials.department-entry-form id="newDepartment" />
        </div>
    
        <form class="grid grid-cols-2 gap-y-2 gap-x-4" action="#">
            
            <label class="font-semibold" for="laptopAssetTag">Department Name</label>
            <input class="col-span-2" id="laptopAssetTag" name="laptopAssetTag" type="text">
    
            <label class="font-semibold" for="brand">Description</label>
            <input class="col-span-2" id="laptopBrand" name="laptopBrand" type="text">
    
        </form>
    </div>
</div>