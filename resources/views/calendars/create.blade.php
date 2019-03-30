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

                @for ($i = 1; $i < 6; $i++)

                    <label class="col-md-4" for="campo1">Campo {{$i}}</label>
                    <div class="form-group form-inline">
                    @for ($j = 1; $j < 4; $j++)

                        <input                            
                            type="text" 
                            name="campo{{$i.$j}}"  
                            id="campo{{$i.$j}}" 
                            class="col-md-3 mr-3 form-control {{ $errors->has('campo'.strval($i.$j)) ? 'alert-danger' : '' }}"
                            aria-describedby="campo{{$i.$j}}"
                            required>               
                    @endfor

                    </div>
                @endfor                                                          
                
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                @include('layouts.errors')

            </form>
        </div>
    </div>
</div>            
@endsection