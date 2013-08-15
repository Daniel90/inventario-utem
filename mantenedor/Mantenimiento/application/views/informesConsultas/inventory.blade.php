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
        {{ HTML::style('css/TableTools.css') }}
        {{ HTML::style('css/TableTool_JUI.css') }}
        <script type="text/javascript">
      var webroot = '/foro/index.blade.php';var wroot = '/Laravel/public/';var jsession_data = [];var theme = "UI Lightness";
    </script>
    <style type="text/css">
      @import "/css/demo_page.css";
      @import "/css/demo_table.css";
    </style>
    <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
    <script class="jsbin" src="http://datatables.net/download/build/jquery.dataTables.nightly.js"></script>
      
        {{ HTML::script('js/jquery-1.4.2.min.js') }} <!--necesario-->
        {{ HTML::script('js/jquery-ui-1.8.6.custom.min.js') }} <!--necesario-->
        {{ HTML::script('js/jquery.layout.min.js') }} <!--necesario-->
        {{ HTML::script('js/jquery.jqGrid.min.js') }} <!--necesario-->
        {{ HTML::script('js/themeswitchertool.js') }} <!--necesario-->
        {{ HTML::script('js/layout-default.js') }} 
        {{ HTML::script('js/jquery.dataTables.js') }}
        {{ HTML::script('js/jquery.dataTables.min.js') }}
        {{ HTML::script('js/TableTools.js') }}
        {{ HTML::script('js/TableTools.min.js') }}
        {{ HTML::script('js/ZeroClipboard.js') }}
      <script>
       $(document).ready(function() {
            $('#example').dataTable( {
                "aaSorting": [[ 1, "desc" ]],
                "bStateSave": true,
                "oLanguage": {
                  "sProcessing":     "Procesando...",
                  "sLengthMenu":     "Mostrar _MENU_ registros",
                  "sZeroRecords":    "No se encontraron resultados",
                  "sEmptyTable":     "Ningún dato disponible en esta tabla",
                  "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                  "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                  "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                  "sInfoPostFix":    "",
                  "sSearch":         "Buscar:",
                  "sUrl":            "",
                  "sInfoThousands":  ",",
                  "sLoadingRecords": "Cargando...",
                  "oPaginate": {
                      "sFirst":    "Primero",
                      "sLast":     "Último",
                      "sNext":     "Siguiente",
                      "sPrevious": "Anterior"
                  },
                  "oAria": {
                      "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            } );
        });

        
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
               <script>var pfHeaderImgUrl = '';var pfHeaderTagline = '';var pfdisableClickToDel = 0;var pfHideImages = 0;var pfImageDisplayStyle = 'right';var pfDisablePDF = 0;var pfDisableEmail = 0;var pfDisablePrint = 0;var pfCustomCSS = '';var pfBtVersion='1';(function(){var js, pf;pf = document.createElement('script');pf.type = 'text/javascript';if('https:' == document.location.protocol){js='https://pf-cdn.printfriendly.com/ssl/main.js'}else{js='http://cdn.printfriendly.com/printfriendly.js'}pf.src=js;document.getElementsByTagName('head')[0].appendChild(pf)})();</script><a href="http://www.printfriendly.com" style="color:#6D9F00;text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF"><img style="border:none;-webkit-box-shadow:none;box-shadow:none;" src="http://cdn.printfriendly.com/pf-button-both.gif" alt="Print Friendly and PDF"/></a>

          <div id="container">
                        <h3 class="text-info" style="text-align:center;">Bienes del inventario</h3>

      <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
        <!-- Cabecera -->

        <thead>
          <tr>
            <th>Centro de costo</th>
            <th>Tipo de bien</th>
            <th>ID del bien</th>
            <th>Número de serie</th>
            <th>Número de factura</th>
            <th>Nombre del bien</th>
            <th>Encargado</th>
            <th>Departamento</th>
            <th>Sede</th>
            <th>Año modelo</th>
          </tr>
        </thead>
        <!-- Cuerpo -->
        
        <tbody>
          @if($bienes)
            @foreach($bienes as $bien)
              <tr class="gradeA">
                <td class="center">{{ $bien -> centrocostos_id }}</td>  
                <td class="center">{{ $bien -> tipo }}</td>
                <td class="center">{{ $bien -> id }}</td>
                <td class="center">{{ $bien -> numeroserie }}</td>
                <td class="center">{{ $bien -> numerodefactura }}</td>
                <td class="center">{{ $bien -> nombre }}</td>
                <td class="center">{{ $bien -> encargado }}</td>
                <td class="center">{{ $bien -> departamento }}</td>
                <td class="center">{{ $bien -> sede }}</td>
                <td class="center">{{ $bien -> anomodelo }}</td>
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
            <th>Número de factura</th>
            <th>Nombre del bien</th>
            <th>Encargado</th>
            <th>Departamento</th>
            <th>Sede</th>
            <th>Año modelo</th>
          </tr>
        </tfoot>
      </table>

    </div>

              
            

        </div>
        
    </div>
    <footer class="ui-layout-south"></footer>
    </body>

</html>
