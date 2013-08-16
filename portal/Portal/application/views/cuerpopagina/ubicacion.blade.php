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
    <!-- MAPA -->
    <style>
      html, body, #map-canvas {
        margin: 0;
        padding: 0;
        height: 100%;
      }
    </style>
               <!--   AIzaSyDOEPGPG_Cn1uKb16sM3eEo0b2P7iIZQU8
                 https://maps.google.cl/maps?q=dieciocho+178+santiago&ie=UTF-8&hq=&hnear=0x9662c507dbea5009:0xd9ee1381cab85bfc,Dieciocho+178,+Santiago,+Regi%C3%B3n+Metropolitana&gl=cl&ei=2on-UcHhA8voiwKGz4CoDg&ved=0CC0Q8gEwAA
   -->
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

    </script>

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

     



        <!--Menu central
        <div id="content" class="ui-layout-center">
          <div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;">
            </br>
            <form class="form-search">
              <input type="text" class="input-medium search-query">
              <button type="submit" class="btn">Search by id</button>
              </form>
          </div>
              <table class="table">
  
              </table>
        </div> -->
        <!--
        <div id="content" class="ui-layout-center">
        </br>
        <div id="map-canvas" style="width:1000px;height:513px;"></div>
        </div>
      -->

    <div id="content" class="ui-layout-center">
      <ul class="inline">
              <li>Mantenedor Universidad Tecnologica Metropolitana Calle Dieciocho 178.</li>
            </ul>
        <iframe width="1000px" height="513px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.cl/maps/ms?msa=0&amp;msid=218100718123341519715.0004e3236d53e83a0570e&amp;hl=es&amp;ie=UTF8&amp;t=m&amp;ll=-33.44881,-70.657797&amp;spn=0,0&amp;output=embed">
        </iframe><br />
        <small>Ver 
        <a href="https://maps.google.cl/maps/ms?msa=0&amp;msid=218100718123341519715.0004e3236d53e83a0570e&amp;hl=es&amp;ie=UTF8&amp;t=m&amp;ll=-33.44881,-70.657797&amp;spn=0,0&amp;source=embed" style="color:#0000FF;text-align:left">Mantenedor Universidad Tecnologica Metropolitana
        </a> en un mapa ampliado
           <script>var pfHeaderImgUrl = '';var pfHeaderTagline = '';var pfdisableClickToDel = 0;var pfHideImages = 0;var pfImageDisplayStyle = 'right';var pfDisablePDF = 0;var pfDisableEmail = 0;var pfDisablePrint = 0;var pfCustomCSS = '';var pfBtVersion='1';(function(){var js, pf;pf = document.createElement('script');pf.type = 'text/javascript';if('https:' == document.location.protocol){js='https://pf-cdn.printfriendly.com/ssl/main.js'}else{js='http://cdn.printfriendly.com/printfriendly.js'}pf.src=js;document.getElementsByTagName('head')[0].appendChild(pf)})();</script>
           <a href="http://www.printfriendly.com" style="color:#6D9F00;text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF">
            <img style="border:none;-webkit-box-shadow:none;box-shadow:none;margin:0 6px"  src="http://cdn.printfriendly.com/pf-print-icon.gif" width="16" height="15" alt="Print Friendly Version of this page" />Print 
            <img style="border:none;-webkit-box-shadow:none;box-shadow:none;margin:0 6px"  src="http://cdn.printfriendly.com/pf-pdf-icon.gif" width="12" height="12" alt="Get a PDF version of this webpage" />PDF
          </a> 
      </small>
      </div>

<!-- 
<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        margin: 0;
        padding: 0;
        height: 100%;
      }
    </style>
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

    </script>
  </head>

  <body>
    <div id="map-canvas"></div>
  </body>
</html>
-->



    <footer class="ui-layout-south"></footer>
    </body>

</html>
