<footer class="footer bg-ebony-clay dark-mode-texts">
    <div class="container">
        <!-- Cta section -->
    {{--    <div class="pt-2 pt-lg-20 pb-2 pb-lg-20 border-bottom border-width-1 border-default-color-2">
            <div class="row justify-content-center ">
                <div class="col-xl-7 col-lg-12 aos-init aos-animate" data-aos="fade-right" data-aos-duration="800"
                     data-aos-once="true">
                    <!-- cta-content start -->
                    <div class="pb-xl-0 pb-9 text-xl-left text-center">


                        --}}{{--                        <h2 class="text-white font-size-8 mb-4">{{env('SITE_NAME')}}</h2>--}}{{--


                        --}}{{--                        @include('layouts.web.header_title')--}}{{--




                        --}}{{-- <div style="color: white">
                             <b>آخرین اطلاعیه ها</b>
                             <br>
                             <br>
                             @foreach($alarms_footer as $alarm)
                                 <a href="{{url('/alarms/'.$alarm->id)}}"  style="display: block;font-size: 25px;line-height:40px;color: white">{{$alarm->title}}</a>
                                 <p style="color: white;font-size: 15px !important;   overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;">{{$alarm->description}}</p><a href="{{url('alarms/'.$alarm->id)}}">بیشتر بخوانید</a>
                                 <hr>
                             @endforeach
                         </div>--}}{{--
                    </div>
                    <!-- cta-content end -->
                </div>

                <div class="col-xl-5 col-lg-12 aos-init aos-animate" data-aos="fade-left" data-aos-duration="800"
                     data-aos-once="true">
                --}}{{-- <div
                     class="btns d-flex justify-content-xl-end justify-content-center align-items-xl-center flex-wrap h-100  mx-n4">
                     <a href="{{url('/loan-register')}}" class="btn btn-red btn-xl mx-4 mt-6 text-uppercase"

                       >ثبت نام وام</a>
                     <a   href="{{url('/followup')}}" class="btn btn-green btn-h-60 btn-xl mx-4 mt-6 text-uppercase"
                        >پیگیری وام</a>
                 </div>--}}{{--
                <!-- cta-btns start -->
                --}}{{--   @guest()
                       <div
                           class="btns d-flex justify-content-xl-end justify-content-center align-items-xl-center flex-wrap h-100  mx-n4">
                           <a class="btn btn-outline-gallery btn-xl mx-4 mt-6 text-uppercase"
                           data-toggle="modal"
                              data-target="#login">ورود</a>
                           <a class="btn btn-green btn-h-60 btn-xl mx-4 mt-6 text-uppercase" data-toggle="modal"
                              data-target="#signup">ثبت‌نام</a>
                       </div>
               @endguest--}}{{--
                <!-- cta-btns end -->
                </div>


            </div>
        </div>--}}
        {{--    </div>pt-12 pt-lg-19 pb-10 pb-lg-19--}}

        <div class="container  pt-12">
            <div class="row">
                {{--   <div class="col-lg-4 col-sm-6 mb-lg-0 mb-9">
                       <!-- footer logo start -->

                      --}}{{-- <div class="media mb-11">
                           <img src="images/message.png" class="align-self-center mr-3"
                                alt="">
                           <div class="media-body pl-5">
                               <p class="mb-0 font-size-4 text-white">ارتباط با ما</p>
                               <a class="mb-0 font-size-4 font-weight-bold">{{env('MOBILE')}}</a>
                           </div>
                       </div>--}}{{--
                       <!-- mediabg-green position-relative start -->
                       <!-- widget social icon start -->

                       <!-- widget social icon end -->
                   </div>--}}
                {{--                <div class="col-lg-8 col-md-6">--}}
                {{--                    <div class="row">--}}
                <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                    <div class="footer-widget widget2 mb-md-0 mb-13">

                        <p class="widget-title font-size-4 text-gray mb-md-8 mb-7">صفحات</p>

                        <div class="row">
                            <div class="col-lg-6">
                                <a class="heading-default-color font-size-4 font-weight-normal"
                                   href="{{url('/')}}">صفحه اصلی</a>

                            </div>
                            <div class="col-lg-6">
                                <a class="heading-default-color font-size-4 font-weight-normal p-2"
                                   href="{{url('/loan-register')}}">ثبت نام وام</a>
                            </div>

                            <div class="col-lg-6">
                                <a class="heading-default-color font-size-4 font-weight-normal p-2"
                                   href="{{url('/followup')}}">پیگیری وام</a>
                            </div>

                            <div class="col-lg-6">
                                <a class="heading-default-color font-size-4 font-weight-normal p-2"
                                   href="{{url('/alarms')}}">اطلاع رسانی ها</a>
                            </div>

                            <div class="col-lg-6">
                                <a class="heading-default-color font-size-4 font-weight-normal p-2"
                                   href="{{url('/contact_us')}}">تماس با ما</a>
                            </div>


                        </div>

                        {{--<ul class="widget-links pl-0 list-unstyled list-hover-primary">
                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal"
                                                href="{{url('/')}}">صفحه اصلی</a></li>

                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal"
                                                href="{{url('/loan-register')}}">ثبت نام وام</a>
                            </li>

                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal"
                                                href="{{url('/followup')}}">پیگیری وام</a>
                            </li>

                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal"
                                                href="{{url('/alarms')}}">اطلاع رسانی ها</a>
                            </li>

                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal"
                                                href="{{url('/contact_us')}}">تماس با ما</a>
                            </li>
                        </ul>--}}


                    </div>


                </div>

                <br>


            </div>
            <br>
            <div style="text-align: center;">
                <p style="color: white;font-size: 13px">تمام حقوق مادی و معنوی این وبسایت محفوظ است</p>
                <p style="color: white;font-size: 13px"><a href="https://instagram.com/genous.ir?utm_medium=copy_link">طراحی شده توسط تیم برنامه نویسی ژنوس</a></p>
               <br>
            </div>
        </div>

        {{--            </div>--}}
        {{--        </div>--}}
    </div>
</footer>
