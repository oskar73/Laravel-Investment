@foreach ($items as $item)
    <li @if ($item->hasChildren())  @lm_attrs($item) class="nav-item" @lm_endattrs @else class="nav-item" @endif>
        <a
            @if($item->parent !== null) @lm_attrs($item)  @else @lm_attrs($item->link) @endif
                class="nav-link menu-arrow justify-content-start"
                @if ($item->hasChildren()) data-bs-toggle="collapse" @endif
            @lm_endattrs
            href="{!! $item->url() !!}">
            {!! $item->title !!}
            @if ($item->hasChildren())
                @if($item->parent !== null)
                    <i class="right-icon">
                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </i>
                @endif
            @endif
        </a>
        @if ($item->hasChildren())
            <ul class="iq-header-sub-menu list-unstyled collapse">
                @include('vendor.laravel-menu.custom-menu-items', ['items' => $item->children()])
            </ul>
        @endif
    </li>
@endforeach
