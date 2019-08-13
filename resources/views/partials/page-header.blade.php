<div class="pages__header" style="background-image: url(' {{ the_post_thumbnail_url() }} ')">
    @if (is_page('avenue-for-business'))
      <h1>Avenue For <span>Business</span></h1>
    @elseif (is_page('the-team'))
    <h1>The <span>Team</span></h1>
    @elseif (is_page('contact'))
    <h1><span>Contact</span></h1>
  @elseif( is_404() )
  <h1>Oh No!</h1>
  @elseif( is_front_page() )
  <div class="play-button"><img src="@asset('images/svg/play-button.svg')"></div>
  <div class="video-overlay">
    <div class="cross"></div>
    <script src="https://cdn.jwplayer.com/players/hGyKChC0-kXJnLDYH.js"></script>
  </div>
  @else 
  <h1>{!! App::title() !!}</h1>
  @endif
</div>
