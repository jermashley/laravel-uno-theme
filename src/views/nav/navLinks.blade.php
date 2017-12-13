<div class="parentMenu {{ Route::is(['link1', '']) ? 'current' : '' }}">

    <a href="javascript:void(0)" class="parentLink" data-link="{{ route('/') }}">Link 1<i class="fa fa-caret-down ml-2"></i></span></a>
    
        {{--<div class="overflowMenu overflowMenu__hidden">--}}

            {{--<div>--}}
                {{--<span><a href="{{ route('domesticTransportation') }}">Domestic Transportation</a></span>--}}
            {{--</div>--}}

        {{--</div>--}}

</div>

<div class="{{ Route::is('link2') ? 'current' : '' }}"><a href="{{ route('link2') }}">Link 2</a></div>

<div><a href="http://flatworldholdings.com/" target="_blank">Other Companies</a></div>
