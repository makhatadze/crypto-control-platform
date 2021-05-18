@extends('admin.layout.left-menu')

@section('subhead')
    <title>Users</title>
@endsection

@section('wrapper')
        <!-- Start row-->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h2 class="header-title"> Basic Steps</h2>
                    <div id="example-basic">
                        <h3>Account</h3>
                        <section>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </section>
                        <h3>Profile</h3>
                        <section>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </section>
                        <h3>Hints</h3>
                        <section>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </section>

                        <h3>Finish</h3>
                        <section>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- End row-->


        <!-- Start row-->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h2 class="header-title">  Basic Steps</h2>
                    <form id="example-form" action="#">
                        <div>
                            <h3>Account</h3>
                            <section>
                                <div class="form-group clearfix">
                                    <label for="userName" class="col-md-2">User name *</label>
                                    <div class="col-md-10">
                                        <input id="userName" name="userName" type="text" class="required form-control">
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label for="password"  class="col-md-2">Password *</label>
                                    <div class="col-md-10">
                                        <input id="password" name="password" type="password" class="required form-control">
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label for="confirm"  class="col-md-2">Confirm Password *</label>
                                    <div class="col-md-10">
                                        <input id="confirm" name="confirm" type="password" class="required form-control">
                                    </div>
                                </div>

                                <p>(*) Mandatory</p>
                            </section>
                            <h3>Profile</h3>
                            <section>
                                <div class="form-group clearfix">
                                    <label for="name" class="col-md-2">First name *</label>
                                    <div class="col-md-10">
                                        <input id="name" name="name" type="text" class="required form-control">
                                    </div>
                                </div>


                                <div class="form-group clearfix">
                                    <label  for="surname" class="col-md-2">Last name *</label>
                                    <div class="col-md-10">
                                        <input id="surname" name="surname" type="text" class="required form-control">
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-md-2" for="email">Email *</label>
                                    <div class="col-md-10">
                                        <input id="email" name="email" type="text" class="required form-control">
                                    </div>
                                </div>


                                <div class="form-group clearfix">
                                    <label class="col-md-2" for="address">Address</label>
                                    <div class="col-md-10">
                                        <input id="address" name="address" type="text" class="form-control">
                                    </div>
                                </div>
                                <p>(*) Mandatory</p>

                            </section>
                            <h3>Hints</h3>
                            <section>
                                <ul>
                                    <li>Foo</li>
                                    <li>Bar</li>
                                    <li>Foobar</li>
                                </ul>
                            </section>
                            <h3>Finish</h3>
                            <section>
                                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                            </section>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End row-->
@endsection
