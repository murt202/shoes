@include("layout/header")
<section class="vbox">
    @include("layout/header-nav")
    <section>
        <section class="hbox stretch">
            @include("layout/side-nav")
            <section id="content" class="vbox">
                <section class="scrollable padder">
                    <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                        <li>Hello this dashboard page</li>
                    </ul>
                    <section class="panel">
                        <div class="">
                            <div class="col-sm-6 col-md-3 padder-v b-r b-light">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-info"></i>
                      <i class="fa fa-male fa-stack-1x text-white"></i>
                    </span>
                                <a class="clear" href="#">
                                    <span class="h3 block m-t-xs"><strong>{{$users}}</strong></span>
                                    <small class="text-muted text-uc">Count</small>
                                </a>
                            </div>

                            {{Session::get("message")}}

                            <a class="btn btn-default pull-right" href="{{URL::route("show-register-page")}}">Add New
                                User</a> <br>

                            <div class="clearfix"></div>
                            <table class="table table-striped b-t b-light text-sm">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($usersList as $d)
                                    <tr>
                                        <td>{{$d["id"]}}</td>
                                        <td>{{$d["username"]}}</td>
                                        <td>
                                            <form method="post" action="{{URL::route("delete-user")}}">
                                                {{--<input type="submit" value="Delete">--}}
                                                <button style="background: none;" class="no-border">
                                                    <i class="fa fa-times" style="font-size: 16px"></i>
                                                </button>
                                                <input type="hidden" name="txt_id" value="{{$d["id"]}}">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </section>

                </section>
            </section>
        </section>
    </section>
</section>
@include("layout/footer")