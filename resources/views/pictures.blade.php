@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card"  style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/tree-of-life-butterflies.png') }}" alt="Card image">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="card-text">Información sobre el encuentro.</p>
                </div>
            </div>
        </div> 
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/IMG_4501.jpg') }}" alt="Card image">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

    				<p class="card-text">Información sobre el encuentro.</p>
                </div>
            </div>
        </div>               
        <div class="col-md-4">
            <div class="card card-home"  style="width: 18rem;">
                <div class="card-header" style="height: 18rem;">Más Fotos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					<p class="card-text">Información sobre el encuentro.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
