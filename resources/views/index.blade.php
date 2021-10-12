<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Stylesheets -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <body>
        <div id="page-container">
            <div id="content-wrap">

                <nav class="navbar">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">
                        <h2 class="text-white text-center" id="title"> Niek Luttikhof </h2>
                      </a>
                    </div>
                </nav>

                <div id="app">
                    <app></app>
                </div>
            </div>
            <footer id="footer" class="bg-dark text-center text-lg-start">
                <div class="text-center p-3">
                  <p class="text-white"> 2021 </p>
                </div>
            </footer>
        </div>
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
      
</html>
