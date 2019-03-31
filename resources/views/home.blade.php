@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-home">
                <div class="card-header">Mi Calendario Lunar</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Acá vas a encontrar tu calendario lunar personalizado.
                    @if(Auth::user()->calendar_id)

                    <div class="text-right">
                        <a class="btn btn-primary" href="{{ url('calendars/'. Auth::user()->calendar_id) }}">
                            {{ __('Acceder') }}
                        </a>
                    </div>
                    @else

                    <div class="text-right">
                        <a class="btn btn-primary" href="{{ url('calendars') }}">
                            {{ __('Crear Calendario') }} 
                        </a>
                    </div>                                   
                    @endif

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-home">
                <div class="card-header">Mis Lecturas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Acá vas a leer artículos y libros de acuerdo con tus intereses.
                    <div class="text-right">
                        <a href="#" class="btn btn-primary">Acceder</a>
                    </div>                    
                </div>
            </div>
        </div>        
        <div class="col-md-8">
            <div class="card card-home">
                <div class="card-header">Mis Fotos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Acá vas a ver las fotos de los encuentros en los que estuviste.
                    @if(Auth::user()->profile_id)

                    <div class="text-right">
                        <a href="{{ url('/pictures') }}" class="btn btn-primary">
                            Acceder
                        </a>
                    </div>
                    @else

                    <div class="text-right">
                        <a class="btn btn-primary" href="{{ url('profiles') }}">
                            Creá tu perfil para acceder
                        </a>
                    </div>                                   
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
