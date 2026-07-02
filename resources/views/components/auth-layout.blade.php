<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortyfy&middlewre</title>
    <!-- link bts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">




    <style>
        body {
            background-color: #000;
            min-height: 100vh;
        }

        .form-card {
            border: 2px solid red;
            border-radius: 16px;
            background-color: #111;
            color: #fff;
        }

        

        .form-card .form-control {
            background-color:paleturquoise;
            border-color: palegreen;
            color: blue;
            border-radius: 8px;
        }

       

        .form-card .card-header {
            background-color: lime;
            border-bottom: 1px solid red;
            border-top: 1px solid #000;
            border-radius: 14px 14px 0 0 !important;
        }

        .form-card .card-footer {
            background-color:wheat;
            color: black;
           
        }

        .form-card a {
        color: rgb(30, 2, 30);
        }


        
        </style>

        </head>
        <body>
    
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
        <div class="col-12 col-md-5">

      {{$slot}}

        </main>
     
      


        </div>
        </div>
        
        
        {{-- script js da bootstrap--}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"></script>
       
    </body>
    </html>