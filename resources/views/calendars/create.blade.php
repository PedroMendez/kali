@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div>
            <form method="POST" action="/calendars">
                @csrf

                <input 
                    type="hidden" 
                    name="user_id" 
                    id="user_id" 
                    aria-describedby="user_id" 
                    value="{{ Auth::user()->id }}">  

                <div class="form-group form-inline justify-content-center">
                    <label class="col-md-2" for="campo1">Nivel de energía</label>
                    @for ($i = 1; $i < 8; $i++)

                    <input                            
                        type="text" 
                        name="campo1{{$i}}"  
                        id="campo1{{$i}}" 
                        class="col-md-1 mr-1 form-control {{ $errors->has('campo1'.strval($i)) ? 'alert-danger' : '' }}"
                        aria-describedby="campo{{$i}}"
                        required>               
                    @endfor

                </div>
                 <div class="form-group form-inline justify-content-center">
                    <label class="col-md-2" for="campo2">Coordinación física</label>
                    @for ($i = 1; $i < 8; $i++)

                    <input                            
                        type="text" 
                        name="campo2{{$i}}"  
                        id="campo2{{$i}}" 
                        class="col-md-1 mr-1 form-control {{ $errors->has('campo2'.strval($i)) ? 'alert-danger' : '' }}"
                        aria-describedby="campo2{{$i}}"
                        required>               
                    @endfor

                </div>
                <div class="form-group form-inline justify-content-center">
                    <label class="col-md-2" for="campo3">Nivel de concentración</label>
                    @for ($i = 1; $i < 8; $i++)

                    <input                            
                        type="text" 
                        name="campo3{{$i}}"  
                        id="campo3{{$i}}" 
                        class="col-md-1 mr-1 form-control {{ $errors->has('campo3'.strval($i)) ? 'alert-danger' : '' }}"
                        aria-describedby="campo3{{$i}}"
                        required>               
                    @endfor

                </div>
                <div class="form-group form-inline justify-content-center">
                    <label class="col-md-2" for="campo4">Conexión con los demás</label>
                    @for ($i = 1; $i < 8; $i++)

                    <input                            
                        type="text" 
                        name="campo4{{$i}}"  
                        id="campo4{{$i}}" 
                        class="col-md-1 mr-1 form-control {{ $errors->has('campo4'.strval($i)) ? 'alert-danger' : '' }}"
                        aria-describedby="campo4{{$i}}"
                        required>               
                    @endfor

                </div>    
                <div class="form-group form-inline justify-content-center">
                    <label class="col-md-2" for="campo5">Más o menos intuitiva/o</label>
                    @for ($i = 1; $i < 8; $i++)

                    <input                            
                        type="text" 
                        name="campo5{{$i}}"  
                        id="campo5{{$i}}" 
                        class="col-md-1 mr-1 form-control {{ $errors->has('campo5'.strval($i)) ? 'alert-danger' : '' }}"
                        aria-describedby="campo5{{$i}}"
                        required>               
                    @endfor

                </div>                                                                           
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                @include('layouts.errors')

            </form>
        </div>
    </div>
</div>            
@endsection