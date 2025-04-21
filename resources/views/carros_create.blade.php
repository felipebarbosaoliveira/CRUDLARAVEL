@extends('layout')
@section('content') 
<title>B&Z Solutions</title>

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
      <legend>Adicionar Veículo</legend>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Montadora</label>
        <input type="text" id="disabledTextInput" name="marca" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Modelo</label>
        <input type="text" id="disabledTextInput" name="modelo" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Ano de Fabricação</label>
        <input type="text" id="disabledTextInput" name="ano" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Cor do Veículo</label>
        <input type="text" id="disabledTextInput" name="cor" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success">Confirmar adição do veículo</button>
   

  </form>

@endsection