@extends('layout')
@section('content')
<title>B&Z Solutions</title>

<table class="table">
    <thead class="thead-dark">
      <tr>
        
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Ano</th>
        <th scope="col">Cor</th>
        <th scope="col"></th>
        
        
      </tr>
    </thead>
    <tbody>
        @foreach($carros_tb as $carro)
        <tr>
    <td>{{$carro->marca}}</td>
    <td>{{$carro->modelo}}</td>
    <td>{{$carro->ano}}</td>
    <td>{{$carro->cor}}</td>
    <td class="d-flex gap-2">
        <a href="{{ route('carros.edit', ['carro' => $carro]) }}">
            <button type="button" class="btn btn-primary btn-sm">Editar veículos</button>
        </a>
        <a href="{{ route('carros.show', ['carro' => $carro]) }}">
            <button type="button" class="btn btn-primary btn-sm">Detalhes</button>
        </a>
    </td>
</tr>
      @endforeach
     
    </tbody>
  </table>
@endsection