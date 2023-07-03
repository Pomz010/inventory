@if (session('success'))
    <div class="grid justify-center pb-6">
        <p>{{ session('success') }}</p>
    </div>
@endif

    <div class="formWrapper">
        <div class="formHeader">
            <h2 class="font-bold">New Department</h2>
            <x-forms.partials.department-entry-form id="newDepartment" />
        </div>
    
        <form action="#" method="POST">
            @csrf
            
            <div class="formInputWrapper">
                <label class="font-semibold" for="departmentCode">Department Code</label>
                <div class="col-span-2">
                    <input class="w-full px-2" id="departmentCode" name="code" type="text" value="{{ $errors->has('code') ? old('') : old('code'); }}" >
                    @error('code')
                    <p class="text-red-500"> {{ $message }}</p>
                    @enderror
                </div>

                <label class="font-semibold" for="departmentName">Department Name</label>
                <div class="col-span-2">
                    <input class="w-full px-2" id="departmentName" name="name" type="text" value="{{ $errors->has('name') ? old('') : old('name'); }}" >
                    @error('name')
                        <p class="text-red-500"> {{ $message }}</p>
                    @enderror
                </div>

                <label class="font-semibold" for="description">Description</label>
                <div class="col-span-2">
                    <input class="w-full px-2" id="description" name="description" type="text">
                </div>
            </div>

            <x-forms.partials.button-set />
        </form>
    </div>