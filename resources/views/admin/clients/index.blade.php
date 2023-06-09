@extends('admin.dashboard')
@section('title', 'ProfMargauxApp')
@section('content')

<h1 class="text-3xl font-semibold leading-tiph py-2 mt-2">Listagem de Clientes
    <a href="{{route('clients.create')}} " class="bg-blue-900 hover:bg-blue-800 rounded-full text-white px-4 py-2 text-lg">Novo Cliente +</a>
</h1>

<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Nome
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Email
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Status
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Ações
          </th>
          {{-- <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Mais Fotos
          </th> --}}
        </tr>
      </thead>
      <tbody>
        @foreach ($clients as $client)
        <tr>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
              <div class="flex justify-start">
                  @if ($client->image)
                      <img src="{{ url("storage/{$client->image}") }}" alt="{{$client->nome}}" class="object-cover w-20">
                  @else
                      <img src="{{ url("imagens/placeimage.png") }}" alt="{{$client->nome}}" class="object-cover w-20">
                  @endif
              </div>
                <div class="flex justify-start font-semibold text-base">
                  {{$client->nome}}
                </div>
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$client->email}}</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $client->status ? "SIM" : "NÃO" }}</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
              <div class="flex justify-start gap-1">
                <a href="{{route('clients.edit', $client->id)}}" class="rounded-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mt-3"><i class="fas fa-edit"></i></a>
                <a href=" {{route('clients.show', $client->id)}} " class="rounded-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-3"><i class="fas fa-info"></i></a>
                <form action=" {{route('clients.destroy', $client->id)}} " method="POST">
                  @csrf()
                  @method('DELETE')
                  <button type="submit" class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mt-3" onclick="confirm('Deseja realmente excluir o cliente ?')"><i class="fas fa-trash-alt"></i></button>
                </form>
              </div>
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

                {{-- <a href="{{ route('comments.index', $product->id) }}" class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mt-3">(+) FOTOS ({{ $product->comments->count() }})</a> --}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection