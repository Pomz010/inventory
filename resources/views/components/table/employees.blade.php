
    <div id="employeesTable" class="flex flex-col gap-1">
        {{-- Table Filter --}}
        <div class="flex justify-between bg-white p-2 rounded-md items-center">

            <form class="flex gap-x-8">
            <div class="border-r-2 border-slate-950 pr-8">
                <label for="hardwareRow">Show</label>
                <select class="border place-self-start" name="hardwareRow" id="hardwareRow">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="75">75</option>
                    <option value="100">100</option>
                </select>
                <span>entries</span>
            </div>
            <a id="newEmployeeBtn" class="btn" href="{{ route('create-employee') }}">New Entry</a>
            </form>
            <div class="bg-slate-100 px-4 py-1 rounded-lg">
                <label for="hardwareSearch">Search</label>
                <input class="border-none bg-slate-100 focus:outline-none" type="search" name="hardwareSearch" id="hardwareSearch">
            </div>
        </div>
        
        {{-- Table --}}
        <div id="employeeList" class="p-2 bg-white rounded-lg">

            <table class="table-auto border border-collapse w-full">
                <thead>
                <tr class="">
                    <th class="border px-2 py-1">#</th>
                    <th class="border px-2 py-1">Emp. ID</th>
                    <th class="border px-2 py-1">BU</th>
                    <th class="border px-2 py-1">Dept.</th>
                    <th class="border px-2 py-1">Fname</th>
                    <th class="border px-2 py-1">Lname</th>
                    <th class="border px-2 py-1">MName</th>
                    <th class="border px-2 py-1">Ext. Name</th>
                    <th class="border px-2 py-1">Gender</th>
                    <th class="border px-2 py-1">Position</th>
                    <th class="border px-2 py-1">Email</th>
                    <th class="border px-2 py-1">Date Hired</th>
                    <th class="border px-2 py-1">Emp. Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="border px-2 py-1">1</td>
                    <td class="border px-2 py-1">B22-0169-T</td>
                    <td class="border px-2 py-1">APC-Tarlac Layered Farm</td>
                    <td class="border px-2 py-1">Corp. Service - ISS</td>
                    <td class="border px-2 py-1">Rolly</td>
                    <td class="border px-2 py-1">Castillo</td>
                    <td class="border px-2 py-1">Agustin</td>
                    <td class="border px-2 py-1">N/A</td>
                    <td class="border px-2 py-1">M</td>
                    <td class="border px-2 py-1">IT Specialist</td>
                    <td class="border px-2 py-1">rolly.castillo@rebisco.rebmain.com</td>
                    <td class="border px-2 py-1">Aug. 1, 2022</td>
                    <td class="border px-2 py-1">Regular</td>
                </tr>
                </tbody>
            </table>
        
        </div>
        
    </div>