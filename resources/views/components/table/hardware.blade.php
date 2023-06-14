<div id="hardwareTable" class="flex flex-col gap-1 hidden">
    {{-- Table Filter --}}
    <div class="flex justify-between">
        <form>
            <label for="hardwareRow">Show</label>
            <select class="border place-self-start" name="hardwareRow" id="hardwareRow">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="75">75</option>
                <option value="100">100</option>
            </select>
            <span>entries</span>
        </form>
        <div>
            <label for="">Search</label>
            <input class="border " type="search" name="" id="">
        </div>
    </div>
    
    {{-- Table --}}
    <table class="table-auto border border-collapse">
        <thead>
          <tr class="">
            <th class="border px-2 py-1">#</th>
            <th class="border px-2 py-1">Asset Type</th>
            <th class="border px-2 py-1">Brand</th>
            <th class="border px-2 py-1">Model</th>
            <th class="border px-2 py-1">Asset Tag</th>
            <th class="border px-2 py-1">Processor</th>
            <th class="border px-2 py-1">Memory</th>
            <th class="border px-2 py-1">Storage</th>
            <th class="border px-2 py-1">Graphics Card</th>
            <th class="border px-2 py-1">Date Purchased</th>
            <th class="border px-2 py-1">Current User</th>
            <th class="border px-2 py-1">Actions</th>
            <th class="border px-2 py-1">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border px-2 py-1">1</td>
            <td class="border px-2 py-1">Laptop</td>
            <td class="border px-2 py-1">Lenovo</td>
            <td class="border px-2 py-1">ThinkPad L14</td>
            <td class="border px-2 py-1">APC-00603</td>
            <td class="border px-2 py-1">Intel Core i5-1135G7</td>
            <td class="border px-2 py-1">8Gb</td>
            <td class="border px-2 py-1">500Gb SSD</td>
            <td class="border px-2 py-1">Integrated</td>
            <td class="border px-2 py-1">Oct. 9, 2021</td>
            <td class="border px-2 py-1">Rolly A. Castillo</td>
            <td class="border px-2 py-1">In-use</td>
            <td class="border px-2 py-1">Good</td>
          </tr>
        </tbody>
    </table>
</div>