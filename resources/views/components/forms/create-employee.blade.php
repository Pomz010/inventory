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
                    
                    <x-forms.partials.business-unit-dropdown :businessUnits='$businessUnits'/>

                    <x-forms.partials.department-dropdown :departments='$departments' />
                    
                    <x-forms.partials.section-dropdown :sections='$sections' />

                    <label class="font-semibold" for="employeeFirstname">Firstname</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employeeFirstname" name="firstname" type="text">
                    </div>

                    <label class="font-semibold" for="employeeLastname">Lastname</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employeeLastname" name="lastname" type="text">
                    </div>

                    <label class="font-semibold" for="employeeMiddleName">Middle name</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employeeMiddleName" name="middle_name" type="text">
                    </div>

                    <label class="font-semibold" for="employeeExtensionName">Extenstion Name</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employeeExtensionName" name="ext_name" type="text">
                    </div>

                    <label class="font-semibold" for="employeeGender">Gender</label>
                    <select class="col-span-2" id="employeeGender" name="gender">
                        <option value="m">male</option>
                        <option value="f">female</option>
                    </select>

                    <label class="font-semibold" for="employeePosition">Position</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employeePosition" name="position" type="text">
                    </div>
                    
                    <label class="font-semibold" for="employeeDateHired">Date Hired</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employeeDateHired" name="date_hired" type="date">
                    </div>

                    <label class="font-semibold" for="employementStatus">Employment Status</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employementStatus" name="employment_status" type="text">
                    </div>

                    <label class="font-semibold" for="employeeEmail">Email</label>
                    <div class="col-span-2">
                        <input class="w-full px-2" id="employeeEmail" name="email" type="text">
                    </div>
                </div>


                <x-forms.partials.button-set />

            </form>
        </div>
    </div>
</x-main>