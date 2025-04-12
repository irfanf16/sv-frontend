@extends('layouts.master')
@section("page-class" , "register")
@section('css')
<link rel="stylesheet" href="{{ asset('public/js/file-pond/filepond.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/js/file-pond/filepond-plugin-image-preview.min.css')}}">
@endsection
@section('js')
<!--    drag and drop image files links -->
<script src="{{asset('public/js/file-pond/filepond-plugin-file-encode.min.js')}}"></script>
<script src="{{asset('public/js/file-pond/filepond-plugin-file-validate-type.min.js')}}"></script>
<script src="{{asset('public/js/file-pond/filepond-plugin-image-exif-orientation.min.js')}}"></script>
<script src="{{asset('public/js/file-pond/filepond-plugin-image-crop.min.js')}}"></script>
<script src="{{asset('public/js/file-pond/filepond-plugin-image-resize.min.js')}}"></script>
<script src="{{asset('public/js/file-pond/filepond-plugin-image-transform.min.js')}}"></script>
<script src="{{asset('public/js/file-pond/filepond-plugin-image-preview.min.js')}}"></script>
<script src="{{asset('public/js/file-pond/filepond.min.js')}}"></script>
<script src="{{ asset('public/js/register.js') }}"></script>
@endsection
@section('content')
<div class="container-fulid">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="">
                    <img src="{{ asset('public/images/Group-17.png') }}" class="img-fluid" alt=""/>
                </div>
            </div>
            <div class="col-sm-5">
                <h1 class="font-weight-bold mb-3 mt-2 font-fmaily">Create Your Account</h1>
                <form id="register_form" method="POST" action="{{url('register')}}" class="input-form-width" validate>
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }} ">
                        <label class="m-0 small font-fmaily" for="first_name">First Name*</label>
                        <input type="text" id="first_name" name="first_name" class="form-control form-input font-fmaily font-size13" {{ (isset($user_company->user->first_name) && $user_company->user->first_name != '') ? 'readonly' : '' }} value="{{ old('first_name', isset($user_company->user->first_name) ? $user_company->user->first_name : '' ) }}" placeholder="First Name">
                        @if ($errors->has('first_name'))
                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }} ">
                        <label class="m-0 small font-fmaily" for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control form-input font-fmaily font-size13" {{ (isset($user_company->user->last_name) && $user_company->user->last_name != '') ? 'readonly' : '' }} value="{{ old('last_name', isset($user_company->user->last_name) ? $user_company->user->last_name : '' ) }}" placeholder="Last Name">
                        @if ($errors->has('last_name'))
                        <span class="text-danger">{{ $errors->first('last_name') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('company_name') ? ' has-error' : '' }} ">
                        <label class="m-0 small font-fmaily" for="company_name">Company name*</label>
                        <input type="text" id="company_name" name="company_name" class="form-control form-input font-fmaily font-size13" value="{{ old('company_name') }}" placeholder="Company Name">
                        @if ($errors->has('company_name'))
                        <span class="text-danger">{{ $errors->first('company_name') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('company_mask') ? ' has-error' : '' }} ">
                        <label class="m-0 small font-fmaily" for="company_mask">Company Mask*</label>
                        <input type="text" id="company_mask" name="company_mask" maxlength="10" pattern="[0-9A-Za-z\-\_]" class="form-control form-input font-fmaily font-size13" value="{{ old('company_mask') }}" placeholder="CT-0001">
                        @if ($errors->has('company_mask'))
                        <span class="text-danger">{{ $errors->first('company_mask') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('logo') ? ' has-error' : '' }} ">
                        <label class="m-0 small font-fmaily" for="company_mask">Company Logo</label>
                        <div class="user-new-company-Logo">
                            <div type="file" class="filepond upload-user-company-logo position-relative" name="logo" accept="image/png, image/jpeg, image/gif">
                            </div>
                        </div>
                        @if ($errors->has('logo'))
                        <span class="text-danger">{{ $errors->first('logo') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('') ? ' has-error' : '' }} ">
                        <label class="m-0 small font-fmaily" for="no_of_employee">No. of employees</label>
                        <input type="number" id="no_of_employee" name="no_of_employee" class="form-control form-input font-fmaily font-size13" value="{{isset($no_of_employee) ? $no_of_employee : old('no_of_employee')}}" placeholder="No. of employees">
                        @if ($errors->has('no_of_employee'))
                        <span class="text-danger">{!! $errors->first('no_of_employee') !!}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} ">
                        <label class="m-0 small font-fmaily" for="email">Email*</label>
                        <input type="text" id="email" name="email" class="form-control form-input font-fmaily font-size13" value="{{isset($email) ? $email : old('email')}}" {{ (isset($email) && $email != '') ? 'readonly' : ''}} placeholder="Email">
                        @if ($errors->has('email'))
                        <span class="text-danger">{!! $errors->first('email') !!}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }} ">
                        <label class="m-0 small font-fmaily" for="phone">Phone*</label>
                        <input type="tel" id="phone" {{ (isset($user_company->user->phone) && $user_company->user->phone != '') ? 'readonly' : '' }} name="phone" class="form-control form-input font-fmaily font-size13" value="{{ old('phone', isset($user_company->user->phone) ? $user_company->user->phone : '') }}" placeholder="Phone">
                        @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} ">
                        <label class="m-0 small font-fmaily" for="password">Password*</label>
                        <input type="password" id="password" name="password" class="form-control form-input font-fmaily font-size13" value="{{ old('password') }}" placeholder="Password">
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} ">
                        <label class="m-0 small font-fmaily" for="password_confirmation">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-input font-fmaily font-size13" value="{{ old('password_confirmation') }}" placeholder="Retype password">
                        @if ($errors->has('password_confirmation'))
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>



                    <button type="submit" class="btn w-100 blue-btn" id="registration-submit">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection