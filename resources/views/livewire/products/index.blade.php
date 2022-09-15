@extends('adminlte::page')

@section('title', 'products')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
	
@livewire('products')
   
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