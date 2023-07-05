<x-main>
    @if (session('success'))
        <div class="grid justify-center pb-6">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <div class="grid items-center w-4/12 mx-auto">
        <div class="formWrapper">
            <div class="formHeader">
                <h2 class="font-bold">New Employee</h2>
            </div>
        
            <form action="{{ route('create-employee.store') }}" method="POST">
                @csrf

                <div class="formInputWrapper">                
                    <label class="font-semibold" for="employeeNumber">Employee ID</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employeeNumber" name="employee_number" type="text" value="{{ $errors->has('employee_number') ? old('') : old('employee_number') }}">
                        @error('employee_number')
                            <p class="text-red-500"> {{ $message }}</p>
                        @enderror
                    </div>
                    
                    <x-forms.partials.business-unit-dropdown :businessUnits='$businessUnits'/>

                    <x-forms.partials.department-dropdown :departments='$departments'/>
                    
                    <x-forms.partials.section-dropdown :sections='$sections'/>

                    <label class="font-semibold" for="employeeFirstname">Firstname</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employeeFirstname" name="firstname" type="text" value="{{ $errors->has('firstname') ? old('') : old('firstname') }}">
                        @error('firstname')
                            <p class="text-red-500"> {{ $message }}</p>
                        @enderror
                    </div>

                    <label class="font-semibold" for="employeeLastname">Lastname</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employeeLastname" name="lastname" type="text" value="{{ $errors->has('lastname') ? old('') : old('lastname') }}">
                        @error('lastname')
                            <p class="text-red-500"> {{ $message }}</p>
                        @enderror
                    </div>

                    <label class="font-semibold" for="employeeMiddleName">Middle Name</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employeeMiddleName" name="middle_name" type="text" value="{{ $errors->has('middle_name') ? old('') : old('middle_name') }}">
                        @error('middle_name')
                            <p class="text-red-500"> {{ $message }}</p>
                        @enderror
                    </div>

                    <label class="font-semibold" for="employeeExtensionName">Extenstion Name</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employeeExtensionName" name="ext_name" type="text" value="{{ $errors->has('ext_name') ? old('') : old('ext_name') }}">
                        @error('ext_name')
                            <p class="text-red-500"> {{ $message }}</p>
                        @enderror
                    </div>

                    <label class="font-semibold" for="employeeGender">Gender</label>
                    <div class="col-span-2">
                        <select class="col-span-2 w-full" id="employeeGender" name="gender" value="{{ $errors->has('gender') ? old('') : old('gender') }}">
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                        @error('gender')
                            <p class="text-red-500"> {{ $message }}</p>
                        @enderror
                    </div>

                    <label class="font-semibold" for="employeePosition">Position</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employeePosition" name="position" type="text" value="{{ $errors->has('position') ? old('') : old('position') }}">
                        @error('position')
                            <p class="text-red-500"> {{ $message }}</p>
                        @enderror
                    </div>
                    
                    <label class="font-semibold" for="employeeDateHired">Date Hired</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employeeDateHired" name="date_hired" type="date" value="{{ $errors->has('date_hired') ? old('') : old('date_hired') }}">
                        @error('date_hired')
                            <p class="text-red-500"> {{ $message }}</p>
                        @enderror
                    </div>

                    {{-- <label class="font-semibold" for="employementStatus">Employment Status</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employementStatus" name="employment_status" type="text">
                    </div> --}}

                    <label class="font-semibold" for="employeeEmail">Email</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employeeEmail" name="email" type="text" value="{{ $errors->has('email') ? old('') : old('email') }}">
                        @error('email')
                            <p class="text-red-500"> {{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <x-forms.partials.button-set />

            </form>
        </div>
    </div>
</x-main>