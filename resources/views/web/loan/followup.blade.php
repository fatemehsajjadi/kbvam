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
            <div class="row">

                <div class="col-lg-6">


                    <div class="card ">
                        <div class="card-body">
                            <div class="container">
                                <h2 class="p-3" style="color: black;">پیگیری نوبت با کد پیگیری</h2>
                                <div class="row">
                                    <div class="row">
                                        <div class="form-group col-lg-12">
                                            <label for="title">کد پیگیری را وارد کنید:</label>
                                            <input type="number" class="form-control" id="followup_code"
                                                   aria-describedby="title" value=""
                                                   placeholder="کد پیگیری وام خود را وارد کنید" required>
                                            <br>
                                            <button class="btn btn-success" id="btn_follow_code">پیگیری</button>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="card ">
                        <div class="card-body">
                            <div class="container">
                                <h2 class="p-3" style="color: black;">پیگیری نوبت با کد ملی</h2>
                                <div class="row">
                                    <div class="row">
                                        <div class="form-group col-lg-12">
                                            <label for="title">کد ملی را وارد کنید:</label>
                                            <input type="number" class="form-control" id="followup_idcard"
                                                   aria-describedby="title" value=""
                                                   placeholder="کد ملی  خود را وارد کنید" required>
                                            <br>
                                            <button class="btn btn-success" id="btn_follow_idcard">پیگیری</button>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div style="height: 50px"></div>
    </div>

    <script>
        $('#btn_follow_code').click(function () {
            var follow_id = $('#followup_code').val();
            if (follow_id !== '')
                window.location = '<?php echo url('/');?>' + '/followup/tracking-code/' + follow_id;
            else
                alert('لطفا کد پیگیری را پر کنید...');
        });
        $('#btn_follow_idcard').click(function () {
            var follow_id = $('#followup_idcard').val();
            if (follow_id !== '')
                window.location = '<?php echo url('/');?>' + '/followup/national-code/' + follow_id;
            else
                alert('لطفا کد ملی را پر کنید...');

        });

    </script>

@endsection
