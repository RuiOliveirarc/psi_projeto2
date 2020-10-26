@extends('layout')
	@section('titulo-pagina')
			A minha APP
	@endsection

	@section('header')
			Bem-vindo
	@endsection

	@section('conteudo')
		<h2>Esta é a minha primeira web APP Formulário em Laravel</h2>
		<a href="{{route('mostrar.form')}}">Ir para o formulário</a>
	@endsection