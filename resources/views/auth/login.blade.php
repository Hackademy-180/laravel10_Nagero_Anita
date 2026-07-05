{{-- LAYOUT LOGIN FORM --}}

<x-auth-layout title="Login">
    
    
    
    
    {{-- CARD LOGIN --}}
    <div class="card form-card mt-3 shadow-sm border-0 mt-5">
        
        <div class="card-header py-4 bg-info text-white text-center fw-bold display-4">
           
           
        <h2 class="fw-bold mb-0">
             
                    Login
            </h2>
        </div>
        
        <div class="card-body p-4">
            
            
            {{-- Messaggi di ERRORE --}}
             
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            {{--FORM--}}
            {{--  autocomplete="on" =  permette al browser di proporre email
            e password salvate --}}
            
            <form action="/login"  method="POST">
                {{-- token --}}
                @csrf
                {{-- EMAIL --}}
                <div class="mb-3 mt-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email"
                    autocomplete="email"
                    class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}" placeholder="Inserisci la tua email"
                    required autofocus>


                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                {{-- spazio psw --}}
            
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password"
                    name="password"
                    id="password"
                    autocomplete="current-password"
                    class="form-control"  placeholder="Inserisci la password" required>
                   
                </div>
                
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Ricordami --}}
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                        <label class="form-check-label" for="remember">Ricordami</label>
                    </div>
                </div>

                {{-- Bottone d'accesso--}}
                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-info btn-lg fw-bold rounded-pill py-2">
                        Accedi
                    </button>
                </div>
                
                
            </form>
            
        </div>
        
        <div class="card-footer mt-3 bg-light text-center py-3 d-flex mx-5" style="width: 240px;">
            <p class="mb-0">
                Non hai un account?
                <a href="{{ route('register') }}" class="fw-semibold text-decoration-none">
                    Registrati
                </a>
            </p>
        </div>
        
    </div>
    
</x-auth-layout>