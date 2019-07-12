<header class="header">
    <div class="mobile-menu">
        <div class="container row flex-space-between">
        <a class="brand-mobile" href="{{ home_url('/') }}"><img src="@asset('images/svg/logo-white.svg')"/></a>
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
      <div class="mobile-nav-overlay">
          <nav class="nav-primary">
                  @if (has_nav_menu('mobile_navigation'))
                    {!! wp_nav_menu(['theme_location' => 'mobile_navigation', 'menu_class' => 'nav-mobile']) !!}
                  @endif
                  </div>
          </nav>
      </div>
    </div>
    <div class="desktop-menu">
      <nav class="nav-primary">
          <div class="container">
              @if (has_nav_menu('primary_desktop_left_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_desktop_left_navigation', 'menu_class' => 'nav-left']) !!}
              @endif
              <a class="brand-desktop" href="{{ home_url('/') }}"><img src="@asset('images/svg/logo-white.svg')"/></a>
              @if (has_nav_menu('primary_desktop_right_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_desktop_right_navigation', 'menu_class' => 'nav-right']) !!}
            @endif
              </div>
      </nav>
  </div>
</header>
