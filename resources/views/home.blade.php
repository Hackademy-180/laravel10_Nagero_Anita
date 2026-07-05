
{{-- layout pagina publica --}}


<x-layout title="Homepage" sfondo="sfondo1.jpg">

    <div class="d-flex align-items-center justify-content-center" style="min-height: 80vh;">
        <div class="text-center text-white">

            <h1 class="display-1 text-secondary-emphasis fw-bold mb-4">
                Benvenuto su MyBlog
            </h1>
            <p class="fs-2 mb-5 text-center ">
                Il tuo spazio per condividere idee e pensieri
            </p>
            

   {{-- Se l'utente NON è autenticato (guest) --}}


            @guest
            {{-- Classe btn per bottone e routing in bottone per avere il via a qualco'altro; --}}
                <a href="{{ route('login') }}" class="btn btn-success btn-lg rounded-pill px-5 py-3 fw-semibold">
                    Login
                </a>

                {{-- bottone clicca registrarsi --}}
                <a href="{{ route('register') }}" class="btn btn-success btn-lg rounded-pill px-5 py-3 fw-semibold">
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