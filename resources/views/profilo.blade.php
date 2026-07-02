<x-layout title="Profilo" sfondo="sfondo2.jpg">

    <div class="d-flex align-items-center justify-content-center"
        style="min-height: 80vh;">
        <div class="text-center text-white">

        <h1>Benvenuto</h1>
        
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
        </div>
    </div>

</x-layout>