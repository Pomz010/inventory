<div id="hardwareTable" class="flex flex-col gap-1">
    {{-- Table Filter --}}
    <div class="flex justify-between bg-white p-2 rounded-md items-center">

        <form class="flex gap-x-8">
          <div class="border-slate-950 pr-8">
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
        </form>

        <div class="bg-slate-100 px-4 py-1 rounded-lg">
            <label for="hardwareSearch">Search</label>
            <input class="border-none bg-slate-100 focus:outline-none" type="search" name="hardwareSearch" id="hardwareSearch">
        </div>
    </div>
    
    {{-- Table --}}
    <div id="categories" class="p-2 bg-white rounded-lg">
        <table id="businessUnitTable" class="table-auto border border-collapse hidden">
            <thead>
                <tr class="">
                    <th class="border px-2 py-1">#</th>
                    <th class="border px-2 py-1">BU Code</th>
                    <th class="border px-2 py-1">BU Name</th>
                    <th class="border px-2 py-1">Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-2 py-1">1</td>
                    <td class="border px-2 py-1">BU-1</td>
                    <td class="border px-2 py-1">APC-Tarlac Layer Farm</td>
                    <td class="border px-2 py-1">Brgy. Parsolingan, Gerona, Tarlac</td>
                </tr>
                <tr>
                    <td class="border px-2 py-1">2</td>
                    <td class="border px-2 py-1">BU-2</td>
                    <td class="border px-2 py-1">APC-Tarlac Feedmill</td>
                    <td class="border px-2 py-1">Brgy. Parsolingan, Gerona, Tarlac</td>
                </tr>
                <tr>
                    <td class="border px-2 py-1">3</td>
                    <td class="border px-2 py-1">BU-3</td>
                    <td class="border px-2 py-1">APC-Tarlac Breeder Farm</td>
                    <td class="border px-2 py-1">Brgy. San Agustin, Gerona, Tarlac</td>
                </tr>
            </tbody>
        </table>
    </div>
    
</div>