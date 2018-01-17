@unless (empty($linkedin))
<a href="{{ $linkedinLink }}" class="link"><i class="fab fa-linkedin"></i></a>
@endunless

@unless (empty($twitter))
<a href="{{ $twitterLink }}" class="link"><i class="fab fa-twitter"></i></a>
@endunless

@unless (empty($facebook))
<a href="{{ $facebookLink }}" class="link"><i class="fab fa-facebook"></i></a>
@endunless

@unless (empty($instagram))
<a href="{{ $instagramLink }}" class="link"><i class="fab fa-instagram"></i></a>
@endunless