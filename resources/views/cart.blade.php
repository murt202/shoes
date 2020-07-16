@include('layout/header')
@include('layout/header-nav')
<div class="alert-warning text-center">{{Session::get("message")}}</div>
<div class="shop_top">
    <div class="container">
        @if(count($list) <= 0)
            <div class="container-fluid text-center">
                <h3 class="title">Shopping cart is empty</h3>
                <p class="m_8">You have no items in your shopping cart.<br>Click
                    <a href="{{URL::route('home')}}"> here</a> to continue shopping</p>
            </div>
        @elseif(count($list) > 0)
            <h3 class="title text-center">Your Cart</h3>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quatity</th>
                        <th>Cost</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i = 0; $i < count($list); $i++)
                        <tr>
                            <td>{{$list[$i]->name}}</td>
                            <td>Rs {{$list[$i]->price}}</td>
                            <td>{{$list[$i]->quantity}}</td>
                            <td>Rs {{($list[$i]->price)*$list[$i]->quantity}}</td>
                            <td>
                                <form method="post" action="{{URL::route('delete-product-cart')}}">
                                    <input type="hidden" value="{{$list[$i]->id}}" name="id">
                                    <input type="hidden" value="{{csrf_token()}}" name="_token">
                                    <button class="btn-noborder" type="submit"> <span class="glyphicon glyphicon-remove"></span></button>
                                </form>
                            </td>
                        </tr>
                    @endfor
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Total:</th>
                        <th>Rs {{$totalCost}}</th>
                        <th></th>
                    </tr>
                    </tbody>
                </table>
            </div>
            <form method="post" action="{{URL::route("checkout")}}">
                <input type="submit" class="btn-black" value="Checkout">
                <input type="hidden" value="{{csrf_token()}}" name="_token">
            </form>
        @endif
    </div>
</div>
@include("layout/footer")