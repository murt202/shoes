@include('layout/header')
@include('layout/header-nav')
<div class="alert-warning text-center">{{Session::get("message")}}</div>
<div class="shop_top">
    <div class="container">
        <div class="col-md-offset-3 col-md-6 ">
            <div class="container-fluid">
                <div class="login-title">
                    <h3 class="title text-center">Edit Product</h3>
                    <div id="loginbox" class="loginbox">
                        <form action="{{URL::route("edit-product-post")}}" method="post">
                            <fieldset class="input">
                                <p>
                                    <label>Name</label>
                                    <input type="text"  name="txt_name" class="inputbox" value="{{$product[0]->name}}" size="18" autocomplete="off">
                                </p>
                                <p>
                                    <label>Price</label>
                                    <input type="text"  name="txt_price"  class="inputbox" value="{{$product[0]->price}}" size="18" autocomplete="off">
                                </p>
                                <p>
                                    <label>Type</label>
                                    <input type="text"  name="txt_type"  class="inputbox" value="{{$product[0]->type}}" size="18" autocomplete="off">
                                </p>
                                <p>
                                    <label>Description</label><br>
                                    <div class="texta">
                                        <textarea name="txt_description">{{$product[0]->description}}</textarea>
                                    </div>
                                </p>
                                <div>
                                    <input type="hidden" value="{{$product[0]->id}}" name="id">
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                    <input type="submit" name="Submit" class="button" value="Edit"><div class="clear"></div>
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