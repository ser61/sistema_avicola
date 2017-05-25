<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        {!!Html::style('bootstrap/css/bootstrap.min.css')!!}
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <div class="wrapper">
        <header>
          <div class="flex-center position-ref">
            @if (Route::has('login'))
              <div class="top-right links">
                <a href="{{ url('/login') }}">Iniciar Sesion</a>
                <a href="{{ url('/register') }}">Registrarse</a>
              </div>
            @endif

          </div>
        </header>

        <div class="content-wrapper">
          <section class="content visible-md visible-lg hidden-sm hidden-xs" style="margin-top:200px">
            <div class="flex-center ">
              <div class="title m-b-md col-lg-12">
                Sistema Avicola
                <br>
                <img src={{ asset('images/logo-g.png')}} alt="Rapido"/>
              </div>
            </div>
          </section>

          <section class="content visible-xs visible-sm hidden-md hidden-lg" style="margin-top:80px">
            <div class="flex-center ">
              <div class="title m-b-md col-lg-12">
                Sistema Avicola
                <br>
                <img src={{ asset('images/logo-g.png')}} alt="Rapido"/>
              </div>
            </div>
          </section>
        </div>

      </div>


        {!!Html::script('bootstrap/js/bootstrap.min.js')!!}
    </body>
</html>
