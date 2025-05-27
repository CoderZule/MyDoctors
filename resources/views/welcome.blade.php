@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

        <div class="col-sm-6">
            <img src="{{secure_asset('images\vector.jpg')}}" class="img-fluid" style=" width:100%;">

        </div>

        <div class="col-sm-6">
            <h2 style="color:#444; font-family: Arial,sans-serif;">Create an account and quickly make an appointment with your doctor!</h2>
            <p style="font-size: large;line-height: 20px;color: #777;"> Select your doctor, choose the date and time of your appointment and receive your confirmation email. It's that simple ! </p>

        </div>

    </div>

</div>
<hr>

<cover-component></cover-component>
<hr>

<hr>
<find-doctor></find-doctor>
<!--date picker component-->

</div>
@endsection