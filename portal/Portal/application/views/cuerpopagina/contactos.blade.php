<!doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <title>
               Universidad Tecnologica Metropolitana - Mantenedor de Inventario 
        </title>
        <link href="/img/favicon.ico" type="image/x-icon" rel="icon" />
    <link href="/img/favicon.ico" type="image/x-icon" rel="shortcut icon" />
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/UI Lightness/jquery-ui-1.8.6.custom.css') }}


   
    {{ HTML::style('css/ui.jqgrid.css') }}
    {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-responsive.css') }}
        
        <script type="text/javascript">
      var webroot = '/foro/index.blade.php';var wroot = '/Laravel/public/';var jsession_data = [];var theme = "UI Lightness";
    </script>
      {{ HTML::script('js/jquery-1.4.2.min.js') }}
      {{ HTML::script('js/jquery.Rut.js') }}
      {{ HTML::script('js/jquery.validate.js') }}
      {{ HTML::script('js/Utilitarios.js') }}
      {{ HTML::script('js/jquery.selectboxes.js') }}
      {{ HTML::script('js/jquery-ui-1.8.6.custom.min.js') }}
      {{ HTML::script('js/jquery.ui.datepicker-es.js') }}
      {{ HTML::script('js/jquery.layout.min.js') }}
      {{ HTML::script('js/i18n/grid.locale-sp.js') }}
      {{ HTML::script('js/jquery.jqGrid.min.js') }}
      {{ HTML::script('js/general.js') }}
      {{ HTML::script('js/themeswitchertool.js') }}
      {{ HTML::script('js/layout-default.js') }}

      <!-- ----------------------------------- -->
    <!-- MAPA 
    <style>
      html, body, #map-canvas {
        margin: 0;
        padding: 0;
        height: 100%;
      }
    </style>
                 AIzaSyDOEPGPG_Cn1uKb16sM3eEo0b2P7iIZQU8
                 https://maps.google.cl/maps?q=dieciocho+178+santiago&ie=UTF-8&hq=&hnear=0x9662c507dbea5009:0xd9ee1381cab85bfc,Dieciocho+178,+Santiago,+Regi%C3%B3n+Metropolitana&gl=cl&ei=2on-UcHhA8voiwKGz4CoDg&ved=0CC0Q8gEwAA
   
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(-34.397, 150.644),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script> -->

   <!-- ----------------------------------- -->
    </head>
    
    <body>
      <!--Cabecera de la pagina-->
      <header class="ui-layout-north">
           <h1>
                <img src="/img/utem_estado_de_chile" alt="Universidad Tecnologica Metropolitana" />
               <!-- <img src="/img/top_app_logo.png" alt="Universidad Tecnologica Metropolitana" />
                <img src="/img/top_app_title1.png" alt="Mantenedor de Inventario" />  -->
            </h1>            
             <!--<div id="version">V1.1</div>-->
            
      <div id="top-menu">
          <a href="/" rel="ui-icon-home">Inicio</a>
              
              {{ HTML::link('logon','Admin',array('rel' => 'ui-icon-home')) }}   
      </div>
      
  
      
        </header>

        <!--Menu de la izquierda-->
        <div id="left-menu" class="ui-layout-west">
      <div id="accordion">

        <!--Seccion control de bienes-->
        <div>
              <h3>
                <a href="#" rel="3" >Acerca de la UTEM</a>
            </h3>
            <div class="submenu">
                <ul>
                  <li>
                      {{ HTML::link('/mision','Mision y Vision') }} <!-- Crear Ruta -->
                  </li>
                  
                  <li>
                      {{ HTML::link('/historia','Historia') }}      <!-- Crear Ruta -->
                  </li>

                  <li>
                      {{ HTML::link('/himno','Himno') }}            <!-- Crear Ruta -->
                  </li>

                </ul>
            </div>
          </div>
          <!--Seccion Informes y consultas a la BD-->
        <div>
            <h3>
                <a href="#" rel="4" >Mantenedor</a>
            </h3>
            <div class="submenu">
                <ul>
                  <li>
                      {{ HTML::link('/bienesalta','Bienes en Alta') }}
                  </li>

                  <li>
                      {{ HTML::link('/bienesbaja','Bienes en Baja') }}
                  </li>

                 <li>
                      {{ HTML::link('/centrodecosto','Centro de Costo') }}
                  </li>
                  <li>
                      {{ HTML::link('/bienescosto','Bienes de Centro de Costo') }}
                  </li>
                  <li>
                      {{ HTML::link('/bienesbajacosto','Bienes en Baja en Centro de Costo') }}
                  </li>
                </ul>
              </div>
            </div>

            <div>
            <h3>
                <a href="#" rel="4" >Contacto</a>
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

  <div id="content" class="ui-layout-center">
          <hgroup>
            <legend>
              <h5 class="text-success" style="text-align:right;">
              <!--  <script>
              var f = new Date();
              document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
            </script> -->
          </h5>
              <h3 class="text-info" style="text-align:center;">Funcionarios</h3>
              

            </legend>
          </hgroup>
          

          

            <h4>Mantenedor</h4>
          </br>
            <ul class="inline">
              <li>Mantenedor Inventario: Patricio Barros </li></br>
              <li>Conservador Inventario: Fernando Contreras A.</li></br>
            </ul>
          </br>

          <h4>Contacto Sistema Inventario</h4>
          </br>
            <ul class="inline">
              <li>Gonzalo Herrera V. Mail: herrera.gonzaloandtes@gmail.com</li> </br>
              <li>Daniel Abrilot B.  Mail: daniel.abrilot@gmail.com</li> </br>
              <li>Rodrigo Cardenaz P. Mail: rodrigo.cardenasplaza@gmail.com </li> </br>
              <li>Oscar Coloma C.    Mail: oscar.coloma.castro@gmail.com </li> </br>
              <li>John Lopez S.      Mail: jp.lopez.suarez@gmail.com> </li> </br>

            </ul>
          </br>

         
            


     

      
      
          
      
      </div>
    </div>
        
    </div>
    <footer class="ui-layout-south"></footer>
    </body>

</html>