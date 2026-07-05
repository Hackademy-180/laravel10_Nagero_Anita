
    {{-- FORM DI REGISTRAZIONE --}}


    <x-auth-layout title="Registrati">
        
        <div class="card form-card p-2 mt-5 shadow-sm border-0">
            

            {{-- HEADER E TITOLO PAGINA --}}
             <div class="card-header bg-info text-white text-center py-4">
            <h2 class="fw-bold mb-0">
               Crea un account
            </h2>
        </div>
            <div class="card-body p-4">
                
                {{--Ciclo per : ERRORI POSSIBILI--}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- FORM! --}}
            <form method="POST" action="{{ route('register') }}">
                @csrf
{{-- nome --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"    placeholder="Inserisci il tuo nome"
                        required>
                         @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
{{-- email --}}
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Inserisci la tua email" required>
                </div>
 @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                <!-- PASSWORD  -->
               <div class="mb-4">
                    <label for="password" class="form-label fw-semibold">
                        <i class="bi bi-lock me-1"></i>Password
                    </label>
                    <div class="input-group">
                        <input 
                            type="password" 
                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                            name="password" 
                            id="password"
                            placeholder="Inserisci la password"
                            required
                        >
                        <span 
                            class="input-group-text bg-light" 
                            id="togglePassword" 
                            style="cursor:pointer;"
                        >
                            <i class="bi bi-eye"></i>
                        </span>
                    </div>
                         @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    {{-- <small class="text-muted">
                        Minimo 8 caratteri, maiuscola, minuscola, numero e simbolo
                    </small> --}}
                </div>

                <!-- CONFERMA PASSWORD  -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Conferma Password</label>

                    <div class="input-group">
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                       
                    </div>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                    <label class="form-check-label" for="remember">Ricorda i miei dati</label>
                </div>

                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-info fw-bold rounded-pill">
                        Registrati
                    </button>
                </div>

            </form>

        </div>

        <div class="card-footer text-center">
            Hai già an account?
            <a href="{{ route('login') }}">Accedi</a>
        </div>

    </div>

</x-auth-layout>

           