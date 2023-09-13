@extends('layouts.web.app')

@section('content')

    <link href="{{asset('adminpanel/datepicker/css/jquery.md.bootstrap.datetimepicker.style.css')}}" rel="stylesheet"/>
    <script src="{{asset('adminpanel/datepicker/js/jquery.md.bootstrap.datetimepicker.js')}}"></script>

    <style>
        .user-info-title, user-info-value {
            display: inline-block;
            padding: 0px 25px;
        }

        .user-info-container {
            display: inherit;
        }

        @media print {
            button {
                display: none !important;
            }

            .footer {
                display: none !important;
            }
        }

    </style>
    <!-- Hero Area -->
    <div class="position-relative z-index-1 bg-squeeze pt-5 dark-mode-texts" style=";overflow: auto;height: auto">
        <div class="pos-abs-tr" style="width: 100%;height: auto">
            @include('web.include.header_image')
        </div>
        <div class="container position-static">
            <div class="row position-relative align-items-center position-static">
                <div
                    class="col-xxl-7 col-xl-8 col-lg-9  pb-lg-33 pb-md-28 pb-xs-26 pb-29 pt-md-20 aos-init aos-animate"
                    data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                    <div class="row">

                            <div >
{{--                        <div class="col-xxl-8 col-xl-7 col-md-8 col-sm-10">--}}
                            <div class="text-primary font-size-5 font-weight-semibold mb-7">


                            </div>
                            @include('layouts.web.header_title')

                        </div>


                    </div>

                </div>
                <!-- Hero Form -->

                <!-- End Hero Form -->
            </div>
        </div>


        <div class="container card_bottom_of_header" style="height: 500px;margin-top: 50px">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <h2 class="p-3" style="color: black;">جزییات اطلاع رسانی</h2>
                        <div class="row">

                            <div class="user-info-container col-lg-6 ">
                                <p class="user-info-title">عنوان: </p>
                                <p class="user-info-value">{{$alarms->title}}</p>
                            </div>
                            <br>
                            <div class="user-info-container col-lg-6 ">
                                <p class="user-info-title">تاریخ اطلاع رسانی: </p>
                                <p class="user-info-value">{{\Morilog\Jalali\Jalalian::fromCarbon($alarms->created_at)->format('Y/m/d H:i:s')}}</p>
                            </div>
                            <br>

                            <div class="user-info-container col-lg-12 ">
{{--                                <p class="user-info-title">متن اطلاع رسانی: </p>--}}
                                <br>
                                <p class="user-info-value">{{$alarms->description}}</p>
                            </div>
                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
