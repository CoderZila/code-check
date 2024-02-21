@extends('layouts.default')
@section('content')
<!-- Banner section start -->
<section class="about_page_banner position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-12">
                <div class="page_banner_caption">
                    <div class="badge_text_dv">
                        <span class="badge_text bg_black flipInX wow">About Us</span>
                    </div>
                    <h1 class="big_heading flipInX wow" data-wow-delay=".3s">Meet The Expert That Will Love Working With You
                    </h1>
                    <p class="flipInX wow" data-wow-delay=".5s">Consultants From Asia is a full-cycle software and app development company that covers and manages specific client business needs with the help of the best possible technology solutions.</p>

                    <div>
                        <a href="#ftr_contact_form" class="site_button">Book A Call</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="about_bnr_img position-relative">
                    <!-- <span class="globe_icon">
                        <img src="{{ URL::asset('assets/images').'/'.'about/globe.png'}}" alt="globe">
                    </span> -->
                    <div class="h_map_logodv">
                        <img src="{{ URL::asset('assets/images').'/'.'about/cfa-about-logo-img.png'}}" alt="map logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="banner_circle_right">
        <img src="{{ URL::asset('assets/images').'/'.'slider/slider_circle.png'}}" alt="shape">
    </span>
    <span class="slider_circle_shape">
        <img src="{{ URL::asset('assets/images').'/'.'about/banner_shape2.png'}}" alt="shape">
    </span>
</section>
<!-- Banner section end -->
<!-- Partner section end -->
<section class="partner_client_section pad_bottom_70 pad_top_70 position-relative">
    <div class="p_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 clients_counter_colm">
                        <div class="clients_counter_box">
                            <h3 class="cntr_heading">
                                <span class="cnt_numbers counter_number" data-from="0" data-to="250"
                                    data-speed="5000">250</span>
                                <span class="icons">+</span>
                            </h3>
                            <p>Projects</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 clients_counter_colm">
                        <div class="clients_counter_box">
                            <h3 class="cntr_heading">
                                <span class="cnt_numbers counter_number" data-from="0" data-to="150"
                                    data-speed="5000">150</span>
                                <span class="icons">+</span>
                            </h3>
                            <p>Clients</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 clients_counter_colm">
                        <div class="clients_counter_box">
                            <h3 class="cntr_heading">
                                <span class="cnt_numbers counter_number" data-from="0" data-to="15"
                                    data-speed="5000">15</span>
                                <span class="icons">+</span>
                            </h3>
                            <p>Years Experience</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 clients_counter_colm">
                        <div class="clients_counter_box">
                            <h3 class="cntr_heading">
                                <span class="cnt_numbers counter_number" data-from="0" data-to="50"
                                    data-speed="5000">50</span>
                                <span class="icons">+</span>
                            </h3>
                            <p>Top Brands</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="partner_client_text">
                    <h3 class="p_headings">Who We Are</h3>
                    <p>Since 2008, we have been inventing digital breakthroughs, helping startups and enterprises come out on top in their markets.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partner section end -->
<!-- who trust us section start -->
<section class="who-trust-us-wr pad_bottom_20 pad_top_70 position-relative">

    <div class="container">
        <div class="who-trust-us-sec">
            <div class="who-trust-us-heading">
                <h3 class="p_headings">See Who Trust Us</h3>
               
            </div>
           
                <div class="partner_client_text">
                    
                    <div class="our_clients_logo d-flex flex-wrap justify-content-center">
                        <div class="c_logo_items">
                            <img src="{{ URL::asset('assets/images').'/'.'client_logo/collabra-white.svg'}}"
                                alt="Collabra logo">
                        </div>
                        <div class="c_logo_items">
                            <img src="{{ URL::asset('assets/images').'/'.'client_logo/pratham-software-white.svg'}}"
                                alt="Pratham logo">
                        </div>
                        <div class="c_logo_items">
                            <img src="{{ URL::asset('assets/images').'/'.'client_logo/nokia-white.svg'}}"
                                alt="Nokia logo">
                        </div>
                        <div class="c_logo_items">
                            <img src="{{ URL::asset('assets/images').'/'.'client_logo/jio-white.svg'}}" alt="Jio logo">
                        </div>
                    </div>


                
            </div>
        </div>
    </div>
</section>

<!-- who trust us section end -->

<!-- CFAjourney section start -->
<!-- <section class="insta_journey_section pad_top_80">
    <div class="container">
        <div class="sections_heading_area max_width_789 text-center mr_b_30">
            <div class="flipInX wow">
                <span class="badge_text bg_black">Our Guiding Principles</span>
            </div>
            <h2 class="headings flipInX wow" data-wow-delay=".2s">Trust Among Our Clients and Employees with an Ethical
                Culture</h2>
            <p class="flipInX wow" data-wow-delay=".4s">A dedicated approach to challenging limits, acting with
                sensitivity, and working with unyielding integrity- come and experience the spirit of CFA.</p>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="insta_journey_image">
                    <img src="{{ URL::asset('assets/images').'/'.'about/cfa_journeyimg.svg'}}" alt="Journey image">
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- industries section start -->
<section class="industries_section_wrap pad_bottom_20 pad_top_70">
    <div class="container">
        <div class="sections_heading_area text-center mr_b_40">
            <div>
                <span class="badge_text bg_black">Our Guiding Principles</span>
            </div>
          
        </div>
        <div class="industries_tabs d-flex justify-content-center mr_b_30">
            <ul class="industries_tab_lst d-flex flex-wrap">
                <li data-tab="reputation" class="active">Reputation</li>
                <li data-tab="respect">Respect</li>
                <li data-tab="transparency">Transparency</li>
                <li data-tab="attitude">A Positive Attitude</li>
                <li data-tab="proactive">Proactive</li>
            </ul>
        </div>
        <!-- tab panel container -->
        <div class="industries_panel_container guidline-principle-tab-content">
            <!-- tab panel -->
            <div class="industries_tab_panel active" id="reputation">
                <div class="industries_panel_text">
                    <h3>Reputation</h3>
                    <p>We make every effort to guarantee the project's success and deliver solutions on time for our clients. As a young, dynamic team, establishing a solid reputation is paramount.</p>
                </div>
            </div>
            <!-- tab panel -->
            <!-- tab panel -->
            <div class="industries_tab_panel" id="respect">
                <div class="industries_panel_text">
                    <h3>Respect</h3>
                    <P>We set a high priority on excellent, long-term business partnerships with both our clients and workers. We value each individual and are constantly receptive to suggestions and ideas.</P>
                </div>
            </div>
            <!-- tab panel -->
            <!-- tab panel -->
            <div class="industries_tab_panel" id="transparency">
                <div class="industries_panel_text">
                    <h3>Transparency</h3>
                    <P>We appreciate sincerity in all forms of communication and promote open dialogue at all levels. We are proud to have incorporated transparency into our corporate culture.</P>
                </div>
            </div>
            <!-- tab panel -->
            <!-- tab panel -->
            <div class="industries_tab_panel" id="attitude">
                <div class="industries_panel_text">
                    <h3>A Positive Attitude</h3>
                    <P>We are all human beings with feelings, problems, objectives, and duties. We are accustomed to dealing with optimistic and open-minded people since we wish to foster a friendly environment.</P>
                </div>
            </div>
            <!-- tab panel -->
            <!-- tab panel -->
            <div class="industries_tab_panel" id="proactive">
                <div class="industries_panel_text">
                    <h3>Proactive</h3>
                    <P>Our world is changing quickly. New concepts and fresh viewpoints make the business's development possible. We work hard to offer our clients cutting-edge technological features or solutions that meet their business requirements.</P>
                </div>
            </div>
            <!-- tab panel -->

        </div>
        <!-- tab panel container -->
    </div>
</section>
<!-- industries section end -->
<!-- CFAjourney section end -->
<!-- Call to action start -->
<section class="call_to_action_wrap pad_top_50 pad_bottom_30">
    <div class="container">
        <div class="call_to_inr_box call_bg_image2 bounceIn wow">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call_to_text max_width_890">
                        <h2 class="heading text_color_white">You Dream, We Promise it to Convert it Into Reality</h2>
                        <div class="detail_buttons">
                            <a href="#ftr_contact_form" class="site_button call_to_btn">Contact Us!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- call to action end -->
<!-- core values section end -->
<section class="our_core_values_section pad_top_50 pad_bottom_50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="sections_heading_area">
                    <!-- <div class="fadeInLeft wow">
                        <span class="badge_text bg_black">OUR CORE VALUES</span>
                    </div> -->
                    <h2 class="headings fadeInLeft wow" data-wow-delay=".2s">A Group of Creative Minds Developing the
                        World's Top Apps and Websites</h2>
                    <div class="fadeInLeft wow" data-wow-delay=".4s">
                        <p>We at CFA believe in our core values and ensure they will help you succeed in your business.
                            We believe in a healthy environment where we can share our thoughts and understanding.</p>
                        <p>Our core values are the reason behind our success as an organization. CFA is happily ready to
                            share our core values with our clients so they can also properly understand our work
                            culture.</p>
                    </div>
                </div>
              
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="core_value_row d-flex flex-wrap fadeInRight wow" data-wow-delay=".6s">
                    <div class="core_value_colm">
                        <div class="core_value_card">
                            <span class="icon">
                                <img src="{{ URL::asset('assets/images').'/'.'about/core-value/icon/loyalty.svg'}}"
                                    alt="Loyalty">
                            </span>
                            <h3 class="b_title">Loyalty</h3>
                        </div>
                    </div>
                    <div class="core_value_colm">
                        <div class="core_value_card">
                            <span class="icon">
                                <img src="{{ URL::asset('assets/images').'/'.'about/core-value/icon/honesty.svg'}}"
                                    alt="Honesty">
                            </span>
                            <h3 class="b_title">Honesty</h3>
                        </div>
                    </div>
                    <div class="core_value_colm">
                        <div class="core_value_card">
                            <span class="icon">
                                <img src="{{ URL::asset('assets/images').'/'.'about/core-value/icon/trust.svg'}}"
                                    alt="Trust">
                            </span>
                            <h3 class="b_title">Trust</h3>
                        </div>
                    </div>
                    <div class="core_value_colm">
                        <div class="core_value_card">
                            <span class="icon">
                                <img src="{{ URL::asset('assets/images').'/'.'about/core-value/icon/transparency.svg'}}"
                                    alt="Transparency">
                            </span>
                            <h3 class="b_title">Transparency</h3>
                        </div>
                    </div>
                    <div class="core_value_colm">
                        <div class="core_value_card">
                            <span class="icon">
                                <img src="{{ URL::asset('assets/images').'/'.'about/core-value/icon/accountability.svg'}}"
                                    alt="Accountability">
                            </span>
                            <h3 class="b_title">Accountability</h3>
                        </div>
                    </div>
                    <div class="core_value_colm">
                        <div class="core_value_card">
                            <span class="icon">
                                <img src="{{ URL::asset('assets/images').'/'.'about/core-value/icon/value-centricity.svg'}}"
                                    alt="Value">
                            </span>
                            <h3 class="b_title">Value-centricity</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sections_heading_area mt-5">
            <h2 class="headings fadeInLeft wow" data-wow-delay=".2s">Reinventing Businesses With The Innovative Solutions</h2>
            <div class="fadeInLeft wow" data-wow-delay=".4s">
                <p>Consultants From Asia growth and success reflect the excellence of delivering top-notch solutions. By providing software-related solutions that are scalable, dependable, user-centric, and simple to use, we hope to empower a variety of sectors.</p>
                <p>Our team chooses tested strategies to stay one step ahead of the market competition. To overcome obstacles and achieve congruent corporate goals, we have the top subject matter specialists in the business.</p>
            </div>
        </div>
    </div>
</section>
<!-- core values section end -->
<!-- mision vision section end -->
<section class="mision_vision_section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 position-relative">
                <div class="mision_vision_img_dv show_in_mobile_tab">
                    <div class="mision_vision_bgimg" style="background-image: url(assets/images/about/mision_bg.webp);">
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="msn_vsn_left_list fadeInLeft wow">
                    <h3>Perks & Benefits With Us</h3>
                    <ul>
                        <li>Flexible Working Hours</li>
                        <li>Daily Snacks & Drinks</li>
                        <li>Performance Bonus</li>
                        <li>Learning opportunities </li>
                        <!-- <li>Paid Leaves for Special Occasions</li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="misn_vsn_text_box_wrap fadeInRight wow">
                    <div class="sections_heading_area mr_b_35">
                        <div>
                            <span class="badge_text bg_black">Mission And Vision</span>
                        </div>
                        <h2 class="headings">Getting Clients' Trust & Still a Long Way to Go</h2>
                    </div>
                    <div class="misn_vsn_text_box">
                        <div class="msn_vsn_title d-flex align-items-center">
                            <span class="icon">
                                <img src="{{ URL::asset('assets/images').'/'.'about/mission.svg'}}" alt="mission icon">
                            </span>
                            <h3>Our Mission</h3>
                        </div>
                        <p>We create software. We collaborate with our clients to make the world a better place for everyone.</p>
                    </div>
                    <div class="misn_vsn_text_box">
                        <div class="msn_vsn_title d-flex align-items-center">
                            <span class="icon">
                                <img src="{{ URL::asset('assets/images').'/'.'about/vision.svg'}}" alt="vision icon">
                            </span>
                            <h3>Our Vision</h3>
                        </div>
                        <p>We create the globe is a concise but comprehensive phrase that sums up our company's mission.</p>
                    </div>
                    <div class="misn_vsn_text_box">
                        <div class="msn_vsn_title d-flex align-items-center">
                            <span class="icon">
                                <img src="{{ URL::asset('assets/images').'/'.'about/core-value/icon/value-centricity.svg'}}" alt="vision icon">
                            </span>
                            <h3>Values</h3>
                        </div>
                        <ul>
                            <li>We work hard at what we like to do.</li>
                            <li>We take pride in our team and strive for improvement.</li>
                            <li>We get the desired results by cooperating flexibly and honestly.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mision_vision_img_dv hide_in_mobile_tab">
        <div class="mision_vision_bgimg" style="background-image: url(<img src="
            {{ URL::asset('assets/images').'/'.'about/mision_bg.webp'}});">
            <div class="overlay"></div>
        </div>
    </div>
</section>
<!-- mision vision section end -->
<!-- how we work section start -->
<section class="how_we_work_section pad_top_80 pad_bottom_70">
    <div class="container">
        <!-- <div class="sections_heading_area text-center">
            <div>
                <span class="badge_text bg_black">Our Work Process</span>
            </div>
            <h2 class="headings">We are A Team of Agile Ninjas</h2>
        </div>
        <div class="work_process_row d-flex flex-wrap">
            <div class="work_process_col">
                <div class="work_process_circle">
                    <h4>Research</h4>
                </div>
                <span class="sort_icon">
                    <i class="fas fa-caret-right"></i>
                </span>
            </div>
            <div class="work_process_col">
                <div class="work_process_circle">
                    <h4>Define</h4>
                </div>
                <span class="arrow_down">
                    <img src="{{ URL::asset('assets/images').'/'.'about/arrows/arrow_down.svg'}}" alt="arrow_down">
                </span>
            </div>
            <div class="work_process_col work_middle_colmss">
                <span class="circle_arrows circle_arrow1">
                    <img src="{{ URL::asset('assets/images').'/'.'about/arrows/circle_arrow1.svg'}}" alt="arrow_down">
                </span>
                <div class="work_middle_circle">
                    <div class="work_process_circle">
                        <h4>Validate</h4>
                    </div>
                </div>
                <div class="work_middle_circle">
                    <div class="work_process_circle">
                        <h4>Design</h4>
                        <span class="circle_arrows circle_arrow2">
                            <img src="{{ URL::asset('assets/images').'/'.'about/arrows/circle_arrow2.svg'}}"
                                alt="arrow_down">
                        </span>
                    </div>
                </div>
            </div>
            <div class="work_process_col">
                <div class="work_process_circle">
                    <span class="circle_arrows circle_arrow3">
                        <img src="{{ URL::asset('assets/images').'/'.'about/arrows/circle_arrow3.svg'}}"
                            alt="arrow_down">
                    </span>
                    <h4>Prototype</h4>
                </div>
                <span class="sort_icon">
                    <i class="fas fa-caret-right"></i>
                </span>
            </div>
            <div class="work_process_col">
                <div class="work_process_circle">
                    <h4>Build</h4>
                </div>
                <span class="sort_icon">
                    <i class="fas fa-caret-right"></i>
                </span>
            </div>
            <div class="work_process_col">
                <div class="work_process_circle">
                    <h4>Q A Test</h4>
                </div>
                <span class="sort_icon">
                    <i class="fas fa-caret-right"></i>
                </span>
            </div>
            <div class="work_process_col">
                <div class="work_process_circle">
                    <h4>Launch</h4>
                </div>
            </div>
        </div> -->
        <h2>We support you in achieving your aim by solving the problems your users face </h2>
    </div>
</section>
<!--  how we work section end -->

<!-- why us secttion start -->

<section class="why-us-wr pad_bottom_70">
    <div class="container">
        <div class="why-us-inner-sec">
            <div class="sections_heading_area mr_b_35"><h2 class="headings">Why Us</h2></div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="why-us-box">
                        <div class="why-us-img-sec">
                            <img src="{{ URL::asset('assets/images').'/'.'about/check-mark.png'}}" alt="checkmark icon">
                        </div>
                        <h3 class="why-us-title">Result-Oriented</h3>
                        <p class="why-us-detail">
                            The only indicator of the project’s success is the achievement of the goals and objectives set by the customer. We complete our work as swiftly and effectively as possible thanks to excellent project management and an IT talent staff.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="why-us-box">
                        <div class="why-us-img-sec">
                            <img src="{{ URL::asset('assets/images').'/'.'about/flexible.png'}}" alt="checkmark icon">
                        </div>
                        <h3 class="why-us-title">Flexible</h3>
                        <p class="why-us-detail">
                             We already have 100+ highly skilled IT specialists on our team. We can easily adjust to our client's needs thanks to it. According to the shifting demands of the project, we offer a quick team ramp-up and may simply scale it up or down.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="why-us-box">
                        <div class="why-us-img-sec">
                            <img src="{{ URL::asset('assets/images').'/'.'about/core-value/icon/transparency.svg'}}" alt="checkmark icon">
                        </div>
                        <h3 class="why-us-title">Transparent</h3>
                        <p class="why-us-detail">
                             We work openly and honestly with all of our clients. We guarantee consistent communication, a daily reporting system, and tracking tools tailored to the client's requirements. As a result, our clients have complete control over projects.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="why-us-box">
                        <div class="why-us-img-sec">
                            <img src="{{ URL::asset('assets/images').'/'.'about/vision.svg'}}" alt="checkmark icon">
                        </div>
                        <h3 class="why-us-title">Experienced</h3>
                        <p class="why-us-detail">
                            Our skilled team has built well-managed processes to provide software development services. They can be easily adapted to the unique requirements of clients and their projects because they are based on the best examples of IT outsourcing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- why us section end -->









<!-- infrastructure section start -->
<section class="our_infrastructure_section pad_bottom_80">
    <div class="container">
        <div class="sections_heading_area text-center mr_b_50">
            <div>
                <span class="badge_text bg_black">Our Infrastructure</span>
            </div>
            <h2 class="headings">State-of-The-Art IT Infrastructure at CFA
            </h2>
            <p>We ensure world-class infrastructure by providing our employees with a comfortable, stress-free office
                environment. Our mission is to give each colleague the tools and resources necessary to work
                comfortably, efficiently, and effectively.</p>
        </div>
    </div>
    <!-- slider start -->
    <div class="infrastructure_slider owl-carousel owl-theme">
        <!-- item start -->
        <!-- <div class="item">
              <div class="image_box">
                <img src="{{ URL::asset('assets/images').'/'.'about/infra/infra1.webp'}}" alt="CFA infrastructure">
              </div>
          </div> -->
        <!-- item end -->
        <!-- item start -->
        <div class="item">
            <div class="image_box">
                <img src="{{ URL::asset('assets/images').'/'.'about/infra/infra2.webp'}}" alt="CFA infrastructure">
            </div>
        </div>
        <!-- item end -->
        <!-- item start -->
        <div class="item">
            <div class="image_box">
                <img src="{{ URL::asset('assets/images').'/'.'about/infra/infra3.webp'}}" alt="CFA infrastructure">
            </div>
        </div>
        <!-- item end -->
        <!-- item start -->
        <div class="item">
            <div class="image_box">
                <img src="{{ URL::asset('assets/images').'/'.'about/infra/infra4.webp'}}" alt="CFA infrastructure">
            </div>
        </div>
        <!-- item end -->
        <!-- item start -->
        <div class="item">
            <div class="image_box">
                <img src="{{ URL::asset('assets/images').'/'.'about/infra/infra2.webp'}}" alt="CFA infrastructure">
            </div>
        </div>
        <!-- item end -->
        <!-- item start -->
        <div class="item">
            <div class="image_box">
                <img src="{{ URL::asset('assets/images').'/'.'about/infra/infra3.webp'}}" alt="CFA infrastructure">
            </div>
        </div>
        <!-- item end -->
    </div>
    <!-- slider start -->
</section>
<!-- infrastructure section end -->
<!-- CFAgallery section start -->
<section class="insta_gallery_section pad_bottom_80">
    <div class="container">
        <div class="sections_heading_area text-center mr_b_50">
            <div>
                <span class="badge_text bg_black">Enjoy The Life at CFA </span>
            </div>
            <h2 class="headings">We celebrate festivals, birthdays, functions, and many more things together. Enjoy life
                as a part of CFA.</h2>
        </div>
    </div>
    <!-- gallery cover start -->
    <div class="cfa_gallery_row_cover">
        <div class="gallery_pic_row">
            <div class="gallery_pic_container marqeee_effects_right d-flex">
                <!-- pic box start -->
                <div class="gallery_pics_box">
                    <div class="gallery_img_div">
                        <div class="glr_big_img">
                            <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_big4.webp'}}"
                                alt="CFA gallery">
                        </div>
                        <div class="glr_small_img">
                            <div class="image_box">
                                <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_small4.webp'}}"
                                    alt="CFA gallery">
                            </div>
                            <div class="image_box">
                                <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_small2.webp'}}"
                                    alt="CFA gallery">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pic box end -->
                <!-- pic box start -->
                <div class="gallery_pics_box">
                    <div class="gallery_img_div">
                        <div class="glr_big_img">
                            <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_big2.webp'}}"
                                alt="CFA gallery">
                        </div>
                        <div class="glr_small_img">
                            <div class="image_box">
                                <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_small2.webp'}}"
                                    alt="CFA gallery">
                            </div>
                            <div class="image_box">
                                <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_small4.webp'}}"
                                    alt="CFA gallery">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pic box end -->
                <!-- pic box start -->
                <div class="gallery_pics_box">
                    <div class="gallery_img_div">
                        <div class="glr_big_img">
                            <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_big4.webp'}}" alt="gallery">
                        </div>
                        <div class="glr_small_img">
                            <div class="image_box">
                                <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_small4.webp'}}"
                                    alt="CFA gallery">
                            </div>
                            <div class="image_box">
                                <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_small2.webp'}}"
                                    alt="CFA gallery">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pic box end -->
            </div>
            <!-- gallery container end-->
        </div>
        <!-- gallery row end-->
    </div>
    <!-- gallery cover end-->
    <!-- gallery cover start -->
    <div class="cfa_gallery_row_cover">
        <div class="gallery_pic_row">
            <div class="gallery_pic_container marqeee_effects_left d-flex">
                <!-- pic box start -->
                <div class="gallery_pics_box">
                    <div class="gallery_img_div">
                        <div class="glr_big_img">
                            <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_big3.webp'}}"
                                alt="CFA gallery">
                        </div>
                        <div class="glr_small_img">
                            <div class="image_box">
                                <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_small2.webp'}}"
                                    alt="CFA gallery">
                            </div>
                            <div class="image_box">
                                <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_small4.webp'}}"
                                    alt="CFA gallery">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pic box end -->
                <!-- pic box start -->
                <div class="gallery_pics_box">
                    <div class="gallery_img_div">
                        <div class="glr_big_img">
                            <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_big4.webp'}}"
                                alt="CFA gallery">
                        </div>
                        <div class="glr_small_img">
                            <div class="image_box">
                                <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_small7.webp'}}"
                                    alt="CFA gallery">
                            </div>
                            <div class="image_box">
                                <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_small8.webp'}}"
                                    alt="CFA gallery">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pic box end -->
                <!-- pic box start -->
                <div class="gallery_pics_box">
                    <div class="gallery_img_div">
                        <div class="glr_big_img">
                            <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_big3.webp'}}"
                                alt="CFA gallery">
                        </div>
                        <div class="glr_small_img">
                            <div class="image_box">
                                <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_small7.webp'}}"
                                    alt="CFA gallery">
                            </div>
                            <div class="image_box">
                                <img src="{{ URL::asset('assets/images').'/'.'about/gallery/img_small4.webp'}}"
                                    alt="CFA gallery">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pic box end -->
            </div>
            <!-- gallery container end-->
        </div>
        <!-- gallery row end-->
    </div>
    <!-- gallery cover end-->
</section>
<!-- CFAgallery section end -->
<!-- CFAgallery section start -->
<section class="international_map_section">
    <div class="container">
        <div class="sections_heading_area text-center mr_b_60">
            <div>
                <span class="badge_text bg_black">Our Global Offices</span>
            </div>
            <h3 class="headings">Many of our clients are based in the international market, so we've decided to share
                our development centre's location.</h3>
            <p>CFA is one of the most trusted names in web development companies, and if you're searching for a quality,
                reputable company, look no further than CFA.</p>
        </div>
    </div>
    <!-- gallery start -->
    <div class="international_map_dv position-relative text-center">
        <div class="map_logo_dv_wrap">
            <!-- <span class="globe_icon">
                <img src="{{ URL::asset('assets/images').'/'.'about/globe.png'}}" alt="globe">
            </span> -->
            <div class="map_logo_dv">
                <img src="{{ URL::asset('assets/images').'/'.'about/cfa-single.png'}}" alt="map logo">
            </div>
        </div>
        <div class="international_map_img">
            <img src="{{ URL::asset('assets/images').'/'.'about/about-new-map-img.png'}}" alt="map image">
        </div>
    </div>
    <!-- gallery start -->
</section>
<!-- CFAgallery section end -->
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
                                    <p>The CFA’s software development team are excellent. We often collaborate with them on various projects, 
                                        ranging in complexity from easy to sophisticated, and they do an excellent job. Communication flows easily and frequently. 
                                        The team is dependable, quick to act, and responsive. They always look for the finest solutions to a problem or unexpected event.
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
<!-- contact section start -->

<!-- contact section End -->
<!-- Fixed social icons -->
<div class="social_icons_wrap">
    <ul>
        <li><a href="https://www.facebook.com/consultantsfromasia/" target="_blank"><i
                    class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://www.instagram.com/consultantsfromasia/" target="_blank"><i
                    class="fab fa-instagram"></i></a></li>
        <li><a href="https://twitter.com/ConsultantsAsia" target="_blank"><i class="fab fa-twitter"></i></a></li>

        <li><a href="https://www.linkedin.com/company/consultants-from-asia-cfa/" target="_blank"><i
                    class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=17073272444" target="_blank"> <i class="fab fa-whatsapp"></i></a></li>
    </ul>
</div>
<!-- Fixed social icons -->
<!-- got to top -->
<span class="goto_top_btn" title="Go to top">
    <i class="fas fa-arrow-up"></i>
</span>
<!-- got to top -->
@stop