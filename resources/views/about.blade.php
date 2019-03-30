@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card card-home">
                <div class="card-header">Mariela Ponce</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Acá debería ir info sobre las facilitadoras.
                </div>
            </div>
        </div>    
        <div class="col-md-4">
            <div class="card card-home">
                <div class="card-header">Nicte</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Acá debería ir info sobre las facilitadoras.
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection