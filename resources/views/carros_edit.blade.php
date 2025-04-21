@extends('layout')
@section('content')
@if(session()->has('message'))
  {{session()->get('message')}}

@endif
<title>B&Z Solutions</title>

    
<form action="{{route('carros.update',['carro'=>$carro->id])}}" method="POST">
  @csrf
  @method('PUT')
    
  
      <legend>Editar carro</legend>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Marca</label>
        <input type="text" id="disabledTextInput" name="marca" class="form-control" value="{{$carro->marca}}">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Modelo</label>
        <input type="text" id="disabledTextInput" name="modelo" class="form-control" value="{{$carro->modelo}}">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Ano</label>
        <input type="text" id="disabledTextInput" name="ano" class="form-control" value="{{$carro->ano}}">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Cor</label>
        <input type="text" id="disabledTextInput" name="cor" class="form-control" value="{{$carro->cor}}">
      </div>
      <button type="submit" class="btn btn-primary">Salvar</button>
   

  </form>

@endsection