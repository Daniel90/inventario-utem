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
    {{ HTML::style('css/ui.jqgrid.css') }}
    {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-responsive.css') }}
        
        
        <script type="text/javascript">
      var webroot = '/foro/index.blade.php';var wroot = '/Laravel/public/';var jsession_data = [];var theme = "Trontastic";
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
              
            <h3 class="text-info" style="text-align:center;">Historia</h3>
              

            </legend>
          </hgroup>
          

          {{ Form::open('/altaBien','',array('style' =>'margin-left:10px;margin-right:10px')) }}

            <!--<h4>Historia</h4>-->
          </br>
            <ul class="inline">
              <li>La historia de la Universidad Tecnológica Metropolitana se remonta a 1981, ocasión en que el Estado creó 16 nuevas entidades de educación superior, entre ellas el Instituto Profesional de Santiago (IPS). Posteriormente, mediante la Ley Nº 19.239 publicada en el Diario Oficial con fecha 30 de agosto de 1993 y bajo el Gobierno del Presidente Patricio Aylwin Azócar, se crea la Universidad Tecnológica Metropolitana, UTEM, como una Institución de Educación Superior del Estado, autónoma, con personalidad jurídica y patrimonio propio. La promulgación de la ley se realizó en una emotiva ceremonia encabezada por el entonces Primer Mandatario y el Ministro de Educación de esos años, Jorge Arrate Mac Niven, en el Salón Montt-Varas del Palacio de La Moneda.
              El viernes 11 de mayo del 2001 la histórica Casa Central, ubicada en Dieciocho 161, pasó a manos de la UTEM, tras derogarse la ley 17.957 y publicarse en el Diario Oficial la ley “transfiérase a título gratuito, a la Universidad Tecnológica Metropolitana, el inmueble fiscal ubicado en la comuna de Santiago, calle Dieciocho 161”.
              La UTEM cuenta con tres Campus en la Región Metropolitana con más de 62 mil metros cuadrados de construcción entre aulas, laboratorios, bibliotecas, casinos y salones para eventos, y año a año recibe cerca de 1400 nuevos estudiantes.
              La UTEM es integrante del Consejo de Rectores de las Universidades Chilenas y del Consorcio de Universidades del Estado de Chile, prestigiosas entidades que agrupan a las Casas de Educación Superior públicas y tradicionales de nuestro país.</li>
            </ul>
          </br>

          <h4>Primer Consejo Superior</h4>
          </br>
            <ul class="inline">
              <li>El lunes 14 de noviembre de 1994 se constituyó el primer Consejo Superior de la Universidad. Estuvo integrado por Raúl Atria Benapres, Edgardo Enríquez Frodden, Ricardo Wilhelman Perelman, Liliana Anduaga García, Jorge Braghiroli Reggiani, Julio Martínez Valdés, Santiago Zapata Cáceres y René Zorrilla Fuenzalida. Ellos iniciaron una interesante labor mancomunada con las autoridades, que permitiría avanzar en dirección del crecimiento.</li>
            </ul>
          </br>
            


      {{ Form::close() }}

      
      
          
      
      </div>
    </div>
        
    </div>
    <footer class="ui-layout-south"></footer>
    </body>

</html>