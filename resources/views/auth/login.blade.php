<x-auth-layout title="Login">
    
    
    
    
    {{-- CARD LOGIN --}}
    <div class="card form-card p-2">
        
        <div class="card-header text-center fw-bold display-4">
            Login
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
            {{--  autocomplete="on" permette
            al browser di proporre email
            e password salvate --}}
            
            
            <form method="POST" action="/login">
                {{-- token --}}
                @csrf
                {{-- EMAIL --}}
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email"
                    autocomplete="email"
                    class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}"
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
                    class="form-control @error('password') is-invalid @enderror"
                    required>
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
                {{-- Bottone --}}
                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-info fw-bold rounded-pill">
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