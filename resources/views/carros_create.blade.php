@extends('layout')
@section('content') 
@if(session()->has('message'))
  {{session()->get('message')}}
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('carros.store')}}" method="POST">
  @csrf   
      <legend>Adicionar carro</legend>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Marca</label>
        <input type="text" id="disabledTextInput" name="marca" class="form-control">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Modelo</label>
        <input type="text" id="disabledTextInput" name="modelo" class="form-control">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Ano</label>
        <input type="text" id="disabledTextInput" name="ano" class="form-control">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Cor</label>
        <input type="text" id="disabledTextInput" name="cor" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Salvar</button>
   

  </form>

@endsection