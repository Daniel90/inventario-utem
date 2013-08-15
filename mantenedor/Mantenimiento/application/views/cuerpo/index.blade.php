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
        <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }
       .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 50px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }
      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
        
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
                <li>
                    {{ HTML::link('/contactos','Contactos') }}
                  </li>
                  <li>
                  {{ HTML::link('/ubicacion','Ubicación') }}
                </li>
              </ul>
            </div>
          </div>
          </br>
        </div>
      </div>
      <!--Menu central-->
      <div id="content" class="ui-layout-center">
        <div class="jumbotron">
          <h2 class="text-info" style="text-align:center;">Mantenedor inventario Universidad Técnologica Metropolitana</h2>
          <hr>
          <h4 class="muted">El mantenedor es el encargado de actualizar los registros del inventario de nuestra casa de estudios superiores con el fin de llevar un recuento seguro y eficaz de todas las partes que la componen, desde sillas hasta servidores Web</h4>
          
        </div>
        <hr>
        <h4 class="text-info">El sitio cuenta con:</h4>
      <div class="row-fluid marketing">
        <div class="span6">
          <h4>Administrar bienes</h4>
          <p>Con "Administrar", el mantenedor tiene acceso a ingresar nuevos bienes 
            para poderlos dar de alta en el sistema, la particularidad de esta opción es integrar un sistema de 
            ingreso automático de bienes en caso de ser mas de 2 especies que es lo mas usual. 
            Dar de baja un bien siempre comprobando con la base de datos, cambiar dependencias y 
            actualizar el número de serie para bienes que fueron ingresados por cantidades, estas opciones siempre pudiendo visualizar lo que se esta cambiando.</p>



         
        </div>
        <div class="span6">
          <h4>Informes y consultas</h4>
          <p>Con este apartado se generan vistas con tablas de los bienes. Son 3 vistas con un excelente diseño y funcionalidad.
            Siempre se pueden hacer consultas, ordenar ,buscar, y generar distintos archivos con el fin de tener siempre un respaldo fisico de los datos.</p>

          <h4>contactos</h4>
          <p>Siempre puede estar en contacto con nosotros, estan suministrados nuestros coreos electronicos en caso de que algo no funcione correctamente.</p>

          
        </div>
      </div>

      <hr>
      </div>
      <footer class="ui-layout-south"></footer>
    </body>

</html>

