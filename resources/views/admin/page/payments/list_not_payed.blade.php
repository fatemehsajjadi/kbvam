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

        @include('layouts.admin.current_path',['path'=>'لیست بررسی نشده ها'])

        <!-- /.content-header -->

            <!-- Main content -->


            <div class="content">
                <div class="container-fluid" style="overflow-x:auto;">

                    <table class="table table-wrapper-scroll-x" style="background-color: white;">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">نوبت</th>
                            <th scope="col">نام</th>
                            <th scope="col">کد ملی</th>
                            <th scope="col">کد مستمری</th>
                            <th scope="col">مبلغ</th>
                            <th scope="col">وضعیت پرداخت مشتری</th>
                            <th scope="col">وضعیت بررسی ادمین</th>
                            <th scope="col">نوبت</th>
                            <th scope="col">تاریخ</th>
                            <th scope="col">تنظیم پرداخت</th>
                            {{--                            <th scope="col">ویرایش</th>--}}
                            <th scope="col">حذف</th>
                            <th scope="col">نمایش</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $count = 1+$setting_queue;
                        if (isset($_GET['page']))
                            $count = (15 * ($_GET['page'] - 1)) + 1;
                        ?>
                        @foreach($payments as $payment)
                            <tr>
                                @if($payment->pay_status->id==3)
                                    <th scope="row">{{$count++}}</th>
                                @else
                                    <th scope="row"></th>
                                @endif

                                <td>{{$payment->first_name}} - {{$payment->last_name}}</td>
                                <td>{{$payment->idcard}}</td>
                                <td>{{$payment->mostamari}}</td>
                                <td>{{number_format($payment->price)}} تومان</td>
                                <td>
                                    @if($payment->pay_status->id==1)
                                        <p style="color: #c6a214">{{$payment->pay_status->status}}</p>
                                    @elseif($payment->pay_status->id==2)
                                        <p style="color: red">{{$payment->pay_status->status}}</p>
                                    @elseif($payment->pay_status->id==3)
                                        <p style="color: green">{{$payment->pay_status->status}}</p>
                                    @endif
                                </td>
                                <td>
                                    @if($payment->is_used==0)
                                        <p style="color: red">بررسی نشده </p>
                                    @elseif($payment->is_used==1)
                                        <p style="color: green">بررسی شده </p>
                                    @endif
                                </td>
                                <td>
                                    <p style="color: green">پرداخت شده</p>
                                </td>
                                <td>
                                    <p>{{\Morilog\Jalali\Jalalian::fromCarbon($payment->created_at)->format('Y/m/d H:i:s')}}</p>
                                </td>

                                <td><a style="color: green" href="{{url('paneladmin/set-pay/'.$payment->id)}}">تنظیم به عنوان
                                        بررسی شده</a>
                                </td>
                                {{--  <td><a href="{{url('admin/pay/'.$payment->id.'/edit')}}"><img
                                              src="icons/ic_edit_pencil.png" style="width: 25px"
                                              alt=""></a></td>--}}
                                <td><a onclick="return checkDelete()" href="{{url('/paneladmin/pay-delete/'.$payment->id)}}"><img
                                            src="icons/ic_delete.png" style="width: 25px" alt=""></a></td>
                                <td><a href="{{url('paneladmin/pay/'.$payment->paygiri)}}"><img src="icons/ic_view.png"
                                                                                      style="width: 25px" alt=""></a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    {{$payments->links()}}

                    <a class="btn btn-success" href="{{url('/paneladmin/pay/excel/payed')}}">دانلود اکسل از بررسی شده ها</a>
                    <a class="btn btn-danger" href="{{url('/paneladmin/pay/excel/not-payed')}}">دانلود اکسل از بررسی نشده
                        ها</a>
                    <a class="btn btn-dark" href="{{url('/paneladmin/pay/excel/all')}}">دانلود اکسل از کل کاربران</a>

                    <div style="height: 30px"></div>
                </div>
            </div>


            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <script language="JavaScript" type="text/javascript">
            function checkDelete() {
                return confirm('آیا میخواهید این درخواست وام را حذف کنید!!!');
            }
        </script>

        @include('layouts.admin.footer')
    </div>

@endsection
