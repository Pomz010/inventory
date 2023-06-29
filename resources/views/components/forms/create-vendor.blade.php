<x-main>
    <div class="grid justify-center items-center">
        <div class="formWrapper">
            <div class="formHeader">
                <h2 class="font-bold">New Vendor</h2>
            </div>

            <form class="formInputWrapper" action="#" method="POST">
                @csrf
                
                <label class="font-semibold" for="vendorName">Name</label>
                <input id="vendorName" name="vendorName" type="text">

                <label class="font-semibold" for="vendorAddress">Address</label>
                <input id="vendorAddress" name="vendorAddress" type="text">

                <label class="font-semibold" for="vendorMobile">Mobile #</label>
                <input id="vendorMobile" name="vendorMobile" type="text">
                
                <label class="font-semibold" for="vendorTelephone">Telephone #</label>
                <input id="vendorTelephone" name="vendorTelephone" type="Email">

                <label class="font-semibold" for="vendorEmail">Email</label>
                <input id="vendorEmail" name="vendorEmail" type="Email">

            </form>

            <x-forms.partials.button-set />
        </div>
    </div>
</x-main>