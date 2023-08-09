@extends('layout')

@section('title', 'Pesquisar usuário')

@section('content')

    <section id="from-search" class="container m-5">
        <form id="form-box" class="form-box p-3" method="GET" action="{{ URL::to('/search-result') }}">
            <label for="login" class="form-label label text-white">Login</label>
            <div class="input-group mb-3">
                <input type="login" name="login" id="login" class="form-control text-white box bg-transparent focus-ring focus-ring-white" id="login" placeholder="nome.sobrenome">
                <button type="submit" class="btn focus-ring focus-ring-light btn-outline-light ">Enviar</button>
            </div>            
        </form>
    </section>

@endsection