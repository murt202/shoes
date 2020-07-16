@include("layout/header")
<section class="vbox">
    @include("layout/header-nav")
    <section>
        <section class="hbox stretch">
            @include("layout/side-nav")
            <section id="content">

                <section class="panel">
                    <div class="panel-body">
                        <div class="header h4 text-center">
                            Login Form
                        </div>
                        <div class="form-group col-sm-6">
                            <label>FIrst Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Last Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Age</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Contact Number</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Address</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <button class="btn btn-success pull-right">
                                Submit
                            </button>
                        </div>
                    </div>
                </section>

            </section>
        </section>
    </section>
</section>
@include("layout/footer")