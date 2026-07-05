


{{-- Layout per la pagina PROFILO utente (protetta da middleware auth) --}}




<x-layout title="Profilo" sfondo="sfondo2.jpg">

    <div class="d-flex align-items-center justify-content-center"
        style="min-height: 80vh;">
        <div class="text-center text-white">

     {{-- Titolo con nome utente --}}
            <h1 class="display-4 fw-bold text-center mb-4 text-secondary-emphasis">
                <i class="bi bi-person-circle me-2"></i>
                Benvenuto, {{ auth()->user()->name }}!
            </h1>


{{-- Card che ho deciso d'inserire nella pagina con i dati! --}}
 <div class="card p-4 mt-4">
    <h3 class="fw-bold mb-3">I tuoi dati</h3>

    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <td>{{ auth()->user()->name }}</td>
        </tr>
        <tr>
          {{-- Possibile icona aggiungibile! --}}
        <tr>
            <th>Email</th>
            <td>{{ auth()->user()->email }}</td>
        </tr>
    </table>


    {{-- POSSIBILE BOTTONE CON CAMPI CHE FORTIFY FORNISCE, ED ELABORAZIONI DIFFERENTI PER MAGGIORI SERVIZI POSSIBILI!! --}}
    <a href="{{ route('password.request') }}" class="btn btn-outline-danger mt-3">
        Reset Password
    </a>
</div>




{{-- LOGOUT FORM; CI CONSENTE USCIRE A ANDARE AD HOME;  --}}

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
        </div>
    </div>

</x-layout>