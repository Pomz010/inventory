<x-main>
    <div class="w-4/12 mx-auto">
        @switch($asset)
            @case('laptop')
                <x-forms.new-laptop :vendors='$vendors' />
                @break

            @case('system-unit')
                <x-forms.new-system-unit :vendors='$vendors'/>
                @break

            @case('monitor')
                <x-forms.new-monitor :vendors='$vendors'/>
                @break

            @case('printer')
                <x-forms.new-printer :vendors='$vendors'/>
                @break

            @case('ups')
                <x-forms.new-ups :vendors='$vendors'/>
                @break
                
            @case('router')
                <x-forms.new-router :vendors='$vendors'/>
                @break

            @case('firewall')
                <x-forms.new-firewall :vendors='$vendors'/>
                @break

            @case('switch')
                <x-forms.new-switch :vendors='$vendors'/>
                @break

            @case('access-point')
                <x-forms.new-access-point :vendors='$vendors'/>
                @break

            @case('mobile-device')
                <x-forms.new-mobile-device :vendors='$vendors'/>
                @break

            @case('software')
                <x-forms.new-software :vendors='$vendors'/>
                @break

            @case('others')
                <x-forms.new-others :vendors='$vendors'/>
                @break

            @case('toner-request')
                <x-forms.new-toner-request />
                @break
            @default
        @endswitch
    </div>
</x-main>