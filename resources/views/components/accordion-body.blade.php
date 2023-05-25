<div class="divide-y">
    <div class="grid p-2 items-center grid-cols-4">
        <span class="w-max h-10 flex justify-center"><img src={{ $icon }} alt=""></span>
        <span class="col-start-2 col-span-2">{{ $accordionTitle }}</span>
        <span class="w-6 justify-self-end">
            <img src="img/accordion-arrow.svg" alt="">
        </span>
    </div>
    <ul class="divide-y">
        @foreach ($items as $item)
            @switch($item)
                @case('New Movement')
                    <li class="flex items-center gap py-2 pl-10"><span><img class="w-5/5 h-6" src="img/movement.svg" alt=""></span>{{ $item }}</li> 
                    @break
            
                @case('Hardware')
                    <li class="flex items-center gap py-2 pl-10"><span><img class="w-5/5 h-6" src="img/hardware.svg" alt=""></span>{{ $item }}</li> 
                    @break
            
                @default
                    <li class="flex items-center gap py-2 pl-10"><span><img class="w-5/5 h-6" src="img/movement.svg" alt=""></span>{{ $item }}</li> 
            @endswitch   
        @endforeach 
    </ul>
</div>
