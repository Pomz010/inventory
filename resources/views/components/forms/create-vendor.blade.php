
<x-main>

    @if (session('success'))
        <div class="grid justify-center pb-6">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <div class="grid  items-center w-4/12 mx-auto">
        <div class="formWrapper">
            <div class="formHeader">
                <h2 class="font-bold">New Vendor</h2>
            </div>

            <form action="{{ route('vendors.store') }}" method="POST">
                @csrf
                
                <div class="formInputWrapper">
                    <label class="font-semibold" for="vendorName">Name</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="vendorName" name="name" type="text">
                        @error('name')
                            <p class="text-red-500"> {{ $message }}</p>
                        @enderror
                    </div>

    
                    <label class="font-semibold" for="vendorAddress">Address</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="vendorAddress" name="address" type="text">
                        @error('address')
                            <p class="text-re"> {{ $message }}</p>
                        @enderror
                    </div>
    
                    <label class="font-semibold" for="vendorMobile">Mobile #</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="vendorMobile" name="phone" type="text">
                        @error('phone')
                        <p class="text-re"> {{ $message }}</p>
                        @enderror
                    </div>
                    
                    <label class="font-semibold" for="vendorTelephone">Telephone #</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="vendorTelephone" name="telephone" type="text">
                        @error('telephone')
                            <p class="text-re"> {{ $message }}</p>
                        @enderror
                    </div>
    
                    <label class="font-semibold" for="vendorEmail">Email</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="vendorEmail" name="email" type="Email">
                        @error('email')
                            <p class="text-re"> {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <x-forms.partials.button-set />

            </form>
        </div>
    </div>
</x-main>