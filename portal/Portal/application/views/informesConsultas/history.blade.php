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
        });
        function abre() {
            window.open("/dependencia","dependencia","width=300,height=500, top=100,left=100");
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
                {{ HTML::link('/history','Consultar bienes dados de baja') }}
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
            <th>Anterior centro de costo</th>
            <th>Encargado</th>
            <th>Departamento</th>
            <th>Sede</th>
            <th>Tipo de bien</th>
            <th>Identificador del bien</th>
          </tr>
        </thead>
        <!-- Cuerpo -->
        
        <tbody>
          @if($historiales)
            @foreach($historiales as $historial)
              <tr class="gradeA">
                <td class="center">{{ $historial -> centrocostos_id }}</td>
                <td class="center">{{ $historial-> encargado }}</td>
                <td class="center">{{ $historial -> departamento }}</td>
                <td class="center">{{ $historial -> sede }}</td>
                <td class="center">{{ $historial -> tipo }}</td>
                <td class="center">{{ $historial -> bienes_id }}</td>  
              </tr>
            @endforeach
          @endif   
        </tbody>
        <tfoot>
          <tr>
            <th>Anterior centro de costo</th>
            <th>Encargado</th>
            <th>Departamento</th>
            <th>Sede</th>
            <th>Tipo de bien</th>
            <th>Identificador del bien</th>
          </tr>
        </tfoot>
      </table>

    </div>
     <script>var pfHeaderImgUrl = '';var pfHeaderTagline = '';var pfdisableClickToDel = 0;var pfHideImages = 0;var pfImageDisplayStyle = 'right';var pfDisablePDF = 0;var pfDisableEmail = 0;var pfDisablePrint = 0;var pfCustomCSS = '';var pfBtVersion='1';(function(){var js, pf;pf = document.createElement('script');pf.type = 'text/javascript';if('https:' == document.location.protocol){js='https://pf-cdn.printfriendly.com/ssl/main.js'}else{js='http://cdn.printfriendly.com/printfriendly.js'}pf.src=js;document.getElementsByTagName('head')[0].appendChild(pf)})();</script><a href="http://www.printfriendly.com" style="color:#6D9F00;text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF"><img style="border:none;-webkit-box-shadow:none;box-shadow:none;" src="http://cdn.printfriendly.com/pf-button-both.gif" alt="Print Friendly and PDF"/></a>

              
            

        </div>
        
    </div>
    <footer class="ui-layout-south"></footer>
    </body>

</html>