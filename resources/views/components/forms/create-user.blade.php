<x-main>
    <div class="grid justify-center items-center">
        <div class="bg-neutral-300 h-auto p-4 rounded-md shadow-lg">
            <div class="flex justify-between border-b border-slate-300 py-2 mb-2">
                <h2 class="font-bold">New User</h2>
            </div>

            <form class="grid grid-cols-2 gap-y-2 gap-x-4" action="#">
                
                <label class="font-semibold" for="laptopAssetTag">Name</label>
                <input class="col-span-2" id="laptopAssetTag" name="laptopAssetTag" type="text">

                <label class="font-semibold" for="brand">Username</label>
                <input class="col-span-2" id="laptopBrand" name="laptopBrand" type="text">

                <label class="font-semibold" for="userRole">Role</label>
                <select class="col-span-2" name="userRole" id="userRole">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                    <option value="support">Support</option>
                    <option value="email">Customer</option>
                </select>
                

                <label class="font-semibold" for="laptopProcessor">Email</label>
                <input class="col-span-2" id="laptopProcessor" name="laptopProcessor" type="Email">

            </form>
        </div>
    </div>
</x-main>