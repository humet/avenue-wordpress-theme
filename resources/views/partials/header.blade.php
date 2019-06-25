<header class="header">
    {{-- <a class="apply" href="#join-the-avenue">Apply Now</a>
    <a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/svg/logo.svg')"/></a> --}}
    <nav class="nav-primary">
      <div class="container">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
      </div>
    </nav>
</header>
