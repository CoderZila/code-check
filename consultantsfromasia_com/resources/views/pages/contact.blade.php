@extends('layouts.default')
@section('content')
<style>
  /* file upload loader */
	#loading-model
    {
        position: fixed;
        /* z-index: 999; */
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
				background-color: rgba(0 0 0/60%);
    }
		.center
    {
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
    .center img
    {
			height: 80px;
    	width: 98px;
    	margin: 0 auto;
    	display: block;
		}
  </style>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
     <!-- contact section start -->
     <section class="contact_form_wrap contact_page_section">
      <span class="banner_circle_right">
        <img src="{{ URL::asset('assets/images').'/'.'slider/slider_circle.png'}}" alt="shape">
      </span>
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-xl-5 col-lg-5 col-12 lefttcol">
            <div class="contact_form_left_text">
              <div class="contact_heading_area mr_b_30 slidefromleft wow">
                <div>
                  <h1 class="badge_text bg_black">Contact Us</h1>
                </div>
                <h3 class="headings">We Are Project Ready!</h3>
                <p>Fill Out the Form to Tell Us About Your Needs</p>
              </div>
              <div class="contact_social_lnks">
                <ul>
                  <li class="d-flex slidefromleft wow">
                    <a href="javascript:void(0)" class="d-flex">
                      <span class="icon"><img src="{{ URL::asset('assets/images').'/'.'contact/icon/projects.svg'}}" alt="Project icon" class="img-fluid"></span>
                      <span class="txts">250+ Successful Projects</span>
                    </a>
                  </li>
                  <li class="d-flex slidefromleft wow" data-wow-delay=".2s">
                    <a href="javascript:void(0)" class="d-flex">
                      <span class="icon"><img src="{{ URL::asset('assets/images').'/'.'contact/icon/brands.svg'}}" alt="Brands icon" class="img-fluid"></span>
                      <span class="txts">15+ Years Experience</span>
                    </a>
                  </li>
                  <li class="d-flex slidefromleft wow" data-wow-delay=".3s">
                    <a href="javascript:void(0)" class="d-flex">
                      <span class="icon"><img src="{{ URL::asset('assets/images').'/'.'contact/icon/experience.svg'}}" alt="Experience icon" class="img-fluid"></span>
                      <span class="txts">50+ Top Brands</span>
                    </a>
                  </li>
                  <li class="d-flex slidefromleft wow" data-wow-delay=".4s">
                    <a href="javascript:void(0)" class="d-flex">
                      <span class="icon"><img src="{{ URL::asset('assets/images').'/'.'contact/icon/customers.svg'}}" alt="Customer icon" class="img-fluid"></span>
                      <span class="txts">150+ Global Clientele</span>
                    </a>
                  </li>
                  <li class="d-flex slidefromleft wow" data-wow-delay=".5s">
                    <a href="skype:live:gourav_137?chat" class="d-flex">
                      <span class="icon">
                        <img src="{{ URL::asset('assets/images').'/'.'icons/skype.svg'}}" alt="skype icon" class="img-fluid">
                      </span>
                      <span class="txts">live:gourav_137</span>
                    </a>
                  </li>
                  <li class="d-flex slidefromleft wow" data-wow-delay=".6s">
                    <a href="tel: +91-8103094848" class="d-flex">
                      <span class="icon">
                        <i class="far fa-phone-alt"></i>
                      </span>
                      <span class="txts">IND-  +91-8103094848</span>
                    </a>
                  </li>
                  <li class="d-flex slidefromleft wow" data-wow-delay=".7s">
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
                    <img src="{{ URL::asset('assets/images').'/'.'client_logo/collabra.svg'}}" alt="Collabra logo">
                  </div>
                  <div class="c_logo_item">
                    <img src="{{ URL::asset('assets/images').'/'.'client_logo/pratham-software.svg'}}" alt="Pratham Software logo">
                  </div>
                  <div class="c_logo_item">
                    <img src="{{ URL::asset('assets/images').'/'.'client_logo/nokia.svg'}}" alt="Nokia logo">
                  </div>
                  <div class="c_logo_item">
                    <img src="{{ URL::asset('assets/images').'/'.'client_logo/jio.svg'}}" alt="Jio logo">
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
                  <h4>Fill out the form below to say 'Hii!'</h4>
                </div> -->
                <form id="contactform"  method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form_group">
                          <div class="input_group">
                            <input type="text" name="cont_name" placeholder="Name" class="form_control">
                            <input type="hidden" name="contact_type" value="user-enquiry">
                            <input type="hidden" name="page_url" id="PageUrl">
                            <input type="hidden" name="server_ip" id="serverIp" value="{{$_SERVER['REMOTE_ADDR']}}">
                            <span class="cont_name_error show" style="color:#c71515"></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-12">
                        <div class="form_group">
                          <div class="input_group">
                            <input type="cont_email" name="cont_email" placeholder="E-mail Address" class="form_control">
                            <span class="cont_email_error show" style="color:#c71515"></span>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="form_group country_number_gorup">
                    <div class="selct_group">
                      <select class="form_control selectpickers" name="country_number">
                        <option value="+1">+1</option><option value="+44">+44</option><option value="+93">+93</option><option value="+355">+355</option><option value="+213">+213</option><option value="+376">+376</option><option value="+244">+244</option><option value="+54">+54</option><option value="+374">+374</option><option value="+297">+297</option><option value="+247">+247</option><option value="+61">+61</option><option value="+43">+43</option><option value="+994">+994</option><option value="+973">+973</option><option value="+880">+880</option><option value="+375">+375</option><option value="+32">+32</option><option value="+501">+501</option><option value="+229">+229</option><option value="+975">+975</option><option value="+591">+591</option><option value="+387">+387</option><option value="+267">+267</option><option value="+55">+55</option><option value="+246">+246</option><option value="+673">+673</option><option value="+359">+359</option><option value="+226">+226</option><option value="+257">+257</option><option value="+855">+855</option><option value="+237">+237</option><option value="+238">+238</option><option value="+599">+599</option><option value="+236">+236</option><option value="+235">+235</option><option value="+56">+56</option><option value="+86">+86</option><option value="+57">+57</option><option value="+269">+269</option><option value="+243">+243</option><option value="+242">+242</option><option value="+682">+682</option><option value="+506">+506</option><option value="+225">+225</option><option value="+385">+385</option><option value="+53">+53</option><option value="+357">+357</option><option value="+420">+420</option><option value="+45">+45</option><option value="+253">+253</option><option value="+593">+593</option><option value="+20">+20</option><option value="+503">+503</option><option value="+240">+240</option><option value="+291">+291</option><option value="+372">+372</option><option value="+268">+268</option><option value="+251">+251</option><option value="+500">+500</option><option value="+298">+298</option><option value="+679">+679</option><option value="+358">+358</option><option value="+33">+33</option><option value="+594">+594</option><option value="+689">+689</option><option value="+241">+241</option><option value="+220">+220</option><option value="+995">+995</option><option value="+49">+49</option><option value="+233">+233</option><option value="+350">+350</option><option value="+30">+30</option><option value="+299">+299</option><option value="+590">+590</option><option value="+502">+502</option><option value="+224">+224</option><option value="+245">+245</option><option value="+592">+592</option><option value="+509">+509</option><option value="+504">+504</option><option value="+852">+852</option><option value="+36">+36</option><option value="+354">+354</option><option value="+91" selected>+91</option><option value="+62">+62</option><option value="+98">+98</option><option value="+964">+964</option><option value="+353">+353</option><option value="+972">+972</option><option value="+39">+39</option><option value="+81">+81</option><option value="+962">+962</option><option value="+7">+7</option><option value="+254">+254</option><option value="+686">+686</option><option value="+383">+383</option><option value="+965">+965</option><option value="+996">+996</option><option value="+856">+856</option><option value="+371">+371</option><option value="+961">+961</option><option value="+266">+266</option><option value="+231">+231</option><option value="+218">+218</option><option value="+423">+423</option><option value="+370">+370</option><option value="+352">+352</option><option value="+853">+853</option><option value="+389">+389</option><option value="+261">+261</option><option value="+265">+265</option><option value="+60">+60</option><option value="+960">+960</option><option value="+223">+223</option><option value="+356">+356</option><option value="+692">+692</option><option value="+596">+596</option><option value="+222">+222</option><option value="+230">+230</option><option value="+262">+262</option><option value="+52">+52</option><option value="+691">+691</option><option value="+373">+373</option><option value="+377">+377</option><option value="+976">+976</option><option value="+382">+382</option><option value="+212">+212</option><option value="+258">+258</option><option value="+95">+95</option><option value="+264">+264</option><option value="+674">+674</option><option value="+977">+977</option><option value="+31">+31</option><option value="+687">+687</option><option value="+64">+64</option><option value="+505">+505</option><option value="+227">+227</option><option value="+234">+234</option><option value="+683">+683</option><option value="+672">+672</option><option value="+850">+850</option><option value="+47">+47</option><option value="+968">+968</option><option value="+92">+92</option><option value="+680">+680</option><option value="+970">+970</option><option value="+507">+507</option><option value="+675">+675</option><option value="+595">+595</option><option value="+51">+51</option><option value="+63">+63</option><option value="+48">+48</option><option value="+351">+351</option><option value="+974">+974</option><option value="+40">+40</option><option value="+250">+250</option><option value="+290">+290</option><option value="+508">+508</option><option value="+685">+685</option><option value="+378">+378</option><option value="+239">+239</option><option value="+966">+966</option><option value="+221">+221</option><option value="+381">+381</option><option value="+248">+248</option><option value="+232">+232</option><option value="+65">+65</option><option value="+421">+421</option><option value="+386">+386</option><option value="+677">+677</option><option value="+252">+252</option><option value="+27">+27</option><option value="+82">+82</option><option value="+211">+211</option><option value="+34">+34</option><option value="+94">+94</option><option value="+249">+249</option><option value="+597">+597</option><option value="+46">+46</option><option value="+41">+41</option><option value="+963">+963</option><option value="+886">+886</option><option value="+992">+992</option><option value="+255">+255</option><option value="+66">+66</option><option value="+670">+670</option><option value="+228">+228</option><option value="+690">+690</option><option value="+676">+676</option><option value="+216">+216</option><option value="+90">+90</option><option value="+993">+993</option><option value="+688">+688</option><option value="+256">+256</option><option value="+380">+380</option><option value="+971">+971</option><option value="+598">+598</option><option value="+998">+998</option><option value="+678">+678</option><option value="+58">+58</option><option value="+84">+84</option><option value="+681">+681</option><option value="+967">+967</option><option value="+260">+260</option><option value="+263">+263</option>
                      </select>
                    </div>
                    <div class="input_group">
                      <input type="text" name="cont_contact_number" placeholder="Contact Number" class="form_control">
                      <span class="cont_contact_number_error show" style="color:#c71515"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form_group">
                        <label class="frm_label">Interested Service</label>
                        <div class="selct_group interested_select">
                          <select class="form_control selectpickers" name="services">
                            <option value="" selected>Select Interested Service</option>
                            <option value="Web App">Web App</option>
                            <option value="Mobile App">Mobile App</option>
                            <option value="Open Source">Open Source Development</option>
                            <option value="Frontend">Frontend Development</option>
                            <option value="Frontend">SEO & SMO</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form_group">
                        <label class="frm_label">Project Budget</label>
                        <div class="selct_group budget_select">
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
                  <div class="form_group">
                    <div class="input_group">
                      <textarea name="contact_message" placeholder="Message" class="form_control"></textarea>
                    </div>
                  </div>
                  <div class="form_group">
                    <div class="input_group">
                      <div class="file_upload_btn site_button">
                        <input type="file" name="upload_file" id="fileupload" onchange="return fileValidation()">
                        <label class="file_upload_label" for="fileupload"><i class="far fa-upload"></i><span class="texts">Upload File</span></label>
                        <span class="upload_file_error show" style="color:#c71515"></span>
                      </div>
                    </div>
                  </div>


                  <!-- <div class="form_group">
                      <div class="input_group">
                      <div class="g-recaptcha" id="feedback-recaptcha" 
                     data-sitekey="6LeU9oEkAAAAACGt0pwson_vWppGP0br9Iz5VsIV">
                     </div>
                     <span class="g-recaptcha-response_error show" style="color:#c71515"></span>
                      </div>
                    </div> -->

                  <div class="form_group privacy_check_group">
                    <div class="custom_checkbox">
                      <label class="check_control_label">
                        <input type="checkbox" value="1" name="privacy_check">
                        <span class="c_square"></span>
                        <span class="c_text">I want to receive information about CFA news and events. By submitting this form, you agree to our Privacy Policy.
                        </span>
                      </label>
                    </div>
                  </div>
                  <!-- <div class="cfa_preloader">
                    <div class="about_bnr_img position-relative">
                      <span class="globe_icon">
                        <img src="{{ URL::asset('assets/images').'/'.'about/globe.png'}}" alt="globe">
                      </span>
                      <div class="h_map_logodv">
                        <img src="{{ URL::asset('assets/images').'/'.'about/loadmap.png'}}" alt="map logo">
                      </div>
                    </div>
                  </div>  -->

                  <div class="button_group">
                    <button type="submit" class="site_button submit_btn">Submit</button>
                  </div>
                </form>
              </div>
           </div>
          </div>
        </div>
      </div>
    </section>
    <!-- contact section End -->
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
                    <img src="{{ URL::asset('assets/images').'/'.'testimonial/thumb1.png'}}" alt="thumbnail" class="img-fluid">
                  </span>
                  <span class="thumbnails">
                    <img src="{{ URL::asset('assets/images').'/'.'testimonial/thumb2.png'}}" alt="thumbnail" class="img-fluid">
                  </span>
                  <span class="thumbnails">
                    <img src="{{ URL::asset('assets/images').'/'.'testimonial/thumb3.png'}}" alt="thumbnail" class="img-fluid">
                  </span>
                  <span class="thumbnails">
                    <img src="{{ URL::asset('assets/images').'/'.'testimonial/thumb4.png'}}" alt="thumbnail" class="img-fluid">
                  </span>
                </div>
              </div>
              <h3>Trusted by Experts Around the World</h3>
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
                             <img src="{{ URL::asset('assets/images').'/'.'testimonial/thumb1.png'}}" alt="thumbnail" class="img-fluid">
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
                           <img src="{{ URL::asset('assets/images').'/'.'testimonial/thumb2.png'}}" alt="thumbnail" class="img-fluid">
                        </span>
                        <p>The CFA’s software development team are excellent. We often collaborate with them on various projects, 
                                        ranging in complexity from easy to sophisticated, and they do an excellent job. Communication flows easily and frequently. 
                                        The team is dependable, quick to act, and responsive. They always look for the finest solutions to a problem or unexpected event.</p>
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
                           <img src="{{ URL::asset('assets/images').'/'.'testimonial/thumb3.png'}}" alt="thumbnail" class="img-fluid">
                        </span>
                        <p>The CFA’s software development team are excellent. We often collaborate with them on various projects, 
                                        ranging in complexity from easy to sophisticated, and they do an excellent job. Communication flows easily and frequently. 
The proactive mindset of CFA's Team is impressive. Additionally, they are honest, and they avoid selling useless items. They tell me the advantages and disadvantages of each choice before letting me decide which I value.                        </p>
                        <div class="testi_headings">
                          <h5 class="titles">Steven A.</h5>
                          <h6 class="t_locations">Atlanta.</h6>
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
    <!-- certificate logo section start -->
    <section class="certificate_logo_section pad_bottom_70 pad_top_70">
        <div class="container">
          <div class="sections_heading_area text-center">
            <div>
              <span class="badge_text bg_black">Certificate and Recognition</span>
            </div>
            <h3 class="headings">Our International Awards and Accolades
              Recognize Our Journey of Excellence</h3>
          </div>
          <div class="certificate_logo_slider owl-carousel owl-theme">
            <!-- <div class="item">
              <a class="logo_items" href="https://www.designrush.com/agency/profile/insta-it-technologies" target="_blank">
                <img src="{{ URL::asset('assets/images').'/'.'contact/award_logo.png'}}" alt="Award logo">
              </a>
            </div> -->
            <div class="item">
              <a class="logo_items" href="https://clutch.co/profile/consultants-asia" target="_blank">
                <img src="{{ URL::asset('assets/images').'/'.'contact/clutch_logo.png'}}" alt="Clutch logo">
              </a>
            </div>
            <div class="item">
              <a class="logo_items" href="https://www.goodfirms.co/company/consultants-from-asia" target="_blank">
                <img src="{{ URL::asset('assets/images').'/'.'contact/goodfirm_logo.png'}}" alt="Goodfirm logo">
              </a>
            </div>
            <div class="item">
              <a class="logo_items" href="javascript:void(0)">
                <img src="{{ URL::asset('assets/images').'/'.'contact/iso_logo.png'}}" alt="iso logo">
              </a>
            </div>
            <div class="item">
              <a class="logo_items" href="javascript:void(0)">
                <img src="{{ URL::asset('assets/images').'/'.'contact/microsoft-certified-logo.png'}}" alt="microsoft logo">
              </a>
            </div>
          </div>
        </div>
    </section>
    <!-- certificate logo section end -->
    <!-- got to top -->
    <span class="goto_top_btn" title="Go to top">
      <i class="fas fa-arrow-up"></i>
    </span>
    <!-- got to top -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
    <script type="text/javascript" > 
      var pageurl = window.location.href;
    document.getElementById("PageUrl").value = pageurl;

    //file type validation 
    function fileValidation() {
            var fileInput = document.getElementById('fileupload');
            console.log(fileInput);
            var filePath = fileInput.value;
          
              // Allowing file type
            var allowedExtensions =/(\.txt|\.pdf|\.webp|\.doc)$/i;
            if (!allowedExtensions.exec(filePath)) {
                fileInput.value = '';
                return false;
            }
            
      }	
    //end file type validation.
  $(document).ready(function() {


    $.ajaxSetup({
        headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
     });
    //save contact form 
        $("#contactform").submit(function(e){
          e.preventDefault();
          var fd = new FormData(this);
          $.ajax({ 
            type:'POST',
            url:'contact_us',
            data:fd,
            contentType: false,
            processData: false,
            beforeSend: function () {
               $(".cfa_preloader2").css("display","flex");
              },
            success:function(data){
							if($.isEmptyObject(data.error))
              {
                toastr.success("Thank you for contacting us");
                $("#contactform")[0].reset();
                $(".show").text("");
                window.location.href='./thank-you';
              }else{
                  printErrorMsg(data.error);
              }
            },complete: function () {
              $(".cfa_preloader2").css("display","none");
              return false;
          }
          });
        });

        function printErrorMsg (msg) {
                $.each( msg, function( key, value ) {
                    $('.'+key+'_error').text(value);
                });
            }

      });
      </script>
@stop