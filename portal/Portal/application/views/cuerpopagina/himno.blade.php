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



       <!--Menu central-->
        <div id="content" class="ui-layout-center">
          <hgroup>
            <legend>
              <h5 class="text-success" style="text-align:right;">
              <!--  <script>
              var f = new Date();
              document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
            </script> -->
          </h5>
              <h3 class="text-info" style="text-align:center;">Himno</h3>
              

            </legend>
          </hgroup>
          

          {{ Form::open('/altaBien','',array('style' =>'margin-left:10px;margin-right:10px')) }}

            <!--<h4>Misión</h4>-->
          </br>
            <ul class="inline">
              <li>Versos: Rubén Campos Aragón</br>
                  Música: Vicente Bianchi AlarcónSobre</br></br>
                     Sobre el noble pulso del pasado</br>
                      y al alba que viene del ayer</br>
                      asume el sol, que en lo alto desafía,</br>
                      el mañana de nuestro quehacer.</br></br>
                      Maravilla del conocimiento,</br>
                       luz sublime de la humanidad,</br>
                       honra, gloria y el valor del pensamiento,</br>
                       salve insigne Universidad.</br>
                       Adelante, UTEM, adelante</br>
                       con la alegría en su flor mayor</br>
                       vamos en pos de nuevos horizontes</br>
                      y siempre unidos por la vocación.</br></br>
                       Un espacio de joven desvelo</br>
                      luce en el tiempo su gala mejor</br>
                      y ciego brío en afán de alas</br>
                      mientras la vida abre su esplendor.</li>
            </ul>
          </br>

          
            


      {{ Form::close() }}

      
      
          
      
      </div>
    </div>
        
    </div>
    <footer class="ui-layout-south"></footer>
    </body>

</html>