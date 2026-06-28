<x-layout title="Profilo" sfondo="sfondo2.jpg">

    <div class="d-flex align-items-center justify-content-center"
        style="min-height: 80vh;">
        <div class="text-center text-white">

            <h1 class="display-3 fw-bold"
                style="text-shadow: 2px 2px 8px rgba(0,0,0,0.8);">
                Benvenuto, {{ auth()->user()->name }}!
            </h1>

        </div>
    </div>

</x-layout>