@include('layout/header')
@include('layout/header-nav')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="alert-warning text-center" id="alert">{{Session::get("message")}}</div>
<div class="shop_top">
    @if(count($product) > 0)
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('images/'.$product[0]->image)}}" style="display: inline; width: 100%;">
                </div>
                <div class="col-md-8">
                    <h1>{{$product[0]->name}}</h1>
                    <p>{{$product[0]->description}}</p>
                    <div class="space"></div>
                    <h3>Quantity:</h3>
                    <select id="quant" style="width:60px;">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                    <div class="space"></div>
                    <h3>Price: {{$product[0]->price}}</h3>
                    <div class="space"></div>
                    @if(Session::has('user_id'))
                        <button class="btn-black-left" onclick="addToCart({{$product[0]->id}})">Add to Cart</button>
                    @else
                        <p>Want to buy the product? But first you need to login</p><br>
                        <a href="{{URL::route('login')}}" class="btn-black-left" style="text-decoration: none" >Login</a>
                    @endif
                </div>
            </div>
            <div class="space"></div>
        </div>
    @endif
</div>
<script src="{{asset('js/cart.js')}}"></script>
@include("layout/footer")