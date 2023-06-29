<x-main>

    @if (session('success'))
        <div>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <div class="grid justify-center items-center">
        <div class="formWrapper">
            <div class="formHeader">
                <h2 class="font-bold">New Vendor</h2>
            </div>

            <form action="{{ route('vendors.store') }}" method="POST">
                @csrf
                
                <div class="formInputWrapper">
                    <label class="font-semibold" for="vendorName">Name</label>
                    <div>
                        <input class="w-full px-2" id="vendorName" name="vendor_name" type="text">
                        @error('vendor_name')
                            <p class="text-re"> {{ $message }}</p>
                        @enderror
                    </div>

    
                    <label class="font-semibold" for="vendorAddress">Address</label>
                    <input class="w-full px-2" id="vendorAddress" name="vendor_address" type="text">
    
                    <label class="font-semibold" for="vendorMobile">Mobile #</label>
                    <input class="w-full px-2" id="vendorMobile" name="cellphone_#" type="text">
                    
                    <label class="font-semibold" for="vendorTelephone">Telephone #</label>
                    <input class="w-full px-2" id="vendorTelephone" name="telephone_#" type="Email">
    
                    <label class="font-semibold" for="vendorEmail">Email</label>
                    <input class="w-full px-2" id="vendorEmail" name="vendor_email" type="Email">
                </div>

                <x-forms.partials.button-set />

            </form>
        </div>
    </div>
</x-main>