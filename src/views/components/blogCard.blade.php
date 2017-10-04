<div class="baseCard animated blog">

    <a href="{{ $blogCardLink }}" class="baseCard__link">

        <div class="bgImage">

            <img src="{{ $blogCardImage }}" class="{{ $blogCardImageClass or ' ' }}" alt="{{ $blogCardImageAlt  or ' ' }}">

            <div class="baseCard__meta">
                <span class="meta">{{ $blogCardMeta }}</span>
            </div>

        </div>

        <div class="baseCard__heading blog">

            <span>{{ $blogCardHeading }}</span>

        </div>

        <div class="baseCard__text">

            <div class="blogTruncated">

                {{ $blogCardContent }}

            </div>

        </div>

        <div class="baseCard__more">

            <span>Read More</span>

        </div>

    </a>

</div>
