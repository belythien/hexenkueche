@if($menuItem->status == 2)
    <span class="menu_item_not_available text-center">
        @if(!empty($menuItem->availability_info))
            {!! $menuItem->availability_info !!}
        @else
            {{__('Zur Zeit leider nicht erhältlich') }}
        @endif
    </span>
@endif
