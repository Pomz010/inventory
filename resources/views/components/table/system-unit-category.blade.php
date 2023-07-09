
<table id="systemUnit" class="table-auto border border-collapse hidden">
    <thead>
      <tr class="">
        <th class="border px-2 py-1">#</th>
        <th class="border px-2 py-1">Asset Tag</th>
        <th class="border px-2 py-1">Brand</th>
        <th class="border px-2 py-1">Board Model</th>
        <th class="border px-2 py-1">Asset Tag</th>
        <th class="border px-2 py-1">Processor</th>
        <th class="border px-2 py-1">Memory</th>
        <th class="border px-2 py-1">Storage</th>
        <th class="border px-2 py-1">Graphics Card</th>
        <th class="border px-2 py-1">Date Purchased</th>
        <th class="border px-2 py-1">Current User</th>
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

      @foreach ($systemUnits as $systemUnit)
      <tr>
        <td class="border px-2 py-1">{{ $counter++ }}</td>
        <td class="border px-2 py-1">{{ $systemUnit->item }}</td>
        <td class="border px-2 py-1">{{ $systemUnit->brand }}</td>
        <td class="border px-2 py-1">{{ $systemUnit->motherboard }}</td>
        <td class="border px-2 py-1">{{ $systemUnit->asset_tag }}</td>
        <td class="border px-2 py-1">{{ $systemUnit->processor }}</td>
        <td class="border px-2 py-1">{{ $systemUnit->memory }}</td>
        <td class="border px-2 py-1">{{ $systemUnit->storage }}</td>
        <td class="border px-2 py-1">{{ $systemUnit->gpu }}</td>
        <td class="border px-2 py-1">{{ $systemUnit->purchase_date }}</td>
        <td class="border px-2 py-1">{{ $systemUnit->user }}</td>
        <th class="border px-2 py-1">{{ $systemUnit->dr_number }}</th>
        <th class="border px-2 py-1">{{ $systemUnit->po_number }}</th>
        <th class="border px-2 py-1">{{ $systemUnit->price }}</th>
        <td class="border px-2 py-1">{{ $systemUnit->condition }}</td>
        <td class="border px-2 py-1">{{ $systemUnit->status }}</td>
      </tr>
      @endforeach
    </tbody>
</table>
