@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card"  style="width: 18rem;">

                @if(!$picture)
                    <img class="card-img-top" src="{{ asset('img/tree-of-life-butterflies.png') }}" alt="Card image">  
                @else
                
                    @if($picture->image1)
                        <img class="card-img-top" src="{{ url('https://s3.us-east-2.amazonaws.com/kaliholistico/'.$picture->image1) }}" alt="Card image"> 
                    @else 
                        <img class="card-img-top" src="{{ asset('img/tree-of-life-butterflies.png') }}" alt="Card image">
                    @endif                            
                @endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="card-text">                    
                        <form method="POST" action="/pictures" enctype="multipart/form-data">
                            @csrf

                                <div class="form-group">
                                    <label for="picture">Cambiar Foto</label>
                                    <input                            
                                        type="hidden" 
                                        name="profile_id" 
                                        id="profile_id" 
                                        aria-describedby="profile_id"
                                        value="{{ $profile->id }}">
                                    <input                            
                                        type="file" 
                                        name="picture" 
                                        id="avatar" 
                                        aria-describedby="avatar" 
                                        class="{{ $errors->has('picture') ? 'alert-danger' : '' }}"
                                        placeholder="Ingrese su Foto"
                                        required>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Guardar Foto</button>
                                </div>
                            @include('layouts.errors')

                        </form> 
                    </p>
                </div>
            </div>
        </div> 
        <div class="col-md-4">
            <div class="card"  style="width: 18rem;">

                @if(!$picture)
                    <img class="card-img-top" src="{{ asset('img/tree-of-life-butterflies.png') }}" alt="Card image">  
                @else
               
                    @if($picture->image2)
                        <img class="card-img-top" src="{{ url('https://s3.us-east-2.amazonaws.com/kaliholistico/'.$picture->image2) }}" alt="Card image"> 
                    @else 
                        <img class="card-img-top" src="{{ asset('img/tree-of-life-butterflies.png') }}" alt="Card image">
                    @endif                            
                @endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="card-text">                    
                        <form method="POST" action="/pictures" enctype="multipart/form-data">
                            @csrf

                                <div class="form-group">
                                    <label for="picture">Cambiar Foto</label>
                                    <input                            
                                        type="hidden" 
                                        name="profile_id" 
                                        id="profile_id" 
                                        aria-describedby="profile_id"
                                        value="{{ $profile->id }}">
                                    <input                            
                                        type="file" 
                                        name="picture" 
                                        id="avatar" 
                                        aria-describedby="avatar" 
                                        class="{{ $errors->has('picture') ? 'alert-danger' : '' }}"
                                        placeholder="Ingrese su Foto"
                                        required>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Guardar Foto</button>
                                </div>
                            @include('layouts.errors')

                        </form> 
                    </p>
                </div>
            </div>
        </div>              
        <div class="col-md-4">
            <div class="card"  style="width: 18rem;">

                @if(!$picture)
                    <img class="card-img-top" src="{{ asset('img/tree-of-life-butterflies.png') }}" alt="Card image">  
                @else
                
                    @if($picture->image3)
                        <img class="card-img-top" src="{{ url('https://s3.us-east-2.amazonaws.com/kaliholistico/'.$picture->image3) }}" alt="Card image"> 
                    @else 
                        <img class="card-img-top" src="{{ asset('img/tree-of-life-butterflies.png') }}" alt="Card image">
                    @endif                            
                @endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="card-text">                    
                        <form method="POST" action="/pictures" enctype="multipart/form-data">
                            @csrf

                                <div class="form-group">
                                    <label for="picture">Cambiar Foto</label>
                                    <input                            
                                        type="hidden" 
                                        name="profile_id" 
                                        id="profile_id" 
                                        aria-describedby="profile_id"
                                        value="{{ $profile->id }}">
                                    <input                            
                                        type="file" 
                                        name="picture" 
                                        id="avatar" 
                                        aria-describedby="avatar" 
                                        class="{{ $errors->has('picture') ? 'alert-danger' : '' }}"
                                        placeholder="Ingrese su Foto"
                                        required>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Guardar Foto</button>
                                </div>
                            @include('layouts.errors')

                        </form> 
                    </p>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection
