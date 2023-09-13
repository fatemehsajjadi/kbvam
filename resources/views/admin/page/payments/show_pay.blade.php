@extends('layouts.admin.app')



@section('content')

    <style>
        .rowlimit {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* number of lines to show */
            -webkit-box-orient: vertical;
        }

        svg {
            width: 10px;
        }
    </style>

    <div class="wrapper">
        <!-- Navbar -->

    @include('layouts.admin.header')

    <!-- /.navbar -->

    @include('layouts.admin.sidebar')

    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

        @include('layouts.admin.current_path',['path'=>'لیست پرداختی ها'])

        <!-- /.content-header -->

            <!-- Main content -->


            <div class="container" style="height: auto">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <h2 class="p-3" style="color: black;">رسید صورت حساب</h2>
                            <div class="row">

                                <div class="user-info-container col-lg-6 col-lg-6">
                                    <p class="user-info-title">نام: </p>
                                    <p class="user-info-value">{{$payments->first_name}}</p>
                                </div>
                                <br>
                                <div class="user-info-container col-lg-6 col-lg-6">
                                    <p class="user-info-title">نام خانوادگی: </p>
                                    <p class="user-info-value">{{$payments->last_name}}</p>
                                </div>
                                <br>
                                <div class="user-info-container col-lg-6 col-lg-6">
                                    <p class="user-info-title">نام پدر: </p>
                                    <p class="user-info-value">{{$payments->father_name}}</p>
                                </div>
                                <br>
                                <div class="user-info-container col-lg-6 col-lg-6">
                                    <p class="user-info-title">شماره شناسنامه: </p>
                                    <p class="user-info-value">{{$payments->shenasname}}</p>
                                </div>
                                <br>
                                <div class="user-info-container col-lg-6 col-lg-6">
                                    <p class="user-info-title">کد ملی: </p>
                                    <p class="user-info-value">{{$payments->idcard}}</p>
                                </div>
                                <br>
                                <div class="user-info-container col-lg-6 col-lg-6">
                                    <p class="user-info-title">کد مستمری:</p>
                                    <p class="user-info-value">{{$payments->mostamari}}</p>
                                </div>
                                <br>
                                <div class="user-info-container col-lg-6 col-lg-6">
                                    <p class="user-info-title">شماره موبایل: </p>
                                    <p class="user-info-value">{{$payments->mobile}}</p>
                                </div>
                                <br>
                                <div class="user-info-container col-lg-6 col-lg-6">
                                    <p class="user-info-title">شماره کارت:</p>
                                    <p class="user-info-value">{{$payments->card_number}}</p>
                                </div>
                                <br>
                                <div class="user-info-container col-lg-6 col-lg-6">
                                    <p class="user-info-title">تاریخ انقضای کارت: </p>
                                    <p class="user-info-value">{{\Morilog\Jalali\CalendarUtils::strftime('Y/m/d', strtotime($payments->card_expire_date))}}</p>
                                </div>
                                <br>
                                <div class="user-info-container col-lg-6 col-lg-6">
                                    <p class="user-info-title">شماره تراکنش: </p>
                                    <p class="user-info-value">{{$payments->reference_id}}</p>
                                </div>
                                <br>
                                <div class="user-info-container col-lg-6 col-lg-6">
                                    <p class="user-info-title">مبلغ پرداخت شده: </p>
                                    <p class="user-info-value">{{number_format($payments->price)}} تومان</p>
                                </div>
                                <br>
                                {{--<div class="user-info-container col-lg-6 col-lg-6">
                                    <p class="user-info-title">وضعیت پرداخت مشتری: </p>
                                    @if($payments->pay_status->id==3)
                                        <p class="user-info-value" style="color: green">{{$payments->pay_status->status}}</p>
                                    @else
                                        <p class="user-info-value" style="color: red">{{$payments->pay_status->status}}</p>
                                    @endif
                                </div>--}}
                                <div class="user-info-container col-lg-6 col-lg-6">
                                    <p class="user-info-title">وضعیت درخواست: </p>
                                    @if($payments->is_used == 1)
                                        <p class="user-info-value" style="color: green">بررسی شده است</p>
                                    @else
                                        <p class="user-info-value" style="color: red"> هنوز بررسی نشده است </p>
                                    @endif
                                </div>
                                <br>
                                <div class="user-info-container col-lg-6 col-lg-6">
                                    <p class="user-info-title">نوبت: </p>
                                    @if($payments->is_used == 1)
                                        <p class="user-info-value" style="color: blue">درخواست شما برسی شده و به زودی وام شما پرداخت میشود</p>
                                    @else
                                        <p class="user-info-value" style="color: green"> {{$queue}} مین نفر</p>
                                    @endif
                                </div>
                                <br>
                                <div class="user-info-container col-lg-6 col-lg-6">
                                    <p class="user-info-title">کد پیگیری: </p>
                                    <p class="user-info-value" style="color: #0d57ff">{{$pay_id}}</p>
                                </div>
                                <br>


                                <button class="btn btn-primary" onclick="window.print()">پرینت</button>

                                <div style="height: 30px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    @include('layouts.admin.footer')
    </div>

@endsection
