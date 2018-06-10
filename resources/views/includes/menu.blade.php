<div class="main_menu">
    @foreach ($menu_items as $item)
        <a href="{{ $item->link }}" class="main_menu_item @if(app()->view->getSections()['body_class'] == $item->slug)active @endif">
            {{ $item->title }}
        </a>
    @endforeach
</div>
