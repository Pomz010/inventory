<div id="assetsTable" class="flex flex-col gap-1">
    {{-- Table Filter --}}
    <div class="flex justify-between bg-white p-2 rounded-md items-center">
        <form>
            <label for="rowQty">Show</label>
            <select class="border place-self-start" name="rowQty" id="rowQty">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="75">75</option>
                <option value="100">100</option>
            </select>
            <span>entries</span>
        </form>
        <div class="bg-slate-100 px-4 py-1 rounded-lg">
            <label for="">Search</label>
            <input class="border-none bg-slate-100 focus:outline-none" type="search" name="" id="">
        </div>
    </div>
    
    {{-- Table --}}
    <div class="p-2 bg-white rounded-lg">
      <table class="table-auto border border-collapse">
        <thead>
          <tr class="">
            <th class="border px-2 py-1">#</th>
            <th class="border px-2 py-1">Asset Tag</th>
            <th class="border px-2 py-1">Asset Type</th>
            <th class="border px-2 py-1">Current User</th>
            <th class="border px-2 py-1">Department</th>
            <th class="border px-2 py-1">Location</th>
            <th class="border px-2 py-1">Date Purchased</th>
            <th class="border px-2 py-1">Warranty</th>
            <th class="border px-2 py-1">Condition</th>
            <th class="border px-2 py-1">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border px-2 py-1">1</td>
            <td class="border px-2 py-1">APC-00603</td>
            <td class="border px-2 py-1">Laptop</td>
            <td class="border px-2 py-1">Rolly Castillo</td>
            <td class="border px-2 py-1">ISS</td>
            <td class="border px-2 py-1">APC-Feedmill</td>
            <td class="border px-2 py-1">Oct. 9 2021</td>
            <td class="border px-2 py-1">Under Warranty</td>
            <td class="border px-2 py-1">Good</td>
            <td class="border px-2 py-1">In-use</td>
          </tr>
        </tbody>
    </table>
    </div>
    
</div>