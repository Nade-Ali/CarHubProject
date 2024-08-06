@extends("frontend.layouts.main")
@section("main-container")

<br><br><br><br><br><br><br><br><br>

<div class="container">
    <div class="row">
        <div class="account-area fix">
        <h1 class="form-title text-center">My Account</h1>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="form-area">
                    <div class="form-fields">
                        <h2>Register</h2>
                        <form action="#" method="post">
                            @csrf
                             <p>
                                <label>Name <span class="required">*</span></label>
                                <input type="text" name="name">
                                @if ($errors->has('name'))
                                <span class="text-danger">
                                    {{$errors->first('name')}}
                                </span>
                            @endif
                            </p>
                            <p>
                                <label>Email address <span class="required">*</span></label>
                                <input type="text" name="email">
                                @if ($errors->has('email'))
                                <span class="text-danger">
                                    {{$errors->first('email')}}
                                </span>
                            @endif
                            </p>
                            <p>
                                <label>Password <span class="required">*</span></label>
                                <input type="password" name="password">
                                @if ($errors->has('password'))
                                <span class="text-danger">
                                    {{$errors->first('password')}}
                                </span>
                            @endif
                            </p>
                            <p>
                                <label>Confirm Password <span class="required">*</span></label>
                                <input type="password" name="confirmpassword">
                                @if ($errors->has('confirmpassword'))
                                <span class="text-danger">
                                    {{$errors->first('confirmpassword')}}
                                </span>
                            @endif
                            </p>
                            <div class="form-action fix text-center">
                                <input type="submit" value="Register">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br>
@endsection

