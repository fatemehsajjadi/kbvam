@extends('layouts.web.app')

@section('content')

    <style>
        /*   .home-height {
               height: 1300px
           }

           @media only screen and (max-width: 600px) {
               .home-height {
                   height: 1800px;
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


                <!-- End Hero Form -->
            </div>
        </div>

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
                    <b>شروط لازم جهت ثبت نام اخذ وام قرض الحسنه</b>
                    <p style="color: #1e1e1e">

                        1ـ بازنشسته عضو کانون میبایست حقوق خود را از شعب بانک رفاه شهر سنندج دریافت نماید.
                        (سایر بانک ها به دلیل عدم امکان کسر اقساط توسط بانک عامل نمی توانند وام پرداخت کنند)
                        <br>
                        2ـ باتوجه به قوانین بانک مرکزی سن بازنشسته متقاضی وام میبایست کمتر از ۷۷ سال تمام باشد.
                        3ـ بازنشسته باید فاقد بدهی بانکی ،‌چک برگشتی و اقساط معوقه وام از سایر بانک های کشور
                        باشد (مطابق مقررات بانک)
                        <br>
                        4ـ بازنشسته نباید در ۳ سال گذشته از تسهیلات وام بانک رفاه استفاده کرده باشد.
                        5- مبلغ وام ۷۰,۰۰۰,۰۰۰ ریال معادل هفت میلیون تومان می باشد و باز پرداخت مطابق مقررات
                        بانک میباشد
                        <br>
                        6- بازنشسته/مستمری بگیر که درخواست وام دارد باید سیم کارت بنام خود داشته باشد ،توجه
                        داشته باشیدشماره تلفن همراه وارد شده صرفا می بایست متعلق به شخص بازنشسته/مستمری بگیر
                        باشد
                        این درخواست صرفا جهت پیش ثبت نام وام میباشد
                        <br>
                        به دلیل محدودیت در تعداد وام چنانچه به هر دلیل با پرداخت وام شما موافقت نگردید کانون
                        بازنشستگان هیچ گونه مسئولیتی در قبال پرداخت وام به بازنشسته ندارد.
                        با توجه به دستورالعمل سازمان تامین اجتماعی و کانون عالی بازنشستگان تامین اجتماعی کشور به
                        دلیل محدودیت در تعداد وام و کثرت متقاضیان اولویت اخذ وام با حداقل بگیران ، بیماران خاص و
                        صعب العلاج و همچنین افرادی که فرزندان آنها در شرف ازدواج میباشد و یا در حال جابجائی مسکن
                        جهت اجاره نشینی با ارائه مدرک معتبر میباشد .
                        در صورت اشتباه در درج مندرجات فرم ، مسئولیت آن به عهده بازنشسته میباشد</p>
                </div>

                <div
                    style="margin: 20px auto !important;"
                    class=" btns d-flex justify-content-xl-end justify-content-center align-items-xl-center flex-wrap h-100  mx-n4">
                    <a href="{{url('/loan-register')}}" class="btn btn-red btn-xl mx-4 mt-6 text-uppercase"

                    >ثبت نام وام</a>
                    <a href="{{url('/followup')}}" class="btn btn-green btn-h-60 btn-xl mx-4 mt-6 text-uppercase"
                    >پیگیری وام</a>
                </div>
                <div style="color: #1e1e1e" class="container">
                    <b>آخرین اطلاعیه ها</b>
                    <br>
                    <br>
                    <?php
                    $i = 1;
                    ?>
                    @foreach($alarms_footer as $alarm)
                        <a href="{{url('/alarms/'.$alarm->id)}}"
                           style="display: block;font-size: 25px;line-height:40px;color: #1e1e1e">{{$alarm->title}}</a>
                        <p style="color: #1e1e1e;font-size: 15px !important;   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2;
   -webkit-box-orient: vertical;">{{$alarm->description}}</p><a href="{{url('alarms/'.$alarm->id)}}">بیشتر بخوانید</a>

                        @if( count($alarms_footer) >$i++)
                            <hr>

                        @else
                            <br>
                            <br>
                        @endif

                    @endforeach
                </div>
            </div>
        </div>
        <div style="height: 50px"></div>
    </div>

    <!-- Hero Area -->

@endsection
