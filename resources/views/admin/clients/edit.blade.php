@extends('admin.dashboard')
@section('title', 'ProfMargauxApp')
@section('content')

    <h1 class="mt-2 text-2xl font-semibold leading-tigh py-2">Editar Cliente: {{$client->nome}}</h1>


    @include('admin.clients._partials.validations-form')

    <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.clients._partials.form')
    </form>


@endsection