<!-- MAIN COMPONENT -->
<x-main>
    <div class="flex justify-between mb-6">
        <ul id="assetMenu" class="flex items-center">
            <li class="activeTab"><a href="#">All Assets</a></li>
            <li class="btnPadding"><a href="#">Hardware</a></li>
            <li class="btnPadding"><a href="#">Software</a></li>
            <li id="toner" class="btnPadding relative">
                <span>Toner</span>
                <span class="flex flex-col absolute bg-blue-500 text-white rounded-md hidden">
                    <a class="hover:bg-blue-400 hover:rounded-t-md w-full block px-2 py-1" href="#">Balance</a>
                    <a class="hover:bg-blue-400 hover:rounded-b-md w-full block px-2 py-1" href="#">Transactions</a>
                </span>
            </li>
            <li class="btnPadding"><a href="#">Others</a></li>
        </ul>

        <ul class="flex gap-x-2">
            {{-- <li id="newEntry" class="btn bg-slate-500">
                <span>New Entry</span>
                <span class="flex flex-col absolute bg-blue-500 text-white rounded-md hidden">
                    <a class="hover:bg-slate-600 hover:rounded-t-md w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'laptop']) }}">Laptop</a>
                    <a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'system-unit']) }}">System Unit</a>
                    <a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'monitor']) }}">Monitor</a>
                    <a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'printer']) }}">Printer</a>
                    <a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'ups']) }}">UPS</a>
                    <a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'router']) }}">Router</a>
                    <a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'firewall']) }}">Firewall</a>
                    <a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'switch']) }}">Switch</a>
                    <a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'access-point']) }}">Access Point</a>
                    <a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'mobile-device']) }}">Mobile Device</a>
                    <a class="hover:bg-slate-600 w-full block px-2 py-1" href="{{ route('create-asset', ['asset' => 'software']) }}">Software</a>
                    <a class="hover:bg-slate-600 hover:rounded-b-md w-full block px-2 py-1" href="#">Others</a>
                </span>
            </li> --}}
            <li id="newEntryTable" class="btn bg-slate-500">
                <x-forms.partials.dropdown-category />
            </li>
            <li class="btn bg-slate-500"><a href="#">Check-in</a></li>
            <li class="btn bg-slate-500"><a href="#">Check-out</a></li>
        </ul>
        {{-- <span class="btn bg-slate-500"><a href="{{ route('dashboard') }}">Back</a></span> --}}
    </div>
    <div id="tableContainer" class="flex flex-col justify-center items-center">
        <x-table.all-assets />
        <x-table.hardware />
        <x-table.software />
        <x-table.toner-balance />
        <x-table.toner-transactions />
    </div>
</x-main>