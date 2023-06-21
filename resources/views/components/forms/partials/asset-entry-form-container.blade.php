<li id='{{ $id }}' class="btn bg-slate-500">
    <span class="cursor-pointer">New Entry</span>
    <ul class="flex flex-col absolute bg-blue-500 text-white rounded-md hidden">
        <li><a class="hover:bg-slate-600 hover:rounded-t-md w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'laptop']) }}">Laptop</a></li>
        <li><a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'system-unit']) }}">System Unit</a></li>
        <li><a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'monitor']) }}">Monitor</a></li>
        <li><a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'printer']) }}">Printer</a></li>
        <li><a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'ups']) }}">UPS</a></li>
        <li><a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'router']) }}">Router</a></li>
        <li><a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'firewall']) }}">Firewall</a></li>
        <li><a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'switch']) }}">Switch</a></li>
        <li><a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'access-point']) }}">Access Point</a></li>
        <li><a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'mobile-device']) }}">Mobile Device</a></li>
        <li><a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'software']) }}">Software</a></li>
        <li><a class="hover:bg-slate-600 hover:rounded-b-md w-full block px-2 py-1" href="#">Others</a></li>
    </ul>
</li>