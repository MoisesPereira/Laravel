
@extends('template')
	
@stop

@section('title')
	- Página de Notas
@stop

@section('head')

	<h1> {{ $texto }} </h1>

@stop

@section('content')

	<h1> Tamo ai galera - Segue Infos </h1>

	<ul>
	@foreach($notas as $nota)
			<li>{{ $nota }}</li>
	@endforeach
	</ul>

	<br><br>

	<h1> Segundo Bloco </h1>

	<ul>
	@foreach($notas as $nota)
			<li>{{ $nota }}</li>
	@endforeach
	</ul>

	<br><br>

	<h1> Terceiro Bloco </h1>

	<ul>
	@foreach($notas as $nota)
			<li>{{ $nota }}</li>
	@endforeach
	</ul>

@stop	