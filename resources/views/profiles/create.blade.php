@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form method="POST" action="/profiles">
                @csrf
                
                    <input 
                        type="hidden" 
                        name="user_id"
                        id="user_id" 
                        aria-describedby="user_id" 
                        value="{{ Auth::user()->id }}">              
                    <div class="form-group">
                        <label for="interests">Intereses</label>
                        <textarea
                            name="interests" 
                            class="form-control alert {{ $errors->has('interests') ? 'alert-danger' : '' }}" 
                            id="interests" 
                            aria-describedby="interests" 
                            placeholder="Ingrese sus Intereses">
                        </textarea> 
                        <small id="interests" class="form-text text-muted">Nunca compartiremos esta información con nadie más.</small>
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input                            
                            type="text" 
                            name="phone" 
                            class="form-control alert {{ $errors->has('phone') ? 'alert-danger' : '' }}" 
                            id="phone" 
                            aria-describedby="phone" 
                            placeholder="Ingrese su Teléfono">
                    </div>
                    <div class="form-group">
                        <label for="image">Imagen</label>
                        <input 
                            type="text" 
                            name="image" 
                            class="form-control alert {{ $errors->has('image') ? 'alert-danger' : '' }}" 
                            id="image" 
                            placeholder="Ingrese su Imagen">
                    </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
                @include('layouts.errors')

            </form>           
        </div>
    </div>
</div>            
@endsection