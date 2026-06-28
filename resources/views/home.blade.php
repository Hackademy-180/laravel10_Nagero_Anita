<x-layout title="Homepage" sfondo="sfondo1.jpg">

    <div class="d-flex align-items-center justify-content-center"
        style="min-height: 80vh;">
        <div class="text-center text-white">

            <h1 class="display-3 fw-bold mb-4"
                style="text-shadow: 2px 2px 8px rgba(0,0,0,0.8);">
                Benvenuto su MyBlog
            </h1>

            <a href="{{ route('login') }}"
                class="btn btn-info btn-lg rounded-pill me-3">
                Login
            </a>

            <a href="{{ route('register') }}"
                class="btn btn-outline-light btn-lg rounded-pill">
                Registrati
            </a>

        </div>
    </div>

</x-layout>