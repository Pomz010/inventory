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

            @case('printer')
                <x-forms.new-printer />
                @break

            @case('ups')
                <x-forms.new-ups />
                @break

                
            @case('router')
                <x-forms.new-router />
                @break

            @case('firewall')
                <x-forms.new-firewall />
                @break

            @case('switch')
                <x-forms.new-switch />
                @break

            @case('access-point')
                <x-forms.new-access-point />
                @break
            @default
        @endswitch
    </div>
</x-main>