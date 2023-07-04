<x-main>
    <div class="grid items-center w-3/12 mx-auto">
        <div class="formWrapper">
            <div class="formHeader">
                <h2 class="font-bold">New User</h2>
            </div>

            <form action="#" method="POST">
                @csrf

                <div class="formInputWrapper">
                    <label class="font-semibold" for="userName">Name</label>
                    <select class="col-span-2" id="userName" name="name"> 
                        @foreach ($employees as $employee)
                            <option value="{{ $employee->id }}">{{ ucwords($employee->firstname) . ' ' . ucfirst($employee->lastname) }}</option>
                        @endforeach
                    </select>

                    <label class="font-semibold" for="username">Username</label>
                    <input class="col-span-2" id="username" name="username" type="text">

                    <label class="font-semibold" for="userRole">Role</label>
                    <select class="col-span-2" name="userRole" id="userRole">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        <option value="support">Support</option>
                        <option value="email">Customer</option>
                    </select>
                    

                    <label class="font-semibold" for="userEmail">Email</label>
                    <input class="col-span-2" id="userEmail" name="email" type="Email">
                </div>

                <x-forms.partials.button-set />

            </form>
        </div>
    </div>
</x-main>