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
      var webroot = '/home/index.blade.php';var wroot = '/Laravel/public/';var jsession_data = [];var theme = "UI Lightness";
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
      
      <!-- <script>
        $(document).ready(function() {
            $('#example').dataTable( {
                "aaSorting": [[ 1, "desc" ]],
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
        
    </script>-->


      <script>
$(document).ready( function () {
        
        var oTable = $('#example').dataTable({
          
          "sPaginationType": "full_numbers",
          "oLanguage": {
            "sLengthMenu": "Mostrar _MENU_ registros",
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
</script>
    
    


    </head>
    <body>
       
      <!--Cabecera de la pagina-->
      <header class="ui-layout-north">
            <h1>
                <img src="/img/utem_estado_de_chile" alt="Universidad Tecnologica Metropolitana" />
               <!-- <img src="/img/top_app_logo.png" alt="Universidad Tecnologica Metropolitana" />
                <img src="/img/top_app_title1.png" alt="Mantenedor de Inventario" />  -->
            </h1>
            
            
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
          </h5>
              <h3 class="text-info" style="text-align:center;">Busqueda y Vista de Bienes</h3>
            </legend>
          </hgroup>
         
          <div id="container">
          <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
        <!-- Cabecera -->
        <thead>
          <tr>
            <th>Cod. bien</th>
              <!--  <th>Nº de Factura</th>-->
            <th>Nombre</th>
           <th>Tipo</th>
            <th>Centro de Costos</th>
              <!--  <th>Largo</th>
                <th>Ancho</th>
                <th>Alto</th>
                <th>Unid. de Medidas</th>-->
            <th>Modelo</th>
            <th>Nº de Serie</th>
           <!-- <th>Año del Modelo</th>-->
            <th>Marca</th>
               <!--   <th>Folio</th>
                  <th>Fecha Comprobante</th>-->
            <th>Fecha Compra</th>
            <th>Vida Util</th>
               <!--   <th>Nº de Unidades</th>
                  <th>Valor Unitario</th>
                  <th>Cuenta de Mayor</th>
                  <th>Valor Total</th> -->
          </tr>
        </thead>

        <!-- Cuerpo -->
        
        <tbody>
          @if($bienes)
            @foreach($bienes as $biene)
              <tr class="gradeA">
                <td class="center">{{ $biene -> id }}</td>      
                
                <td class="center">{{ $biene -> nombre }}</td>
                <td class="center">{{ $biene -> tipo }}</td>
                <td class="center">{{ $biene -> centrocostos_id }}</td>
                
                <td class="center">{{ $biene -> modelo }}</td> 
                <td class="center">{{ $biene -> numeroserie }}</td>
                
                <td class="center">{{ $biene -> marca }}</td>
                
                <td class="center">{{ $biene -> fechacompra }}</td>
                <td class="center">{{ $biene -> vidautil }}</td>
                 
              </tr>
            @endforeach
          @endif   
        </tbody>
        
        <tfoot>
           <tr>
            <th>Cod. bien</th>
              <!--  <th>Nº de Factura</th>-->
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Centro de Costos</th>
              <!--  <th>Largo</th>
                <th>Ancho</th>
                <th>Alto</th>
                <th>Unid. de Medidas</th>-->
            <th>Modelo</th>
            <th>Nº de Serie</th>
            <!--<th>Año del Modelo</th>-->
            <th>Marca</th>
               <!--   <th>Folio</th>
                  <th>Fecha Comprobante</th>-->
            <th>Fecha Compra</th>
            <th>Vida Util</th>
               <!--   <th>Nº de Unidades</th>
                  <th>Valor Unitario</th>
                  <th>Cuenta de Mayor</th>
                  <th>Valor Total</th> -->
          </tr>
        </tfoot>

      </table>

    <!--</div>
    </br>
      <script>var pfHeaderImgUrl = '';var pfHeaderTagline = '';var pfdisableClickToDel = 0;var pfHideImages = 0;var pfImageDisplayStyle = 'right';var pfDisablePDF = 0;var pfDisableEmail = 0;var pfDisablePrint = 0;var pfCustomCSS = '';var pfBtVersion='1';(function(){var js, pf;pf = document.createElement('script');pf.type = 'text/javascript';if('https:' == document.location.protocol){js='https://pf-cdn.printfriendly.com/ssl/main.js'}else{js='http://cdn.printfriendly.com/printfriendly.js'}pf.src=js;document.getElementsByTagName('head')[0].appendChild(pf)})();</script>
       <a href="http://www.printfriendly.com" style="color:#6D9F00;text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF">
          <img style="border:none;-webkit-box-shadow:none;box-shadow:none;margin:0 6px"  src="http://cdn.printfriendly.com/pf-print-icon.gif" width="16" height="15" alt="Print Friendly Version of this page" />Print 
         <img style="border:none;-webkit-box-shadow:none;box-shadow:none;margin:0 6px"  src="http://cdn.printfriendly.com/pf-pdf-icon.gif" width="12" height="12" alt="Get a PDF version of this webpage" />PDF
       </a>  
    
    </div> -->
  </br>
  <!--</br>
        <ul class="inline">
              <li style="margin-left: 60px;">_____________________</li>
              <li style="margin-left: 500px;">_____________________</li>
        </ul>
        <ul class="inline">
              <li style="margin-left: 60px;">Firma Unidad De Inventario</li>
              <li style="margin-left: 500px;" >Firma Encargado De Oficina</li>
        </ul>

        <ul class="center">
              <p> Acta: Esta estrictamente prohibido efectuar movimiento de los bienes aqui especificados sin la autorizacion del jefe de oficina y de la unidad de inventario.</p>
            </ul>
          -->
    </div>
    <footer class="ui-layout-south"></footer>
    </body>

</html>
