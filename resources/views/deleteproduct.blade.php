@include('layout/header')
@include('layout/header-nav')
<div class="alert-warning text-center">{{Session::get("message")}}</div>
<div class="shop_top">
    <div class="container">
        <table class="table">
        <thead>
        <h3 class="title text-center">Products</h3>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Type</th>
            <th>Description</th>
            <th>Image</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($productList as $d)
            <tr>
                <td>{{$d["id"]}}</td>
                <td>{{$d["name"]}}</td>
                <td>{{$d["price"]}}</td>
                <td>{{$d["type"]}}</td>
                <td>{{$d["description"]}}</td>
                <td><img src="{{asset("/images/".$d["image"])}}" height="60px" width="80px"></td>
                <td>
                    <form method="post" action="{{URL::route("delete-product")}}">
                        <button class="btn-noborder" type="submit"> <span class="glyphicon glyphicon-remove"></span></button>
                        <input type="hidden" name="txt_id" value="{{$d["id"]}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </form>
                </td>
                <td>
                    <form method="post" action="{{URL::route("edit-product")}}">
                        <button class="btn-noborder" type="submit"> <span class="glyphicon glyphicon-pencil"></span></button>
                        <input type="hidden" name="txt_id" value="{{$d["id"]}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>
@include('layout/footer')