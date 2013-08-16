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
                <img src="../public/img/utem_estado_de_chile.png" alt="Universidad Tecnologica Metropolitana" />
               <!-- <img src="../public/img/top_app_logo.png" alt="Universidad Tecnologica Metropolitana" />
                <img src="../public/img/top_app_title1.png" alt="Mantenedor de Inventario" />  -->
            </h1>
            
             <!--<div id="version">V1.1</div>-->
            
      <div id="top-menu">
          <a href="/" rel="ui-icon-home">Inicio</a>
              
              {{ HTML::link('/logon','Admin',array('rel' => 'ui-icon-home')) }}   
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
<!---------------------------------------------------->
<!--<div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;"> 
<h3 class="text-info" style="text-align:center;">UTEM</h3>
</div> 
-->        
           
           </br>

<div id="social">
  <nav>
    <ul>
      <li><a href="http://www.linkedin.com/company/124589?trk=tyah" title="Linkedin" target="_blank" ><img src="../public/images/4.png" alt=""></a></li>
      <li><a href="https://twitter.com/utem" title="Twitter" target="_blank" ><img src="../public/images/5.png"></a></li>
      <li><a href="http://www.utem.cl/" title="UTEM" target="_blank" ><img src="../public/images/6.png" alt=""></a></li>
    </ul>
  </nav>
</div>


<div id="main">
  <div class="imagenes">
    <img src="../public/images/1.jpg"/>
    <img src="../public/images/2.jpg"/>
    <img src="../public/images/3.jpg"/>
</div>
  <div id="column-der">
  </div>
</div>


<style>

  #social{
    position: absolute;
    z-index: 2;
    right: 0px;
    top: 150px;
  }
  #social li{
    list-style-type: none;
  }

  #social img{
    margin-top: 3rem;
  }
  #main{
    background: url(../public/images/cream_pixels.png);
    position: relative;
    width: 80%;
    height: 100%;
    margin-top: 5rem;
    float: right;
  }
  #main .imagenes{
    margin: 5rem;
    width: 80%;
    height: 100%;
    float: left;
  }

  #column-der{
    background: #fff;
    opacity: 0.2;
    width: 22rem;
    height: 100%;
  }
</style>



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

