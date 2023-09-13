@extends('layouts.web.app')

@section('content')

    <link href="{{asset('adminpanel/datepicker/css/jquery.md.bootstrap.datetimepicker.style.css')}}" rel="stylesheet"/>
    <script src="{{asset('adminpanel/datepicker/js/jquery.md.bootstrap.datetimepicker.js')}}"></script>

    <!-- Hero Area -->
    <div class="position-relative z-index-1 bg-squeeze pt-5 dark-mode-texts" style=";overflow: auto;height: auto">
        <div class="pos-abs-tr" style="width: 100%;height: auto">
            @include('web.include.header_image')
        </div>
        <div class="container position-static">
            <div class="row position-relative align-items-center position-static">
                <div
                    class="col-xxl-7 col-xl-8 col-lg-9 pb-lg-33 pb-md-28 pb-xs-26 pb-29 pt-md-20 aos-init aos-animate"
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
                        <h2 class="p-3" style="color: black;">پرداخت صورت حساب</h2>
                        <form action="{{url('loan-register')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="title">نام:</label>
                                    <input type="text" class="form-control" id="title" name="first_name"
                                           aria-describedby="title" value=""
                                           placeholder="نام خود را وارد کنید" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="title">نام خانوادگی:</label>
                                    <input type="text" class="form-control" id="title" name="last_name"
                                           aria-describedby="title" value=""
                                           placeholder="نام خانوادگی خود را وارد کنید" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="title">نام پدر:</label>
                                    <input type="text" class="form-control" id="title" name="father_name"
                                           aria-describedby="title" value=""
                                           placeholder="نام پدر خود را وارد کنید" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="title"> شماره شناسنامه:</label>
                                    <input type="number" class="form-control" id="title" name="shenasname"
                                           aria-describedby="title" value=""
                                           placeholder="شماره شناسنامه خود را وارد کنید" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="title"> کد ملی:</label>
                                    <input type="number" class="form-control" id="idcard" name="idcard"
                                           aria-describedby="title" value=""
                                           placeholder="کد ملی خود را وارد کنید" required
                                           onKeyPress="if(this.value.length==10) return false;">
                                    <span id="idcard_validation"></span>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="title"> کد مستمری:</label>
                                    <input type="number" class="form-control" id="title" name="mostamari"
                                           aria-describedby="title" value=""
                                           placeholder="شماره مستمری خود را وارد کنید" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="title"> شماره موبایل:</label>
                                    <input type="number" class="form-control" id="title" name="mobile"
                                           aria-describedby="title" value=""
                                           placeholder="شماره تماس خود را وارد کنید" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="title"> شماره کارت کانون:</label>
                                    <input type="number" class="form-control" id="title" name="card_number"
                                           aria-describedby="title" value=""
                                           placeholder="شماره کارت خود را وارد کنید" required>

                                </div>

                                <div class="form-group col-lg-4">
                                    <label for="title"> تاریخ انقضای کارت کانون:</label>
                                    <input type="text" class="form-control" id="expire_date_placeholder"
                                           value=""
                                           placeholder="انقضای شماره کارت خود را وارد کنید" required>
                                    <input  type="hidden"  id="expire_date"  name="card_expire_date">
                                    {{--                                    <span style="color: red">توجه: تاریخ شمسی خودکار به میلادی تبدیل میشود</span>--}}
                                </div>


                            </div>



                            <p style="color: #0a2a30">درخواست شما بعد از پرداخت مبلغ {{$pricing}} تومان ثبت خواهد
                                شد.</p>
                            <button id="btn_submit" class="btn btn-success">پرداخت</button>

                            <br>


                            @if($errors->any())
                                {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                            @endif
                        </form>

                    </div>

                </div>

            </div>
        </div>
        <div style="height: 50px"></div>
    </div>


    <!-- Hero Area -->
    <script>
        $(document).ready(function ($) {

            $("#idcard").focusout(function () {
                if($(this).val().length!==10){
                    alert('کد ملی باید 10 رقمی باشد');
                    return false;
                }else
                    return  true;
            });

            $('#btn_submit').click(function (e) {

                var current_date = '<?php echo strtotime(date('Y/m/d'));?>';

                function toTimestamp(strDate){
                    var datum = Date.parse(strDate);
                    return datum/1000;
                }
                var card_expire_date = toTimestamp($('#expire_date').val());

                if((card_expire_date-current_date)<=((60*60*24)*31)){
                    e.preventDefault();
                    alert('انقضای کارت کانون شما به پایان رسیده یا در یک ماه آینده به پایان میرسد\nلطفا پس از صدور کارت کانون جدید مجددا درخواست خود را ثبت کنید')
                }else{

                }

            });


            $('#expire_date_placeholder').MdPersianDateTimePicker({
                targetTextSelector: '#expire_date_placeholder',
                targetDateSelector: '#expire_date',
            });

            $('#expire_date').on('hidden.bs.popover', function () {
                // do something…
            });
        });
    </script>
@endsection
