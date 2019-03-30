@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('svg/Calendar.svg') }}" alt="Profile image">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                </div>
            </div>             
            <div class="text-right mt-3">
                <a href="{{ url('/calendars/create') }}" class="btn btn-primary">Agregar Calendario</a>
            </div>            
        </div>
    </div>
</div>
@endsection