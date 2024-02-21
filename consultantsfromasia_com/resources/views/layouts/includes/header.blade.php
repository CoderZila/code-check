 <!-- header Section Start -->
 <header class="main_header">
  <div class="container">
    <div class="header_container">
      <div class="site_logo">
        <a href="/">
          <img src="{{ URL::asset('assets/images').'/'.'cfalogo.svg' }}" alt="CFA Logo" class="img-fluid">
          {{-- <img src="assets/images/cfalogo.svg" alt="Logo" class="img-fluid"> --}}
        </a>
      </div>
      <div class="navigation_menu">
        <div class="nav_close_btn">
          <i class="fal fa-long-arrow-left"></i>
        </div>
        <ul>
            <li class="menu-hover">
              <a class="menu-hover-a" href="{{route('/')}}">Home</a>
            </li>
            <li class="menu-hover">
              <a class="menu-hover-a" href="{{route('/')}}">Company</a>
              <!-- megamenu wrapper -->
              <div class="megamenu_dropdown_wrap">
                <div class="container">
                  <div class="mega_menu_row_2 row">
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('about-us')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/companys/about-us.svg' }}" alt="about-us">
                          {{-- <img src="{{('assets/images/menu_icon/companys/about-us.svg')}}" alt="about-us"> --}}
                        </span>
                        <span class="mn_text">About Us</span>
                      </a>
                    </div>
                    <!--  colm end -->
                     <!--  colm start -->
                     <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('become-a-partner')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/companys/become-a-partner.svg' }}" alt="partner-us">
                          {{-- <img src="assets/images/menu_icon/companys/become-a-partner.svg" alt="partner"> --}}
                        </span>
                        <span class="mn_text">Become a Partner</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('affiliate-program')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/companys/affiliate-program.svg' }}" alt="Affiliate Program">
                          {{-- <img src="assets/images/menu_icon/companys/affiliate-program.svg" alt="Affiliate"> --}}
                        </span>
                        <span class="mn_text">Affiliate Program</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('staff-augmentation')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/companys/staff-augmentation.svg' }}" alt="Staff Augmentation">
                          {{-- <img src="assets/images/menu_icon/companys/staff-augmentation.svg" alt="Staff"> --}}
                        </span>
                        <span class="mn_text">Staff Augmentation</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    {{-- <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="/hire-dedicated-developer">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/companys/hire-dedicated-develope.svg' }}" alt="Hire Dedicated Developer"> --}}
                          {{-- <img src="assets/images/menu_icon/companys/hire-dedicated-develope.svg" alt="Hire"> --}}
                        {{-- </span>
                        <span class="mn_text">Hire Dedicated Developers</span>
                      </a>
                    </div> --}}
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('career')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/companys/career.svg' }}" alt="Career">
                          {{-- <img src="assets/images/menu_icon/companys/career.svg" alt="Career"> --}}
                        </span>
                        <span class="mn_text">Careers</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('testimonial')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/companys/testimonial.svg' }}" alt="Testimonial">
                          {{-- <img src="assets/images/menu_icon/companys/testimonial.svg" alt="Testimonial"> --}}
                        </span>
                        <span class="mn_text">Testimonial</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('portfolio')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/companys/portfolio.svg'}}" class="portfolio_icon" alt="Portfolio">
                        </span>
                        <span class="mn_text">Portfolio</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('our-methodology')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/companys/our-methodology.svg' }}" alt="Methodology">
                          {{-- <img src="assets/images/menu_icon/companys/our-methodology.svg" alt="Methodology"> --}}
                        </span>
                        <span class="mn_text">Our Methodology</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('contact-us')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/companys/contact-us.svg' }}" alt="Contact Us">
                          {{-- <img src="assets/images/menu_icon/companys/contact-us.svg" alt="Contact Us"> --}}
                        </span>
                        <span class="mn_text">Contact Us</span>
                      </a>
                    </div>
                    <!--  colm end -->
                  </div>
                </div>
                <!-- bottom -->
                <div class="megamenu_bottom" style="background-image: url(assets/images/megamenu_bg.webp);">
                  <div class="overlay_dv"></div>
                  <div class="container">
                    <div class="megamenu_textarea d-flex flex-wrap justify-content-between align-items-center">
                      <div class="textarea">
                        <h3 class="texts">Join Our Team</h3>
                        <p class="paras">
                          Start working at the pioneering software development company in India and experience your career reaching the acme.</p>
                      </div>
                      <div class="right_button">
                        <a href="/contact-us" class="site_button mega_menu_btn">Apply Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- bottom -->
              </div>
              <!-- megamenu wrapper -->
            </li>
            <li class="menu-hover">
              <a class="menu-hover-a" href="{{url('/')}}">Services</a>
              <!-- megamenu wrapper -->
              <div class="megamenu_dropdown_wrap">
                <div class="container">
                  <div class="mega_menu_row">
                    <!--  colm start -->
                    <div class="mega_menu_col mega_menu_col1">
                      <div class="mega_link_box">
                        <div class="headings">
                          <span class="mn_icon">
                            <img src="{{ URL::asset('assets/images').'/'.'menu_icon/web-app-development.svg' }}" alt="web-app"></span>
                            {{-- <img src="assets/images/menu_icon/web-app-development.svg" alt="web-app"></span> --}}
                          <a href="{{route('services/web-app-development')}}" class="mn_text">Web App Development</a>
                        </div>
                        <div class="mega_menu_list">
                          <ul>
                            <li><a href="{{route('services/yii-framework-development')}}">YII App Development</a></li>
                            <li><a href="{{route('services/laravel-framework-development')}}">Laravel Framework Development</a></li>
                            <li><a href="{{route('services/django-python-development')}}">Django / Python  Development</a></li>
                            <li><a href="{{route('services/ruby-on-rails-development')}}">Ruby On Rails Development</a></li>
                            <li><a href="{{route('services/symfony-framework-development')}}">Symfony Framework Development</a></li>
                            <li><a href="{{route('services/cakephp-framework-development')}}">CakePHP Development</a></li>
                            <li><a href="{{route('services/codeigniter-framework-development')}}">CodeIgniter Development</a></li>
                            <li><a href="{{route('services/php-development')}}">PHP Development</a></li>
                            <li><a href="{{route('services/node-js-development')}}">Node JS Development</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="mega_menu_col mega_menu_col2">
                      <div class="mega_link_box">
                        <div class="headings">
                          <span class="mn_icon">
                            <img src="{{ URL::asset('assets/images').'/'.'menu_icon/mobile-app-development.svg' }}" alt="Mobile-app"></span>
                            {{-- <img src="assets/images/menu_icon/mobile-app-development.svg" alt="Mobile-app"></span> --}}
                          <a href="{{route('services/mobile-app-development')}}" class="mn_text">Mobile App Development</a>
                        </div>
                        <div class="mega_menu_list">
                          <ul>
                            <li><a href="{{route('services/android-app-development')}}">Android App Development</a></li>
                            <li><a href="{{route('services/ios-application-development')}}">iOS App Development</a></li>
                            <li><a href="{{route('services/kotlin-app-development')}}">Kotlin App Development</a></li>
                            <li><a href="{{route('services/progressive-web-app-development')}}">Progressive Web App Development</a></li>
                            <li><a href="{{route('services/cross-platform-mobile-app-development')}}">Cross-Platform App Development</a></li>
                            <li><a href="{{route('services/react-native-app-development')}}">React Native App Development</a></li>
                            <li><a href="{{route('services/flutter-app-development')}}">Flutter App Development</a></li>
                            <li><a href="{{route('services/ionic-app-development')}}">IONIC App Development</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="mega_menu_col mega_menu_col3">
                      <div class="mega_link_box">
                        <div class="headings">
                          <span class="mn_icon">
                            <img src="{{ URL::asset('assets/images').'/'.'menu_icon/frontend-technology.svg' }}" alt="frontend">
                            {{-- <img src="assets/images/menu_icon/frontend-technology.svg" alt="frontend"> --}}
                          </span>
                          <a href="{{route('services/front-end-development')}}" class="mn_text">Frontend Technologies</a>
                        </div>
                        <div class="mega_menu_list">
                          <ul>
                            <li><a href="{{route('services/ui-ux-development')}}">UI/UX development</a></li>
                            <li><a href="{{route('services/vue-js-development')}}">Vue JS Development</a></li>
                            <li><a href="{{route('services/angular-js-development')}}">Angular Development</a></li>
                            <li><a href="{{route('services/react-js-development')}}">React Development</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mega_link_box">
                        <div class="headings">
                          <span class="mn_icon">
                            <img src="{{ URL::asset('assets/images').'/'.'menu_icon/open-source-development.svg' }}" alt="Open Source">
                            {{-- <img src="assets/images/menu_icon/open-source-development.svg" alt="Open Source"> --}}
                          </span>
                          <a href="{{route('services/open-source-software-development')}}" class="mn_text">Open Source Development</a>
                        </div>
                        <div class="mega_menu_list">
                          <ul>
                            <li><a href="{{route('services/wordpress-development')}}">WordPress Development</a></li>
                            <li><a href="{{route('services/magento-development')}}">Magento Development</a></li>
                          </ul>
                        </div> 
                      </div>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="mega_menu_col mega_menu_col4">
                      <div class="mega_link_box">
                        <div class="headings">
                          <span class="mn_icon">
                            <img src="{{ URL::asset('assets/images').'/'.'menu_icon/other-development.svg' }}" alt="Other Development">
                            {{-- <img src="assets/images/menu_icon/other-development.svg" alt="Other Development"> --}}
                          </span>
                          <a href="javascript:void(0)" class="mn_text">Other Development</a>
                        </div>
                        <div class="mega_menu_list">
                          <ul>
                            <li><a href="{{route('services/artificial-intelligence-solutions')}}">AI Solutions Development</a></li>
                            <li><a href="{{route('services/blockchain-solutions')}}">Blockchain Solutions</a></li>
                            <li><a href="{{route('services/cloud-devops-solutions')}}">Cloud & DevOps Solutions</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--  colm end -->
                  </div>
                </div>
                <!-- bottom -->
                <div class="megamenu_bottom" style="background-image: url(assets/images/megamenu_bg.webp);">
                  <div class="overlay_dv"></div>
                  <div class="container">
                    <div class="megamenu_textarea d-flex flex-wrap justify-content-between align-items-center">
                      <div class="textarea">
                        <h3 class="texts">Hire Dedicated Developers</h3>
                        <p class="paras">
                          Get a team of experienced and dedicated developers who can convert your business idea into reality and work as your extended development team.
                        </p>
                      </div>
                      <div class="right_button">
                        <a href="/contact-us" class="site_button mega_menu_btn">Hire Developers</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- bottom -->
              </div>
              <!-- megamenu wrapper -->
            </li>
            <li class="menu-hover">
              <a class="menu-hover-a" href="{{url('/')}}">Industries</a>
              <!-- megamenu wrapper -->
              <div class="megamenu_dropdown_wrap">
                <div class="container">
                  <div class="mega_menu_row_2 row">
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('industries/ecommerce-solutions')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/industries/ecommerce-solutions.svg' }}" alt="ecommerce">
                          {{-- <img src="assets/images/menu_icon/industries/ecommerce-solutions.svg" alt="ecommerce"> --}}
                        </span>
                        <span class="mn_text">Ecommerce Solutions</span>
                      </a>
                    </div>
                    <!--  colm end -->
                     <!--  colm start -->
                     <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('industries/online-classroom-e-learning-solutions')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/industries/elearning-solution.svg' }}" alt="elearning">
                          {{-- <img src="assets/images/menu_icon/industries/elearning-solution.svg" alt="elearning"> --}}
                        </span>
                        <span class="mn_text">elearning Solutions</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('industries/real-estate-software')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/industries/real-estate-solutions.svg' }}" alt="real-estate">
                          {{-- <img src="assets/images/menu_icon/industries/real-estate-solutions.svg" alt="real-estate"> --}}
                        </span>
                        <span class="mn_text">Real Estate Solutions</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('industries/social-networking-solutions')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/industries/social-media-solution.svg' }}" alt="Social Media">
                          {{-- <img src="assets/images/menu_icon/industries/social-media-solution.svg" alt="Social Media"> --}}
                        </span>
                        <span class="mn_text">Social Media Solutions</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('industries/travel-app-development')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/industries/travel-tour.svg' }}" alt="Travel">
                          {{-- <img src="assets/images/menu_icon/industries/travel-tour.svg" alt="Travel"> --}}
                        </span>
                        <span class="mn_text">Travel & Tour</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('industries/hotel-booking-flight-booking')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/industries/hotel-hospitality.svg' }}" alt="Hotel and hospitality">
                          {{-- <img src="assets/images/menu_icon/industries/hotel-hospitality.svg" alt="Hotel"> --}}
                        </span>
                        <span class="mn_text">Hotel and Hospitality</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('industries/supply-chain-management')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/industries/supply-chain-management.svg' }}" alt="Supply Chain Management">
                          {{-- <img src="assets/images/menu_icon/industries/supply-chain-management.svg" alt="supply-chain"> --}}
                        </span>
                        <span class="mn_text">Supply Chain Management</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('industries/health-record-management')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/industries/health-solution.svg' }}" alt="Healthcare">
                          {{-- <img src="assets/images/menu_icon/industries/health-solution.svg" alt="Healthcare"> --}}
                        </span>
                        <span class="mn_text">Healthcare Solutions</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('industries/hris')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/industries/hris-solution.svg' }}" alt="HRIS">
                          {{-- <img src="assets/images/menu_icon/industries/hris-solution.svg" alt="HRIS"> --}}
                        </span>
                        <span class="mn_text">HRIS Solutions</span>
                      </a>
                    </div>
                    <!--  colm end -->
                  </div>
                </div>
                <!-- bottom -->
                <div class="megamenu_bottom" style="background-image: url(assets/images/megamenu_bg.webp);">
                  <div class="overlay_dv"></div>
                  <div class="container">
                    <div class="megamenu_textarea d-flex flex-wrap justify-content-between align-items-center">
                      <div class="textarea">
                        <h3 class="texts">Discuss Your Project</h3>
                        <p class="paras">
                          Any Idea For New Project we have Business Experts to ensure Success.
                        </p>
                      </div>
                      <div class="right_button">
                        <a href="/contact-us" class="site_button mega_menu_btn">Start a Project</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- bottom -->
              </div>
              <!-- megamenu wrapper -->
            </li>
            <li class="menu-hover">
              <a class="menu-hover-a" href="/digital-marketing">Digital Marketing</a>
              <!-- megamenu wrapper -->
              <div class="megamenu_dropdown_wrap">
                <div class="container">
                  <div class="mega_menu_row_2 row">
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('seo-and-internet-marketing')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/digital/seo.svg' }}" alt="SEO">
                          {{-- <img src="assets/images/menu_icon/digital/seo.svg" alt="SEO"> --}}
                        </span>
                        <span class="mn_text">Search Engine Optimization (SEO)</span>
                      </a>
                    </div>
                    <!--  colm end -->
                     <!--  colm start -->
                     <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('digital-marketing')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/digital/digital-marketing.svg' }}" alt="Digital Marketing">
                          {{-- <img src="assets/images/menu_icon/digital/digital-marketing.svg" alt="digital"> --}}
                        </span>
                        <span class="mn_text">Digital Marketing</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('ppc')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/digital/ppc.svg' }}" alt="PPC">
                          {{-- <img src="assets/images/menu_icon/digital/ppc.svg" alt="PPC"> --}}
                        </span>
                        <span class="mn_text">Pay Per Click (PPC)</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('social-media-optimization')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/digital/smo.svg' }}" alt="SMO">
                          {{-- <img src="assets/images/menu_icon/digital/smo.svg" alt="SMO"> --}}
                        </span>
                        <span class="mn_text">social media optimization</span>
                      </a>
                    </div>
                    <!--  colm end -->
                  </div>
                </div>
                <!-- bottom -->
                <div class="megamenu_bottom" style="background-image: url(assets/images/megamenu_bg.webp);">
                  <div class="overlay_dv"></div>
                  <div class="container">
                    <div class="megamenu_textarea d-flex flex-wrap justify-content-between align-items-center">
                      <div class="textarea">
                        <h3 class="texts">Join Our Team</h3>
                        <p class="paras">
                          Start working at the pioneering software development company in India and experience your career reaching the acme.</p>
                      </div>
                      <div class="right_button">
                        <a href="/contact-us" class="site_button mega_menu_btn">Apply Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- bottom -->
              </div>
              <!-- megamenu wrapper -->
            </li>
             {{-- <li>
              <a href="/portfolio">Portfolio</a>
            </li> --}}
            <li class="menu-hover">
              <a class="menu-hover-a" href="/hire-dedicated-developer">Hire Developers</a>
              <!-- megamenu wrapper -->
              <div class="megamenu_dropdown_wrap">
                <div class="container">
                  <div class="mega_menu_row_2 row">
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('hire-php-developer')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/hire/php.svg' }}" alt="Hire Php">
                          {{-- <img src="assets/images/menu_icon/hire/php.svg" alt="Hire Php"> --}}
                        </span>
                        <span class="mn_text">Hire PHP Developers</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('hire-laravel-developer')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/hire/laravel.svg' }}" alt="Hire Laravel">
                          {{-- <img src="assets/images/menu_icon/hire/laravel.svg" alt="Hire Laravel"> --}}
                        </span>
                        <span class="mn_text">Hire Laravel Developers</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('hire-ui-ux-developer')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/hire/ui-ux.svg' }}" alt="Hire UI/UX">
                          {{-- <img src="assets/images/menu_icon/hire/ui-ux.svg" alt="Hire UI/UX"> --}}
                        </span>
                        <span class="mn_text">Hire UI/UX Designers</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('hire-frontend-developer')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/frontend-technology.svg' }}" alt="Hire Frontend">
                          {{-- <img src="assets/images/menu_icon/frontend-technology.svg" alt="Hire Frontend"> --}}
                        </span>
                        <span class="mn_text">Hire Frontend Developers</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('hire-java-developer')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/hire/java.svg' }}" alt="Hire Java">
                          {{-- <img src="assets/images/menu_icon/hire/java.svg" alt="Hire Java"> --}}
                        </span>
                        <span class="mn_text">Hire Java Developers</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('hire-android-developer')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/hire/android.svg' }}" alt="Hire Android">
                          {{-- <img src="assets/images/menu_icon/hire/android.svg" alt="Hire Android"> --}}
                        </span>
                        <span class="mn_text">Hire Android Developers</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('hire-ios-developer')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/hire/iOS.svg' }}" alt="Hire IOs">
                          {{-- <img src="assets/images/menu_icon/hire/iOS.svg" alt="Hire IOs"> --}}
                        </span>
                        <span class="mn_text">Hire IOS Developers</span>
                      </a>
                    </div>
                    <!--  colm end -->
                    <!--  colm start -->
                    <div class="col-lg-4 col-md-12 col-12 mega_menu_colm">
                      <a class="mega_lnk_heading d-flex align-items-center" href="{{route('hire-web-app-developer')}}">
                        <span class="mn_icon">
                          <img src="{{ URL::asset('assets/images').'/'.'menu_icon/web-app-development.svg' }}" alt="Hire Web App">
                          {{-- <img src="assets/images/menu_icon/web-app-development.svg" alt="Hire Web App"> --}}
                        </span>
                        <span class="mn_text">Hire Web App Developers</span>
                      </a>
                    </div>
                    <!--  colm end -->
                  </div>
                </div>
                <!-- bottom -->
                <div class="megamenu_bottom" style="background-image: url(assets/images/megamenu_bg.webp);">
                  <div class="overlay_dv"></div>
                  <div class="container">
                    <div class="megamenu_textarea d-flex flex-wrap justify-content-between align-items-center">
                      <div class="textarea">
                        <h3 class="texts">Join Our Team</h3>
                        <p class="paras">
                          Start working at the pioneering software development company in India and experience your career reaching the acme.</p>
                      </div>
                      <div class="right_button">
                        <a href="/contact-us" class="site_button mega_menu_btn">Apply Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- bottom -->
              </div>
              <!-- megamenu wrapper -->
            </li>
            <li class="menu-hover">
              <a class="menu-hover-a" href="/blog">Blog</a>
            </li>
        </ul>
      </div>
      <div class="h_right_part">
        <div class="hdr_buttons ">
          <a href="/contact-us" class="h_quote_btn site_button">Request a Quote</a>
        </div>
        <div class="nav_toggle">
          <i></i>
          <i></i>
          <i></i>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- header Section End -->
<script>
  		base_url = "<?php echo url('/')."/";  ?>";
  </script>