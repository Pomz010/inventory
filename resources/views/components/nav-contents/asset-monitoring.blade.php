<x-main>
    <div class="flex justify-between mb-6">
        <ul id="assetMenu" class="flex items-center">
            <li class="activeTab"><a href="#">All Assets</a></li>
            <li class="btnPadding"><a href="#">Hardware</a></li>
            <li class="btnPadding"><a href="#">Software</a></li>
            <li class="btnPadding">
                <select name="" id="">
                    <option value="transactions">Transactions</option>
                    <option value="balance">Balance</option>
                </select>
            </li>
            <li class="btnPadding"><a href="#">Others</a></li>
        </ul>

        <span class="btn bg-slate-500"><a href="{{ route('home') }}">Back</a></span>
    </div>
    <div id="tableContainer" class="flex flex-col justify-center items-center">
        <x-table.all-assets />
        <x-table.hardware />
        <x-table.software />
    </div>
</x-main>