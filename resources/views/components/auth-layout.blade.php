<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Autenticazione Fortify' }}</title>


    {{-- LINK DI BOOTSTRAP NON SERVE SE USI IL VITE E IMPORTI LO STILE --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  

<style>
    body{
        min-height: 100vh;
         background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-size: cover;
            background-position: center;
    }

    /* card registrazione o log */
    .form-card{
       
        min-width: 350px;
        max-width: 450px;
        margin: 0 auto;
    }
</style>


</head>

<body class="d-flex flex-column min-vh-100">
    
 
    <main class="flex-grow-1 w-100">
        {{ $slot }}
    </main>
    

    <x-footer></x-footer>
    {{-- SCRIPT BTS --}}
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> 

   {{-- script di bootstrap potevo mettere logica per la visibilità input password con funzioni cattura elemento icona
   ; ed evento onclick --}}
</body>

</html>