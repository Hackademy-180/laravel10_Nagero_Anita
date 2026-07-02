

<x-auth-layout title="Registrati">


    {{-- FORM DI REGISTRAZIONE --}}




    <div class="card form-card p-2">

        <div class="card-header text-center fw-bold fs-4">
            Crea un account
        </div>
        <div class="card-body p-4">


{{-- ERRORI POSSIBILI--}}

            @if ($errors->any())
                <div class="alert alert-danger">
                     <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            {{-- METODO POST PER INSERIMENTO DEI DATI PERSONALI --}}

            <form method="POST" action="{{ route('register') }}">
                {{-- token di sicurezza --}}
                @csrf

                {{-- Campo Nome --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" id="name"  autocomplete="name" class="form-control 
                    @error('name') is-invalid @enderror"
                           value="{{ old('name') }}"
                           required autofocus>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Campo Email --}}
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email"autocomplete="email"
                        class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}"
                           required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Campo Password --}}
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" autocomplete="new-password"
                        class="form-control @error('password') is-invalid @enderror"
                        required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Campo Conferma Password --}}
                 <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Conferma Password</label>
                    <input type="password"
                           name="password_confirmation"
                           id="password_confirmation"
                           autocomplete="new-password"
                           class="form-control"
                           required>
                </div>



                {{-- Checkbox ricorda dati --}}
                <div class="mb-3 form-check">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                    <label class="form-check-label" for="remember">
                        Ricorda i miei dati
                    </label>
                </div>


                {{-- VAI ALLA REGISTRAZIONE- BOTTONE --}}
                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-info fw-bold rounded-pill">
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