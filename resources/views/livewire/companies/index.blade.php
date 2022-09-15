@extends('adminlte::page')

@section('title', 'companys')

@section('content_header')
    <h1>Compañias</h1>
@stop

@section('content')
	
    @livewire('companys')
   
@stop

@section('footer')
    <p>footer.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('companys!'); </script>
@stop
