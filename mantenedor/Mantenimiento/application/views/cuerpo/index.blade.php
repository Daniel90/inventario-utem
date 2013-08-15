<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
               Universidad Tecnologica Metropolitana - Mantenedor de Inventario
        </title>
        <link href="/img/favicon.ico" type="image/x-icon" rel="icon" />
        <link href="/img/favicon.ico" type="image/x-icon" rel="shortcut icon" />
        {{ HTML::style('css/style.css') }}
        {{ HTML::style('css/UI Lightness/jquery-ui-1.8.6.custom.css') }}
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-responsive.css') }}
        <script type="text/javascript">
          var webroot = '/cuerpo/index.blade.php';var wroot = '/Laravel/public/';var jsession_data = [];var theme = "UI Lightness";
          function abre() {
              window.open("/dependencia","dependencia","width=300,height=500, top=100,left=100");
            return true;
          }
          function abreS() {
              window.open("/serial","serial","width=300,height=500, top=100,left=100");
            return true;
          }

          $(document).ready(function() {
           $('#inventario').click(function(){
            $("#content").load('informesConsultas/inventory.blade.php');
             });
          });
        </script>

        {{ HTML::script('js/jquery-1.4.2.min.js') }} <!--necesario-->
        {{ HTML::script('js/jquery-ui-1.8.6.custom.min.js') }} <!--necesario-->
        {{ HTML::script('js/jquery.layout.min.js') }} <!--necesario-->
        {{ HTML::script('js/jquery.jqGrid.min.js') }} <!--necesario-->
        {{ HTML::script('js/themeswitchertool.js') }} <!--necesario-->
        {{ HTML::script('js/layout-default.js') }} <!--necesario-->

        
    </head>

    <body>
      <!--Cabecera de la pagina-->
      <header class="ui-layout-north">
        <h1>
            <a href = '/index.php/cuerpo'><img src="/img/top_app_logo.png" alt="Universidad Tecnologica Metropolitana" /></a>
            <a href = '/index.php/cuerpo'><img src="/img/top_app_title.png" alt="Mantenedor de Inventario" /></a>
        </h1>
        <div id="version">V1.1</div>
        <div id="top-menu">
          <a href="/index.php/cuerpo" rel="ui-icon-home">Inicio</a>
          {{ HTML::link('logout','Salir',array('rel' => 'ui-icon-home')) }}
        </div>
        <div id="current-user">
          Te has identificado como: {{ Auth::user()->usuario }}
        </div>
        <div id="version">
          V1.1
        </div>
      </header>
        <!--Menu de la izquierda-->
      <div id="left-menu" class="ui-layout-west">
        <div id="accordion">
        <!--Seccion administracion-->
          <div>
            <h3>
              <a href="#" rel="3" >Administrar</a>
            </h3>
            <div class="submenu">
              <ul>
                <li>
                  {{ HTML::link('altaBien','Alta de Bienes',array('id' => 'alta')) }}
                </li>
                <li>
                  {{ HTML::link('/bajaBien','Baja de bienes',array('id' => 'baja')) }}
                </li>
                <li>
                  {{ HTML::link('/inventory','Cambiar dependencias',array('onclick' => 'abre()')) }}<!--pata poder ver el contenido de la base de datos-->
                </li>
                <li>
                  {{ HTML::link('/inventory','Actualizar serial',array('onclick' => 'abreS()')) }}<!--simil-->
                </li>
              </ul>
            </div>
          </div>
          <!--Seccion Informes y consultas a la BD-->
          <div>
            <h3>
              <a href="#" rel="4" >Informes y Consultas</a>
            </h3>
            <div class="submenu">
              <ul>
                <li>
                  {{ HTML::link('/inventory','Consultar bienes de inventario',array('id' => 'inventario')) }}
                </li>
                <li>
                  {{ HTML::link('/history','Consultar historiales') }}
                </li>
                <li>
                  {{ HTML::link('/bajaHistory','Consultar bienes dados de baja') }}
                </li>
              </ul>
            </div>
          </div>
            
          <div>
            <h3>
              <a href="#" rel="7" >Contacto</a>
            </h3>
            <div class="submenu">
              <ul>
                <li style="border-bottom: none;padding-bottom:0px;">
                  <a href="/*">...</a>
                </li>
              </ul>
            </div>
          </div>
          </br>
        </div>
      </div>
      <!--Menu central-->
      <div id="content" class="ui-layout-center">
        <div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;">
          </br>
          <form class="form-search">
            <input type="text" class="input-medium search-query">
            <button type="submit" class="btn">Search by id</button>
          </form>
        </div>
      </div>
      <footer class="ui-layout-south"></footer>
    </body>

</html>

