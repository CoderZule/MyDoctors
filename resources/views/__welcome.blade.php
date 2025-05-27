@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="/banner/ondoc.jpg" class="img-fluid" style="border:1px solid #ccc; width:80%;">

        </div>
        <div class="col-sm-6">
            <h2>Create an account and quickly make an appointment with your doctor!</h2>
            <p> Select your doctor, choose the date and time of your appointment and receive your confirmation email. It's that simple ! </p>
            <div class="mt-5">
                <a href="{{url('/register')}}"> <button class="btn btn-success">Register as a patient </button></a>
                <a href="{{url('/login')}}"> <button class="btn btn-secondary">Login</button></a>
            </div>
        </div>

    </div>
    <hr>
    <section class="">
        <form action="{{url('/')}}" method="get">
            <div class="card">
                <div class="card-header">Find Doctors</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="datepicker" name="date">
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-primary">Find doctors</button>
                        </div>

                    </div>
                </div>

            </div>
        </form>

        <div class="card mt-1">
            <div class="card-header"> Doctors available today</div>
            <div class="card-body">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($doctors as $doctor )

                        <tr>
                            <th scope="row">1</th>
                            <td><img src="{{secure_asset('images')}}/{{$doctor->doctor->image}}" width="80" style="border-radius: 50%;">
                            </td>
                            <td>{{$doctor->doctor->name}}</td>
                            <td>{{$doctor->doctor->department}}</td>
                            <td>
                                <a href="{{route('create.appointment',[$doctor->user_id,$doctor->date])}}"> <button class="btn btn-success">Book Appointment</button>
                            </td>
                        </tr>
                        @empty
                        <td>No doctors available today</td>
                        @endforelse


                    </tbody>
                </table>


            </div>

        </div>
</div>
</section>
</div>


@endsection