@include('layout/header')
@include('layout/header-nav')
<div class="shop_top">
    <div class="container">
        <div class="container-fluid text-center">
            <h3 class="title">Your Order has been placed</h3>
            <p class="m_8">Here are the details of your order</p>
        </div>
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
                    @for($i = 0; $i < count($cart); $i++)
                        <tr>
                            <td>{{$cart[$i]->name}}</td>
                            <td>Rs {{$cart[$i]->price}}</td>
                            <td>{{$cart[$i]->quantity}}</td>
                            <td>Rs {{($cart[$i]->price)*$cart[$i]->quantity}}</td>
                        </tr>
                    @endfor
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Total:</th>
                        <th>Rs {{$totalCost}}</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Tax 5%:</th>
                        <th>Rs {{($totalCost * 0.05)}}</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Amount Payable:</th>
                        <th>Rs {{($totalCost + $totalCost * 0.05)}}</th>
                        <th></th>
                    </tr>
                    </tbody>
                </table>
            </div>
    </div>
</div>
@include("layout/footer")