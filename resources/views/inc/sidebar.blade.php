<!-- <div class="text-center">
    <a href="{{ route('feed') }}"><img class="w-50 logo" src="{{ asset('images/logo.png') }}"/></a>
</div> -->
<div id="feed-nav-2" class="mb-4">
    @include('inc.feed-nav')
</div>

<script>
    var customVerbiages = @json($verbiages);
</script>

<verbiages></verbiages>

<div class="footer mt-4">
        <img src="https://i.imgur.com/xSHDo4E.png" height="100">
        <div class="text-center font-serif mt-4 px-4">@lang('landing.credits', [ 'link' => link_to('https://veganhacktivists.org/', 'Vegan Hacktivists', ['target' => '_blank']) ])
              <i class="far fa-heart"></i>
      </div>
</div>
