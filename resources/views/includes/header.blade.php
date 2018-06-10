<section class="header">
<div class="header_title">@yield('page_title')</div>
@if (empty($hide_menu))
    @include('includes.menu')
@endif
</section>
