<!-- Footer start -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<style>
  /* file upload loader */
  #loading-model {
    position: fixed;
    /* z-index: 999; */
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    background-color: rgba(0 0 0/60%);
  }

  .center {
    z-index: 1000;
    margin: 300px auto;
    padding: 10px;
    width: 192px;
    background-color: White;
    border-radius: 10px;
    filter: alpha(opacity=100);
    opacity: 1;
    -moz-opacity: 1;
    text-align: center;
  }

  .center img {
    height: 80px;
    width: 98px;
    margin: 0 auto;
    display: block;
  }
</style>
<!-- contact section start -->
<section class="contact_form_wrap home_page" id="ftr_contact_form">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-xl-5 col-lg-5 col-12 lefttcol">
        <div class="contact_form_left_text">
          <div class="contact_heading_area mr_b_30">
            <div>
              <span class="badge_text bg_black">Let’s Join Hands</span>
            </div>
            <h3 class="headings">Ready to Begin?</h3>
            <p>Do you require more details regarding the partnership? Get in touch with us to discuss a free consultation and possible collaboration.</p>
          </div>
          <div class="contact_social_lnks">
            <ul>
              <li class="d-flex slidefromleft wow">
                <a href="skype:live:gourav_137?chat" class="d-flex">
                  <span class="icon">
                    <img src="{{ URL::asset('assets/images').'/'.'icons/skype.svg'}}" alt="Skype icon" class="img-fluid">
                  </span>
                  <span class="txts">live:gourav_137</span>
                </a>
              </li>
              <li class="d-flex slidefromleft wow" data-wow-delay=".2s">
                <a href="tel: +91-8103094848" class="d-flex">
                  <span class="icon">
                    <i class="far fa-phone-alt"></i>
                  </span>
                  <span class="txts">IND-  +91-8103094848</span>
                </a>
              </li>
              <li class="d-flex slidefromleft wow" data-wow-delay=".2s">
                <a href="tel:+1 707 327 2444" class="d-flex">
                  <span class="icon">
                    <i class="far fa-phone-alt"></i>
                  </span>
                  <span class="txts">USA- +1 707 327 2444</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- clients logo -->
          <div class="our_clients_dv2">
            <h4>Our Clients</h4>
            <div class="our_clients_logo2 d-flex flex-wrap">
              <div class="c_logo_item">
                <img src="{{ URL::asset('assets/images').'/'.'client_logo/collabra.svg'}}" alt="Client logo1">
              </div>
              <div class="c_logo_item">
                <img src="{{ URL::asset('assets/images').'/'.'client_logo/pratham-software.svg'}}" alt="Client logo2">
              </div>
              <div class="c_logo_item">
                <img src="{{ URL::asset('assets/images').'/'.'client_logo/nokia.svg'}}" alt="Client logo3">
              </div>
              <div class="c_logo_item">
                <img src="{{ URL::asset('assets/images').'/'.'client_logo/jio.svg'}}" alt="Client logo4">
              </div>
            </div>
          </div>
          <!-- clients logo -->
        </div>
      </div>
      <div class="col-xl-6 col-lg-7 col-12">
        <div class="contact_form_bg">
          <div class="contact_form_box">
            <!-- <div class="frm_heading">
              <h4>Fill the form below to say 'Hii!'</h4>
            </div> -->
            <form id="contactForm" method="post">
              @csrf
              @method('POST')
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form_group">
                    <div class="input_group">
                      <input type="text" name="name" placeholder="Name" class="form_control">
                      <input type="hidden" name="home_contact" value="home-contact">
                      <input type="hidden" name="page_url" id="PageUrl">
                      <input type="hidden" name="server_ip" id="serverIp" value="{{$_SERVER['REMOTE_ADDR']}}">
                      <span class="name_error show" style="color:#c71515"></span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form_group">
                    <div class="input_group">
                      <input type="email" name="email" placeholder="E-mail Address" class="form_control">
                      <span class="email_error show" style="color:#c71515"></span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form_group country_number_gorup">
                    <div class="selct_group">
                      <select class="form_control selectpickers" name="country_number">
                        <option value="India">+91</option>
                        <option value="India">+62</option>
                        <option value="India">+61</option>
                        <option value="India">+97</option>
                        <option value="India">+1</option>
                        <option value="India">+98</option>
                        <option value="India">+964</option>
                        <option value="India">+353</option>
                        <option value="India">+39</option>
                        <option value="India">+81</option>
                      </select>
                    </div>
                    <div class="input_group">
                      <input type="text" name="contact_number" placeholder="Contact Number" class="form_control">
                      <span class="contact_number_error show" style="color:#c71515"></span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="form_group">
                    <div class="input_group">
                      <select class="form_control selectpickers" name="project_budget">
                        <option value="" selected>Select Project Budget</option>
                        <option value="5000K - 10,000K">5,000 - 10,000</option>
                        <option value="10,000K - 20,000K">10,000 - 20,000</option>
                        <option value="20,000K - 30,000K">20,000 - 30,000</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="form_group">
                <div class="input_group">
                  <select class="selectpickers form_control">
                    <option value="">country</option>
                    <option value="India">India</option>
                    <option value="USA">USA</option>
                    <option value="Dubai">Dubai</option>
                    <option value="Australia">Australia</option>
                    <option value="Canada">Canada</option>
                  </select>
                </div>
              </div> -->
              <div class="form_group">
                <div class="input_group">
                  <textarea name="message" placeholder="Message" class="form_control"></textarea>
                </div>
              </div>

              <!-- <div class="form_group">
                <div class="input_group">
                  <div class="g-recaptcha" id="feedback-recaptcha" data-sitekey="6LeU9oEkAAAAACGt0pwson_vWppGP0br9Iz5VsIV"></div>
                  <span class="g-recaptcha-response_error show" style="color:#c71515"></span>
                </div>
              </div> -->
              <div class="button_group">
                <button type="submit" id="sub-btn" class="site_button submit_btn">Get Connect</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact section End -->
<footer class="footer_wrap">
  <div class="footer_inner">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-12 ftr_colms">
          <div class="ftr_widget footer_abouts">
            <div class="footer_logo">
              <a href="{{route('/')}}">
                <img src="{{asset('assets/images/cfalogo.svg')}}" alt="CFA Logo" class="img-fluid">
              </a>
            </div>
            <div class="ftr_contacts_lnks">
              <ul>
                <li class="d-flex">
                  <a href="skype:live:gourav_137?chat" class="d-flex">
                    <span class="icon">
                      <img src="{{asset('assets/images/icons/skype_white.svg')}}" alt="Skype icon" class="img-fluid">
                    </span>
                    <span class="txts">live:gourav_137</span>
                  </a>
                </li>
                <li class="d-flex">
                  <a href="mailto:info@consultantsfromasia.com" class="d-flex">
                    <span class="icon"><img src="{{asset('assets/images/icons/mail_white.svg')}}" alt="email icon" class="img-fluid"></span>
                    <span class="txts">info@consultantsfromasia.com</span>
                  </a>
                </li>
                <li class="d-flex">
                  <a href="https://www.consultantsfromasia.com/" class="d-flex">
                    <span class="icon"><img src="{{asset('assets/images/icons/globe_white.svg')}}" alt="globe icon" class="img-fluid"></span>
                    <span class="txts">www.consultantsfromasia.com</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="ftr_about_widget product_links">
              <h6>Products</h6>
              <div>
                <!-- <a href="https://consultantsfromasia.com/" target="_blank">Consultants From Asia</a> -->
                <a href="#" target="_blank">Justkhelo</a>
                <a href="https://instagamio.com/" target="_blank">InstaGamio</a>
              </div>
            </div>
            <div class="ftr_about_widget ftr_social">
              <h6>Stay Connected</h6>
              <ul class="footer_social">
                <a class="icons" href="https://www.facebook.com/consultantsfromasia/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                
                <a class="icons" href="https://twitter.com/ConsultantsAsia" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="icons" href="https://www.linkedin.com/company/consultants-from-asia-cfa/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a class="icons" href="https://www.instagram.com/consultantsfromasia/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a class="icons" href="https://dribbble.com/consultantsfromasia" target="_blank"><i class="fab fa-dribbble"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 ftr_colms">
          <div class="ftr_widget">
            <div class="footer_head">
              <h4 class="footer-heading">Services</h4>
            </div>
            <ul class="list-unstyled footer_link">
              <li>
                <a href="{{route('services/web-app-development')}}">Web App Development</a>
              </li>
              <li>
                <a href="{{route('services/mobile-app-development')}}">Mobile App Development</a>
              </li>
              <li>
                <a href="{{route('services/front-end-development')}}">Frontend Development</a>
              </li>
              <!-- <li>
                  <a href="#">Yii Framework</a>
                </li> -->
              <!-- <li>
                  <a href="#">Laravel Development</a>
                </li> -->
              <li>
                <a href="{{route('services/php-development')}}">PHP Development</a>
              </li>
              <li>
                <a href="{{route('services/node-js-development')}}">Node JS Development</a>
              </li>
              <li>
                <a href="{{route('services/wordpress-development')}}">WordPress Development</a>
              </li>
              <li>
                <a href="{{route('services/android-app-development')}}">Android Development</a>
              </li>
              <li>
                <a href="{{route('services/react-native-app-development')}}">React Native Development</a>
              </li>
              <li>
                <a href="{{route('services/ui-ux-development')}}">UI/UX Development</a>
              </li>
              <li>
                <a href="{{route('services/angular-js-development')}}">Angular Development</a>
              </li>

            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 ftr_colms">
          <div class="ftr_widget">
            <div class="footer_head">
              <h4 class="footer-heading">Industries</h4>
            </div>
            <ul class="list-unstyled footer_link">
              <li>
                <a href="{{route('industries/ecommerce-solutions')}}">Ecommerce Solutions</a>
              </li>
              <li>
                <a href="{{route('industries/online-classroom-e-learning-solutions')}}">elearning Solutions</a>
              </li>
              <li>
                <a href="{{route('industries/real-estate-software')}}">Real Estate Solutions</a>
              </li>
              <li>
                <a href="{{route('industries/social-networking-solutions')}}">Social Media Solutions</a>
              </li>
              <li>
                <a href="{{route('industries/travel-app-development')}}">Travel & Tour</a>
              </li>
              <li>
                <a href="{{route('industries/hotel-booking-flight-booking')}}">Hotel and Hospitality</a>
              </li>
              <li>
                <a href="{{route('industries/supply-chain-management')}}">Supply Chain Management</a>
              </li>
              <li>
                <a href="{{route('industries/health-record-management')}}">Healthcare Solutions</a>
              </li>
              <li>
                <a href="{{route('industries/hris')}}">HRIS Solutions</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 ftr_colms">
          <div class="ftr_widget">
            <div class="footer_head">
              <h4 class="footer-heading">Hire Developers</h4>
            </div>
            <ul class="list-unstyled footer_link">
              <li>
                <a href="{{route('hire-php-developer')}}">Hire PHP Developers</a>
              </li>
              <li>
                <a href="{{route('hire-laravel-developer')}}">hire Laravel Developers</a>
              </li>
              <li>
                <a href="{{route('hire-ui-ux-developer')}}">Hire UI/UX Designers</a>
              </li>
              <li>
                <a href="{{route('hire-frontend-developer')}}">Hire Frontend Developers</a>
              </li>
              <li>
                <a href="{{route('hire-java-developer')}}">Hire Java Developers</a>
              </li>
              <li>
                <a href="{{route('hire-android-developer')}}">Hire Android Developers</a>
              </li>
              <li>
                <a href="{{route('hire-ios-developer')}}">Hire IOS Developers</a>
              </li>
              <li>
                <a href="{{route('hire-web-app-developer')}}">Hire Web App Developers</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 ftr_colms">
          <div class="ftr_widget">
            <div class="footer_head">
              <h4 class="footer-heading">Company</h4>
            </div>
            <ul class="list-unstyled footer_link">
              <li>
                <a href="{{route('about-us')}}">about us</a>
              </li>
              <li>
                <a href="{{route('become-a-partner')}}">Become a Partner</a>
              </li>
              <li>
                <a href="{{route('affiliate-program')}}">Affiliate Program</a>
              </li>
              <li>
                <a href="{{route('staff-augmentation')}}">Staff Augmentation</a>
              </li>
              <li>
                <a href="{{route('career')}}">Careers</a>
              </li>
              <li>
                <a href="{{route('testimonial')}}">Testimonial</a>
              </li>
              <li>
                <a href="{{route('portfolio')}}">Portfolio</a>
              </li>
              <li>
                <a href="{{route('our-methodology')}}">Our Methodology</a>
              </li>
              <li>
                <a href="{{route('contact-us')}}">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- country container -->
    <div class="ftr_country_section">
      <div class="container">
        <div class="row">
          <!-- column start -->
          <div class="col-lg-3 col-md-6 col-sm-6 col-12 ftr_country_colm">
            <div class="ftr_country_box">
              <div class="img_box">
                <img src="{{asset('assets/images/country/india.png')}}" alt="India " class="img-fluid">
              </div>
              <h4 class="cntry_name">INDIA</h4>
              <p class="addresss">408, 4th Floor, Satguru Parinay, <br> Plot No-5, PU-3, <br> Indore, India, Madhya Pradesh</p>
              <p class="mobile_n"><a href="tel: +91-8103094848"><i class="fas fa-phone-alt"></i> +91-8103094848</a></p>
            </div>
          </div>
          <!-- column End -->
          <!-- column start -->
          <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12 ftr_country_colm">
            <div class="ftr_country_box">
              <div class="img_box">
                <img src="{{asset('assets/images/country/usa.png')}}" alt="USA " class="img-fluid">
              </div>
              <h4 class="cntry_name">USA</h4>
              <p class="addresss">125 Passaic Avenue 207, Kearny, NJ, 07032</p>
              <p class="mobile_n"><a href="tel:+1 707 327 2444"><i class="fas fa-phone-alt"></i>+1 707 327 2444</a></p>
            </div>
          </div> -->
          <!-- column End -->
          <!-- column start -->
          <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12 ftr_country_colm">
            <div class="ftr_country_box">
              <div class="img_box">
                <img src="{{asset('assets/images/country/dubai.png')}}" alt="Dubai " class="img-fluid">
              </div>
              <h4 class="cntry_name">Dubai</h4>
              <p class="addresss">Flat 206, Bait Al Noor Al Mowaihat 3, Ajman</p>
              <p class="mobile_n"><a href="tel:+971 55-604-0126"><i class="fas fa-phone-alt"></i>+971 55-604-0126</a></p>
            </div>
          </div> -->
          <!-- column End -->
          <!-- column start -->
          <div class="col-lg-3 col-md-6 col-sm-6 col-12 ftr_country_colm">
            <div class="ftr_country_box">
              <div class="img_box">
                <img src="{{asset('assets/images/country/singapore-img.png')}}" alt="Singapore " class="img-fluid">
              </div>
              <h4 class="cntry_name">Singapore</h4>
              <p class="addresss">31 Rochester Dr, #01-01/02, Singapore 138637</p>
              <p class="mobile_n"><a href="tel:+65-81780322"><i class="fas fa-phone-alt"></i>+65-81780322</a></p>
            </div>
          </div>
          <!-- column End -->
          <!-- column start -->
          <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12 ftr_country_colm">
            <div class="ftr_country_box">
              <div class="img_box">
                <img src="{{asset('assets/images/country/canada.png')}}" alt="Canada " class="img-fluid">
              </div>
              <h4 class="cntry_name">canada</h4>
              <p class="addresss">141 Rain Forest Drive Brampton, ON, L6R1A3</p>
              <p class="mobile_n"><a href="tel:+1 639-471-1346"><i class="fas fa-phone-alt"></i>+1 639-471-1346</a></p>
            </div>
          </div> -->
          <!-- column End -->

        </div>
      </div>
    </div>
    <!-- country container -->
  </div>

  <div class="copyright_wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-12 col-12">
          <p class="copyright-text">Copyright &copy; <a href="{{route('/')}}">CFA</a> - 2023. All rights reserved.
          </p>
        </div>
        <div class="col-lg-7 col-md-12 col-12">
          <div class="footer_brand_logos">
            <a class="f_logos">
              <img src="{{asset('assets/images/logos/certificate_logo.png')}}" alt="CFA Certificate" class="img-fluid">
            </a>
            <a class="f_logos">
              <img src="{{asset('assets/images/logos/aws_logo.png')}}" alt="AWS Logo" class="img-fluid">
            </a>
            <a class="f_logos">
              <img src="{{asset('assets/images/logos/microsoft_logo.png')}}" alt="Microsoft Logo" class="img-fluid">
            </a>
           
            <a class="f_logos" href="https://clutch.co/profile/consultants-asia" target="_blank">
              <img src="{{asset('assets/images/logos/clutch_logo.png')}}" alt="Clutch Logo" class="img-fluid">
            </a>
            <a class="f_logos" href="https://www.goodfirms.co/company/consultants-from-asia" target="_blank">
              <img src="{{asset('assets/images/logos/goodfirm_logo.png')}}" alt="Goodfirm Logo" class="img-fluid">
            </a>
         


          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Footer end -->
<div class="modal" id="loading-model">
  <div class="center">
    <img alt="CFA-office-png" src="{{asset('assets/images/CFA-office-png.png')}}" />
  </div>
</div>
<div class="cfa_preloader2">
  <div class="about_bnr_img position-relative">
    <!-- <span class="globe_icon"><img src="{{ URL::asset('assets/images').'/'.'about/globe.png'}}" alt="globe"></span> -->
    <div class="h_map_logodv"><img src="{{ URL::asset('assets/images').'/'.'CFA-office-png.png'}}" alt="map logo"></div>
  </div>
</div>
<script src="{{ URL::asset('assets/js/blog_link.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
<script type="text/javascript">
  //get current page url.
  var pageurl = window.location.href;
  document.getElementById("PageUrl").value = pageurl;
  
  $(document).ready(function() {
   
      $(".cfa_preloader2").css("display","none");
   
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    //save contact form 
    $("#sub-btn").click(function(){
      $(".cfa_preloader2").css("display","flex");

    });

    $("#contactForm").submit(function(e) {
      e.preventDefault();
      var baseurl = "{{URL::to('/')}}";

      var fd = new FormData(this);
      $.ajax({
        type: 'POST',
        url: baseurl + '/contact_store',
        data: fd,
        contentType: false,
        processData: false,
        beforeSend: function() {
          $(".cfa_preloader2").show();
        },
        success: function(data) {
          if ($.isEmptyObject(data.error)) {
            toastr.success("Thank you for contact us");
            $("#contactForm")[0].reset();
            $(".show").text("");
            window.location.href = 'https://www.consultantsfromasia.com/thank-you';

          } else {
            printErrorMsg(data.error);
          }
        },
        complete: function() {
          $(".cfa_preloader2").hide();
          return false;
        }
      });

    });

    function printErrorMsg(msg) {
      $.each(msg, function(key, value) {
        $('.' + key + '_error').text(value);
      });
    }
  });
</script>
<!-- apporva script -->
<!-- <script src="https://colorbox.ripplesecurehosted.com/assets/js/ripple-stats.min.js"></script><script>!function(){var t=document.createElement("script");t.type="text/javascript",t.src="https://colorbox.ripplesecurehosted.com/assets/js/t-func.min.js",t.async=!0,document.getElementsByTagName("head")[0].appendChild(t);var e=setInterval(function(){if(window.tPlugin){clearInterval(e);const t=_analytics.init({app:"rtViews",version:100,plugins:[window.tPlugin({appId:"$2b$10$yZ.TI.SAHRe7/W.VupoRUOLCuGS4Gh5DhS8tnUboMqGzFFIDrRt1i",gt:Date.now()})]});window.Analytics=t}},1e3)}();</script>
<script id="ripple-script-$2b$10$Uepf.9d3EmlHhXqFX7lIa.LSAI.uqE3IJpdop7A5mTTyNBvfBE0sa">document.addEventListener("DOMContentLoaded",function(){["assets/js/ripple-stats.min.js","assets/js/forms.min.js"].map(a=>{var b=document.createElement("script");b.type="text/javascript",b.src="https://colorbox.ripplesecurehosted.com/"+a,b.async=!0,document.getElementsByTagName("head")[0].appendChild(b)});var a=document.getElementById("ripple-script-$2b$10$Uepf.9d3EmlHhXqFX7lIa.LSAI.uqE3IJpdop7A5mTTyNBvfBE0sa"),b=a.closest("form"),c=setInterval(function(){if(window._form){clearInterval(c);new _form({_id:"$2b$10$Uepf.9d3EmlHhXqFX7lIa.LSAI.uqE3IJpdop7A5mTTyNBvfBE0sa",_title:"color consultant from asia",_type:"NEW"},b)}},1e3)});</script> -->

  
  <!-- apporva script end -->