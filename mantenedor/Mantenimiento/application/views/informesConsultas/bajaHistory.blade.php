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
    <style type="text/css" title="currentStyle">
      @import "/css/demo_page.css";
      @import "/css/demo_table.css";
      @import "/css/TableTools.css";
      tr.selected {
        background-color: red !important;
      }
    </style>
    <script type="text/javascript" charset="utf-8" src="/js/jquery.js"></script>
    <script type="text/javascript" charset="utf-8" src="/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" src="/js/ZeroClipboard.js"></script>
    <script type="text/javascript" charset="utf-8" src="/js/TableTools.js"></script>
      
      {{ HTML::script('js/jquery.validate.js') }}
      
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
        $(document).ready( function () {
        
        var oTable = $('#example').dataTable({
          
          "sPaginationType": "full_numbers",
          "oLanguage": {
            "sLengthMenu": "Mostrar _MENU_ registros por pagina",
            "sZeroRecords": "No se encontraron resultados",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Ningún dato disponible en esta tablas",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch":         "Buscar:"
            
          },
          "sDom": 'T<"clear">lfrtip',
          "oTableTools": {
            "sSwfPath": "/swf/copy_csv_xls_pdf.swf",
          }

          });
             } );
        function abre() {
            window.open("/dependencia","dependencia","width=300,height=500, top=100,left=100");
          return true;
        }
        function abreS() {
              window.open("/serial","serial","width=300,height=500, top=100,left=100");
            return true;
          }
       
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
                  <li>
                      {{ HTML::link('/bajaBien','Baja de bienes') }}
                  </li>
                  <li>
                    {{ HTML::link('/inventory','Cambiar dependencias',array('onclick' => 'abre()')) }}
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
                      {{ HTML::link('/inventory','Consultar bienes de inventario') }}
                  </li>
                  <li>
                    {{ HTML::link('/history','Consultar historiales') }}
                </li>
                {{ HTML::link('/bajaHistory','Consultar bienes dados de baja') }}
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
            <h3 class="text-info" style="text-align:center;">Bienes dados de baja</h3>
      <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
        <!-- Cabecera -->
        <thead>
          <tr>
            <th>Centro de costo</th>
            <th>Tipo de bien</th>
            <th>ID del bien</th>
            <th>Número de serie</th>
            <th>Decreto de baja</th>
            <th>Nombre del bien</th>
            <th>Encargado</th>
            <th>Departamento</th>
            <th>Sede</th>
            <th>Motivo de la baja</th>
            <th>Valor actual del bien</th>
            <th>Número del formulario de baja</th>
            <th>Valo de baja</th>
          </tr>
        </thead>
        <!-- Cuerpo -->
        
        <tbody>
          @if($bajas)
            @foreach($bajas as $baja)
              <tr class="gradeA">
                <td class="center">{{ $baja -> centrocostos_id }}</td>  
                <td class="center">{{ $baja -> tipo }}</td>
                <td class="center">{{ $baja -> id }}</td>
                <td class="center">{{ $baja -> numeroserie }}</td>
                <td class="center">{{ $baja -> decretobaja }}</td>
                <td class="center">{{ $baja -> nombre }}</td>
                <td class="center">{{ $baja -> encargado }}</td>
                <td class="center">{{ $baja -> departamento }}</td>
                <td class="center">{{ $baja -> sede }}</td>
                <td class="center">{{ $baja -> motivobaja }}</td>
                <td class="center">{{ $baja -> valoractualbien }}</td>
                <td class="center">{{ $baja -> numerodocumento }}</td>
                <td class="center">{{ $baja -> valordebaja }}</td>
              </tr>
            @endforeach
          @endif   
        </tbody>
        <tfoot>
          <tr>
            <th>Centro de costo</th>
            <th>Tipo de bien</th>
            <th>ID del bien</th>
            <th>Número de serie</th>
            <th>Decreto de baja</th>
            <th>Nombre del bien</th>
            <th>Encargado</th>
            <th>Departamento</th>
            <th>Sede</th>
            <th>Motivo de la baja</th>
            <th>Valor actual del bien</th>
            <th>Número del formulario de baja</th>
            <th>Valo de baja</th>
          </tr>
        </tfoot>
      </table>

    </div>

              
            

        </div>
        
    </div>
    <footer class="ui-layout-south"></footer>
    </body>

</html>
