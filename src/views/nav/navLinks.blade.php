<div class="parentMenu {{ Route::is(['link1', '']) ? 'current' : '' }}">

    <a href="{{ route('link1') }}">Link 1</a>

    {{--@if ($position == 'navigation')--}}
        {{--<div class="overflowMenu overflowMenu__hidden" id="{{ $position }}">--}}

            {{--<div>--}}
                {{--<span><a href="{{ route('domesticTransportation') }}">Domestic Transportation</a></span>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--@endif--}}

</div>

<div class="{{ Route::is('link2') ? 'current' : '' }}"><a href="{{ route('link2') }}">Link 2</a></div>

<div><a href="http://flatworldholdings.com/" target="_blank">Other Companies</a></div>
