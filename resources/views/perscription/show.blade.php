@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">


                </div>

                <div class="card-body">
                    <p>Date: {{$perscription->date}}</p>
                    <p>Patient: {{$perscription->user->name}}</p>
                    <p>Doctor: {{$perscription->doctor->name}}</p>
                    <p>Disease: {{$perscription->name_of_disease}}</p>
                    <p>Symptoms: {{$perscription->symptoms}}</p>
                    <p>Medicine: {{$perscription->medicine}}</p>
                    <p>Procedure to use medicine: {{$perscription->procedure_to_use_medicine}}</p>
                    <p>Feedback: {{$perscription->feedback}}</p>
                    <p>Doctor signature: {{$perscription->signature}}</p>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection