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
        svg{
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

        @include('layouts.admin.current_path',['path'=>'لیست اطلاع رسانی ها'])

        <!-- /.content-header -->

            <!-- Main content -->


            <div class="content">
                <div class="container-fluid" style="overflow-x:auto;">

                    <table class="table table-wrapper-scroll-x" style="background-color: white;">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">عنوان</th>
                            <th scope="col">توضیحات</th>
                            <th scope="col">تاریخ ایجاد</th>
                            <th scope="col">ویرایش</th>
                            <th scope="col">حذف</th>
                            <th scope="col">نمایش</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $count = 1;
                        if (isset($_GET['page']))
                            $count = (15 * ($_GET['page']-1))+1;
                        ?>
                        @foreach($alarms as $alarm)
                            <tr>
                                <th scope="row">{{$count++}}</th>
                                <td>{{$alarm->title}}</td>
                                <td><p class="rowlimit">{{$alarm->description}}</p></td>
                                <td>
                                    <p>{{\Morilog\Jalali\Jalalian::fromCarbon($alarm->created_at)->format('Y/m/d H:i:s')}}</p>
                                </td>
                                <td><a href="{{url('paneladmin/alarms/'.$alarm->id.'/edit')}}"><img src="icons/ic_edit_pencil.png" style="width: 25px"
                                                                                                    alt=""></a></td>
                                <td><a onclick="return checkDelete()" href="{{url('/paneladmin/alarms/delete/'.$alarm->id)}}"><img src="icons/ic_delete.png" style="width: 25px" alt=""></a></td>
                                <td><a  href="{{url('paneladmin/alarms/'.$alarm->id)}}"><img src="icons/ic_view.png" style="width: 25px" alt=""></a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    {{$alarms->links()}}

                    <div style="height: 30px"></div>
                </div>
            </div>


            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <script language="JavaScript" type="text/javascript">
            function checkDelete() {
                return confirm('آیا میخواهید این اطلاع رسانی را حذف کنید!!!');
            }
        </script>

        @include('layouts.admin.footer')
    </div>

@endsection
