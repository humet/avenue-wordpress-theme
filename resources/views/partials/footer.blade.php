<footer class="footer content-info">
  <div class="footer__top container">
  @php dynamic_sidebar('sidebar-footer') @endphp
  <ul class="footer__social-links">
      <li><img src="@asset('images/svg/instagram.svg')"></li>
      <li><img src="@asset('images/svg/twitter.svg')"></li>
    </ul>
  </div>
  <div class="footer__middle container">
      @if (has_nav_menu('footer_navigation'))
      {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav-footer']) !!}
      @endif
      <div class="footer__copyright">&copy; Avenue{{date("Y")}}</div>
  </div>
  <div class="footer__bottom">
      UK Registered Provider Number or UKPRN: 10082827
  </div>
</footer>
