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

        .form-card .form-label {
            color: #ccc;
        }

        .form-card .form-control {
            background-color: #222;
            border-color: #444;
            color: #fff;
            border-radius: 8px;
        }

        .form-card .form-control:focus {
            background-color: #333;
            color: #fff;
            border-color: red;
            box-shadow: 0 0 0 0.2rem rgba(255, 0, 0, 0.25);
        }

        .form-card .card-header {
            background-color: #000;
            border-bottom: 1px solid red;
            border-radius: 14px 14px 0 0 !important;
        }

        .form-card .card-footer {
            background-color: #000;
            border-top: 1px solid #333;
            border-radius: 0 0 14px 14px !important;
        }

        .form-card a {
            color: #0dcaf0;
        }
        </style>

        </head>
        <body>
    
      <main class="col-md-9">

      {{$slot}}

        </main>
     
      


     
        
        
        
       
    </body>
    </html>