<x-main>
    <div class="formWidth">
        <div class="formWrapper">
            <div class="formHeader">
                <h2 class="font-bold">New User</h2>
            </div>

            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="formInputWrapper">
                    <label class="font-semibold" for="employeeName">Name</label>
                    <div class="col-span-2">
                        <select class="w-full" id="employeeName" name="employee_id" value="{{ $errors->has('employee_id') ? old('') : old('employee_id') }}"> 
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ ucwords($employee->firstname) . ' ' . ucfirst($employee->lastname) }}</option>
                            @endforeach
                        </select>
                        @error('employee_id')
                            <p class="text-red-500"> {{ $message }}</p>
                        @enderror
                    </div>

                    <label class="font-semibold" for="username">Username</label>
                    <div class="col-span-2">
                        <input class="w-full" id="username" name="username" type="text" value="{{ $errors->has('username') ? old('') : old('username') }}">
                        @error('username')
                            <p class="text-red-500"> {{ $message }}</p>
                        @enderror
                    </div>

                    <label class="font-semibold" for="userRole">Role</label>
                    <div class="col-span-2">
                        <select class="w-full" id="userRole" name="role" value="{{ $errors->has('role') ? old('') : old('role') }}">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                            <option value="support">Support</option>
                            <option value="email">Customer</option>
                        </select>
                        @error('role')
                            <p class="text-red-500"> {{ $message }}</p>
                        @enderror
                    </div>
                    

                    <label class="font-semibold" for="userEmail">Email</label>
                    <div class="col-span-2">
                        <input class="w-full" id="userEmail" name="email" type="text" value="">
                        @error('email')
                            <p class="text-red-500"> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <input class="w-full" id="userPassword" name="password" type="password" value="{{ bcrypt('admin1234') }}" hidden>
                    </div>
                </div>

                <x-forms.partials.button-set />

            </form>
        </div>
    </div>
</x-main>