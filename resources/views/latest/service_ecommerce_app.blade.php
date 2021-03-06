@extends('layouts.front')
@section('content')
<style>
.bg_image--mobileapp {
    background-image: url('assets/img/services/ecommerce/banner_ecommerce.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
}
[data-heading-overlay]:before {
  background-color: #fcb72bd6;
  }

</style>
<main class="page-content">
  <div class="countdown-area bg_image--mobileapp ptb--50 ptb-md--80 ptb-sm--80" data-heading-overlay="9">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-6 col-12">

                            <div class="brook-section-title mb--10  text-center ptb--120">
                                <h2 class="heading heading-h2 text-white">Go beyond brick-and-mortar and reach your customers online.</h2>
                            </div>
                          </div>

                          <div class="col-lg-6 col-12 mt_md--40 mt_sm--40">
                            <div class="contact-form bg_color--1 contact-form--2">
                                <h4 class="heading heading-h4">Newsletter sign-up</h4>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control " placeholder="Your name">
                                        </div>
                                        <div class="col-lg-12 mt--10">
                                            <input type="text" class="form-control " placeholder="Your Phone Number">
                                        </div>

                                        <div class="col-lg-12 mt--10">
                                            <input type="email" class="form-control " placeholder="Your Email ID">
                                        </div>
                                        <div class="col-lg-12 mt--10">
                                            <textarea class="form-control " placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-lg-12 mt--20">
                                            <input type="submit" name="Save">
                                        </div>
                                    </div>
                                </form>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="brook-what-do-area ptb--160 ptb-md--80 ptb-sm--60 bg_color--1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brook-section-title wow move-up animate" style="visibility: visible; opacity: 0;">
                                <h5 class="heading heading-h5 yellow-color-2 text-center">e-Commerce Solutions</h5>
                                <div class="bkseparator--30"></div>

                            </div>
                        </div>
                    </div>
                    <!-- Start What Do Inner -->
                    <div class="row mt--20 mt_sm--5 mt_md--5">

                        <div class="col-lg-8">
                            <div class="what-do mt--40">
                                <div class="content text-left">
                                  <b>Unique Design</b>
                                  <br>
                                    <p class="">Our e-Commerce web applications serve various industries from fashion to utility services to FMCG. Hence we keep the design exclusive for every industry and suitable for every business
                                      needs.</p>

                                      <b>Scalability</b>
                                      <br>
                                        <p class="">When a business goes online, the software infrastructure needs to support its growth. Regardless of the size of the business, we build e-Commerce applications that are highly scalable and robust.</p>
                                </div>
                            </div>
                        </div>
                          <div class="col-lg-4">
                            <p class="mt--40">
                              <ul>
                                <li>e-Commerce Enterprise Applications</li>
                                <li>e-Commerce Web Applications</li>
                                <li>e-Commerce Mobile Applications</li>
                                <li>e-Commerce Performance Optimization</li>
                                <li>CRM Solutions</li>
                                <li>Custom e-Commerce App Development</li>
                                <li>Integrated e-Commerce Applications</li>
                              </ul>

                            </p>
                          </div>


                    </div>
                    <!-- End What Do Inner -->
                </div>
            </div>

            <div class="case-studis-area pt--120 pt-md--80 pt-sm--60 ptb--80">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="brook-section-title text-center mb--45">
                  <h2 class="heading-40 fw-200">Tools of the Trade</h2>
                  <p class="ptb--40">Tools we use for top-notch web applications</p>
               </div>
            </div>
            <div class="col">
            </div>
            <div class="col-7">
               <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                           <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">Android Apps</a>
                        </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                          <p class="pb--20">Essentials of Android app development</p>
                          <p>
                            <img src="{{ url('assets/img/services/mobileapp/android/android_gear.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/android/android_nougat.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/android/android-launcher.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/android/android-tv.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/android/androidview_animations.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/android/bl_deviceintegration.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/android/java.png')}}">
                          </p>

                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">iOS Apps</a>
                        </h4>
                     </div>
                     <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" style="">
                        <div class="panel-body">
                          <p class="pb--20">Essentials of iOS app development</p>
                          <p>
                            <img src="{{ url('assets/img/services/mobileapp/ios/anfetworking.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/apple-3d-touch.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/apple-callkit.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/apple-healthkit.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/Appletv-icon.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/apple-watch-icon.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/cocoapods.png')}}">
                          </p><br>

                          <p>
                            <img src="{{ url('assets/img/services/mobileapp/ios/cocoa-touch-icon.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/core_data.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/ibeacon-device-icon.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/iMessage-apps.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/in_app_purchases.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/objective-c-icon.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/react_native.png')}}">
                          </p><br>

                          <p>
                            <img src="{{ url('assets/img/services/mobileapp/ios/sirikit.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/swift.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/touch-security-icon.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/xcode-icon.png')}}">
                          </p>



                          </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">Hybrid Apps</a>
                        </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" style="">
                        <div class="panel-body">
                            <p class="pb--20">Essentials of Hybrid app development</p>
                            <p>
                              <img src="{{ url('assets/img/services/mobileapp/hybrid/angularjs.png')}}">
                              <img src="{{ url('assets/img/services/mobileapp/hybrid/html-5.png')}}">
                              <img src="{{ url('assets/img/services/mobileapp/hybrid/ionic.png')}}">
                              <img src="{{ url('assets/img/services/mobileapp/hybrid/phonegap-icon.png')}}">
                              <img src="{{ url('assets/img/services/mobileapp/hybrid/sencha_touch.png')}}">
                            </p>
                        </div>
                     </div>
                  </div>

                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Wearables</a>
                        </h4>
                     </div>
                     <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" style="">
                        <div class="panel-body">
                            <p class="pb--20">Essentials of Wearables</p>
                            <p>
                              <img src="{{ url('assets/img/services/mobileapp/wearable/android_gear.png')}}">
                              <img src="{{ url('assets/img/services/mobileapp/wearable/apple-watch-icon.png')}}">
                              <img src="{{ url('assets/img/services/mobileapp/wearable/fitness_tracker.png')}}">

                            </p>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
            <div class="col">
            </div>
         </div>
      </div>
   </div>


   <div class="brook-call-to-action bg_color--13 ptb--40 bg-as-text2">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-6 col-sm-12 col-12">
               <div class="call-content text-center text-md-left text-center">
                  <h4 class="heading heading-h4 text-white">Get to know more about us and our works.</h4>
               </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-12">
               <div class="text-center text-md-right text-center mt_sm--30 mt_md--40 contact-form contact-form--4 yellow-color-2">
                  <div class="button-group  move-up wow animate" style="opacity: 0; visibility: visible;">
                     <a class="brook-btn bk-btn-white btn-sd-size btn-rounded space-between" href="#">View our team
                     </a>
                     <a class="brook-btn bk-btn-white btn-sd-size btn-rounded space-between" href="#">View our projects</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</main>
@endsection
