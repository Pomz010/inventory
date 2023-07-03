<x-main>
    <div class="grid items-center w-4/12 mx-auto">
        @switch($department)
            @case('business-unit')
                <x-forms.new-business-unit />
                @break

            @case('department')
                <x-forms.new-department />
                @break

            @case('section')
                <x-forms.new-section />
                @break

            @default
        @endswitch
    </div>
</x-main>