<div class="card {{ $cardSize }} {{ $leadImageLocation or '' }} {{ $hasShadow or '' }} {{ $isAnimated or '' }} {{ $cardClasses or '' }}" @unless (empty($cardId)) id="{{ $cardId }}" @endunless>

    @unless (empty($hasLeadImage))
    <div class="lead">

        @unless (empty($hasInset))
            @unless (empty($insetIsImage))
            <img src="{{ $insetImageSource or '' }}" alt="{{ $insetImageDescription or '' }}" class="lead__insetImage">
            @endunless

            @unless (empty($insetIsText))
            <span class="leadInsetText">{{ $insetText or '' }}</span>
            @endunless
        @endunless

        @unless (empty($hasTimestamp))
        <span class="timestamp">{{ $timestamp or '' }}</span>
        @endunless

        <img src="{{ $leadImageSource or '' }}" class="imageBg {{ $leadImageFit or '' }} {{ $leadImagePosition or '' }} {{ $leadImageIsDimmed or '' }}" alt="{{ $leadImageDescription or '' }}">

    </div>
    @endunless

    <div class="cardContent">

        @unless (empty($cardHeading))
        <span class="cardContent__heading {{ $headingSize or '' }}">
            {{ $cardHeading or '' }}
        </span>
        @endunless

        @unless (empty($hasDivider))
        <span class="cardContent__divider"></span>
        @endunless

        @unless (empty($cardText))
        <span class="cardContent__text {{ $textSize or '' }}">
            {{ str_limit($cardText) }}
        </span>
        @endunless

        @unless (empty($hasFooter))
        <span class="cardContent__footer">
            @component('components.socialIcons')
                @unless (empty($linkedin))
                    @slot('linkedin')
                        {{ $linkedin }}
                    @endslot
                @endunless

                @unless (empty($twitter))
                    @slot('twitter')
                        {{ $twitter }}
                    @endslot
                @endunless

                @unless (empty($facebook))
                    @slot('facebook')
                        {{ $facebook }}
                    @endslot
                @endunless

                @unless (empty($instagram))
                    @slot('instagram')
                        {{ $instagram }}
                    @endslot
                @endunless
            @endcomponent
        </span>
        @endunless

        @unless (empty($hasAction))
        <a href="{{ $actionLink or '#' }}" class="cardContent__action {{ $actionClasses or 'link' }}">
            {{ $actionText or 'Read More' }}
        </a>
        @endunless

    </div>

</div>
