<x-main>
    <div class="flex justify-between mb-6">
        <ul id="departmentTabs" class="flex items-center">
            <li class="activeTab"><a href="#">Business Unit</a></li>
            <li class="btnPadding"><a href="#">Departments</a></li>
            <x-forms.partials.department-entry-form id="newDepartment" class="btnPadding"/>
        </ul>
    </div>
    <div id="tableContainer" class="flex flex-col justify-center items-center">
        <x-table.business-unit />
        {{-- <x-table.department /> --}}
    </div>
</x-main>