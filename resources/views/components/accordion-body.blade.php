<div class="divide-y">
    <div class="flex whitespace-nowrap p-1 items-center gap-2">
        <span class="flex-none auto-cols-min"><img class="h-6" src={{ $icon }} alt=""></span>
        <span class="text-sm">{{ $accordionTitle }}</span>
        <span class="w-6 justify-self-end place-self-end">
            <img class="" src="img/accordion-arrow.svg" alt="">
        </span>
    </div>
    <ul class="divide-y hidden">
        @foreach ($items as $item)
            @switch($item)
                @case('New Movement')
                    <li class="flex items-center gap-x-1 py-1 pl-10"><span><img class="w-5/5 h-6" src="img/movement.svg" alt=""></span>{{ $item }}</li> 
                    @break
            
                @case('Hardware')
                    <li class="flex items-center gap-x-1 py-2 pl-10"><span><img class="w-5/5 h-6" src="img/hardware.svg" alt=""></span>{{ $item }}</li> 
                    @break
            
                @default
                    <li class="flex items-center gap-x-1 py-2 pl-10"><span><img class="w-5/5 h-6" src="img/movement.svg" alt=""></span>{{ $item }}</li> 
            @endswitch   
        @endforeach 
    </ul>
</div>
