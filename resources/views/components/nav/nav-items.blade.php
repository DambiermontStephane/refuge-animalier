@props([
    'name',
    'icon' => null,
])

<li class="list-none">
    <a href="#" title="#" class="flex items-center gap-2 p-3">
        @if(!is_null($icon))
            <x-dynamic-component :component="'svg.'. $icon"/>
        @endif
        <span>{{$name}}</span>
    </a>
</li>
