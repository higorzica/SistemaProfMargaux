<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="{{ route('dashboard.index')}}" class="text-white text-2xl font-semibold uppercase hover:text-gray-300">E-Commerce</a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('dashboard.index')}}"
            class="flex items-center text-white opacity-75 py-4 pl-6 nav-item active-nav-link">
            <i class="fas fa-home mr-3"></i>
            Home
        </a>
        <a href="{{ route('clients.index')}}" class="flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-user-graduate mr-3"></i>
            Clientes
        </a>
        {{-- <a href="{{route('products.index')}}"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Produtos
        </a> --}}
    </nav>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4"><i class="fas fa-sign-out-alt mr-3"></i> Sair</button>
    </form>
</aside>