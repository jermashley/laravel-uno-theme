<div class="card {{ $cardSize }} {{ $leadImageLocation or '' }} {{ $hasShadow or '' }} {{ $isAnimated or '' }} {{ $cardClasses }}" @unless (empty($cardId)) id="{{ $cardId }}" @endunless>

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

        @unless (empty($hasHeading))
        <span class="cardContent__heading {{ $headingSize or '' }}">
            {{ $cardHeading or '' }}
        </span>
        @endunless

        @unless (empty($hasDivider))
        <span class="cardContent__divider"></span>
        @endunless

        @unless (empty($hasText))
        <span class="cardContent__text {{ $textSize or '' }}">
            {{ $cardText or '' }}
        </span>
        @endunless

        @unless (empty($hasFooter))
        <span class="cardContent__footer">
            @component('components.socialIcons', [
                'linkedin' => $linkedin,
                'twitter' => $twitter,
                'facebook' => $facebook,
                'instagram' => $instagram
            ])
            @endcomponent
        </span>
        @endunless

        @unless (empty($hasAction))
        <a href="{{ $actionLink or '#' }}" class="cardContent__action link">
            {{ $actionText or 'Read More' }}
        </a>
        @endunless

    </div>

</div>