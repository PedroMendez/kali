@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="w-100">
            <form method="POST" action="/calendars/{{ $calendar->id }}">
                @method('PATCH')
                @csrf
                <div class="form-group form-inline">                                
                    <label class="col-md-4" for="campo1">Nivel de energía</label>
                    <input                            
                        type="text" 
                        name="campo11" 
                        class="col-md-6 mr-3 form-control {{ $errors->has('campo11') ? 'alert-danger' : '' }}" 
                        id="campo11" 
                        aria-describedby="campo11" 
                        value="{{ $calendar->campo11 }}">                                                        
                </div>

                <div class="form-group form-inline">                
                    <label class="col-md-4" for="campo2">Coordinación física</label>
                    <input 
                        type="text" 
                        name="campo21" 
                        class="col-md-6 mr-3 form-control {{ $errors->has('campo21') ? 'alert-danger' : '' }}" 
                        id="campo21" 
                        aria-describedby="campo21" 
                        value="{{ $calendar->campo21 }}">                          
                </div>

                <div class="form-group form-inline">
                    <label class="col-md-4" for="campo3">Nivel de concentración</label>
                    <input 
                        type="text" 
                        name="campo31" 
                        class="col-md-6 mr-3 form-control {{ $errors->has('campo31') ? 'alert-danger' : '' }}" 
                        id="campo31" 
                        aria-describedby="campo31" 
                        value="{{ $calendar->campo31 }}">
                </div>

                <div class="form-group form-inline">
                    <label class="col-md-4" for="campo4">Conexión con los demás</label>
                    <input 
                        type="text" 
                        name="campo41" 
                        class="col-md-6 mr-3 form-control {{ $errors->has('campo41') ? 'alert-danger' : '' }}" 
                        id="campo41" 
                        aria-describedby="campo41" 
                        value="{{ $calendar->campo41 }}">
                </div>

                <div class="form-group form-inline">
                    <label class="col-md-4" for="campo5">Más o menos intuitiva/o</label>
                    <input 
                        type="text" 
                        name="campo51" 
                        class="col-md-6 mr-3 form-control {{ $errors->has('campo51') ? 'alert-danger' : '' }}" 
                        id="campo51" 
                        aria-describedby="campo51"
                        value="{{ $calendar->campo51 }}"> 
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