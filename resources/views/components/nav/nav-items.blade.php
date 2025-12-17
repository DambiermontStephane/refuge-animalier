@props([
    'name',
    'icon' => null,
])

<li>
    <a href="#" title="#">
        @if(!is_null($icon))
            <x-dynamic-component :component="'svg.'. $icon"/>
        @endif
        <span>{{$name}}</span>
    </a>
</li>
