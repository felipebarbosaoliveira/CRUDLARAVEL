@extends('layout')
@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Ano</th>
        <th scope="col">Cor</th>
        <th scope="col">Editar</th>
      </tr>
    </thead>
    <tbody>
        @foreach($carros_tb as $carro)
      <tr>
        
        <th scope="row">{{$carro->id}}</th>
        <td>{{$carro->marca}}</td>
        <td>{{$carro->modelo}}</td>
        <td>{{$carro->ano}}</td>
        <td>{{$carro->cor}}</td>
        <td><a href="{{route('carros.edit',['carro'=>$carro])}}"<button type="button" class="btn btn-success" hres >Editar</button></td>
       
      </tr>
      @endforeach
     
    </tbody>
  </table>
@endsection