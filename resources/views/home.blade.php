@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <img src="{{ asset($user->photo) }}" alt="" height="200" width="200">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Name: {{ $user->name }}</li>
                        <li class="list-group-item">Email: {{ $user->email }}</li>
                        <li class="list-group-item">Address: {{ $user->address }}</li>
                        <li class="list-group-item">Phone Number: {{ $user->phone_number }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
