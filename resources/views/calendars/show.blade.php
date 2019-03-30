@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Primero</th>
		      <th scope="col">Segundo</th>
		      <th scope="col">Tercero</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>{{ $calendar->campo11 }}</td>
		      <td>{{ $calendar->campo12 }}</td>
		      <td>{{ $calendar->campo13 }}</td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>{{ $calendar->campo21 }}</td>
		      <td>{{ $calendar->campo22 }}</td>
		      <td>{{ $calendar->campo23 }}</td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td>{{ $calendar->campo31 }}</td>
		      <td>{{ $calendar->campo32 }}</td>
		      <td>{{ $calendar->campo33 }}</td>
		    </tr>
		    <tr>
		      <th scope="row">4</th>
		      <td>{{ $calendar->campo41 }}</td>
		      <td>{{ $calendar->campo42 }}</td>
		      <td>{{ $calendar->campo43 }}</td>
		    </tr>
		    <tr>
		      <th scope="row">5</th>
		      <td>{{ $calendar->campo51 }}</td>
		      <td>{{ $calendar->campo52 }}</td>
		      <td>{{ $calendar->campo53 }}</td>
		    </tr>		    		    
		  </tbody>
		</table>   
    </div>
    <div class="text-right">
        <a href="{{ url('/calendars/'.$calendar->id.'/edit') }}" class="btn btn-primary">Modificar Datos</a>
    </div>
</div>
@endsection