<x-header />
        <x-header-nav />
        <div class="flex">
            <aside class="bg-blue-300 h-[100vh]">
                <nav id="sidebar" class="divide-y">
                        @php
                            $accordionItems = ['New Movement', 'Hardware', 'Software', 'Service Support', 'vendor', 'Toner', 'Others'];
                        @endphp
                        <x-accordion-body accordionTitle="Asset Monitoring" :items="$accordionItems" icon="img/barcode.svg" />

                        @php
                            $accordionItems = ["New", "List"];
                        @endphp
                        <x-accordion-body accordionTitle="Department" :items="$accordionItems" icon="img/department.svg" />

                        @php
                            $accordionItems = ["New", "List"];
                        @endphp
                        <x-accordion-body accordionTitle="Employee List" :items="$accordionItems" icon="img/employees.svg" />


                        @php
                            $accordionItems = ["New", "List"];
                        @endphp
                        <x-accordion-body accordionTitle="Users" :items="$accordionItems" icon="img/users.svg" />


                        {{-- <x-accordion-body accordionTitle="Reports"/> --}}
                </nav>
            </aside>
            <main class="bg-red-300 w-full"></main>
        </div>
<x-footer />