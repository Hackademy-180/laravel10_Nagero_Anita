<x-layout title="Homepage" sfondo="sfondo1.jpg">

    <div class="d-flex align-items-center justify-content-center" style="min-height: 80vh;">
        <div class="text-center text-white">

            <h1 class="display-3 fw-bold mb-4">
                Benvenuto su MyBlog
            </h1>

            {{-- bottoni  e direttive se non ancora autorizzato; quindi un user ( cliente a vedere pagina - Chiunque sia  )--}}

            @guest
            {{-- Classe btn per bottone e routing in bottone per avere il via a qualco'altro; --}}
                <a href="{{ route('login') }}" class="btn btn-info btn-lg rounded-pill me-3">
                    Login
                </a>

                {{-- bottone clicca registrarsi --}}
                <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg rounded-pill">
                    Registrati
                </a>
            @endguest


            {{-- altrimenti, sei già con un profilo ;--}}
            @auth
                <p class="fs-4">Ciao!</p>
                <a href="{{ route('profilo') }}" class="btn btn-info btn-lg rounded-pill">
                    Vai al Profilo
                </a>
            @endauth

        </div>
    </div>

</x-layout>