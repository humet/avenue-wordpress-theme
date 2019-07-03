<header class="header">
    <nav class="nav-primary">
      <div class="container">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
      </div>
    </nav>
    <div class="header-bottom">
      <div class="container relative">
      <a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/svg/logo.svg')"/></a>
      <div class="mobile-nav-button">
          <div id="nav-icon2">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
</header>
