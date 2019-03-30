@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{ url('https://s3.us-east-2.amazonaws.com/kaliholistico/'.$profile->image) }}" alt="Profile image">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    Nombre: {{ $user->name }} 

                    <form method="POST" action="/avatars" enctype="multipart/form-data">
                        @csrf

                            <div class="form-group">
                                <label for="avatar">Cambiar Avatar</label>
                                <input                            
                                    type="hidden" 
                                    name="profile_id" 
                                    id="profile_id" 
                                    aria-describedby="profile_id"
                                    value="{{ $profile->id }}">
                                <input                            
                                    type="file" 
                                    name="avatar" 
                                    id="avatar" 
                                    aria-describedby="avatar" 
                                    class="{{ $errors->has('avatar') ? 'alert-danger' : '' }}"
                                    placeholder="Ingrese su Avatar"
                                    required>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Guardar Avatar</button>
                            </div>
                        @include('layouts.errors')

                    </form>    
                </div>
            </div>
        </div>               
        <div class="col-md-8">
            <div class="card card-home" >
                <div class="card-header">Mis datos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="card-text">Intereses: {{ $profile->interests }}</p>
                    <p class="card-text">Teléfono: {{ $profile->phone }}</p>
                    <p class="card-text">Imágen: {{ $profile->image }}</p>
                    <p class="card-text">Rol: {{ $user->role }}</p>                    
                    <div class="text-right">
                        <a href="{{ url('/profiles/'.$profile->id.'/edit') }}" class="btn btn-primary">Modificar Datos</a>
                    </div>  
                </div>
            </div>         
        </div>
    </div>
</div>
@endsection