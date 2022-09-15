@extends('adminlte::page')

@section('title', 'Sales')

@section('content_header')
    <h1>Ventas</h1>
@stop

@section('content')
	
    @livewire('sales')
   
@stop

@section('footer')
    <p>footer.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Ventas!'); </script>
@stop
