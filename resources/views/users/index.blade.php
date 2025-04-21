@extends('layout')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Usuários</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Adicionar Novo Usuário</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    
                    <th>Nome</th>
                    <th>Email</th>                   
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr> 
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection