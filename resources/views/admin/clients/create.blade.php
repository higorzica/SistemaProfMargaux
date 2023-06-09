@extends('admin.dashboard')
@section('title', 'ProfMargauxApp')
@section('content')

    <h1 class="mt-2 text-2xl font-semibold leading-tigh py-2">Novo Cliente</h1>


    @include('admin.clients._partials.validations-form')

    <form action="{{ route('clients.store') }}" method="post" enctype="multipart/form-data">
        @include('admin.clients._partials.form')
    </form>


@endsection