@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form method="POST" action="/profiles/{{ $profile->id }}">
                @method('PATCH')
                @csrf

                    <div class="form-group">
                        <label for="interests">Intereses</label>
                        <input 
                            type="text" 
                            name="interests" 
                            class="form-control alert {{ $errors->has('interests') ? 'alert-danger' : '' }}" 
                            id="interests" 
                            aria-describedby="interests" 
                            value="{{ $profile->interests }}">
                        <small id="interests" class="form-text text-muted">Nunca compartiremos esta información con nadie más.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Teléfono</label>
                        <input 
                            type="text" 
                            name="phone" 
                            class="form-control alert {{ $errors->has('phone') ? 'alert-danger' : '' }}" 
                            id="phone" 
                            value="{{ $profile->phone }}">
                    </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                @include('layouts.errors')

            </form>
            <form method="POST" action="/profiles/{{ $profile->id }}">
                @method('DELETE')
                @csrf
                    <div class="text-right">
                        <button type="submit" class="btn btn-secondary mt-3">Eliminar</button>
                    </div>
            </form>            
        </div>
    </div>
</div>            
@endsection