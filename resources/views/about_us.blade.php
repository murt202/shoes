@include('layout/header')
@include('layout/header-nav')
<div class="main">
    <div class="content-top">
        <h2>We Sell Quality Products</h2>
    </div>
</div>
<div class="content-bottom">
    <div class="container">
        <div class="row content_bottom-text">
            <div class="col-md-7">
                <h3>Our Story</h3>
                <p class="m_1">We started of as three college students who had an idea of creating
                    a shoe brand who is know for it's quality. Our first few customers were our friends
                    and then from there we took the high road. From that day on we have strived to live
                    up to the expectations. </p>
            </div>
        </div>
    </div>
</div>
<div class="features">
    <div class="container">
        <h3 class="m_3">Founders</h3>
        <div class="space"></div>
        <div class="col-md-4 text-center">
            <img src="{{asset("images/founder1_s.jpg")}}" class="img_round">
            <div class="space"></div>
            <h3>Wasim Shaikh</h3>
            <div class="space"></div>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{asset("images/founder2_s.jpg")}}" class="img_round">
            <div class="space"></div>
            <h3>Murtaza Rajagara</h3>
            <div class="space"></div>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{asset("images/founder3.jpg")}}" class="img_round">
            <div class="space"></div>
            <h3>Ashwin Singh</h3>
            <div class="space"></div>
        </div>
    </div>
</div>
@include("layout/footer")