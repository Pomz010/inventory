<x-main>
    <div class="grid justify-center items-center">
        @switch($asset)
            @case('laptop')
                <x-forms.new-laptop />
                @break

            @case('system-unit')
                <x-forms.new-system-unit />
                @break

            @case('monitor')
                <x-forms.new-monitor />
                @break
            @default
                
        @endswitch
    </div>

    {{-- {{ $asset }} --}}
</x-main>