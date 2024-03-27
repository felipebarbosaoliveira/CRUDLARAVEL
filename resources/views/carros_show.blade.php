@extends('layout')
@section('content')
    <form action="{{ route('carros.destroy',['carro'=>$carro->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <legend>Carro</legend>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Marca</label>
            <input type="text" id="disabledTextInput" name="marca" class="form-control" placeholder="{{ $carro->marca }}">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Modelo</label>
            <input type="text" id="disabledTextInput" name="modelo" class="form-control"
                placeholder="{{ $carro->modelo }}">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Ano</label>
            <input type="text" id="disabledTextInput" name="ano" class="form-control"
                placeholder="{{ $carro->ano }}">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Cor</label>
            <input type="text" id="disabledTextInput" name="cor" class="form-control"
                placeholder="{{ $carro->cor }}">
        </div>
        <a href="{{route('carros.index')}}"><button type="button" class="btn btn-primary">Voltar</button></a>
        <button type="submit" class="btn btn-danger">Excluir</button>


    </form>
@endsection
