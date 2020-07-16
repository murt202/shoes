@include('layout/header')
@include('layout/header-nav')
<div class="alert-warning text-center">{{Session::get("message")}}</div>
<div class="shop_top">
        @if(count($products) > 0)
            <?php $cnt = 0 ?>
            @for($i = 0; $i < (count($products)/4); $i++)
            <div class="container">
                @for($j = 0; $j < 4 && $cnt < count($products); $j++ )
                    <div class="col-md-3 shop_box">
                        <img src="{{asset('images/'.$products[$cnt]->image)}}" class="img-responsive" alt="">
                        <div class="shop_desc">
                            <p>{{$products[$cnt]->name}}</p>
                            <p>{{$products[$cnt]->description}}</p>
                            <span class="actual">Rs {{$products[$cnt]->price}}</span><br>
                            <ul class="buttons">
                                <li class="cart">
                                    <form action="{{URL::route('product')}}" method="get">
                                        <input type="hidden" name="pid" value="{{$products[$cnt]->id}}">
                                        <input type="submit" class="btn-black" value="View">
                                    </form>
                                </li>
                                <div class="clear"></div>
                            </ul>
                        </div>
                    </div>
                    <?php $cnt++ ?>
                @endfor
            </div>
            @endfor
        @endif
</div>
@include('layout/footer')

