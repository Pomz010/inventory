
<div class="formWrapper">
    <div class="formHeader">
        <h2 class="font-bold">New Section</h2>
        <x-forms.partials.department-entry-form id="newSection" />
    </div>

    <form action="{{ route('section.store') }}" method="POST">
        @csrf
        
        <div class="formInputWrapper">
            <label class="font-semibold" for="sectionCode">Code</label>
            <div class="col-span-2">
                <input class="w-full px-2" id="sectionCode" name="code" type="text">
                @error('code')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="sectionName">Name</label>
            <div class="col-span-2">
                <input class="w-full px-2" id="sectionName" name="name" type="text">
                @error('name')
                    <p class="text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <label class="font-semibold" for="sectionDescription">Description</label>
            <div class="col-span-2">
                <input class="w-full px-2" id="sectionDescription" name="description" type="text">
            </div>
        </div>

        <x-forms.partials.button-set />
    </form>
</div>