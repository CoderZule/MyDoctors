@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">My prescription</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Disease</th>
                                <th scope="col">Symptoms</th>
                                <th scope="col">Medicine</th>
                                <th scope="col">Procedure to use medicine</th>
                                <th scope="col">Doctor feedback</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse($perscriptions as $perscription)
                            <tr>
                                <td>{{$perscription->date}}</td>
                                <td>{{$perscription->doctor->name}}</td>
                                <td>{{$perscription->name_of_disease}}</td>
                                <td>{{$perscription->symptoms}}</td>
                                <td>{{$perscription->medicine}}</td>
                                <td>{{$perscription->procedure_to_use_medicine}}</td>
                                <td>{{$perscription->feedback}}</td>
                            </tr>
                            @empty
                            <td>You have no prescription </td>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection