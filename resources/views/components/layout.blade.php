<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortify & Middleware</title>


    {{-- LINK DI BOOTSTRAP NON SERVE SE USI IL VITE E IMPORTI LO STILE --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  


<style>
    /* CORPO */
     body {
            min-height: 100vh;
            background-image: url('/media/sfondo1.jpg' );
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* LOGO */
.logo{
    height: 40px;
    width: 40px;

}


/* FOOTER */
        footer {
            margin-top: auto;
        }
</style>


</head>

<body class="d-flex flex-column min-vh-100">
    
    @include('components.navbar')
    
    <main class="flex-grow-1">
        {{ $slot }}
    </main>
    
    {{-- SCRIPT BTS --}}
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> 

   
</body>

</html>