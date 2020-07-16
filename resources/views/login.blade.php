@include('layout/header')
@include('layout/header-nav')
<div class="alert-warning text-center">{{Session::get("message")}}</div>
<div class="shop_top">
    <div class="container">
        <div class="col-md-offset-3 col-md-6 ">
            <div class="container-fluid">
                <div class="login-title">
                <h4 class="title">Login</h4>
                <div id="loginbox" class="loginbox">
                    <form action="{{URL::route("validate-login")}}" method="post">
                        <fieldset class="input">
                            <p>
                                <label>Username</label>
                                <input type="text" name="txt_username" class="inputbox" size="18" autocomplete="off">
                            </p>
                            <p>
                                <label>Password</label>
                                <input type="password"  name="txt_password"  class="inputbox" size="18" autocomplete="off">
                            </p>
                            <div class="remember">
                                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                <input type="submit" name="Submit" class="button" value="Login"><div class="clear"></div>
                            </div>
                        </fieldset>
                    </form>
                    <h4 class="title">Not a member ?</h4>
                    <div class="button1">
                        <a href="{{URL::route('show-register-page')}}"><input type="submit" name="Submit" value="Signup"></a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
@include("layout/footer")