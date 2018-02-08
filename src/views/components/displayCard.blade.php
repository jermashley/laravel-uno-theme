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

        {{-- Card Heading --}}
        @unless (empty($cardHeading))
        <span class="cardContent__heading {{ $headingSize or '' }}">
            {{ $cardHeading or '' }}
        </span>
        @endunless

        {{-- Heading / Content Divider --}}
        @unless (empty($hasDivider))
        <span class="cardContent__divider"></span>
        @endunless

        {{-- Truncated Card Text --}}
        @unless (empty($truncatedCardText))
        <span class="cardContent__text {{ $textSize or '' }}">
            {{ str_limit($truncatedCardText) }}
        </span>
        @endunless

        {{-- Extended (Full-Length) Card Text --}}
        @unless (empty($extendedCardText))
        <div class="cardContent__text {{ $textSize or '' }}">
            {{ $extendedCardText }}
        </div>
        @endunless

        {{-- Social Footer Content --}}
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

        {{-- Card Action --}}
        @unless (empty($cardAction))
        <a href="{{ $actionLink or '#' }}" class="cardContent__action {{ $actionClasses or 'link' }}">
            {{ $cardAction or 'Read More' }}
        </a>
        @endunless

    </div>

</div>
