
    <div class="formWrapper">
        <div class="formHeader">
            <h2 class="font-bold">New Department</h2>
            <x-forms.partials.department-entry-form id="newDepartment" />
        </div>
    
        <form action="#" method="POST">
            @csrf
            
            <div class="formInputWrapper">
                <label class="font-semibold" for="laptopAssetTag">Department Code</label>
                <div class="col-span-2">
                    <input class="w-full px-2" id="laptopAssetTag" name="laptopAssetTag" type="text">
                </div>

                <label class="font-semibold" for="laptopAssetTag">Department Name</label>
                <div class="col-span-2">
                    <input class="w-full px-2" id="laptopAssetTag" name="laptopAssetTag" type="text">
                </div>

                <label class="font-semibold" for="brand">Description</label>
                <div class="col-span-2">
                    <input class="w-full px-2" id="laptopBrand" name="laptopBrand" type="text">
                </div>
            </div>

            <x-forms.partials.button-set />
        </form>
    </div>