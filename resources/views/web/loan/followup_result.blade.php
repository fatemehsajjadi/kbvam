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
                        {{--                        <div class="col-xxl-8 col-xl-7 col-md-8 col-sm-10">--}}
                        <div>
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


        <div class="container card_bottom_of_header" style="margin-top: 50px">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <h2 class="p-3" style="color: black;">رسید صورت حساب</h2>
                        <div class="row">

                            <div class="user-info-container col-lg-6 col-lg-6">
                                <p class="user-info-title">نام: </p>
                                <p class="user-info-value">{{$verify->first_name}}</p>
                            </div>
                            <br>
                            <div class="user-info-container col-lg-6 col-lg-6">
                                <p class="user-info-title">نام خانوادگی: </p>
                                <p class="user-info-value">{{$verify->last_name}}</p>
                            </div>
                            <br>
                            <div class="user-info-container col-lg-6 col-lg-6">
                                <p class="user-info-title">نام پدر: </p>
                                <p class="user-info-value">{{$verify->father_name}}</p>
                            </div>
                            <br>
                            <div class="user-info-container col-lg-6 col-lg-6">
                                <p class="user-info-title">شماره شناسنامه: </p>
                                <p class="user-info-value">{{$verify->shenasname}}</p>
                            </div>
                            <br>
                            <div class="user-info-container col-lg-6 col-lg-6">
                                <p class="user-info-title">کد ملی: </p>
                                <p class="user-info-value">{{$verify->idcard}}</p>
                            </div>
                            <br>
                            <div class="user-info-container col-lg-6 col-lg-6">
                                <p class="user-info-title">کد مستمری:</p>
                                <p class="user-info-value">{{$verify->mostamari}}</p>
                            </div>
                            <br>
                            <div class="user-info-container col-lg-6 col-lg-6">
                                <p class="user-info-title">شماره موبایل: </p>
                                <p class="user-info-value">{{$verify->mobile}}</p>
                            </div>
                            <br>
                            <div class="user-info-container col-lg-6 col-lg-6">
                                <p class="user-info-title">شماره کارت:</p>
                                <p class="user-info-value">{{$verify->card_number}}</p>
                            </div>
                            <br>
                            <div class="user-info-container col-lg-6 col-lg-6">
                                <p class="user-info-title">تاریخ انقضای کارت: </p>
                                <p class="user-info-value">{{\Morilog\Jalali\CalendarUtils::strftime('Y/m/d', strtotime($verify->card_expire_date))}}</p>
                            </div>
                            <br>
                            <div class="user-info-container col-lg-6 col-lg-6">
                                <p class="user-info-title">شماره تراکنش: </p>
                                <p class="user-info-value">{{$verify->reference_id}}</p>
                            </div>
                            <br>
                            <div class="user-info-container col-lg-6 col-lg-6">
                                <p class="user-info-title">مبلغ پرداخت شده: </p>
                                <p class="user-info-value">{{number_format($verify->price)}} تومان</p>
                            </div>
                            <br>
                            {{--<div class="user-info-container col-lg-6 col-lg-6">
                                <p class="user-info-title">وضعیت پرداخت مشتری: </p>
                                @if($verify->pay_status->id==3)
                                    <p class="user-info-value" style="color: green">{{$verify->pay_status->status}}</p>
                                @else
                                    <p class="user-info-value" style="color: red">{{$verify->pay_status->status}}</p>
                                @endif
                            </div>--}}
                            <div class="user-info-container col-lg-6 col-lg-6">
                                <p class="user-info-title">وضعیت درخواست: </p>
                                @if($verify->is_used == 1)
                                    <p class="user-info-value" style="color: green">بررسی شده است</p>
                                @else
                                    <p class="user-info-value" style="color: red"> درخواست شما ثبت شد </p>
                                @endif
                            </div>
                            <br>
                            <div class="user-info-container col-lg-6 col-lg-6">
                                <p class="user-info-title">نوبت: </p>
                                @if($verify->pay_status->id!=3)
                                    <p class="user-info-value" style="color: red">مبلغ را هنوز پرداخت نکرده اید</p>
                                @elseif($verify->is_used == 1)
                                    <p class="user-info-value" style="color: blue">درخواست شما برسی شده و به زودی وام شما پرداخت میشود</p>
                                @else
                                    <p class="user-info-value" style="color: green"> {{$setting_queue+$queue}} مین نفر</p>
                                @endif
                            </div>
                            <br>

                            <div class="user-info-container col-lg-6 col-lg-6">
                                <p class="user-info-title">کد پیگیری: </p>
                                <p class="user-info-value" style="color: #0d57ff">{{$pay_id}}</p>
                            </div>
                            <div class="user-info-container col-lg-6 col-lg-6">
                            </div>
                            <br>


                            <button class="btn btn-primary" onclick="window.print()">پرینت</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 50px"></div>
    </div>


    <!-- Hero Area -->
    {{-- <script>
         $(document).ready(function ($) {
             $('#expire_date').MdPersianDateTimePicker({
                 targetTextSelector: '#expire_date',
                 targetDateSelector: '#expire_date',
             });

             $('#expire_date').on('hidden.bs.popover', function () {
                 // do something…
             });
         });
     </script>--}}
@endsection
