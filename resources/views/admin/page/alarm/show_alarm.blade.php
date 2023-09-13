@extends('layouts.admin.app')



@section('content')


    <div class="wrapper">
        <!-- Navbar -->

    @include('layouts.admin.header')

    <!-- /.navbar -->

    @include('layouts.admin.sidebar')

    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

        @include('layouts.admin.current_path',['path'=>'نمایش اطلاع رسانی'])

        <!-- /.content-header -->

            <!-- Main content -->


            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h5>عنوان: {{$alarm->title}}</h5>
                            <br>
                            <p>توضیحات: {{$alarm->description}}</p>

                            <a style="color: blue" href="{{url('/paneladmin/alarms')}}">برگشت به لیست اطلاع رسانی ها</a>
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
