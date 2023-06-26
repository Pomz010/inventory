<x-main>
    <div class="grid justify-center items-center">
        @switch($department)
            @case('business-unit')
                <x-forms.new-business-unit />
                @break

            @case('department')
                <x-forms.new-department />
                @break

            @default
        @endswitch
    </div>
</x-main>