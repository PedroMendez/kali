@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
		<table class="table table-striped">
		  <thead>
		    <tr>
				<th scope="col">#</th>
				<th scope="col">Lunes</th>
				<th scope="col">Martes</th>
				<th scope="col">Miércoles</th>
				<th scope="col">Jueves</th>
				<th scope="col">Viernes</th>
				<th scope="col">Sábado</th>
				<th scope="col">Domingo</th>
		    </tr>
		  </thead>
		  <tbody>
		      <th scope="row">Nivel de energía</th>
		      <td>{{ $calendar->campo11 }}</td>
		      <td>{{ $calendar->campo12 }}</td>
		      <td>{{ $calendar->campo13 }}</td>
		      <td>{{ $calendar->campo14 }}</td>
		      <td>{{ $calendar->campo15 }}</td>
		      <td>{{ $calendar->campo16 }}</td>
		      <td>{{ $calendar->campo17 }}</td>			      		      
		    </tr>
		    <tr>
		      <th scope="row">Coordinación física</th>
		      <td>{{ $calendar->campo21 }}</td>
		      <td>{{ $calendar->campo22 }}</td>
		      <td>{{ $calendar->campo23 }}</td>
		      <td>{{ $calendar->campo24 }}</td>
		      <td>{{ $calendar->campo25 }}</td>
		      <td>{{ $calendar->campo26 }}</td>	
		      <td>{{ $calendar->campo27 }}</td>		      
		    </tr>
		    <tr>
		      <th scope="row">Nivel de concentración</th>
		      <td>{{ $calendar->campo31 }}</td>
		      <td>{{ $calendar->campo32 }}</td>
		      <td>{{ $calendar->campo33 }}</td>
		      <td>{{ $calendar->campo34 }}</td>
		      <td>{{ $calendar->campo35 }}</td>
		      <td>{{ $calendar->campo36 }}</td>		      
		      <td>{{ $calendar->campo37 }}</td>	
		    </tr>
		    <tr>
		      <th scope="row">Conexión con los demás</th>
		      <td>{{ $calendar->campo41 }}</td>
		      <td>{{ $calendar->campo42 }}</td>
		      <td>{{ $calendar->campo43 }}</td>
		      <td>{{ $calendar->campo44 }}</td>
		      <td>{{ $calendar->campo45 }}</td>
		      <td>{{ $calendar->campo46 }}</td>		      
		      <td>{{ $calendar->campo47 }}</td>	
		    </tr>
		    <tr>
		      <th scope="row">Más o menos intuitiva/o</th>
		      <td>{{ $calendar->campo51 }}</td>
		      <td>{{ $calendar->campo52 }}</td>
		      <td>{{ $calendar->campo53 }}</td>
		      <td>{{ $calendar->campo54 }}</td>
		      <td>{{ $calendar->campo55 }}</td>
		      <td>{{ $calendar->campo56 }}</td>		      
		      <td>{{ $calendar->campo57 }}</td>	
		    </tr>		    		    
		  </tbody>
		</table>   
    </div>
    <div class="text-right">
        <a href="{{ url('/calendars/'.$calendar->id.'/edit') }}" class="btn btn-primary">Modificar Datos</a>
    </div>
</div>
@endsection