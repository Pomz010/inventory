<!-- MAIN COMPONENT -->
<x-main>
    <x-partials.asset-menu />
    <div id="tableContainer" class="flex flex-col justify-center items-center">
        <x-table.hardware :hardwareAssets='$hardwareAssets' :laptops='$laptops' :systemUnits='$systemUnits' />
        <x-table.software />
        <x-table.toner-balance />
        <x-table.toner-transactions />
    </div>
</x-main>