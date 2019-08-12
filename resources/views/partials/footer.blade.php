<footer class="footer content-info">
  {{-- <div class="footer__top container">
  @php dynamic_sidebar('sidebar-footer') @endphp
  <ul class="footer__social-links">
      <li><a href="#" target="_blank"><img src="@asset('images/svg/instagram.svg')"></a></li>
      <li><a href="#" target="_blank"><img src="@asset('images/svg/linkedin.svg')"></a></li>
      <li><a href="#" target="_blank"><img src="@asset('images/svg/facebook.svg')"></a></li>
      <li><a href="#" target="_blank"><img src="@asset('images/svg/twitter.svg')"></a></li>
    </ul>
  </div> --}}
  <div class="footer__middle container">
      @if (has_nav_menu('footer_navigation'))
      {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav-footer']) !!}
      @endif
      <div class="footer__copyright">&copy; Avenue{{date("Y")}}</div>
  </div>
  <div class="footer__bottom">
      UK Registered Provider Number or UKPRN: 10082827 <span>|</span> <a href="mailto:hello@findyouravenue.com">hello@findyouravenue.com</a> 
  </div>
</footer>
