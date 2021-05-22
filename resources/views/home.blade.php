@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="justify-content: center;">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    Welcome
                    {{Auth()->user()->name}} !
                </div>
            </div>
        </div>
    </div>
</div>

<exemple></exemple>
@endsection