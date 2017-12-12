<div class="parentMenu {{ Route::is(['link1', '']) ? 'current' : '' }}">

    <a href="javascript:void(0)" class="parentLink" data-link="{{ route('/') }}">Link 1 <span style="margin-left: .75rem;"><i class="fa fa-caret-down"></i></span></a>

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
