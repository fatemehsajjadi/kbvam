<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/paneladmin')}}" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
{{--                    <img src="" class="img-circle elevation-2" alt="User Image">--}}
                </div>
                <div class="info">
                    <a href="{{url('/paneladmin')}}"  class="d-block">پنل مدیریت</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                  {{--  <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                صفحات شروع
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>صفحه فعال</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>صفحه غیر فعال</p>
                                </a>
                            </li>
                        </ul>
                    </li>--}}


                    <li class="nav-item has-treeview ">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fa fa-paypal"></i>
                            <p>
                                لیست درخواست ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                          {{--  <li class="nav-item">
                                <a href="{{url('paneladmin/all-pays')}}" class="nav-link ">
                                    <i class="fa  fa-paypal  nav-icon"></i>
                                    <p>لیست کل وام ها</p>
                                </a>
                            </li>--}}
                            <li class="nav-item">
                                <a href="{{url('paneladmin/payed')}}" class="nav-link ">
                                    <i class="fa fa-credit-card-alt  nav-icon"></i>
                                    <p>بررسی شده ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('paneladmin/not-payed')}}" class="nav-link">
                                    <i class="fa fa-credit-card  nav-icon"></i>
                                    <p>بررسی نشده ها </p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview ">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fa fa-bullhorn"></i>
                            <p>
                                اطلاع رسانی ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('paneladmin/alarms')}}" class="nav-link ">
                                    <i class="fa fa-list-ol nav-icon"></i>
                                    <p>لیست اطلاع رسانی ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('paneladmin/alarms/create')}}" class="nav-link">
                                    <i class="fa fa-send nav-icon"></i>
                                    <p>ارسال اطلاع رسانی</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a href="{{url('/paneladmin/pricing')}}" class="nav-link">
                            <i class="nav-icon fa fa-money"></i>
                            <p>
                               تنظیمات امور مالی
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('/paneladmin/queue')}}" class="nav-link">
                            <i class="nav-icon fa fa-money"></i>
                            <p>
                                تنظیمات پرونده های حضوری
                            </p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="{{url('logout')}}" class="nav-link">
                            <i class="nav-icon fa fa-sign-out"></i>
                            <p>
                                خروج از حساب کاربری
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
