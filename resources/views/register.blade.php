@include('layout/header')
@include('layout/header-nav')
<div class="alert-warning text-center">{{Session::get("message")}}</div>
<div class="shop_top">
    <div class="container">
        <div class="col-md-offset-3 col-md-6 ">
            <div class="container-fluid">
                <div class="login-title">
                    <h4 class="title">Signup</h4>
                    <div id="loginbox" class="loginbox">
                        <form action="{{URL::route("post-register")}}" method="post">
                            <fieldset class="input">
                                <p>
                                    <label>First Name: </label>
                                    <input type="text" name="txt_first" class="inputbox" size="18" autocomplete="off">
                                </p>
                                <p>
                                    <label>Last Name: </label>
                                    <input type="text" name="txt_last" class="inputbox" size="18" autocomplete="off">
                                </p>
                                <p>
                                    <label>Username: </label>
                                    <input type="text" name="txt_username" class="inputbox" size="18" autocomplete="off">
                                </p>
                                <p>
                                    <label>Password: </label>
                                    <input type="password" name="txt_password" class="inputbox" size="18" autocomplete="off">
                                </p>
                                <p>
                                    <label>Confirm Password: </label>
                                    <input type="password" name="txt_password_confirmation" class="inputbox" size="18" autocomplete="off">
                                </p>
                                <p>
                                    <label>Email id: </label>
                                    <input type="text" name="txt_email" class="inputbox" size="18" autocomplete="off">
                                </p>
                                <p>
                                    <label>Mobile number: </label>
                                    <input type="number" name="txt_mob_num" class="inputbox" size="18" autocomplete="off">
                                </p>
                                <div class="remember">
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                    <input type="submit" name="Submit" class="button" value="Signup"><div class="clear"></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@include("layout/footer")