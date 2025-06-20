@extends('layouts.app')
@section('title', 'Cadastrar Criança')
@section('content')
<div class="container">
    <h2>Cadastrar Nova Criança</h2>
    <form action="{{ route('admin.criancas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.criancas.form')
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
