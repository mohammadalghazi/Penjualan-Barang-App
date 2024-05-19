<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nama Brand - Deskripsi Singkat</title>
        <meta name="description" content="">
        <meta name="keywords" content="a,b">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <style>
            ::-webkit-scrollbar{
                display: none;
            }
            body{
                width: 100vw;
                height: 100vh;
            }
            .container-fluid header{
                
            }
            .container-fluid main{
                
            }
            .container-fluid footer{
                
            }
        </style>
    </head>
    <body>
        <div class="container-fluid h-100">
            <header class="row bg-danger">
                Header
            </header>
            <main class="row bg-primary">
                Main
            </main>
            <footer class="row bg-secondary">
                Footer
            </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>