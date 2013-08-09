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
      var webroot = '/foro/index.blade.php';var wroot = '/Laravel/public/';var jsession_data = [];var theme = "UI Lightness";
    </script>
    <style type="text/css">
      @import "/css/demo_page.css";
      @import "/css/demo_table.css";
    </style>
    <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
    <script class="jsbin" src="http://datatables.net/download/build/jquery.dataTables.nightly.js"></script>
      
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
      <script>
    $(document).ready(function() {
    $('#example').dataTable( {
        "aaSorting": [[ 1, "desc" ]],
        "sPaginationType": "full_numbers"
    } );
} );
    </script>
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
                  <li style="border-bottom: none;padding-bottom:0px;">
                      {{ HTML::link('/bajaBien','Baja de bienes') }}
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

          <div id="container">
      <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
        <!-- Cabecera -->
        <thead>
          <tr>
            <th>Centro de costo</th>
            <th>encargado</th> 
            <th>departamento</th>
            <th>sede</th>
            <th>teléfono</th>
           <!-- <th>updated_at</th>-->
          </tr>
        </thead>
        <!-- Cuerpo -->
        
        <tbody>
          @if($admins)
            @foreach($admins as $admin)
              <tr class="gradeA">
                <td class="center">{{ $admin -> id }}</td>  
                <td class="center">{{ $admin -> encargado }}</td>
                <td class="center">{{ $admin -> departamento }}</td>
                <td class="center">{{ $admin -> sede }}</td>
                <td class="center">{{ $admin -> telefono }}</td>
                <!--<td class="center">{{ $admin -> updated_at }}</td>-->
              </tr>
            @endforeach
          @endif   
        </tbody>
        <tfoot>
          <tr>
            <th>Centro de costo</th>
            <th>encargado</th> 
            <th>departamento</th>
            <th>sede</th>
            <th>teléfono</th>
            <!--<th>updated_at</th>-->
          </tr>
        </tfoot>
      </table>

    </div>
              
        </div>
        
    </div>
    <footer class="ui-layout-south"></footer>
    </body>

</html>