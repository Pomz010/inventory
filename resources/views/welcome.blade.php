<x-header />
        <x-header-nav />
        <div class="grid grid-cols-12">
            <aside class="col-start-1 col-span-2 bg-blue-300">
                <nav class="divide-y">
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
            <main class="col-start-3 col-span-10 bg-red-300 w-full"></main>
        </div>
<x-footer />