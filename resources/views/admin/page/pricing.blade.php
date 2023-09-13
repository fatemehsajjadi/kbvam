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

        @include('layouts.admin.current_path',['path'=>'تنظیم قیمت'])

        <!-- /.content-header -->

            <!-- Main content -->


            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{url('paneladmin/pricing')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group col-lg-3">
                                    <label for="pricing">تنظیم قیمت پرداختی وام</label>
                                    <input type="number" class="form-control" id="pricing" name="pricing"
                                           aria-describedby="emailHelp" value="{{$settings->pricing}}"
                                           placeholder="مبلغ را وارد کنید" step='100'>
                                </div>
                                <p id="show_price"></p>
                                <button class="btn btn-success" type="submit">ویرایش مبلغ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $(document).ready(function () {
                    var toman = " تومان";
                    $('#show_price').text(addSeperator($('#pricing').val()) + toman);
                    $('#pricing').on('input', function (e) {
                        var toman = " تومان";
                        if ($(this).val() == '')
                            toman = '';
                        $('#show_price').text(addSeperator($(this).val()) + toman);
                    });
                });

                function addSeperator(string) {
                    return string.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                }
            </script>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('layouts.admin.footer')
    </div>

@endsection
