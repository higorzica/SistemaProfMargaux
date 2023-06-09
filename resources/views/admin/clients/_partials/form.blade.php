<div class="w-full bg-white shadow-md rounded px-8 py-12">

    @csrf()
    <input type="text" name="nome" placeholder="Ex: João Silva" value="{{ $client->nome ?? old('nome')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="email" name="email" placeholder="Ex: joaosilva@gmail.com" value="{{$client->email ?? old('email')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="password" name="senha" placeholder="Ex: ******" value="{{ $client->senha ?? old('senha')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="text" name="cpf" placeholder="Ex: 099.999.999-99" value="{{ $client->cpf ?? old('cpf')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="text" name="telefone" placeholder="Ex: +55 (31) 99999-9999" value="{{ $client->telefone ?? old('telefone')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <textarea name="endereco" cols="25" rows="5"  
    class="form-control
    block
    w-full
    px-3
    py-1.5
    text-base
    font-normal
    text-gray-700
    bg-white bg-clip-padding
    border border-solid border-gray-300
    rounded
    transition
    ease-in-out
    m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
    {{ $client->endereco ?? old('endereco')}}
    </textarea>
    <input type="date" name="data_nasc" value="{{ $client->data_nasc ?? old('data_nasc')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="file" name="image" value="{{ $client->image ?? old('image')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <button type="submit" class="mt-2 shadow bg-blue-900 hover:bg-blue-800 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Salvar</button>

</div>