<div id="softwareTable" class="flex flex-col gap-1 hidden">
    {{-- Table Filter --}}
    <div class="flex justify-between bg-white p-2 rounded-md items-center">
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
        <div class="bg-slate-100 px-4 py-1 rounded-lg">
            <label for="softwareSearch">Search</label>
            <input class="border-none bg-slate-100 focus:outline-none" type="search" name="softwareSearch" id="softwareSearch">
        </div>
    </div>
    
    {{-- Table --}}
    <div class="p-2 bg-white rounded-lg">
      <table class="table-auto border border-collapse">
          <thead>
            <tr class="">
              <th class="border px-2 py-1">#</th>
              <th class="border px-2 py-1">Name</th>
              <th class="border px-2 py-1">Description</th>
              <th class="border px-2 py-1">Developer</th>
              <th class="border px-2 py-1">Version</th>
              <th class="border px-2 py-1">Category</th>
              <th class="border px-2 py-1">Product Key</th>
              <th class="border px-2 py-1">License Type</th>
              <th class="border px-2 py-1">License Expiration</th>
              <th class="border px-2 py-1">Date Installed</th>
              <th class="border px-2 py-1">User</th>
              <th class="border px-2 py-1">Host Machine</th>
              <th class="border px-2 py-1">Purchase Date</th>
              <th class="border px-2 py-1">DR #</th>
              <th class="border px-2 py-1">PO #</th>
              <th class="border px-2 py-1">Price</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $softwareAssets as $software )
            <tr>
              <td class="border px-2 py-1">1</td>
              <td class="border px-2 py-1">{{ $software->name }}</td>
              <td class="border px-2 py-1">MS Office Home and Business 2019</td>
              <td class="border px-2 py-1">Microsoft</td>
              <td class="border px-2 py-1">2019</td>
              <td class="border px-2 py-1">OEM</td>
              <td class="border px-2 py-1">XXXXX-XXXX-XXXX-XX</td>
              <td class="border px-2 py-1">One-time payment</td>
              <td class="border px-2 py-1">N/A</td>
              <td class="border px-2 py-1">Oct. 9, 2021</td>
              <td class="border px-2 py-1">Rolly A. Castillo</td>
              <td class="border px-2 py-1">APC-00603</td>
              <td class="border px-2 py-1">Oct. 9, 2021</td>
              <th class="border px-2 py-1"></th>
              <th class="border px-2 py-1"></th>
              <th class="border px-2 py-1"></th>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
</div>