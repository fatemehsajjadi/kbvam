<header
    class="site-header site-header--menu-right bg-default py-7 py-lg-0"

>
    <div class="container">
        <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0 py-0">
            <!-- Brand Logo-->
            <div class="brand-logo">
                <a>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="mobile-menu">
                <div class="navbar-nav-wrapper">
                    <ul class="navbar-nav main-menu" style="float: right">


                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">صفحه اصلی</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/loan-register')}}">ثبت نام وام</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/followup')}}">پیگیری وام</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/alarms')}}">اطلاع رسانی ها</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact_us')}}">تماس با ما</a>
                        </li>



                        {{--    @auth()
                                @if(\Illuminate\Support\Facades\Auth::user()->role_id>0)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/admin')}}">
                                            پنل مدیریت
                                        </a>
                                    </li>
                                @endif
                                <li class="nav-item">
                                    <a class="nav-link" style="color: red;" href="{{url('/logout')}}">
                                        خروج از حساب کاربری
                                    </a>
                                </li>
                            @endauth--}}
                    </ul>
                </div>
                <button class="d-block d-lg-none offcanvas-btn-close focus-reset" type="button"
                        data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu"
                        aria-expanded="true" aria-label="Toggle navigation">
                    <i class="gr-cross-icon"></i>
                </button>
            </div>

        {{--   @guest()

               <div class="header-btns header-btn-devider ml-auto pr-2 ml-lg-6 d-none d-xs-flex">
                   <a class="btn btn-transparent text-uppercase font-size-3 heading-default-color focus-reset"
                      href="javacript:" data-toggle="modal" data-target="#login">
                       ورود
                   </a>
                   <a class="btn btn-primary text-uppercase font-size-3" href="javacript:" data-toggle="modal"
                      data-target="#signup">
                       ثبت نام
                   </a>
               </div>
       @endguest--}}
        <!-- Mobile Menu Hamburger-->
            <button class="navbar-toggler btn-close-off-canvas  hamburger-icon border-0" type="button"
                    data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                <!-- <i class="icon icon-simple-remove icon-close"></i> -->
                <span class="hamburger hamburger--squeeze js-hamburger">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
            </span>
            </button>
            <!--/.Mobile Menu Hamburger Ends-->
        </nav>
    </div>
</header>
