<header class="header">
  <div class="container">
    <a class="apply" href="#join-the-avenue">Apply Now</a>
    <a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/svg/logo.svg')"/></a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
