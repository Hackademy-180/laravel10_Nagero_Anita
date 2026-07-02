<x-layout title="Profilo" sfondo="sfondo2.jpg">

    <div class="d-flex align-items-center justify-content-center"
        style="min-height: 80vh;">
        <div class="text-center text-white">

        <h1 class="display-4 fw-bold text-center">


              Benvenuto, {{ auth()->user()->name }}!

        </h1>
        



 <div class="card p-4 mt-4">
    <h3 class="fw-bold mb-3">I tuoi dati</h3>

    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <td>{{ auth()->user()->name }}</td>
        </tr>
        <tr>
          
        <tr>
            <th>Email</th>
            <td>{{ auth()->user()->email }}</td>
        </tr>
    </table>

    <a href="{{ route('password.request') }}" class="btn btn-outline-danger mt-3">
        Reset Password
    </a>
</div>






        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
        </div>
    </div>

</x-layout>