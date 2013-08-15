<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
               Universidad Tecnologica Metropolitana - Sistema de Inventario 
        </title>
        <link href="/img/favicon.ico" type="image/x-icon" rel="icon" />
    <link href="/img/favicon.ico" type="image/x-icon" rel="shortcut icon" />
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/UI Lightness/jquery-ui-1.8.6.custom.css') }}
    
    
   
    {{ HTML::style('css/ui.jqgrid.css') }}
    {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-responsive.css') }}
        
        <script type="text/javascript">
      var webroot = '/home/index.blade.php';var wroot = '/Laravel/public/';var jsession_data = [];var theme = "UI Lightness";
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

<!-- ----------------------------------------------------------------- -->
<!--
      {{ HTML::script('js/jquery.infinitecarousel3.js') }}
      {{ HTML::script('js/jquery.infinitecarousel3.min.js') }}  -->

<!--{{ HTML::script('js/jquery.min.js') }} -->
{{ HTML::script('js/jquery.infinitecarousel.js') }}

<script type="text/javascript">

$(function(){
  $('#carousel').infiniteCarousel({
    displayTime: 6000,
    textholderHeight : .25
  });
});
</script>
<style type="text/css">
body {
  padding-top: 50px;
}
#carousel {
  margin: 0 auto;
  width: 400px;
  height: 390px;
  padding: 0;
  overflow: scroll;
  border: 2px solid #999;
}
#carousel ul {
  list-style: none;
  width: 1500px;
  margin: 0;
  padding: 0;
  position: relative;
}
#carousel li {
  display: inline;
  float: left;
}
.textholder {
  text-align: left;
  font-size: small;
  padding: 6px;
  -moz-border-radius: 6px 6px 0 0;
  -webkit-border-top-left-radius: 6px;
  -webkit-border-top-right-radius: 6px;
}
</style>
<!-------------------------------------------------------------------- -->



    </head>
    
    <body>
      <!--Cabecera de la pagina-->
      <header class="ui-layout-north">
            <h1>
                <img src="/img/utem_estado_de_chile" alt="Universidad Tecnologica Metropolitana" />
               
            </h1>
            
             <!--<div id="version">V1.1</div>-->
            
      <div id="top-menu">
          <a href="/" rel="ui-icon-home">Inicio</a>
              
              {{ HTML::link('/logon','Admin',array('rel' => 'forward_enabled_hover')) }}   
      </div>
      
      
      
      <!--<div id="version">
        V1.1
      </div> -->
      
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
                    {{ HTML::link('/ubicacion','Ubicacion') }}
                  </li>
                </ul>
              </div>
            </div>
            <
</br>
          </div>
              
        </div>
    
        <
<!---------------------------------------------------->
               
           </br>
        <div id="carousel" class="ui-layout-center">
          
          <ul>

    <li><img src="/img/foto1.jpg" alt="" width="1000px" height="413px" />
      <p>El nuevo período de acreditación se extiende desde el 28 de diciembre de 2011 hasta el 28 de diciembre de 2013 en las Áreas de Gestión Institucional y Docencia de Pregrado, confirmando que los pasos dados y las decisiones tomadas, correspondían a los principios de calidad y transparencia demandados para una educación superior de excelencia. 
      </p>
    </li>
   
    <li><img src="/img/9007339.png" alt="" width="1000px" height="413px" />
      <p>La oferta académica de pregrado de la UTEM es amplia y variada, ofrece 30 carreras diurnas y 16 vespertinas.El Modelo Educativo de la Universidad Tecnológica Metropolitana, se basa en los principios plasmados por la Declaración Mundial sobre la Educación Superior para el siglo XXI: Visión y Acción, París 09 de octubre de 1998, y la normativa para la instalación de un sistema de aseguramiento de la calidad en la educación superior impulsada por la Comisión Nacional de Acreditación (CNA).
       </p>
    </li>
    <li><img src="/img/las-palmeras.jpg" alt="" width="1000px" height="413px" />
      <p>En la UTEM existe acceso a beneficios socioeconómicos estatales que brinda el Ministerio de Educación, en especial el Fondo Solidario de Crédito Universitario y otras becas que pueden ver detalladamente en la página web: www.becasycreditos.cl.
       </p> 
    </li>
     
  </ul>
</div>

<code>
#carousel ul {<br />
&nbsp;&nbsp;&nbsp; list-style: none;<br />
&nbsp;&nbsp;&nbsp; width: 1500px;<br />
&nbsp;&nbsp;&nbsp; margin: 0;<br />
&nbsp;&nbsp;&nbsp; padding: 0;<br />
&nbsp;&nbsp;&nbsp; position: relative;<br />
}<br />
#carousel li {<br />
&nbsp;&nbsp;&nbsp; display: inline;<br />
&nbsp;&nbsp;&nbsp; float: left;<br />
} 
</code>


  <!----------------------------------------------------> 

    <footer class="ui-layout-south"></footer>
    </body>

</html>


