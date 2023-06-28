<x-main>
    <div class="w-4/12 mx-auto">
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

            @case('mobile-device')
                <x-forms.new-mobile-device />
                @break

            @case('software')
                <x-forms.new-software />
                @break

            @case('others')
                <x-forms.new-others />
                @break

            @case('toner-request')
                <x-forms.new-toner-request />
                @break
            @default
        @endswitch
    </div>
</x-main>