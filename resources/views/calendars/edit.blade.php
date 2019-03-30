@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div>
            <form method="POST" action="/calendars/{{ $calendar->id }}">
                @method('PATCH')
                @csrf
                                
                <label class="col-md-4" for="campo1">Campo 1</label>
                <div class="form-group form-inline">
                    <input                            
                        type="text" 
                        name="campo11" 
                        class="col-md-3 mr-3 form-control {{ $errors->has('campo11') ? 'alert-danger' : '' }}" 
                        id="campo11" 
                        aria-describedby="campo11" 
                        value="{{ $calendar->campo11 }}">
                    <input                            
                        type="text" 
                        name="campo12" 
                        class="col-md-3 mr-3 form-control {{ $errors->has('campo12') ? 'alert-danger' : '' }}" 
                        id="campo1" 
                        aria-describedby="campo12" 
                        value="{{ $calendar->campo12 }}">
                    <input                            
                        type="text" 
                        name="campo13" 
                        class="col-md-3 mr-3 form-control {{ $errors->has('campo13') ? 'alert-danger' : '' }}" 
                        id="campo13" 
                        aria-describedby="campo13" 
                        value="{{ $calendar->campo13 }}">                                                        
                </div>
                
                <label class="col-md-4" for="campo2">Campo 2</label>
                <div class="form-group form-inline">
                    <input 
                        type="text" 
                        name="campo21" 
                        class="col-md-3 mr-3 form-control {{ $errors->has('campo21') ? 'alert-danger' : '' }}" 
                        id="campo21" 
                        aria-describedby="campo21" 
                        value="{{ $calendar->campo21 }}">
                    <input                            
                        type="text" 
                        name="campo22" 
                        class="col-md-3 mr-3 form-control {{ $errors->has('campo22') ? 'alert-danger' : '' }}" 
                        id="campo22" 
                        aria-describedby="campo22" 
                        value="{{ $calendar->campo22 }}">
                    <input                            
                        type="text" 
                        name="campo23" 
                        class="col-md-3 mr-3 form-control {{ $errors->has('campo23') ? 'alert-danger' : '' }}" 
                        id="campo23" 
                        aria-describedby="campo23" 
                        value="{{ $calendar->campo23 }}">                            
                </div>
                
                <label class="col-md-4" for="campo3">Campo 3</label>
                <div class="form-group form-inline">
                    <input 
                        type="text" 
                        name="campo31" 
                        class="col-md-3 mr-3 form-control {{ $errors->has('campo31') ? 'alert-danger' : '' }}" 
                        id="campo31" 
                        aria-describedby="campo31" 
                        value="{{ $calendar->campo31 }}">
                    <input                            
                        type="text" 
                        name="campo32" 
                        class="col-md-3 mr-3 form-control {{ $errors->has('campo32') ? 'alert-danger' : '' }}" 
                        id="campo32" 
                        aria-describedby="campo32" 
                        value="{{ $calendar->campo32 }}">
                    <input                            
                        type="text" 
                        name="campo33" 
                        class="col-md-3 mr-3 form-control {{ $errors->has('campo33') ? 'alert-danger' : '' }}" 
                        id="campo33" 
                        aria-describedby="campo33" 
                        value="{{ $calendar->campo33 }}"> 
                </div>

                <label class="col-md-4" for="campo4">Campo 4</label>
                <div class="form-group form-inline">
                    
                    <input 
                        type="text" 
                        name="campo41" 
                        class="col-md-3 mr-3 form-control {{ $errors->has('campo41') ? 'alert-danger' : '' }}" 
                        id="campo41" 
                        aria-describedby="campo41" 
                        value="{{ $calendar->campo41 }}">
                    <input                            
                        type="text" 
                        name="campo42" 
                        class="col-md-3 mr-3 form-control {{ $errors->has('campo42') ? 'alert-danger' : '' }}" 
                        id="campo42" 
                        aria-describedby="campo42" 
                        value="{{ $calendar->campo42 }}">
                    <input                            
                        type="text" 
                        name="campo43" 
                        class="col-md-3 mr-3 form-control {{ $errors->has('campo43') ? 'alert-danger' : '' }}" 
                        id="campo43" 
                        aria-describedby="campo43" 
                        value="{{ $calendar->campo43 }}"> 
                </div>

                <label class="col-md-4" for="campo5">Campo 5</label>
                <div class="form-group form-inline">
                    
                    <input 
                        type="text" 
                        name="campo51" 
                        class="col-md-3 mr-3 form-control {{ $errors->has('campo51') ? 'alert-danger' : '' }}" 
                        id="campo51" 
                        aria-describedby="campo51"
                        value="{{ $calendar->campo51 }}">
                    <input                            
                        type="text" 
                        name="campo52" 
                        class="col-md-3 mr-3 form-control {{ $errors->has('campo52') ? 'alert-danger' : '' }}" 
                        id="campo52" 
                        aria-describedby="campo52" 
                        value="{{ $calendar->campo52 }}">
                    <input                            
                        type="text" 
                        name="campo53" 
                        class="col-md-3 mr-3 form-control {{ $errors->has('campo53') ? 'alert-danger' : '' }}" 
                        id="campo53" 
                        aria-describedby="campo53" 
                        value="{{ $calendar->campo53 }}"> 
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