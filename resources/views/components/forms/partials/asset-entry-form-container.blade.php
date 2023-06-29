<ul class="z-10">
    <li id='{{ $id }}' class="btn btnPadding">
        <span>New Entry</span>
        <ul class="flex flex-col absolute bg-blue-500 text-white rounded-md w-max hidden z-10">
            <li><a class="newEntryCategory hover:rounded-t-md" href="{{ route('create-asset', ['asset' => 'laptop']) }}">Laptop</a></li>
            <li><a class="newEntryCategory" href="{{ route('create-asset', ['asset' => 'system-unit']) }}">System Unit</a></li>
            <li><a class="newEntryCategory" href="{{ route('create-asset', ['asset' => 'monitor']) }}">Monitor</a></li>
            <li><a class="newEntryCategory" href="{{ route('create-asset', ['asset' => 'printer']) }}">Printer</a></li>
            <li><a class="newEntryCategory" href="{{ route('create-asset', ['asset' => 'ups']) }}">UPS</a></li>
            <li><a class="newEntryCategory" href="{{ route('create-asset', ['asset' => 'router']) }}">Router</a></li>
            <li><a class="newEntryCategory" href="{{ route('create-asset', ['asset' => 'firewall']) }}">Firewall</a></li>
            <li><a class="newEntryCategory" href="{{ route('create-asset', ['asset' => 'switch']) }}">Switch</a></li>
            <li><a class="newEntryCategory" href="{{ route('create-asset', ['asset' => 'access-point']) }}">Access Point</a></li>
            <li><a class="newEntryCategory" href="{{ route('create-asset', ['asset' => 'mobile-device']) }}">Mobile Device</a></li>
            <li><a class="newEntryCategory" href="{{ route('create-asset', ['asset' => 'software']) }}">Software</a></li>
            <li><a class="newEntryCategory" href="{{ route('create-asset', ['asset' => 'others']) }}">Others</a></li>
            <li><a class="newEntryCategory" href="{{ route('create-asset', ['asset' => 'software']) }}">Software</a></li>
            <li><a class="newEntryCategory hover:rounded-b-md" href="{{ route('create-asset', ['asset' => 'toner-request']) }}">Toner Request</a></li>
        </ul>
    </li>
</ul>