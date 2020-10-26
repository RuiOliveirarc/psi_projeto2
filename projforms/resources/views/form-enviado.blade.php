@extends('layout')
	@section('titulo-pagina')
			Formulário submetido
	@endsection

	@section('header')
			Informação enviade através de form
	@endsection

	@section('conteudo')
	<br>
		<b>Nome:   </b>{{$nome}} <br>
		<b>Morada:  </b>{{$morada}}<br>
		<b>Automovel:  </b> {{$automovel}}
	@endsection