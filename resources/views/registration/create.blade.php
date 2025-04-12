@extends('layouts.master')
@section("page-class" , "register")

@section('content')

<!----========Section  Start Registration form============================-->
<section class="registration-form">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 ">
                <div class="">
                    <img src="{{ asset('public/images/Group 17.png')}}" class="registrationimg">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <h1 class="formheading">Create Your Account</h1>
                <form id="register_form" method="POST" action="{{url('register')}}" class="input-form-width">
                    {{ csrf_field() }}
                    <div class="row formtext">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="first_name">First Name <span class="required">*</span></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Fisrt name*" required>
                                @if ($errors->has('first_name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }} ">
                                <label class="form-label" for="last_name">Last Name<span style="color:red;">*</i></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last name">
                                @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="super">
                                <div class="form-group {{ $errors->has('company_name') ? ' has-error' : '' }} ">
                                    <label class="form-label" for="company_name">Company Name<span style="color:red;">*</i></label>
                                    <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Company's Full Name*" required>
                                    <div class="supertext" id="images1">
                                        <p>Write your Company initials e.g CrecenTech USA LLC. AS “CTL”.
                                            This is an non-editable field</p>
                                    </div>
                                    @if ($errors->has('last_name'))
                                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="form-group {{ $errors->has('company_initial') ? ' has-error' : '' }} ">
                                        <label class="form-label" for="company_initial">Company Initials<span style="color:red;">*</i></label>
                                        <input type="text" class="form-control" min="2" max="10" name="company_initial" id="company_initial" placeholder="AGL*" pattern="[a-zA-Z]+" required>
                                        @if ($errors->has('company_initial'))
                                        <span class="text-danger">{{ $errors->first('company_initial') }}</span>
                                        @endif
                                    </div>

                                </div>


                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('no_of_employee') ? ' has-error' : '' }} ">
                                <label class="form-label" for="no_of_employee">No. of Employees<span style="color:red;">*</i></label>
                                <input type="number" name="no_of_employee" min="1" class="form-control" id="no_of_employee" placeholder="Minimum 1*" required>
                                @if ($errors->has('no_of_employee'))
                                <span class="text-danger">{!! $errors->first('no_of_employee') !!}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} ">
                                <label class="form-label" for="password">Password<span style="color:red;">*</i></label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password*" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }} ">
                                <label class="form-label" for="password_confirmation">Confirm Password<span style="color:red;">*</i></label>
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Retype Password*" required>
                                @if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="blue-btn btn" id="registration-submit">Sign Up</button>
                            <div class="text-danger display_error"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
