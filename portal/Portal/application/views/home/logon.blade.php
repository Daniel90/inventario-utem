<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
               Universidad Tecnologica Metropolitana - Mantenedor de Inventario 
        </title>
        <link href="/img/favicon.ico" type="image/x-icon" rel="icon" />
        {{ HTML::script('js/jquery-1.4.2.min.js') }}
        {{ HTML::script('js/jquery-ui-1.8.custom.min.js') }}
        {{ HTML::script('js/jquery.layout.min.js') }}
        {{ HTML::script('js/layout-login.js') }}
        {{ HTML::style('css/style.css') }}
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-responsive.css') }}
        <style type="text/css">

      #UserLoginForm {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      #UserLoginForm input[type="text"],
      #UserLoginForm input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>


    </head>
    <body>
        <header class="ui-layout-north">
            <h1>
                <img src="/img/top_app_logo.png" alt="Universidad Tecnologica Metropolitana" />
                <img src="/img/top_app_title.png" alt="Mantenedor de Inventario" />
            </h1>
            <div id="version">V1.1</div>
        </header>
        <div id="content-login" class="ui-layout-center">
            <div id="login">
                <a href="/login">
                    <img src="/img/login.jpg" />
                </a>


                
                {{ Form::open('/logon','post',array('id' => 'UserLoginForm')) }}
                    
                    
                    <div class="input text">
                        <p>{{ Form::label('UserUsername', 'Nombre de usuario') }}</p>
                        <p>{{ Form::text('usuario','',array('maxlength' => 255,'id' => 'usuario','placeholder' => 'Nombre de Usuario','required')) }}</p>
                    </div>
                   
                    <div class="input password">
                        <p>{{ Form::label('UserPassword', 'Contraseña') }}</p>
                        <p>{{ Form::password('pass',array('id' => 'pass','placeholder' => 'Contraseña','required')) }}</p>
                    </div>

                    <label class="checkbox">
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                    <button class="btn btn-success" type="submit">Acceder</button>
                    <a href = "/registrarse" title = "Registrarse">Ayuda</a>
                    @if(Session::has('login_errors'))
                            <p style="color:red">Usuario o contraseña incorrectos<p>
                    @endif
                {{ Form::close() }}
            

          

            

            </div>
        </div>
        
        <footer class="ui-layout-south">UTEM</footer>
    </body>

</html>