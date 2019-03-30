@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-home">
                <div class="card-header">Agenda: Eventos por venir</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img class="img-fluid" src="{{ asset('/img/Yoga.jpeg') }}"/>
                </div>
            </div>
            <div class="card card-home">
                <div class="card-header">Agenda: Eventos pasados</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img class="img-fluid" src="{{ asset('/img/Agenda.jpeg') }}"/>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection