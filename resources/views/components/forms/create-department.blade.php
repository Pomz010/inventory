<x-main>
    <div class="formWidth">
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