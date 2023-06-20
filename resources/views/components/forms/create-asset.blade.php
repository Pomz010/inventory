<x-main>
    <div class="grid h-screen justify-center items-center">
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
</x-main>