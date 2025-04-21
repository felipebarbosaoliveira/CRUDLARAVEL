@extends('layout')

@section('content')
    
    
<title>B&Z Solutions</title>
    <div class="d-flex justify-content-center align-items-center flex-column" style="height: 40vh; margin-top: 1px;">
        <h1><span style="color: aquamarine">B</span>&<span style="color: chocolate">Z</span> Solution</h1>

        <h4>Sistema para gestão de estoque de veículos</h>
    </div>

    
    

    <div class="text-center" style="margin-top: -40px;">
        <img src="{{ asset('images/revenda.jpg') }}" 
             alt="Revendedora de carros" 
             class="img-fluid" 
             style="max-width: 40%; height: auto;">
    </div>
@endsection