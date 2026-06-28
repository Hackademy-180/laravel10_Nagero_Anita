<x-auth-layout title="Login">

    <div class="card form-card p-2">

        <div class="card-header text-center fw-bold fs-4">
            Login
        </div>

        <div class="card-body p-4">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="/login">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        value="{{ old('email') }}"
                        required
                        autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password"
                        name="password"
                        id="password"
                        class="form-control"
                        required>
                </div>

                <div class="d-grid mt-4">
                    <button type="submit"
                        class="btn btn-info fw-bold rounded-pill">
                        Accedi
                    </button>
                </div>

            </form>

        </div>

        <div class="card-footer text-center">
            Non hai un account?
            <a href="{{ route('register') }}">Registrati</a>
        </div>

    </div>

</x-auth-layout>