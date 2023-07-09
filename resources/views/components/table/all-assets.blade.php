
  <table id="assetsTable" class="table-auto border border-collapse">
    <thead>
      <tr class="">
        <th class="border px-2 py-1">#</th>
        <th class="border px-2 py-1">Asset Tag</th>
        <th class="border px-2 py-1">Asset Type</th>
        <th class="border px-2 py-1">Current User</th>
        <th class="border px-2 py-1">Department</th>
        <th class="border px-2 py-1">BU Location</th>
        <th class="border px-2 py-1">Building Location</th>
        <th class="border px-2 py-1">Date Purchased</th>
        <th class="border px-2 py-1">Warranty Expiration</th>
        <th class="border px-2 py-1">DR #</th>
        <th class="border px-2 py-1">PO #</th>
        <th class="border px-2 py-1">Price</th>
        <th class="border px-2 py-1">Condition</th>
        <th class="border px-2 py-1">Status</th>
      </tr>
    </thead>
    <tbody>
      @php
       $counter = 1;   
      @endphp

      @foreach ($hardwareAssets as $asset)
      <tr>
        <td class="border px-2 py-1">{{ $counter++ }}</td>
        <td class="border px-2 py-1">{{ $asset->asset_tag }}</td>
        <td class="border px-2 py-1">{{ $asset->item }}</td>
        <td class="border px-2 py-1">{{ $asset->user }}</td>
        <td class="border px-2 py-1"></td>
        <td class="border px-2 py-1"></td>
        <td class="border px-2 py-1"></td>
        <td class="border px-2 py-1">{{ $asset->purchase_date }}</td>
        <td class="border px-2 py-1">{{ $asset->warranty }}</td>
        <td class="border px-2 py-1">{{ $asset->dr_number }}</td>
        <td class="border px-2 py-1">{{ $asset->po_number }}</td>
        <td class="border px-2 py-1">{{ $asset->price }}</td>
        <td class="border px-2 py-1"></td>
        <td class="border px-2 py-1"></td>
      @endforeach
      </tr>
    </tbody>
</table>