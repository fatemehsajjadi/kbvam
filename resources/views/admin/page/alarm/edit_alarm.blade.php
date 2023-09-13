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

        @include('layouts.admin.current_path',['path'=>'ویرایش اطلاع رسانی'])

        <!-- /.content-header -->

            <!-- Main content -->


            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{url('paneladmin/alarms/'.$alarm->id)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="PUT">

                                <div class="form-group col-lg-10">
                                    <label for="title">عنوان</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                           aria-describedby="title" value="{{$alarm->title}}"
                                           placeholder="عنوان را وارد کنید" step='100'>
                                </div>

                                <div class="form-group col-lg-10">
                                    <label for="title">توضیحات</label>
                                    <textarea rows="8" type="text" class="form-control" id="description" name="description"
                                           aria-describedby="title"
                                              placeholder="توضیحات را وارد کنید" >{{$alarm->description}}</textarea>
                                </div>

                                <button class="btn btn-success" type="submit">ویرایش اطلاع رسانی</button>
                            </form>
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
