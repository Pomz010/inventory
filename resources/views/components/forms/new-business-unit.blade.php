@if (session('success'))
    <div class="grid justify-center pb-6">
        <p>{{ session('success') }}</p>
    </div>
@endif

    <div class="formWrapper">
        <div class="formHeader">
            <h2 class="font-bold">New Business Unit</h2>
            <x-forms.partials.department-entry-form id="newDepartment"/>
        </div>
    
        <form action="{{ route('department.store') }}" method="POST">
            @csrf
            
            <div class="formInputWrapper">
                <label class="font-semibold" for="buCode">Code</label>
                <div class="col-span-2">
                    <input class="w-full px-2" id="buCode" name="code" type="text" value="{{ $errors->has('code') ? old('') : old('code') }}">
                    @error('code')
                        <p class="text-red-500"> {{ $message }}</p>
                    @enderror
                </div>

                <label class="font-semibold" for="buName">Name</label>
                <div class="col-span-2">
                    <input class="w-full px-2" id="buName" name="name" type="text" value="{{ $errors->has('name') ? old('') : old('name') }}">
                    @error('name')
                        <p class="text-red-500"> {{ $message }}</p>
                    @enderror
                </div>

                <label class="font-semibold" for="buAddress">Address</label>
                <div class="col-span-2">
                    <input class="w-full px-2" id="buAddress" name="address" type="text" value="{{ $errors->has('address') ? old('') : old('address') }}">
                    @error('address')
                        <p class="text-red-500"> {{ $message }}</p>
                    @enderror
                </div>

                <label class="font-semibold" for="buDescription">Description</label>
                <div class="col-span-2">
                    <input class="w-full px-2" id="buDescription" name="description" type="text" value="{{ $errors->has('description') ? old('') : old('description') }}">
                    @error('description')
                        <p class="text-red-500"> {{ $message }}</p>
                    @enderror
                </div>
            </div>

            <x-forms.partials.button-set />
        </form>
    </div>
