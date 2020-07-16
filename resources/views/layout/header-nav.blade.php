<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-left">
                    <div class="logo">
                        <a href="{{URL::route('home')}}"><img src="{{asset('template/images/shoes_logo_3.png')}}" id="logo_lg" alt=""/></a>
                        <a href="{{URL::route('home')}}"><img src="{{asset('template/images/shoes_logo_xs.png')}}" id="logo_xs" alt=""/></a>
                    </div>
                    <div class="menu">
                        <a class="toggleMenu" href="#"><img src="{{asset('template/images/nav.png')}}" alt="" /></a>
                        <ul class="nav" id="nav">
                            <li><a href="{{URL::route("home-men")}}">Men</a></li>
                            <li><a href="{{URL::route("home-women")}}">Women</a></li>
                            <li><a href="{{URL::route("about_us")}}">About Us</a></li>
                            @if(Session::get('admin') == true)
                                <li><a href="{{URL::route('add-product')}}">Add Product</a></li>
                                <li><a href="{{URL::route('edit-product')}}">Delete/Edit Product</a></li>
                            @endif
                            <div class="clear"></div>
                        </ul>
                        <script type="text/javascript" src="{{asset('template/js/responsive-nav.js')}}"></script>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="header_right">
                    <!-- start search-->
                    {{--<div class="search-box">
                        <div id="sb-search" class="sb-search">
                            <form>
                                <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search"> </span>
                            </form>
                        </div>
                    </div>
                    <!----search-scripts---->
                    <script src="{{asset('template/js/classie.js')}}"></script>
                    <script src="{{asset('template/js/uisearch.js')}}"></script>
                    <script>
                        new UISearch( document.getElementById( 'sb-search' ) );
                    </script>
                    --}}<!----//search-scripts---->
                    </div>
                    @if(Session::has('user_id'))
                        <a class="active-icon c1" href="{{URL::route('show-cart')}}"></a>
                        <a class="nav-element" href="{{URL::route('logout')}}">Logout</a>
                    @else
                        <a class="nav-element" href="{{URL::route('login')}}">Login</a>
                    @endif
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>
