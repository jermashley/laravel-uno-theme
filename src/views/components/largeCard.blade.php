<div class="baseCard animated large">

    <a href="{{ $largeCardLink }}" target="{{ $largeCardTarget or '_self' }}" class="baseCard__link">

        <div class="bgImage">

            <img src="{{ $largeCardImage }}" class="{{ $largeCardImageClass or ' ' }}" alt="{{ $largeCardImageAlt  or ' ' }}">

        </div>

        <div class="baseCard__heading large">

            <span>{{ $largeCardHeading }}</span>

        </div>

        <div class="baseCard__text">

            <div class="largeTruncated">

                {{ $largeCardContent }}

            </div>

        </div>

        <div class="baseCard__more">

            <span>{{ $largeCardAction or 'Read More' }}</span>

        </div>

    </a>

</div>
