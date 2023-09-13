@extends('layouts.admin.app')


@section('head')
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('content')


    <div class="wrapper">
        <!-- Navbar -->

    @include('layouts.admin.header')

    <!-- /.navbar -->

    @include('layouts.admin.sidebar')

    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

        @include('layouts.admin.current_path',['path'=>'صفحه اصلی'])

        <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">

                    <!-- Small Box (Stat card) -->
                    <h5 class="mb-2 mt-4">آمار</h5>
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h4>{{$payed_count}}</h4>

                                    <p>پرداختی ها</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
{{--                                <a href="#" class="small-box-footer">اطلاعات بیشتر <i--}}
{{--                                        class="fa fa-arrow-circle-left"></i></a>--}}
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h4>{{$not_payed_count}}</h4>

                                    <p>پرداخت نشده ها</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                {{--                                <a href="#" class="small-box-footer">اطلاعات بیشتر <i--}}
                                {{--                                        class="fa fa-arrow-circle-left"></i></a>--}}
                            </div>
                        </div>


                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h4>{{$all_users_count}}</h4>

                                    <p>کاربران ثبت شده</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
{{--                                <a href="#" class="small-box-footer">اطلاعات بیشتر <i--}}
{{--                                        class="fa fa-arrow-circle-left"></i></a>--}}
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h4>{{number_format($pricing)}} تومان</h4>

                                    <p>قیمت تنظیم شده</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
{{--                                <a href="#" class="small-box-footer">اطلاعات بیشتر <i--}}
{{--                                        class="fa fa-arrow-circle-left"></i></a>--}}
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-dark">
                                <div class="inner">
                                    <h4>{{$queue}} </h4>

                                    <p>تعداد پرونده های حضوری</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                {{--                                <a href="#" class="small-box-footer">اطلاعات بیشتر <i--}}
                                {{--                                        class="fa fa-arrow-circle-left"></i></a>--}}
                            </div>
                        </div>

                        <!-- ./col -->
                    </div>
                    <!-- /.row -->


                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('layouts.admin.footer')
    </div>

@endsection
