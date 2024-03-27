<!-- MAIN COMPONENT -->
<x-main>
    <div class="flex justify-between mb-6">
        <ul id="assetMenu" class="flex items-center">
            {{-- <li class="activeTab"><a href="#">All Assets</a></li> --}}
            <li class="activeTab"><a href="">Hardware</a></li>
            <li class="btnPadding"><a href="">Software</a></li>
            <li id="tonerTab" class="btnPadding relative">
                <span>Toner</span>
                <span class="flex flex-col absolute bg-blue-500 text-white rounded-md hidden">
                    <a class="hover:bg-blue-400 hover:rounded-t-md w-full block px-2 py-1" href="">Balance</a>
                    <a class="hover:bg-blue-400 hover:rounded-b-md w-full block px-2 py-1" href="">Transactions</a>
                </span>
            </li>
            {{-- <li class="btnPadding"><a href="#">Others</a></li> --}}
        </ul>

        <ul class="flex gap-x-2">
            <x-forms.partials.asset-entry-form-container id="newEntryTable"/>
            <li class="btn bg-slate-500"><a href="#">Check-in</a></li>
            <li class="btn bg-slate-500"><a href="#">Check-out</a></li>
        </ul>
        {{-- <span class="btn bg-slate-500"><a href="{{ route('dashboard') }}">Back</a></span> --}}
    </div>
    <div id="tableContainer" class="flex flex-col justify-center items-center">
        <x-table.hardware :hardwareAssets='$hardwareAssets' :laptops='$laptops' :systemUnits='$systemUnits'/>
        <x-table.software :softwareAssets='$softwareAssets'/>
        <x-table.toner-balance />
        <x-table.toner-transactions />
    </div>
</x-main>