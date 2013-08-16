<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
               Universidad Tecnologica Metropolitana - Mantenedor de Inventario 
        </title>
        <a href = '/index.php/cuerpo'><img src="/img/top_app_logo.png" alt="Universidad Tecnologica Metropolitana" /></a>
        <a href = '/index.php/cuerpo'><img src="/img/top_app_title.png" alt="Mantenedor de Inventario" /></a>
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/UI Lightness/jquery-ui-1.8.6.custom.css') }}
    {{ HTML::style('css/ui.jqgrid.css') }}
    {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-responsive.css') }}
        <script type="text/javascript">
          var webroot = '/cuerpo/index.blade.php';var wroot = '/Laravel/public/';var jsession_data = [];var theme = "UI Lightness";
          function abre() {
              window.open("/dependencia","dependencia","width=300,height=500, top=100,left=100");
              return true;
            }
    </script>
      {{ HTML::script('js/jquery-1.4.2.min.js') }}
      {{ HTML::script('js/jquery-ui-1.8.6.custom.min.js') }}
      {{ HTML::script('js/jquery.layout.min.js') }}
      {{ HTML::script('js/i18n/grid.locale-sp.js') }}
      {{ HTML::script('js/jquery.jqGrid.min.js') }}
      {{ HTML::script('js/general.js') }}
      {{ HTML::script('js/themeswitchertool.js') }}
      {{ HTML::script('js/layout-default.js') }}
      {{ HTML::script('js/jscal2.js') }}
      {{ HTML::script('js/lang/es.js') }}
    </head>
    <body>
      <!--Cabecera de la pagina-->
      <header class="ui-layout-north">
            <h1>
                <img src="/img/top_app_logo.png" alt="Universidad Tecnologica Metropolitana" />
                <img src="/img/top_app_title.png" alt="Mantenedor de Inventario" />
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
        <!--Seccion control de bienes-->
        <div>
              <h3>
                <a href="#" rel="3" >Administrar</a>
            </h3>
            <div class="submenu">
                <ul>
                  <li>
                      {{ HTML::link('/altaBien','Alta de Bienes') }}
                  </li>
                  <li>
                      {{ HTML::link('/terminate','Baja de bienes') }}
                  </li>
                  <li>
                    {{ HTML::link('/cuerpo','Cambiar dependencias',array('onclick' => 'abre()')) }}
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
                      {{ HTML::link('/inventory','Consultar bienes de inventario') }}
                  </li>
                  <li>
                    {{ HTML::link('/history','Consultar historiales') }}
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
          </div>
        </div>




        <!--Menu central-->
        <div id="content" class="ui-layout-center">
          <hgroup>
            <legend>
              <h5 class="text-success" style="text-align:right;">
                <script>
              var f = new Date();
              document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
            </script> 
          </h5>
              <h3 class="text-info" style="text-align:center;">Formulario baja de bienes</h3>
              

            </legend>
          </hgroup>
          

          

    <form name="form1" method="post" action="" style="margin-left:50px;margin-right:50px">
      
    
      <h4>Identificación del bien</h4>
      <table width="896" border="0">
        <tr>
          <td width="170"><label>
            <input type="text" name="ninventario" id="ninventario">
        </tr>
        <tr>
          <td>Nº Inventario</td>
        </tr>
      </table>
      </br>
      <h4>Antecedentes de la baja</h4>
      <table width="870" border="0">
        <tr>
          <td width="144"><label>
            <input type="text" name="ndocumento" id="ndocumento">
          </label></td>
          <td width="144"><label>
            <input type="text" name="fechadocumento" id="fechadocumento">
          </label></td>
          <td width="144"><label>
            <input type="text" name="decretobaja" id="decretobaja">
          </label></td>
          <td width="420"><label>
            <input type="text" name="fechadecreto" id="fechadecreto">
          </label></td>
        </tr>
        <tr>
          <td>Nº Documento </td>
          <td>Fecha Documento</td>
          <td>Decreto Baja</td>
          <td>Fecha Decreto </td>
        </tr>
      

      </table>
      </br>
      <table width="300" border="0">
        <tr>
          <td width="80">Tipo  </td>
          <td width="210"><label>
            <input type="radio" name="radio" id="opcion_1" value="opcion_1">
          1. Oficio</label></td>
        </tr>
        <tr>
          <td>Documento</td>
          <td><label>
            <input type="radio" name="radio" id="opcion_2" value="opcion_2">
          2. Resolución</label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="radio" name="radio" id="opcion_3" value="opcion_3">
          3. Memoranda</label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="radio" type="radio" id="opcion_4" value="opcion_4" checked>
    4. Otro</td>
        </tr>
      </table>
       </br>
      <table width="857" border="0">
        <tr>
          <td width="851"><label>
            <input name="motivodelabaja" type="text" id="motivodelabaja" size="100">
          </label></td>
        </tr>
        <tr>
          <td>Motivo de la Baja </td>
        </tr>
      </table>
    </br>
      <h4>Antecedentes contables</h4>
      <table width="300" border="0">
        <tr>
          <td><label>
            <input type="text" name="valoractualdelbien" id="valoractualdelbien">
          </label></td>
        </tr>
        <tr>
          <td>Valor Actual del Bien </td>
        </tr>
      </table>
      <table width="300" border="0">
        <tr>
          <td><label>
            <input type="text" name="depreciacion" id="depreciacion">
          </label></td>
          <td><label>
            <input type="text" name="valordelabaja" id="valordelabaja">
          </label></td>
        </tr>
        <tr>
          <td>Depreciacion </td>
          <td>Valor de la Baja </td>
        </tr>
      </table>
      <p>OBSERVACIONES</p>
      <p>
        <label>
          <textarea name="observaciones" cols="80" rows="10" id="observaciones"></textarea>
        </label>
      </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><br>
    </p>
    <input type="submit" value = "aceptar">
    </form>
<p>&nbsp;</p>

      
      
          
      
      </div>
    </div>






    <footer class="ui-layout-south"></footer>
    </body>

</html>