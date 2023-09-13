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
                        <div >
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


        <div class="container card_bottom_of_header" style="height: auto;margin-bottom: 50px;margin-top: 50px">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <h2 class="p-3" style="color: black;">اطلاع رسانی ها</h2>
                        <div class="row">

                            <div class="content" style="width: 100%;margin: 0 auto">
                                <div class="container-fluid" style="overflow-x:auto;">

                                    <table class="table table-wrapper-scroll-x" style="background-color: white;;">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">عنوان</th>
                                            <th scope="col">توضیحات</th>
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
                                                <td style="width: 20px"><a  href="{{url('alarms/'.$alarm->id)}}"><img src="{{asset('adminpanel/icons/ic_view.png')}}" style="width: 25px" alt=""></a></td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>

                                    {{$alarms->links()}}

                                    <div style="height: 60px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
