<x-main>
    <div class="grid items-center w-3/12 mx-auto">
        <div class="formWrapper">
            <div class="formHeader">
                <h2 class="font-bold">New Employee</h2>
            </div>
        
            <form action="#" method="POST">
                @csrf

                <div class="formInputWrapper">                
                    <label class="font-semibold" for="employeeID">Employee ID</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employeeID" name="employee_id" type="text">
                    </div>
                    
                    <label class="font-semibold" for="businessUnit">BU</label>
                    <select class="col-span-2">
                        <option id="businessUnit" name="business_unit" value=""></option>
                    </select>

                    <label class="font-semibold" for="department">Department</label>
                    <select class="col-span-2">
                        <option id="department" name="department" value=""></option>
                    </select>
                    
                    <label class="font-semibold" for="section">Section</label>
                    <select class="col-span-2">
                        <option id="section" name="section" value=""></option>
                    </select>

                    <label class="font-semibold" for="laptopProcessor">Firstname</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="laptopProcessor" name="laptopProcessor" type="text">
                    </div>

                    <label class="font-semibold" for="laptopMemory">Lastname</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="laptopMemory" name="laptopMemory" type="text">
                    </div>

                    <label class="font-semibold" for="laptopStorage">Middle name</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="laptopStorage" name="laptopStorage" type="text">
                    </div>

                    <label class="font-semibold" for="graphicsCard">Extenstion Name</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="graphicsCard" name="graphicsCard" type="text">
                    </div>

                    <label class="font-semibold" for="gender">Gender</label>
                    <select class="col-span-2">
                        <option id="gender" name="gender" value=""></option>
                    </select>

                    <label class="font-semibold" for="laptopSerial">Position</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="laptopSerial" name="laptopSerial" type="text">
                    </div>

                    <label class="font-semibold" for="laptopSerial">Email</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="laptopSerial" name="laptopSerial" type="text">
                    </div>

                    <label class="font-semibold" for="laptopSerial">Date Hired</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="laptopSerial" name="laptopSerial" type="date">
                    </div>

                    <label class="font-semibold" for="laptopModel">Employment Status</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="laptopModel" name="laptopModel" type="text">
                    </div>
                </div>


                <x-forms.partials.button-set />

            </form>
        </div>
    </div>
</x-main>