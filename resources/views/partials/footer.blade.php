<div class="consent-overlay">
  <div class="consent-box-info">
      <h3>What data do we collect?</h3> <p>Social Chain Group (meaning Social chain Group located across Europe and USA) collects personal data about you in order to assess your suitability for a position (usually in the form of a CV). This may include your education and qualifications, where you have worked and the type of work you have done. We also collect your contact details in order to contact you for a role. When you submit an application, we may also obtain additional information from your CV, such as your photo, interests and hobbies. </p>

      <h3>Why do we collect your data?</h3> <p>We process your data for the purposes of managing Social chains recruitment related activities as well as for organisational planning and reporting purposes globally. Consequently, Social chain Group may use your personal data in relation to the evaluation and selection of applicants including, for example, setting up and conducting interviews and tests, evaluating and assessing the results thereto and as is otherwise needed in the recruitment process, including the final recruitment. </p>
      
        <h3>When you apply for a role: </h3><p>When you apply for a role with Social Chain Group, your CV and contact details become part of our CV database in order to match you with suitable positions. This database can be searched by members of the Social Chain Recruitment and Talent Teams who are located across EMEA and USA. In response to your application, they may contact you about a particular role from time to time. </p>
      
          <h3>What we do with your data:</h3> <p>We will securely store a copy of your application including your CV, and any other information you provide, for no longer than we need, and no longer than 12 months. </p>
      
                      <p>We will not disclose your personal data to unauthorised third parties. As Social Chain Group is a global corporation consisting of multiple affiliated companies in various countries, Social chain Group has international sites and Social Chain Group uses resources located throughout the world so your data may be accessed by authorised members of the Social Chain Group Recruitment and Talent Teams outside of the EU in order to process your application. </p>
      
                      <h3>Your agreement to processing your data: </h3><p>You agree to the fact that your personal data may be transferred and/or disclosed to any company within Social Chain Group of companies. This includes transfers to servers and databases outside the country where you provided Social Chain Group with your personal data. Such transfers may include for example transfers and/or disclosures outside the European Economic Area and in the United States of America. We will keep your data safe and process it according to all applicable laws. Our standard practice is to use European Union model clauses for the transfer of data from the EEA & Switzerland to other non-EEA countries. If you would like to access, update, or amend your personal information or, if you would like us to remove personal information that we hold about you, or limit its use, please <a href="mailto:hello@findyouravenue.com">hello@findyouravenue.com</a>.</p>
  </div>
  <div class="cross"></div>
</div>
<footer class="footer content-info">
  <div class="footer__top container">
  @php dynamic_sidebar('sidebar-footer') @endphp
  <ul class="footer__social-links">
      <li><a href="https://www.instagram.com/findyouravenue_/" target="_blank"><img src="@asset('images/svg/instagram.svg')"></a></li>
      {{-- <li><a href="#" target="_blank"><img src="@asset('images/svg/linkedin.svg')"></a></li> --}}
      {{-- <li><a href="#" target="_blank"><img src="@asset('images/svg/facebook.svg')"></a></li> --}}
      <li><a href="https://twitter.com/findyouravenue" target="_blank"><img src="@asset('images/svg/twitter.svg')"></a></li>
    </ul>
  </div>
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
