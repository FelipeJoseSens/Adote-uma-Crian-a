@extends('layouts.app')
@section('title', 'Editar Criança')
@section('content')
<div class="container">
    <h2>Editar Criança: {{ $crianca->nome }}</h2>
    <form action="{{ route('admin.criancas.update', $crianca->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.criancas.form')
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
