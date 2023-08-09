@extends('layout')

@section('content')
    <h1>Testar Conexão LDAP</h1>
    
    @if (isset($usuarios))
        <h2>Nomes dos Usuários:</h2>
        <ul>
            @foreach ($usuarios as $usuario)
                <li>{{ $usuario }}</li>
            @endforeach
        </ul>
    @endif
    
    @if (isset($error))
        <p class="error">{{ $error }}</p>
    @endif
@endsection
