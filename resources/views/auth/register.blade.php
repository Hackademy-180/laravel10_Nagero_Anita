<x-auth-layout title="Registrati">

    <div class="card form-card p-2">

        <div class="card-header text-center fw-bold fs-4">
            Crea un account
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

            <form method="POST" action="/register">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        value="{{ old('name') }}"
                        required
                        autofocus>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        value="{{ old('email') }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password"
                        name="password"
                        id="password"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">
                        Conferma Password
                    </label>
                    <input type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        class="form-control"
                        required>
                </div>

                <div class="d-grid mt-4">
                    <button type="submit"
                        class="btn btn-info fw-bold rounded-pill">
                        Registrati
                    </button>
                </div>

            </form>

        </div>

        <div class="card-footer text-center">
            Hai già un account?
            <a href="{{ route('login') }}">Accedi</a>
        </div>

    </div>

</x-auth-layout>