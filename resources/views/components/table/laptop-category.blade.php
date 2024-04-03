
    <table id="laptop" class="table-auto border border-collapse hidden">
        <thead>
          <tr class="">
            <th class="border px-2 py-1">#</th>
            {{-- <th class="border px-2 py-1">Asset Type</th> --}}
            <th class="border px-2 py-1">Asset Tag</th>
            <th class="border px-2 py-1">Brand</th>
            <th class="border px-2 py-1">Model</th>
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
          @foreach ($laptops as $laptop)
          <tr>
            <td class="border px-2 py-1">{{ $counter++ }}</td>
            {{-- <td class="border px-2 py-1">{{ $laptop->item }}</td> --}}
            <td class="border px-2 py-1">{{ $laptop->asset_tag }}</td>
            <td class="border px-2 py-1">{{ $laptop->brand }}</td>
            <td class="border px-2 py-1">{{ $laptop->model }}</td>
            <td class="border px-2 py-1">{{ $laptop->serial_number }}</td>
            <td class="border px-2 py-1">{{ $laptop->processor }}</td>
            <td class="border px-2 py-1">{{ $laptop->memory }}</td>
            <td class="border px-2 py-1">{{ $laptop->storage }}</td>
            <td class="border px-2 py-1">{{ $laptop->gpu }}</td>
            <td class="border px-2 py-1">{{ $laptop->purchase_date }}</td>
            <td class="border px-2 py-1">{{ $laptop->user }}</td>
            <th class="border px-2 py-1">{{ $laptop->dr_number }}</th>
            <th class="border px-2 py-1">{{ $laptop->po_number }}</th>
            <th class="border px-2 py-1">{{ $laptop->price }}</th>
            <td class="border px-2 py-1">{{ $laptop->condition }}</td>
            <td class="border px-2 py-1">{{ $laptop->status }}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
