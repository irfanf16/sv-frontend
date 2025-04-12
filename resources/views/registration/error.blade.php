@extends('layouts.master')
@section("page-class" , "error")
@section('content')
<div class="container-fulid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="p-5">
                    @if(isset($message)))
                    <p>{{ $message }}</p>
                    @else
                    <p>An error accured during sending verification email.</p>
                    @endif
                </div>


            </div>
        </div>
    </div>
</div>
@endsection