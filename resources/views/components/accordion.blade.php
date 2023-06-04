<div class="divide-y cursor-pointer">
    <div class="flex whitespace-nowrap p-1 justify-between gap-2">
        <div class="flex gap-x-2 items-center">
            <span class="w-max"><img class="h-6" src="{{ $icon }}" alt=""></span>
            <span class="text-xs">{{ $accordionTitle }}</span>
        </div>
        
        <span class="flex w-4">
            <img class="place-self-center transform transition-transform duration-300" src="img/accordion-arrow.svg" alt="">
        </span>
    </div>
    <ul id="accordionItems" class="divide-y hidden">
        @foreach ($items as $item)
            @switch($item)
                @case('New Movement')
                    <li class="flex whitespace-nowrap items-center gap-x-1 py-1 pl-5 text-xs"><span><img class="w-5/5 h-6" src="img/movement.svg" alt=""></span>{{ $item }}</li> 
                    @break
            
                @case('Hardware')
                    <li class="flex whitespace-nowrap items-center gap-x-1 py-2 pl-5 text-xs"><span><img class="w-5/5 h-6" src="img/hardware.svg" alt=""></span>{{ $item }}</li> 
                    @break
            
                @default
                    <li class="flex whitespace-nowrap items-center gap-x-1 py-2 pl-5 text-xs"><span><img class="w-5/5 h-6" src="img/movement.svg" alt=""></span>{{ $item }}</li> 
            @endswitch   
        @endforeach 
    </ul>
</div>
