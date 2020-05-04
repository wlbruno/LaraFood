@extends('adminlte::page')

@section('title', 'Cadastrar Nova Categora')

@section('content_header')
    <h1>Cadastrar Nova Categora </h1>
@stop

@section('content')
    <div class="card">
    	<div class="card-body">
    		<form action="{{ route('categories.store') }}" class="form" method="POST">
    			@csrf

    		@include('admin.pages.categories._partials.form')
	   		</form>
    	</div>
    </div>

@endsection