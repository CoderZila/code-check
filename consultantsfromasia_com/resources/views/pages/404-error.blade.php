@extends('layouts.default')
@section('content')
   <section class="error_page_wrap">
     <div class="container">
       <div class="row">
         <div class="col-lg-6 col-12 col-sm-12">
           <div class="error_page_img">
              <img src="{{asset('assets/images/error_img.svg')}}" alt="Error">
           </div>
         </div>
         <div class="col-lg-6 col-12 col-sm-12">
          <div class="error_page_text">
            <h1 class="headingss">Opps,<br/> <span>nothing</span> found</h1>
            <p>Sorry, the page you were looking for can't be found. It looks like the link you followed may be broken or the page may have been removed.</p>
            <div>
              <a href="{{url('/')}}" class="back_button site_button">Go Back To Home</a>
            </div>
          </div>
         </div>
       </div>
     </div>
   </section>
 
   @stop