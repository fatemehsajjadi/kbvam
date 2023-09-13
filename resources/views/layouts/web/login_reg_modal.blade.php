<div class="modal fade form-modal" id="login" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button"
                class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper"
                data-dismiss="modal"><i class="fas fa-times"></i></button>
        <div class="login-modal-main bg-white rounded-8 overflow-hidden">
            <div class="row no-gutters">
                <div class="col-lg-5 col-md-6">
                    <div class="pt-10 pb-6 pl-11 pr-12 bg-black-2 h-100 d-flex flex-column dark-mode-texts">
                        <div class="pb-9">
                            <h3 class="font-size-8 text-white line-height-reset pb-4 line-height-1p4">
                                خوش آمدید
                            </h3>
                            <p class="mb-0 font-size-4 text-white">برای ادامه حساب خود وارد شوید
                                و مشاغل جدید را کشف کنید.</p>
                        </div>
                        <div class="border-top border-default-color-2 mt-auto">
                            <div class="d-flex mx-n9 pt-6 flex-xs-row flex-column">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="bg-white-2 h-100 px-11 pt-11 pb-7">


                        <form method="POST" action="{{ route('login') }}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="username"
                                       class="font-size-4 text-black-2 font-weight-semibold line-height-reset">
                                    نام کاربری </label>
                                <input type="text" name="username" class="form-control" placeholder="user"
                                       id="email">
                            </div>
                            <div class="form-group">
                                <label for="password"
                                       class="font-size-4 text-black-2 font-weight-semibold line-height-reset">
                                    رمزعبور </label>
                                <div class="position-relative">
                                    <input type="password" name="password" class="form-control" id="password"
                                           placeholder="رمزعبور را وارد کنید">
                                </div>
                            </div>

                            <div class="form-group mb-8">
                                <button class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">ورود
                                </button>
                            </div>
                            <p class="font-size-4 text-center heading-default-color"> اکانت
                                ندارید؟ <a id="havent_account"

                                           class="text-primary">یک حساب کاربری رایگان ایجاد کنید</a></p>

                            @foreach ($errors->all() as $error)

                                {{ $error }}<br>
                            @endforeach
{{--                            count($errors->all())>0&&--}}
                            @if(isset($_GET['auth'])&&$_GET['auth']=='login')
                                <script src="js/jquery-3.6.0.min.js"></script>
                                <script src="js/bootstrap.min.js"></script>
                                <script>
                                    // $('#signup_btn').click(function () {
                                    $('#login').modal('show');
                                    // });
                                </script>
                            @endif
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Sign Up Modal -->
<div class="modal fade form-modal" id="signup" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-n6 mr-lg-n6 focus-reset shadow-10" style="z-index: 1"
                data-dismiss="modal"><i class="fas fa-times"></i></button>
        <div class="login-modal-main bg-white rounded-8 overflow-hidden">
            <div class="row no-gutters">
                <div class="col-lg-5 col-md-6">
                    <div class="pt-10 pb-6 pl-11 pr-12 bg-black-2 h-100 d-flex flex-column dark-mode-texts">
                        <div class="pb-9">
                            <h3 class="font-size-8 text-white line-height-reset pb-4 line-height-1p4">
                                امروز یک حساب کاربری رایگان ایجاد کنید
                            </h3>
                            <p class="mb-0 font-size-4 text-white">حساب خود را برای ادامه ایجاد کنید
                                و مشاغل جدید را کشف کنید.</p>
                        </div>
                        <div class="border-top border-default-color-2 mt-auto">
                            <div class="d-flex mx-n9 pt-6 flex-xs-row flex-column">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="bg-white-2 h-100 px-11 pt-11 pb-7">


                        <form method="POST" action="{{ route('register') }}">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="email2"
                                       class="font-size-4 text-black-2 font-weight-semibold line-height-reset">
                                    نام کاربری </label>
                                <input type="text" name="username" class="form-control" placeholder="نام کاربری"
                                       id="email2">
                            </div>

                            <div class="form-group">
                                <label for="email2"
                                       class="font-size-4 text-black-2 font-weight-semibold line-height-reset">
                                    شماره موبایل </label>
                                <input type="text" name="mobile" class="form-control" placeholder="09121234567"
                                       id="mobile">
                            </div>

                            <div class="form-group">
                                <label for="password2"
                                       class="font-size-4 text-black-2 font-weight-semibold line-height-reset">
                                    رمزعبور </label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="password2" name="password"
                                           placeholder="رمزعبور را وارد کنید">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password23"
                                       class="font-size-4 text-black-2 font-weight-semibold line-height-reset">
                                    تایید رمزعبور </label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="password23"
                                           name="password_confirmation"
                                           placeholder="رمزعبور را وارد کنید">

                                </div>
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between mb-1">
                                <label for="terms-check2" class="gr-check-input d-flex  mr-3">
                                </label>
                            </div>
                            <div class="form-group mb-8">
                                <button class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">ثبت نام
                                </button>
                            </div>
                            <p class="font-size-4 text-center heading-default-color"> اکانت دارید؟
                                <a
                                    id="have_account"
                                    class="text-primary">وارد حساب کاربری شوید</a></p>

                            @foreach ($errors->all() as $error)
                                {{ $error }}<br>
                            @endforeach
{{--                            count($errors->all())>0&&--}}
                            @if(isset($_GET['auth'])&&$_GET['auth']=='reg')
                                <script src="js/jquery-3.6.0.min.js"></script>
                                <script src="js/bootstrap.min.js"></script>
                                <script>
                                    $('#signup').modal('show');
                                </script>
                            @endif


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header start end -->
