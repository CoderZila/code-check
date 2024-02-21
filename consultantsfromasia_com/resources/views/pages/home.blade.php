@extends('layouts.default')
@section('content')
<section class="homeBanner">
    <div class="homeBannerVideo"><video autoplay="" muted="" width="100%" height="100%" loop="">
            <source src="assets/images/video/banner-video.mp4" type="video/mp4">
        </video>
    </div>
    <div class="container container-lg">
        <div class="row">
            <div class="col-md-12 col-lg-7 col-xl-7 col-xxl-6">
                <div class="homeBannerCnt mb-0">
                    <div class="home_banner_caption">
                        <div>
                            <span class="bnr_badge_text bg_black flipInX wow">Offshore Software Development Company</span>
                        </div>
                        <h1 class="flipInX wow" data-wow-delay=".2s">Software Consulting and Development Company</h1>
                        <p class="pt-2 flipInX wow banner-para" data-wow-delay=".4s">
                            CFA specializes in providing high technology, end-to-end solutions in software development, Application Development and IT Consulting Services.
                        </p>
                        <div class="flipInX wow banner-btn-wr" data-wow-delay=".6s">
                            <a href="#ftr_contact_form" class="consult_btn">Get Software Development Services</a>
                        </div>
                        
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</section>















<!-- why CFAsection start -->
<section class="home_why_cfa_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <div class="h_why_cfa_texts">
                    <div class="sections_heading_area white_section_text">
                        <div>
                            <span class="badge_text bg_red">Why CFA For Software Development Services?</span>
                        </div>
                        <h3 class="headings">Empower your Ideas into Stunning Products with CFA’s Expert Team
                        </h3>
                        <p>Consultants from Asia have been offering full-cycle, end-to-end<b> software development services.</b>  We assist organisations
                             in launching initiatives, adopting modern technologies, transitioning to digital-first strategies, and growing 
                             their enterprises. Startups, SMBs, and Fortune 100+ businesses in the USA, Europe, Australia, Singapore, 
                             and beyond trust CFA. We enable our clients to provide better experiences to their consumers and employees, 
                             acquire a competitive advantage, and increase internal efficiency.
                        </p>
                    </div>
                    <div class="our_clients_dv">
                        <h4>Our Clients</h4>
                        <div class="our_clients_logo d-flex flex-wrap">
                            <div class="c_logo_items">
                                <img src="{{ URL::asset('assets/images').'/'.'client_logo/collabra-white.svg'}}"
                                    alt="Client logo1">
                            </div>
                            <div class="c_logo_items">
                                <img src="{{ URL::asset('assets/images').'/'.'client_logo/pratham-software-white.svg'}}"
                                    alt="Client logo2">
                            </div>
                            <div class="c_logo_items">
                                <img src="{{ URL::asset('assets/images').'/'.'client_logo/nokia-white.svg'}}"
                                    alt="Client logo3">
                            </div>
                            <div class="c_logo_items">
                                <img src="{{ URL::asset('assets/images').'/'.'client_logo/jio-white.svg'}}"
                                    alt="Client logo4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="why_counter_boxes_cover d-flex flex-wrap slidefromright wow">
                    <div class="why_counter_boxes">
                        <h3 class="cnt_heading">
                            <span class="numbers counter_number" data-from="0" data-to="250"
                                data-speed="5000">250</span>
                            <span class="icons">+</span>
                        </h3>
                        <p>Projects</p>
                    </div>
                    <div class="why_counter_boxes">
                        <h3 class="cnt_heading">
                            <span class="numbers counter_number" data-from="0" data-to="150"
                                data-speed="5000">150</span>
                            <span class="icons">+</span>
                        </h3>
                        <p>Clients</p>
                    </div>
                    <div class="why_counter_boxes">
                        <h3 class="cnt_heading">
                            <span class="numbers counter_number" data-from="0" data-to="50" data-speed="5000">50</span>
                            <span class="icons">+</span>
                        </h3>
                        <p>Experience</p>
                    </div>
                    <div class="why_counter_boxes">
                        <h3 class="cnt_heading">
                            <span class="numbers counter_number" data-from="0" data-to="15" data-speed="5000">15</span>
                            <span class="icons">+</span>
                        </h3>
                        <p>Top Brands</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bg image -->
    <div class="why_cfa_bg_div">
        <div class="why_cfa_image"
            style="background-image: url({{ URL::asset('assets/images').'/'.'why_cfa_img.webp'}});">
            <div class="overlay"></div>
        </div>
    </div>
    <!-- bg image -->
</section>
<!-- why CFAsection end -->
<!-- service section start -->
<section class="h_service_section pad_top_60" id="h_service_section" tabindex="0">
    <!-- heading section start -->
    <div class="container">
        <div class="row align_item_center mr_b_25">
            <div class="col-lg-8 col-12">
                <div class="sections_heading_area">
                    <div>
                        <span class="badge_text bg_black flipInX wow">Our Core Services</span>
                    </div>
                    <h3 class="headings flipInX wow" data-wow-delay=".2s">Explore Our Offers For A Smooth Project Launch </h3>
                    <p class="flipInX wow" data-wow-delay=".4s">CFA handles projects of any type and difficulty. From simple mobile applications to cloud-based enterprise-level products. Reinforce your business with our skills, resources, technological understanding, and drive for creating bespoke software solutions that make a difference.
                    </p>
                </div>
            </div>
            <!-- <div class="col-lg-4 col-12 view_service_btn_col">
              <a href="#" class="site_button view_service_btn">View Services</a>
            </div> -->
        </div>
    </div>
    <!-- heading section end -->
    <div class="h_service_inner_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <ul class="service_tab">
                        <li data-tab="tab_4" class="h_srvc_tabs active gradient_4">
                            <div class="s_tab_box">
                                <span class="icon">
                                    <img src="assets/images/tabs/web_app_black.svg" alt="Web-App Development icon"
                                        class="black_icon">
                                    <img src="assets/images/tabs/web_app_white.svg" alt="Web-App Development icon"
                                        class="white_icon">
                                </span>
                                <div class="tab_texts">
                                    <h3>Web-App </h3>
                                    <h4>Development</h4>
                                </div>
                            </div>
                            <span class="bg_icon">
                                <img src="assets/images/tabs/icon4.webp" alt="icon">
                            </span>
                        </li>
                        <li data-tab="tab_3" class="h_srvc_tabs gradient_3">
                            <div class="s_tab_box">
                                <span class="icon">
                                    <img src="assets/images/tabs/mobile_black.svg" alt="Mobile App Development icon"
                                        class="black_icon">
                                    <img src="assets/images/tabs/mobile_white.svg" alt="Mobile App Development image"
                                        class="white_icon">
                                </span>
                                <div class="tab_texts">
                                    <h3>Mobile App</h3>
                                    <h4>Development</h4>
                                </div>
                            </div>
                            <span class="bg_icon">
                                <img src="assets/images/tabs/icon3.webp" alt="icon">
                            </span>
                        </li>
                        <li data-tab="tab_1" class="h_srvc_tabs  gradient_1">
                            <div class="s_tab_box">
                                <span class="icon">
                                    <img src="assets/images/tabs/ui_ux_black.svg" alt="icon" class="black_icon">
                                    <img src="assets/images/tabs/ui_ux_white.svg" alt="icon" class="white_icon">
                                </span>
                                <div class="tab_texts">
                                    <h3>UI/UX</h3>
                                    <h4>Development</h4>
                                </div>
                            </div>
                            <span class="bg_icon">
                                <img src="assets/images/tabs/icon1.webp" alt="icon">
                            </span>
                        </li>
                        <li data-tab="tab_2" class="h_srvc_tabs gradient_2">
                            <div class="s_tab_box">
                                <span class="icon">
                                    <img src="assets/images/tabs/game_black.svg" alt="Game Development icon"
                                        class="black_icon">
                                    <img src="assets/images/tabs/game_white.svg" alt="Game Development icon"
                                        class="white_icon">
                                </span>
                                <div class="tab_texts">
                                    <h3>Game</h3>
                                    <h4>Development</h4>
                                </div>
                            </div>
                            <span class="bg_icon">
                                <img src="assets/images/tabs/icon2.webp" alt="icon">
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="service_tab_content">
                        <!-- mobile accordion heading -->
                        <div class="srvc_accordion_hdng h_srvc_tabs active gradient_1">
                            <div class="s_tab_box">
                                <span class="icon">
                                    <img src="assets/images/tabs/ui_ux_black.svg" alt="ui ux icon" class="black_icon">
                                    <img src="assets/images/tabs/ui_ux_white.svg" alt="ui ux icon" class="white_icon">
                                </span>
                                <div class="tab_texts">
                                    <h3>UI/UX</h3>
                                    <h4>Development</h4>
                                </div>
                            </div>
                            <span class="bg_icon">
                                <img src="assets/images/tabs/icon1.webp" alt="icon">
                            </span>
                        </div>
                        <!-- mobile accordion heading -->
                        <div class="service_tab_panel " id="tab_1">
                                <h3>UI/UX Development</h3>
                                 
                            
                            <p>
                                Engage and retain your users with intuitive, compelling, and responsive design. We design user-friendly interfaces to improve the consumer experience.
                            </p>
                            <ul class="d-flex align-items-center">
                                <li><b>UX/UI Development Services</b></li>
                 
                            </ul>
                            <div class="srvc_skills_row d-flex flex-wrap">
                                <div class="skills_logos">
                                    <span class="img_box">
                                        <img src="assets/images/tabs/photoshop.svg" alt="Photoshop logo">
                                    </span>
                                    <h6>Photoshop</h6>
                                </div>
                                <div class="skills_logos">
                                    <span class="img_box">
                                        <img src="assets/images/tabs/illustrator.svg" alt="Illustrator logo">
                                    </span>
                                    <h6>Illustrator</h6>
                                </div>
                                <div class="skills_logos">
                                    <span class="img_box">
                                        <img src="assets/images/tabs/Xd.svg" alt="XD logo">
                                    </span>
                                    <h6>XD</h6>
                                </div>
                                <div class="skills_logos">
                                    <span class="img_box">
                                        <img src="assets/images/tabs/figma.svg" alt="Figma logo">
                                    </span>
                                    <h6>Figma</h6>
                                </div>
                                <div class="skills_logos">
                                    <span class="img_box">
                                        <img src="assets/images/tabs/zeplin.svg" alt="Zeplin logo">
                                    </span>
                                    <h6>Zeplin</h6>
                                </div>
                            </div>
                            <div class="tab_explore_btn">
                                <a href="{{route('services/ui-ux-development')}}"
                                    class="explore_btn site_button">Explore</a>
                            </div>
                        </div>
                        <!-- mobile accordion heading -->
                        <div class="srvc_accordion_hdng h_srvc_tabs gradient_2">
                            <div class="s_tab_box">
                                <span class="icon">
                                    <img src="assets/images/tabs/game_black.svg" alt="Game Development icon"
                                        class="black_icon">
                                    <img src="assets/images/tabs/game_white.svg" alt="Game Development image"
                                        class="white_icon">
                                </span>
                                <div class="tab_texts">
                                    <h3>Game</h3>
                                    <h4>Development</h4>
                                </div>
                            </div>
                            <span class="bg_icon">
                                <img src="assets/images/tabs/icon2.webp" alt="icon">
                            </span>
                        </div>
                        <!-- mobile accordion heading -->
                        <div class="service_tab_panel" id="tab_2">
                                <h3>Game Development</h3>
                           
                            <p>Our developers are well-versed in the Teen Patti game, Ludo, fantasy sports, and fantasy cricket game development.

                            </p>
                            <ul class="d-flex align-items-center">
                                <li><b>Mobile Game App Development Company</b></li>
                                <li><b>Game App Development Company </b></li>
                            </ul>
                            <div class="srvc_skills_row d-flex flex-wrap">
                                <div class="skills_logos">
                                    <span class="img_box">
                                        <img src="assets/images/tabs/after-effects.svg" alt="After effects logo">
                                    </span>
                                    <h6>After Effect</h6>
                                </div>
                                <div class="skills_logos">
                                    <span class="img_box">
                                        <img src="assets/images/tabs/unity.svg" alt="Unity logo">
                                    </span>
                                    <h6>unity</h6>
                                </div>
                                <div class="skills_logos">
                                    <span class="img_box">
                                        <img src="assets/images/tabs/unreal.svg" alt="Unreal Engine logo">
                                    </span>
                                    <h6>Unreal Engine</h6>
                                </div>
                                <div class="skills_logos">
                                    <span class="img_box">
                                        <img src="assets/images/tabs/blender.svg" alt="logo">
                                    </span>
                                    <h6>Blender</h6>
                                </div>
                            </div>
                            <div class="tab_explore_btn">
                                <a href="#" target="_blank"
                                    class="explore_btn site_button">Explore</a>
                            </div>
                        </div>
                        <!-- mobile accordion heading -->
                        <div class="srvc_accordion_hdng h_srvc_tabs gradient_3">
                            <div class="s_tab_box">
                                <span class="icon">
                                    <img src="assets/images/tabs/mobile_black.svg" alt="Mobile App Development icon"
                                        class="black_icon">
                                    <img src="assets/images/tabs/mobile_white.svg" alt="Mobile App Development i"
                                        class="white_icon">
                                </span>
                                <div class="tab_texts">
                                    <h3>Mobile App</h3>
                                    <h4>Development</h4>
                                </div>
                            </div>
                            <span class="bg_icon">
                                <img src="assets/images/tabs/icon3.webp" alt="icon">
                            </span>
                        </div>
                        <!-- mobile accordion heading -->
                        <div class="service_tab_panel " id="tab_3">
                           <h3>Mobile App Development</h3>
                            
                            <p>Consultants from Asia offer unique mobile application development services. 
                                You can increase your sales and client loyalty with a stable, interactive, and high-performance mobile app.</p>
                                <ul class="d-flex align-items-center">
                                <li><b>Mobile App Development Software</b></li>
                                <li><b>Android and iOS App Development </b></li>
                            </ul>
                            <div class="srvc_skills_row d-flex flex-wrap">
                                <div class="skills_logos">
                                    <span class="img_box">
                                        <img src="assets/images/tabs/apple.svg" alt="iOS logo">
                                    </span>
                                    <h6>iOS</h6>
                                </div>
                                <div class="skills_logos">
                                    <span class="img_box">
                                        <img src="assets/images/tabs/android.svg" alt="Android logo">
                                    </span>
                                    <h6>Android</h6>
                                </div>
                                <div class="skills_logos">
                                    <span class="img_box">
                                        <img src="assets/images/tabs/flutter.svg" alt="Flutter logo">
                                    </span>
                                    <h6>Flutter</h6>
                                </div>
                            </div>
                            <div class="tab_explore_btn">
                                <a href="{{route('services/mobile-app-development')}}"
                                    class="explore_btn site_button">Explore</a>
                            </div>
                        </div>
                        <!-- mobile accordion heading -->
                        <div class="srvc_accordion_hdng h_srvc_tabs gradient_4">
                            <div class="s_tab_box">
                                <span class="icon">
                                    <img src="assets/images/tabs/web_app_black.svg" alt="Web App Developmet icon"
                                        class="black_icon">
                                    <img src="assets/images/tabs/web_app_white.svg" alt="Web App Development image"
                                        class="white_icon">
                                </span>
                                <div class="tab_texts">
                                    <h3>Web  </h3>
                                    <h4>Development Services</h4>
                                </div>
                            </div>
                            <span class="bg_icon">
                                <img src="assets/images/tabs/icon4.webp" alt="icon">
                            </span>
                        </div>
                        <!-- mobile accordion heading -->
                        <div class="service_tab_panel active" id="tab_4">
                            <h3>Web Development Services</h3>
                            
                            <p>We create effective and interesting web solutions for companies in various industries. 
                                Because of our vast range of technology, we can choose the optimal method for your project. 
                                Our developers design progressive web apps, augmented reality e-commerce stores, and more.
                            </p>
                            <ul class="d-flex align-items-center">
                                <li><b>Website Development Services</b></li>
                                <li><b>Website Application Development Services</b></li>
                            </ul>
                            <div class="srvc_skills_row d-flex flex-wrap">
                                <div class="skills_logos">
                                    <span class="img_box">
                                        <img src="assets/images/tabs/html.svg" alt="html logo">
                                    </span>
                                    <h6>Html</h6>
                                </div>
                                <div class="skills_logos">
                                    <span class="img_box">
                                        <img src="assets/images/tabs/javascript.svg" alt="Javascript logo">
                                    </span>
                                    <h6>Javascript</h6>
                                </div>
                                <div class="skills_logos">
                                    <span class="img_box">
                                        <img src="assets/images/tabs/angular.svg" alt="Angular logo">
                                    </span>
                                    <h6>Angular</h6>
                                </div>
                                <div class="skills_logos">
                                    <span class="img_box">
                                        <img src="assets/images/tabs/react.svg" alt="React logo">
                                    </span>
                                    <h6>React</h6>
                                </div>
                            </div>
                            <div class="tab_explore_btn">
                                <a href="{{route('services/web-app-development')}}"
                                    class="explore_btn site_button">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bg image -->
        <div class="service_bg_overlay_dv" style="background-image: url(assets/images/service_bg_shape.webp);">
            <span class="s_circle_shape">
                <img src="assets/images/s_shape_icon.svg" alt="circle">
            </span>
        </div>
        <!-- bg image -->
    </div>
</section>
<!-- service section end -->
<!-- Call to action start -->
<section class="call_to_action_wrap pad_top_bottom_80">
    <div class="container">
        <div class="call_to_inr_box call_bg_image1 bounceIn wow">
            <div class="overlay"></div>
            <span class="call_circle_shape">
                <img src="{{ URL::asset('assets/images').'/'.'circle_shape.png'}}" alt="circle">
            </span>
            <span class="call_circle_shape2">
                <img src="{{ URL::asset('assets/images').'/'.'circle_shape2.png'}}" alt="circle">
            </span>
            <div class="row">
                <div class="col-lg-12">
                    <div class="call_to_text max_width_694">
                        <h2 class="heading text_color_red">Hire Software Developer Now!</h2>
                        <p class="text-white">Our team can help you convert your business with cutting-edge technology to stay ahead of the competition. </p>
                        <div class="detail_buttons">
                            <a href="#ftr_contact_form" class="site_button call_to_btn">Let’s Connect With Us!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- call to action end -->
<!-- industries section start -->
<section class="industries_section_wrap pad_bottom_80">
    <div class="container">
        <div class="sections_heading_area text-center mr_b_40">
            <div>
                <span class="badge_text bg_black">Get Industry-Wise Solutions</span>
            </div>
            <h3 class="headings">Expertise in Multi-Industry For Different Business Domains</h3>
            <p>We are experts at delivering custom software solutions to businesses in various industries. Our experience includes the following industries:</p>
        </div>
        <div class="industries_tabs d-flex justify-content-center mr_b_30">
            <ul class="industries_tab_lst d-flex flex-wrap">
                <li data-tab="fintech" class="active">E-Commerce</li>
                <li data-tab="e-commerce">Healthcare</li>
                <li data-tab="healthcare">Education</li>
                <li data-tab="fitness">Real Estate</li>
                <li data-tab="food_delivery">Supply Chain</li>
                <li data-tab="real_estate">Social Media</li>
                <li data-tab="travel">Travel & Hospitality</li>
                <li data-tab="sports">HRIS</li>
            </ul>
        </div>
        <!-- tab panel container -->
        <div class="industries_panel_container">
            <!-- tab panel -->
            <div class="industries_tab_panel active" id="fintech">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="industries_panel_img ">
                            <div class="ind-img_colms">
                                <img src="{{ URL::asset('assets/images').'/'.'industries/ecommerce.webp'}}"
                                    alt="E-Commerce image1">
                            </div>
                            <!-- <div class="img_colms">
                                <img src="{{ URL::asset('assets/images').'/'.'industries/e-com-2.webp'}}"
                                    alt="E-Commerce image2">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="industries_panel_text">
                            <h3>E-Commerce</h3>
                            
                            <ul class="custom_list_style ul_expandible_3">
                                <li><b>E-commerce Platforms:</b> Develop full e-commerce platforms that include shopping carts, secure payment gateways, user reviews, and efficient inventory management.</li>
                                <li><b>E-Commerce Mobile Apps:</b> Build mobile shopping applications with features like tailored recommendations, simple checkout, and real-time order tracking.</li>
                                <li><b>Systems for Managing Inventories:</b> Develop solutions for effective inventory management, including stock tracking, forecasting, and reordering capabilities.</li>
                                <li><b>Consumer Loyalty Apps: </b>  Create mobile apps to handle client loyalty programmes, including tracking rewards, creating individualised offers, and encouraging consumer interaction.</li>
                                <li><b>POS Systems:</b> Build point-of-sale systems, including customer administration, sales reporting, and inventory management.</li>
                                <li><b>AI-Powered Chatbots: </b> Create AI-powered chatbots for customer care that can respond to questions from users and make tailored product suggestions.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tab panel -->
            <!-- tab panel -->
            <div class="industries_tab_panel" id="e-commerce">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="industries_panel_img">
                            <div class="ind-img_colms">
                                <img src="{{ URL::asset('assets/images').'/'.'industries/Healthcare.webp'}}"
                                    alt="Health image1">
                            </div>
                            <!-- <div class="img_colms">
                                <img src="{{ URL::asset('assets/images').'/'.'industries/Health-2.webp'}}"
                                    alt="Health image2">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="industries_panel_text">
                            <h3>Healthcare</h3>
                          
                            <ul class="custom_list_style ul_expandible_3">
                                <li><b>Electronic Health Records (EHR): </b> Develop safe, interoperable systems for managing patient records, including medical history, medications, and test results.</li>
                                <li><b>Telemedicine Applications: </b> Create mobile or online platforms for remote consultations with tools like video chatting, secure messaging, and appointment scheduling.</li>
                                <li><b>Healthcare Analytics: </b>  Use data to provide insights that may be used, such as predictive analytics for bettering operational effectiveness and patient outcomes.</li>
                                <li><b>Health Applications: </b> Create apps for fitness tracking, chronic illness management, and other aspects of health and wellbeing that integrate wearable technology. </li>
                                <li><b>AI in Diagnostics: </b> Create AI-powered tools, such as image recognition software for medical scans, enabling precise and effective diagnosis.</li>
                                <li><b>IoT in Healthcare: </b> Use wearable technology and networked medical equipment to implement Internet of Things (IoT) solutions for real-time patient monitoring.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tab panel -->
            <!-- tab panel -->
            <div class="industries_tab_panel" id="healthcare">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="industries_panel_img ">
                            <div class="ind-img_colms">
                                <img src="{{ URL::asset('assets/images').'/'.'industries/elearning.webp'}}"
                                    alt="Education image1">
                            </div>
                            <!-- <div class="img_colms">
                                <img src="{{ URL::asset('assets/images').'/'.'industries/e-learn-2.webp'}}"
                                    alt="Education image2">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="industries_panel_text">
                            <h3>Education</h3>
                        
                            <ul class="custom_list_style ul_expandible_3">
                                <li><b>E-learning Platforms:</b> Create thorough online learning environments with tools for course creation, tracking progress, assessment, and discussion forums.</li>
                                <li><b>Educational Apps: </b> Build mobile programs that offer interactive learning experiences, complete with elements like multimedia lessons, tests, and progress monitoring.</li>
                                <li><b>Virtual Classroom Software: </b> Create virtual classroom platforms with real-time video conferencing, shared whiteboards, file sharing, and collaborative tools. </li>
                                <li><b>Student Information Systems: </b> Systems for managing student information, including admissions, grading, attendance, and behaviour tracking, should be developed.</li>
                                <li><b>Systems for AI-Based Tutoring: </b> Utilise AI and machine learning to offer individualised instruction and clever tutoring.</li>
                                <li><b>Systems for managing learning (LMS):</b>  Create an LMS with integrated analytics for managing, monitoring, and delivering training courses and programmes.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tab panel -->
            <!-- tab panel -->
            <div class="industries_tab_panel" id="fitness">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="industries_panel_img">
                            <div class="ind-img_colms">
                                <img src="{{ URL::asset('assets/images').'/'.'industries/real-estate.webp'}}"
                                    alt="Real-Estate image1">
                            </div>
                            <!-- <div class="img_colms">
                                <img src="{{ URL::asset('assets/images').'/'.'industries/real-2.webp'}}"
                                    alt="Real-Estate image2">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="industries_panel_text">
                        <h3>Real Estate</h3>
                            <ul class="custom_list_style ul_expandible_3">
                                <li><b>Real Estate Platforms: </b> Develop all-rounder platforms that include prominent real estate corporations, secure payment gateways, client reviews, and efficient inventory management.</li>
                                <li><b>Create CRM:</b> Create integrated systems that can access centralised sales data from several platforms.</li>
                                <li><b>ERP Solutions:</b> To manage billing, reporting, contracts, data on property rentals, and real estate sales, and develop user-friendly ERP solutions. </li>
                                <li><b>With Data Security: </b> To comply with the severe regulatory requirements of the real estate and property sector, secure your data.</li>
                                <li><b>AI-Powered Chatbots: </b> Create AI-powered chatbots for customer care that can respond to questions from users and make tailored product suggestions.</li>
                                <li><b>Systems for Managing Client Feedback: </b> Develop solutions for effective inventory management, including client feedback. Promote client interaction and improve your offerings to clients and prospects.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tab panel -->
            <!-- tab panel -->
            <div class="industries_tab_panel" id="food_delivery">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="industries_panel_img">
                            <div class="ind-img_colms">
                                <img src="{{ URL::asset('assets/images').'/'.'industries/supply-chain.webp'}}"
                                    alt="Supply Chain image1">
                            </div>
                            <!-- <div class="img_colms">
                                <img src="{{ URL::asset('assets/images').'/'.'industries/scm-2.webp'}}"
                                    alt="Supply Chain image2">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="industries_panel_text">
                            <h3>Supply Chain Management</h3>
                           
                            <ul class="custom_list_style">
                                <li><b>Supply Chain With Intelligence: </b> Create a single source of truth from all the data, allowing changes in one area to be quickly applied to all the others. To achieve end-to-end visibility and control, build a full, high-fidelity digital twin of your supply chain. </li>
                                <li><b>Enhance Predictability: </b> To increase predictability, align people, processes, and technology. By using crowd intelligence, machine learning, and sophisticated algorithms to your signals to discover change causes, you may increase forecast accuracy.</li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tab panel -->
            <!-- tab panel -->
            <div class="industries_tab_panel" id="real_estate">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="industries_panel_img">
                            <div class="ind-img_colms">
                                <img src="{{ URL::asset('assets/images').'/'.'industries/social-media.webp'}}"
                                    alt="Social Media image1">
                            </div>
                            <!-- <div class="img_colms">
                                <img src="{{ URL::asset('assets/images').'/'.'industries/social-2.webp'}}"
                                    alt="Social Media image2">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="industries_panel_text">
                            <h3>Social Media</h3>
                            
                            <ul class="custom_list_style ul_expandible_3">
                                <li><b>Video Streaming Apps:</b> Develop complex applications with attributes like customised content curation, HD streaming, offline viewing, and multi-device synchronisation.</li>
                                <li><b>Music Streaming Platforms: </b> Build social media app platforms for music streaming, including features like curated playlists, custom suggestions, and high-quality audio streaming.</li>
                                <li><b>Gaming Platforms:</b>  Platforms for gaming: Develop entertaining platforms for gaming that feature online multiplayer, real-time updates, and in-app purchases.</li>
                                <li><b>Interactive Social Media Apps: </b> Design applications that give interactive media experiences using AR/VR technology, allowing users to interact with information in immersive ways. Interactive Media Apps.</li>
                                <li><b>Social Media Tools: </b> Build social media management and content optimisation tools, such as post scheduling, analytics, and automatic reporting.</li>
                                <li><b>Media Production Software: </b>  Develop software for media production, such as video editing programs, animation programmes, and tools for creating special effects.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tab panel -->
            <!-- tab panel -->
            <div class="industries_tab_panel" id="travel">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="industries_panel_img">
                            <div class="ind-img_colms">
                                <img src="{{ URL::asset('assets/images').'/'.'industries/travel.webp'}}"
                                    alt="Travel image1">
                            </div>
                            <!-- <div class="img_colms">
                                <img src="{{ URL::asset('assets/images').'/'.'industries/travel-2.webp'}}"
                                    alt="Travel image2">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="industries_panel_text">
                            <h3>Travel & Hospitality</h3>
                           
                            <ul class="custom_list_style">
                                <li><b>Travel and Tourism Mobile Applications: </b> Provide a superb mobile experience to surpass your visitors' expectations for service. Utilise cutting-edge <b>software development</b> in the hospitality industry for smart features, amenity services, loyalty and customization engines, and room reservations.</li>
                                <li><b>Hospitality Solutions: </b> You may enable contactless hotel operations with CFA mobile and kiosk solutions. Give your consumers access to 24-hour facilities and services and intuitive, touchless technology.</li>
                                <li><b>Portable Kiosk:</b>  Visitors can start enjoying their trip sooner, thanks to mobile kiosks. Using our bespoke travel software development, customers may check in quickly and easily without waiting in a queue at the front desk.</li>
                                <li><b>Impressive Rooms:</b> Amaze your customers with personalised IT hospitality solutions for smart rooms, which include offline and online operation, preventive maintenance, and digital control of the environment and sensors from an in-room tablet.</li>
                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tab panel -->
            <!-- tab panel -->
            <div class="industries_tab_panel" id="sports">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="industries_panel_img">
                            <div class="ind-img_colms">
                                <img src="{{ URL::asset('assets/images').'/'.'industries/hris-webp.webp'}}"
                                    alt="fintech image1">
                            </div>
                            <!-- <div class="img_colms">
                                <img src="{{ URL::asset('assets/images').'/'.'industries/fintech2.webp'}}"
                                    alt="fintech image2">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="industries_panel_text">
                            <h3>HRIS</h3>
                            
                            <ul class="custom_list_style ul_expandible_3">
                                <li><b>Project Management Tools:</b> Develop reliable project management software that assists organizations in streamlining their workflow, task management, and team collaboration.</li>
                                <li><b>CRM Programmes: </b> To successfully manage sales funnels, customer interactions, support ticketing, and create customer relationship management (CRM) solutions.</li>
                                <li><b>ERP Alternatives: </b> Create thorough Enterprise Resource Planning (ERP) software to manage and integrate important corporate activities.</li>
                                <li><b>Business Intelligence Platforms: </b>  Businesses may visualize critical performance indicators and make data-driven choices using business intelligence platforms, which include data analytics and business intelligence capabilities.</li>
                                <li><b>AI and machine learning tools: </b> Should be used to improve service offerings through predictive analytics, automation, and personalization.</li>
                                <li><b>HRIS Software:</b> Build comprehensive human resource management systems for hiring, onboarding, paying employees, and managing performance using HR management software.</li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
            <!-- tab panel -->
        </div>
        <!-- tab panel container -->
    </div>
</section>
<!-- industries section end -->
<!-- hiring process section start -->
<section class="hiring_process_section pad_bottom_50">
    <div class="container">
        <div class="sections_heading_area text-center mr_b_40">
            <div>
                <span class="badge_text bg_black">Our Hiring Procedure</span>
            </div>
            <h3 class="headings">The Procedures We Use to Hire Developers</h3>
            <!-- <p>Keep up with the process, and hire our expert resources!</p> -->
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 hire_process_col">
                <div class="hire_process_box">
                    <div class="hire_circle">
                        <h3>Drop an Inquiry</h3>
                    </div>
                    <span class="dash_border">
                        <img src="{{ URL::asset('assets/images').'/'.'dash_border_down.svg'}}" alt="border">
                    </span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 hire_process_col">
                <div class="hire_process_box">
                    <div class="hire_circle">
                        <h3>Consult With Our Experts</h3>
                    </div>
                    <span class="dash_border">
                        <img src="{{ URL::asset('assets/images').'/'.'dash_border_up.svg'}}" alt="border">
                    </span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 hire_process_col">
                <div class="hire_process_box">
                    <div class="hire_circle">
                        <h3>Select Engagement Model</h3>
                    </div>
                    <span class="dash_border">
                        <img src="{{ URL::asset('assets/images').'/'.'dash_border_down.svg'}}" alt="border">
                    </span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 hire_process_col">
                <div class="hire_process_box">
                    <div class="hire_circle">
                        <h3>Sign off and Begin Work</h3>
                    </div>
                    <span class="dash_border">
                        <img src="{{ URL::asset('assets/images').'/'.'dash_border_up.svg'}}" alt="border">
                    </span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 hire_process_col">
                <div class="hire_process_box">
                    <div class="hire_circle">
                        <h3>Scale Your Team</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hiring process section end -->
<!-- Business modal section start -->
<section class="business_modal_section bg_gray pad_top_80 pad_bottom_40">
    <div class="container">
        <div class="business_modal_heading">
            <div><span class="badge_text bg_red">Our Engagment Model</span></div>
            <div class="tree_border_img">
                <img src="{{ URL::asset('assets/images').'/'.'business/business_tree_border.svg'}}" alt="Tree Border">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="business_modal_box frombottom wow">
                    <div class="icon_box">
                        <span class="icons">
                            <img src="{{ URL::asset('assets/images').'/'.'business/time_meterial.svg'}}"
                                alt="Full time Experts">
                        </span>
                    </div>
                    <div class="content_box">
                        <h3> Full-Time Experts</h3>
                        <p>Hire CFA's full-time software development specialists, monitor their work, and assess performance in real-time.</p>
                    </div>
                    <span class="b_numbers">1</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="business_modal_box frombottom wow" data-wow-delay=".3s">
                    <div class="icon_box">
                        <span class="icons">
                            <img src="{{ URL::asset('assets/images').'/'.'business/fixscope.svg'}}"
                                alt="Part time Experts">
                        </span>
                    </div>
                    <div class="content_box">
                        <h3>Part-Time Expert</h3>
                        <p>Hire part-time web app development specialists from CFA  to reap ongoing benefits at the most reasonable cost.</p>
                    </div>
                    <span class="b_numbers">2</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="business_modal_box frombottom wow" data-wow-delay=".6s">
                    <div class="icon_box">
                        <span class="icons">
                            <img src="{{ URL::asset('assets/images').'/'.'business/hire_team.svg'}}"
                                alt="Hourly hiring">
                        </span>
                    </div>
                    <div class="content_box">
                        <h3>Hourly Hiring</h3>
                        <p>Hire our <b>software developers</b> on an hourly basis when you need them, as per your needs.</p>
                    </div>
                    <span class="b_numbers">3</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Business modal section end -->
<!-- Call to action start -->
<section class="call_to_action_wrap pad_bottom_80 bg_gray">
    <div class="container">
        <div class="call_to_inr_box call_bg_image2 bounceIn wow">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call_to_text max_width_789">
                        <h3 class="heading text_color_white">It's High time to build Something Better?</h3>
                        <div class="detail_buttons">
                            <a href="#ftr_contact_form" class="site_button call_to_btn">Speak With Our Experts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- call to action end -->
<!-- technology stack section start -->
<section class="technology_stack_section bg_gray pad_bottom_40">
    <div class="container">
        <div class="sections_heading_area text-center mr_b_40">
            <div>
                <span class="badge_text bg_black">Technologies Stack</span>
            </div>
            <h3 class="headings">Using Such a Modest Tech Stack is our Biggest Advantage.</h3>
        </div>
        <div class="techno_tab_div  d-flex justify-content-center">
            <ul class="techno_tab_lst d-flex">
                <li data-tab="web_tab" class="active tab_item">
                    <div class="tab_dv d-flex">
                        <span class="icon">
                            <i class="far fa-laptop-code"></i>
                        </span>
                        <span class="texts">Web</span>
                    </div>
                </li>
                <li data-tab="mobile_tab" class="tab_item">
                    <div class="tab_dv d-flex">
                        <span class="icon">
                            <i class="far fa-mobile"></i>
                        </span>
                        <span class="texts">Mobile</span>
                    </div>
                </li>
            </ul>
        </div>
        <!-- tab content start -->
        <div class="techno_tab_content">
            <!-- web tab start -->
            <div class="techno_tab_panel active" id="web_tab">
                <div class="tab_center_text_dv d-flex justify-content-center">
                    <span class="tab_center_text">Web</span>
                </div>
                <div class="techno_text_colm_container">
                    <div class="border_shapes web_border_shape">
                        <span class="red_circle"></span>
                    </div>
                    <div class="row techno_text_row">
                        <!-- colmn start -->
                        <div class="techno_text_colm">
                            <span class="techno_categ_texts"><span class="red_circle"></span>Frontend</span>
                            <div class="techno_text_box">
                                <span class="red_circle"></span>
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/react.svg'}}"
                                                alt="React icon">
                                        </span>
                                        <span class="text">React</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/angular.svg'}}"
                                                alt="Angular icon">
                                        </span>
                                        <span class="text">Angular</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/typescript.svg'}}"
                                                alt="typescript icon">
                                        </span>
                                        <span class="text">TypeScript</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/javascript.svg'}}"
                                                alt="javascript icon">
                                        </span>
                                        <span class="text">JavaScript</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/html5.svg'}}"
                                                alt="html5 icon">
                                        </span>
                                        <span class="text">HTML5</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/css3.svg'}}"
                                                alt="CSS3 icon">
                                        </span>
                                        <span class="text">CSS3</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- colmn end -->
                        <!-- colmn start -->
                        <div class="techno_text_colm">
                            <span class="techno_categ_texts"><span class="red_circle"></span>Backend</span>
                            <div class="techno_text_box">
                                <span class="red_circle"></span>
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/ruby.svg'}}"
                                                alt="Ruby icon">
                                        </span>
                                        <span class="text">Ruby</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/node-js.svg'}}"
                                                alt="Node icon">
                                        </span>
                                        <span class="text">Node.js</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/go.svg'}}"
                                                alt="Go icon">
                                        </span>
                                        <span class="text">Golang</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/java.svg'}}"
                                                alt="Java icon">
                                        </span>
                                        <span class="text">Java</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/python.svg'}}"
                                                alt="Python icon">
                                        </span>
                                        <span class="text">Python</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- colmn end -->
                        <!-- colmn start -->
                        <div class="techno_text_colm">
                            <span class="techno_categ_texts"><span class="red_circle"></span>Database</span>
                            <div class="techno_text_box">
                                <span class="red_circle"></span>
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/postgresql.svg'}}"
                                                alt="Sql icon">
                                        </span>
                                        <span class="text">PostgreSQL</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/mongodb.svg'}}"
                                                alt="react">
                                        </span>
                                        <span class="text">MongoDB</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/mysql.svg'}}"
                                                alt="MySql icon">
                                        </span>
                                        <span class="text">MySQL</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/elasticsearch.svg'}}"
                                                alt="Elastic Search icon">
                                        </span>
                                        <span class="text">Elastic search</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/redis.svg'}}"
                                                alt="icon">
                                        </span>
                                        <span class="text">Redis</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/aws-rds.svg'}}"
                                                alt="aws icon">
                                        </span>
                                        <span class="text">AWS RDS</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- colmn end -->
                        <!-- colmn start -->
                        <div class="techno_text_colm">
                            <span class="techno_categ_texts"><span class="red_circle"></span>cloud</span>
                            <div class="techno_text_box">
                                <span class="red_circle"></span>
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/aws.svg'}}"
                                                alt="aws icon">
                                        </span>
                                        <span class="text">AWS</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/google-cloud.svg'}}"
                                                alt="Google cloud icon">
                                        </span>
                                        <span class="text">Google Cloud</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/microsoftazure.svg'}}"
                                                alt="Microsoftazur icon">
                                        </span>
                                        <span class="text">Microsoft Azure</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/oracle-cloud.svg'}}"
                                                alt="Oracle icon">
                                        </span>
                                        <span class="text">Oracle Cloud</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- colmn end -->
                        <!-- colmn start -->
                        <div class="techno_text_colm">
                            <span class="techno_categ_texts"><span class="red_circle"></span>DevOps</span>
                            <div class="techno_text_box">
                                <span class="red_circle"></span>
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/Kubernetes.svg'}}"
                                                alt="Kubernetes icon">
                                        </span>
                                        <span class="text">Kubernetes</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/docker.svg'}}"
                                                alt="Docker icon">
                                        </span>
                                        <span class="text">Docker</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/dokku.svg'}}"
                                                alt="Dokku icon">
                                        </span>
                                        <span class="text">Dokku</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- colmn end -->
                    </div>
                </div>
            </div>
            <!-- web tab End -->
            <!-- web tab start -->
            <div class="techno_tab_panel" id="mobile_tab">
                <div class="tab_center_text_dv d-flex justify-content-center">
                    <span class="tab_center_text">Mobile</span>
                </div>
                <div class="techno_text_colm_container">
                    <div class="border_shapes mobile_border_shape">
                        <span class="red_circle"></span>
                    </div>
                    <div class="row techno_text_row">
                        <!-- colmn start -->
                        <div class="techno_text_colm">
                            <span class="techno_categ_texts"><span class="red_circle"></span>Android</span>
                            <div class="techno_text_box">
                                <span class="red_circle"></span>
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/java.svg'}}"
                                                alt="Java icon">
                                        </span>
                                        <span class="text">Java</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/kotlin.svg'}}"
                                                alt="Kotlin icon">
                                        </span>
                                        <span class="text">Kotlin</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- colmn end -->
                        <!-- colmn start -->
                        <div class="techno_text_colm">
                            <span class="techno_categ_texts"><span class="red_circle"></span>IOS</span>
                            <div class="techno_text_box">
                                <span class="red_circle"></span>
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/swift.svg'}}"
                                                alt="Swift icon">
                                        </span>
                                        <span class="text">Swift</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/OBJ-C.svg'}}"
                                                alt="Obj C icon">
                                        </span>
                                        <span class="text">Objective-c</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- colmn end -->
                        <!-- colmn start -->
                        <div class="techno_text_colm">
                            <span class="techno_categ_texts"><span class="red_circle"></span>Cross Platform</span>
                            <div class="techno_text_box">
                                <span class="red_circle"></span>
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/flutter.svg'}}"
                                                alt="Flutter icon">
                                        </span>
                                        <span class="text">Flutter</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('assets/images').'/'.'icons/techno/react_native.svg'}}"
                                                alt="React Native icon  ">
                                        </span>
                                        <span class="text">React Native</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- colmn end -->
                    </div>
                </div>
            </div>
            <!-- web tab End -->
        </div>
        <!-- tab content End -->
    </div>
</section>
<!-- technology stack section end -->
<!-- clients section start -->
<section class="h_clients_section pad_top_bottom_80">
    <div class="container">
        <div class="sections_heading_area text-center mr_b_60">
            <!-- <div>
                <span class="badge_text bg_black">Client’s We Serve</span>
            </div> -->
            <h3 class="headings">Don’t Be Good Enough, Be Better</h3>
            <p>We are a full-service business focusing on technology, creativity, and strategy. We never treat our clients like projects; instead, we work closely with you at every stage.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <ul class="clients_tab_lst">
                    <li data-tab="ctab_1" class="active">
                        <div class="tabs_inrdv d-flex">
                            <span class="counts">1</span>
                            <span class="texts">Experienced team</span>
                        </div>
                    </li>
                    <li data-tab="ctab_2">
                        <div class="tabs_inrdv d-flex">
                            <span class="counts">2</span>
                            <span class="texts">Customer-Centric Strategy</span>
                        </div>
                    </li>
                    <li data-tab="ctab_3">
                        <div class="tabs_inrdv d-flex">
                            <span class="counts">3</span>
                            <span class="texts">We Deliver Before Time and On-Budget</span>
                        </div>
                    </li>
                 
                </ul>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="client_tab_content">
                    <!--  tab panel -->
                    <div class="client_tab_panel active" id="ctab_1">
                        <p>Our team is made up of experienced professionals who are knowledgeable in a wide variety of technological stacks and platforms. We constantly stay current on the most recent business trends and technology developments to ensure our clients obtain cutting-edge solutions.</p>
                        <!-- <h3>With CFA, Let’s Bring A Change</h3>
                        <ul class="custom_list_style">
                            <li>With our comprehensive digital capabilities, you may innovate flexibly and work
                                efficiently.
                            </li>
                            <li>Create online platforms and enterprise-grade applications to cut costs and complexity.
                            </li>
                            <li>Employ a hardworking, scalable group of software developers, designers, and marketing
                                strategists.</li>
                            <li>Utilize our read-to-deploy software assets to decrease your time to market.</li>
                        </ul> -->
                    </div>
                    <!--  tab panel -->
                    <!--  tab panel -->
                    <div class="client_tab_panel" id="ctab_2">
                        <p>To ensure their demands are addressed, we put our clients first and collaborate closely with them throughout the development process. Our focus on the little things and process orientation distinguishes us from the competition. We also offer ongoing support and maintenance to keep our solutions adapting to our client's evolving demands.</p>
                        <!-- <h3>With CFA, Influence The World!</h3>
                        <ul class="custom_list_style">
                            <li>Boost your operations with our comprehensive software development solution portfolio and
                                digital know-how.</li>
                            <li>Utilise our ready-to-deploy solutions across sectors to be innovative and flexible.</li>
                            <li>Scale operations with complete flexibility thanks to our full-time, highly qualified,
                                and adaptable personnel.</li>
                            <li>Our unique integration services can reduce operational costs and risks and reduce
                                complexity.</li>
                            <li>You can grow your customer base with our tested ideas, methodology, and engagement
                                tools.</li>
                        </ul> -->
                    </div>
                    <!--  tab panel -->
                    <!--  tab panel -->
                    <div class="client_tab_panel" id="ctab_3">
                        <p>Our managers have years of expertise and are adept at organising projects, keeping track of deadlines, and staying within budget. We integrate cutting-edge project management tools and procedures with an agile development methodology to guarantee that projects are delivered on time and within budget.</p>
                        <!-- <h3>With CFA, Let’s Bring A Change</h3>
                        <ul class="custom_list_style">
                            <li>Find the best technology to carry out expensive yet mission-critical projects.</li>
                            <li>With our end-to-end digital knowledge, we reshape current business processes and adopt
                                agility.</li>
                            <li>Find a full-suite technology partner who can spot the opportunities that will drive your
                                success.</li>
                            <li>Utilize our technical and marketing staff to implement your long-term business
                                objectives, concepts, and plans.</li>
                        </ul> -->
                    </div>
                    <!--  tab panel -->
                    <!--  tab panel -->
                    <div class="client_tab_panel" id="ctab_4">
                        <h3>With CFA, Influence The World!</h3>
                        <ul class="custom_list_style">
                            <li>Validation and confirmation of your concept.</li>
                            <li>For entrepreneurs: In the seed stage, brainstorming, market research, and product
                                development.</li>
                            <li>Quickly creating a minimum viable product creation and constructing an innovative
                                digital roadmap for the future.</li>
                            <li>Controlling your spending and deadlines, rapid turnaround times, direct one-on-one
                                communication, and reliable reporting extended system upkeep and support as necessary
                                for a protracted collaboration</li>
                        </ul>
                    </div>
                    <!--  tab panel -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- clients section end -->
<!-- testimonial section start -->
<section class="testimonials_section_wrap">
    <div class="overlay"></div>
    <div class="container">
        <div class="row row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="testi_heading_left_wrap">
                    <div class="testi_heading_left">
                        <div class="top_heading d-flex flex-wrap">
                            <span class="badge_text bg_red">Client Feedbacks</span>
                            <div class="testi_thumbnails_dv">
                                <span class="thumbnails">
                                    <img src="{{ URL::asset('assets/images').'/'.'testimonial/thumb1.png'}}"
                                        alt=" Client thumbnail1" class="img-fluid">
                                </span>
                                <span class="thumbnails">
                                    <img src="{{ URL::asset('assets/images').'/'.'testimonial/thumb2.png'}}"
                                        alt=" Client thumbnail2" class="img-fluid">
                                </span>
                                <span class="thumbnails">
                                    <img src="{{ URL::asset('assets/images').'/'.'testimonial/thumb3.png'}}"
                                        alt=" Client thumbnail3" class="img-fluid">
                                </span>
                                <span class="thumbnails">
                                    <img src="{{ URL::asset('assets/images').'/'.'testimonial/thumb4.png'}}"
                                        alt=" Client thumbnail4" class="img-fluid">
                                </span>
                            </div>
                        </div>
                        <h3>Hear What Our Client Say About Us!</h3>
                    </div>
                    <div class="testi_swiper_pagination"></div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="swiper testimonial_slider">
                    <div class="swiper-wrapper testi_swiper_wrapper ">
                        <!-- slide start -->
                        <div class="swiper-slide t_slides">
                            <div class="testimonial_containier">
                                <div class="testimonial_box">
                                    <span class="testi_img">
                                        <img src="{{ URL::asset('assets/images').'/'.'testimonial/thumb1.png'}}"
                                            alt="Client Review1" class="img-fluid">
                                    </span>
                                    <p>I'm much impressed by the speed at which the CFA team can work. In comparison to other development agencies, the budget is also a considerably better value. The fact that they have a larger team also allows for the participation of individuals with specifics that require attention on multiple levels. As an illustration, sometimes, we can assemble a team with a senior developer before reducing the size and adding more junior members. CFA can provide this versatility and range of talents, which is incredibly beneficial for the US.</p>
                                    <div class="testi_headings">
                                        <h5 class="titles">Janice K. Lane</h5>
                                        <h6 class="t_locations">Integra Investment Service,Chicago</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slide end -->
                        <!-- slide start -->
                        <div class="swiper-slide t_slides">
                            <div class="testimonial_containier">
                                <div class="testimonial_box">
                                    <span class="testi_img">
                                        <img src="{{ URL::asset('assets/images').'/'.'testimonial/thumb2.png'}}"
                                            alt="Client Review2" class="img-fluid">
                                    </span>
                                    <p>The CFA’s software development team are excellent. We often collaborate with them on various projects, ranging in complexity from easy to sophisticated, and they do an excellent job. Communication flows easily and frequently. The team is dependable, quick to act, and responsive. They always look for the finest solutions to a problem or unexpected event.
                                    </p>
                                    <div class="testi_headings">
                                        <h5 class="titles">James C.</h5>
                                        <h6 class="t_locations">Beekmantown</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slide end -->
                        <!-- slide start -->
                        <div class="swiper-slide t_slides">
                            <div class="testimonial_containier">
                                <div class="testimonial_box">
                                    <span class="testi_img">
                                        <img src="{{ URL::asset('assets/images').'/'.'testimonial/thumb3.png'}}"
                                            alt="Client Review3" class="img-fluid">
                                    </span>
                                    <p>The proactive mindset of CFA's Team is impressive. Additionally, they are honest, and they avoid selling useless items. They tell me the advantages and disadvantages of each choice before letting me decide which I value.
                                    </p>
                                    <div class="testi_headings">
                                        <h5 class="titles">Steven A.</h5>
                                        <h6 class="t_locations">Atlanta</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slide end -->
                    </div>
                    <div class="swiper_button_wrap">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial section end -->
<!-- insights section start -->
<section class="insights_section_wrap pad_top_80">
    <div class="container">
        <div class="sections_heading_area text-center mr_b_35">
            <div>
                <span class="badge_text bg_black">Latest Tech News</span>
            </div>
            <h3 class="headings">Discover the latest technology trends and insights in the IT industry.</h3>
        </div>
        {{-- blog-link --}}
        <div class="insights_filter_tab">
            <ul id='myid'>
                <li class="filter_btn" id="technology" data-filter=".technology">Technology</li>
                <li class="filter_btn" id="industry" data-filter=".industries">Industries</li>
                <li class="filter_btn" id="company" data-filter=".company">Company</li>
                <li class="filter_btn" id="all" data-filter="all">View All</li>
            </ul>
        </div>

        <div class="insights_item_container mixitup_container" data-ref="mixitup_container">
            @include('pages.blog_link')
        </div>

</section>
<!-- insights section end -->
<!-- faq section start -->
<section class="faq_section_wrap bg_gray">
    <div class="container">
      <div class="sections_heading_area text-center mr_b_50">
        <div>
          <span class="badge_text bg_black">Dedicated Software Development Services FAQ:</span>
        </div>
      </div>
      <!-- panel start -->
      <div class="faq_accordion_panel">
          <div class="faq_accordion_heading d-flex justify-content-between">
            <span class="texts">What are the different types of software development?</span>
            <span class="icon">
               <i class="far fa-angle-down"></i>
            </span>
          </div>
          <div class="faq_accordion_content">
            <div class="faq_accordion_body">
              <p><b>Software developments</b> are high in-demand and ever-growing fields, transforming various industries, such as healthcare, supply chain and logistics, travel, education, e-commerce, real estate, hris and more. While the demand for software developers is rapidly increasing, the diversity in the type of work software developers do is widespread. </p>
                <h4>Types of Software Development Services</h4>
                <ul>
                    <li>Web Development Services</li>
                    <li>Custom Software Development Services</li>
                    <li>Rapid App Development Services</li>
                    <li>Front-end Development Services</li>
                </ul>
            </div>
          </div>
      </div>
       <!-- panel end -->
       <!-- panel start -->
      <div class="faq_accordion_panel">
        <div class="faq_accordion_heading d-flex justify-content-between">
          <span class="texts">What is the cost of Custom Software Development Services?</span>
          <span class="icon">
             <i class="far fa-angle-down"></i>
          </span>
        </div>
        <div class="faq_accordion_content">
          <div class="faq_accordion_body">
            <p>The cost of <b>software development services</b> depends on factors like team size, time, project complexity, resources, tech experts and other criteria defining the total price. Connect With our expert team to estimate the work scope for your project, and we will evaluate the cost.

            </p>
          </div>
        </div>
      </div>
      <!-- panel end -->
      <!-- panel start -->
      <div class="faq_accordion_panel">
        <div class="faq_accordion_heading d-flex justify-content-between">
          <span class="texts">What does CFA do as a Software outsourcing firm?</span>
          <span class="icon">
            <i class="far fa-angle-down"></i>
          </span>
        </div>
        <div class="faq_accordion_content">
          <div class="faq_accordion_body">
            <p>As a leading <b>software development firm</b>, we aim to create software or software applications that involve identifying a requirement, creating the product, coding it, and testing it for bugs.
                <br> Following are the <b>software development services </b> offered by our company:
            </p>
            <ul>
                <li>We build digital solutions for issues. Even though our methods and approaches might differ, we strive to develop products that solve customer issues. These solutions are comprehensive pieces of software created to satisfy corporate requirements.</li>
                <li>We create beneficial programmes. A software programme is a group that accomplishes a task advantageous for future users. Typically, we create multifunctional software.</li>
                <li>We offer technical consultancy. In addition, we offer guidance and look into ways to improve our client's operations using our technical proficiency in various technologies.</li>
            </ul>
        </div>
        </div>
     </div>
      <!-- panel end -->
      <!-- panel start -->
      <div class="faq_accordion_panel">
        <div class="faq_accordion_heading d-flex justify-content-between">
          <span class="texts">What makes CFA Differ from any other software development firm?</span>
          <span class="icon">
            <i class="far fa-angle-down"></i>
          </span>
        </div>
        <div class="faq_accordion_content">
          <div class="faq_accordion_body">
            <p>Standing out in a market crowded with dedicated software development companies can be difficult. At CFA, we consider the success of our clients to be a direct reflection of our own. Beyond providing top-notch services, we create long-lasting relationships based on mutual growth and trust.
                <br> When you choose us, you work closely with a team of people who are genuinely invested in your success. Every project is overseen by our cofounders, who work hand in hand with a development team to ensure complete software evaluations and involvement in project details.
                <br> Our contacts are driven by communication and transparency, ensuring a superior client experience from beginning to end. Working with startups has honed our agility, and enterprise experience has improved our project management methodology.
                <br>Lastly, we specialise in producing scalable IT software solutions that aid your long-term company objectives. Our portfolio features websites and products demonstrating our ability to be future-proof.

            </p>
          </div>
        </div>
      </div>
      <!-- panel end -->
      <!-- panel start -->
      <div class="faq_accordion_panel">
        <div class="faq_accordion_heading d-flex justify-content-between">
          <span class="texts">Do you offer end-to-end Software Development? </span>
          <span class="icon">
            <i class="far fa-angle-down"></i>
          </span>
        </div>
        <div class="faq_accordion_content">
          <div class="faq_accordion_body">
            <p>Absolutely Yes, this is the main service we offer. We've assembled a solid team of IT professionals to handle everything from requirements gathering and software design to coding, deployment, and support. This group includes consultants, architects, developers, data scientists, security, DevOps, and QA engineers.
            </p>
          </div>
        </div>
      </div>
      <!-- panel end -->
    

    </div>
</section>
  <!-- faq section end -->
    <!-- contact section start -->
    <section class="contact_form_wrap home_page" id="ftr_contact_form">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-xl-5 col-lg-5 col-12 lefttcol">
            <div class="contact_form_left_text">
              <div class="contact_heading_area mr_b_30">
                <div>
                  <span class="badge_text bg_black">Let's Work Together</span>
                </div>
                <h3 class="headings">Start Your Project Right Away!</h3>
                <p>Time is of the essence. Let's talk today and see what we can do with your vision.</p>
              </div>
              <div class="contact_social_lnks">
                <ul>
                  <li class="d-flex slidefromleft wow">
                    <a href="skype:live:gourav_137?chat" class="d-flex">
                      <span class="icon">
                        <img src="assets/images/icons/skype.svg" alt="icon" class="img-fluid">
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
                <h4>our Client</h4>
                <div class="our_clients_logo2 d-flex flex-wrap">
                  <div class="c_logo_item">
                    <img src="assets/images/client_logo/collabra.svg" alt="logos">
                  </div>
                  <div class="c_logo_item">
                    <img src="assets/images/client_logo/pratham-software.svg" alt="logos">
                  </div>
                  <div class="c_logo_item">
                    <img src="assets/images/client_logo/nokia.svg" alt="logos">
                  </div>
                  <div class="c_logo_item">
                    <img src="assets/images/client_logo/jio.svg" alt="logos">
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
                
                <form action="{{route('contact_store')}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form_group">
                        <div class="input_group">
                          <input type="text" name="name" placeholder="Name" class="form_control">
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form_group">
                        <div class="input_group">
                          <input type="email" name="email" placeholder="E-mail Address" class="form_control">
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form_group country_number_gorup">
                        <div class="selct_group">
                          <select class="form_control selectpickers" name="country_number">
                            <option value="India">+91</option>
                            <option value="India">+62</option>
                            <option value="India">+98</option>
                            <option value="India">+964</option>
                            <option value="India">+353</option>
                            <option value="India">+39</option>
                            <option value="India">+81</option>
                          </select>
                        </div>
                        <div class="input_group">
                          <input type="text" name="contact_number" placeholder="Contact Number" class="form_control">
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form_group">
                        <div class="input_group">
                          <select class="form_control selectpickers" name="project_budget">
                            <option value="" selected>Seclect Project Budget</option>
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
                  <div class="button_group">
                    <button type="submit" class="site_button submit_btn">Get Connect</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- contact section End -->
    <!-- Fixed social icons -->
    <div class="social_icons_wrap">
      <ul>
        <li><a href="https://www.facebook.com/consultantsfromasia/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://www.instagram.com/consultantsfromasia/" target="_blank"><i class="fab fa-instagram"></i></a></li>
        <li><a href="https://twitter.com/ConsultantsAsia" target="_blank"><i class="fab fa-twitter"></i></a></li>
        
        <li><a href="https://www.linkedin.com/company/consultants-from-asia-cfa/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
      </ul>
    </div>
    <!-- Fixed social icons -->
    <!-- got to top -->
    <span class="goto_top_btn" title="Go to top">
      <i class="fas fa-arrow-up"></i>
    </span>
    <!-- got to top -->
@stop
