
    <table id="laptop" class="table-auto border border-collapse hidden">
        <thead>
          <tr class="">
            <th class="border px-2 py-1">#</th>
            <th class="border px-2 py-1">Asset Type</th>
            <th class="border px-2 py-1">Brand</th>
            <th class="border px-2 py-1">Model</th>
            <th class="border px-2 py-1">Asset Tag</th>
            <th class="border px-2 py-1">Serial #</th>
            <th class="border px-2 py-1">Processor</th>
            <th class="border px-2 py-1">Memory</th>
            <th class="border px-2 py-1">Storage</th>
            <th class="border px-2 py-1">Graphics Card</th>
            <th class="border px-2 py-1">Date Purchased</th>
            <th class="border px-2 py-1">Current User</th>
            <th class="border px-2 py-1">DR #</th>
            <th class="border px-2 py-1">PO #</th>
            <th class="border px-2 py-1">Price</th>
            <th class="border px-2 py-1">Condtion</th>
            <th class="border px-2 py-1">Status</th>
          </tr>
        </thead>
        <tbody>
          @php
              $counter = 1;
          @endphp
          @foreach ($hardwareAssets as $hardwareAsset)
          <tr>
            <td class="border px-2 py-1">{{ $counter++ }}</td>
            <td class="border px-2 py-1">{{ $hardwareAsset->asset_tag }}</td>
            <td class="border px-2 py-1">Lenovo</td>
            <td class="border px-2 py-1">ThinkPad L14</td>
            <td class="border px-2 py-1">APC-00603</td>
            <td class="border px-2 py-1">XXX-XXX-XXX-XX</td>
            <td class="border px-2 py-1">Intel Core i5-1135G7</td>
            <td class="border px-2 py-1">8Gb</td>
            <td class="border px-2 py-1">500Gb SSD</td>
            <td class="border px-2 py-1">Integrated</td>
            <td class="border px-2 py-1">Oct. 9, 2021</td>
            <td class="border px-2 py-1">Rolly A. Castillo</td>
            <th class="border px-2 py-1"></th>
            <th class="border px-2 py-1"></th>
            <th class="border px-2 py-1"></th>
            <td class="border px-2 py-1">In-use</td>
            <td class="border px-2 py-1">Good</td>
          </tr>
          @endforeach
        </tbody>
    </table>
