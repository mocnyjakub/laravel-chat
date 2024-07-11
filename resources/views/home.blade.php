@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (Auth::check())
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                @else
                    <div class="card">
                        <div class="card-header">{{ __('Welcome') }}</div>

                        <div class="card-body">
                            {{ __('Please login to access the dashboard.') }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
