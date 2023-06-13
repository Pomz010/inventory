<x-main>
    <div class="flex justify-between mb-6">
        <ul id="assetMenu" class="flex items-center gap-x-6">
            <li class="navTab bg-blue-600"><a href="#">All Assets</a></li>
            <li><a href="#">Hardware</a></li>
            <li><a href="#">Software</a></li>
            <li><a href="#">Toner</a></li>
            <li><a href="#">Others</a></li>
        </ul>

        <span class="navTab bg-slate-500"><a href="{{ route('home') }}">Back</a></span>
    </div>
    <div id="tableContainer" class="flex flex-col justify-center items-center">
        <x-table.all-assets />
        <x-table.hardware />
    </div>
</x-main>