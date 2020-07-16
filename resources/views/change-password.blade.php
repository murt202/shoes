Change Password <br>


{{Session::get("message")}}
<form method="post" action="{{URL::route("post-change-password")}}">

    <input type="password" name="txt_old" placeholder="Old">
    <input type="password" name="txt_new" placeholder="New">
    <input type="password" name="txt_new_confirmation" placeholder="Confirm">

    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="submit">
</form>