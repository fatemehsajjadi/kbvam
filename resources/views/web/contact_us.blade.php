@extends('layouts.web.app')

@section('content')

    <style>
        /* .home-height {
             height: 900px
         }

         @media only screen and (max-width: 600px) {
             .home-height {
                 height: 800px;
             }
         }*/

    </style>
    <!-- Hero Area -->
    <div class="home-height position-relative z-index-1 bg-squeeze pt-5 dark-mode-texts" style=";overflow: auto;">
        <div class="pos-abs-tr" style="width: 100%;height: auto">
            @include('web.include.header_image')
        </div>
        <div class="container position-static">
            <div class="row position-relative align-items-center position-static">
                <div
                    class="col-xxl-7 col-xl-8 col-lg-9  pb-lg-33 pb-md-28 pb-xs-26 pb-29 pt-md-20 aos-init aos-animate"
                    data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                    <div class="row">
                        {{--                        <div class="col-xxl-8 col-xl-7 col-md-8 col-sm-10">--}}
                        <div>
                            <div class="text-primary font-size-5 font-weight-semibold mb-7">

                            </div>
                            @include('layouts.web.header_title')


                        </div>
                    </div>
                </div>
                <!-- Hero Form -->

                <div class="container card_bottom_of_header" style="width: 100%;margin-top: 50px">
                    <div class="card">
                        <div class="card-body" style="line-height: 40px;color: #1e1e1e">
                            <b>تماس با ما</b>
                            <p style="color: #1e1e1e">
                                استان کردستان ، شهرستان سنندج ، سرتپوله، کوچه مفتاح خیابان صلاح الدین ایوبی، طبقه اول ، پلاک ۳۸<br>
                                08733127211
                            </p>
                        </div>
                    </div>
                </div>



                <!-- End Hero Form -->
            </div>
        </div>
        <div style="height: 50px"></div>
    </div>

    <!-- Hero Area -->

@endsection
