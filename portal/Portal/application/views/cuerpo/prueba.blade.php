<!doctype html>
<html>
  <head>
        <meta charset="utf-8">
        <title>
               Universidad Tecnologica Metropolitana - Mantenedor de Inventario 
        </title></title>
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

    <script type="text/javascript" charset="utf-8">

 $(document).ready( function () {
        
        var oTable = $('#example').dataTable({
       "sDom": 'T<"clear">lfrtip',
       "oTableTools": {
      "sSwfPath": "/swf/copy_csv_xls_pdf.swf"
    }
        });
        
      } );
    </script>

</head>
  <body id="dt_example">

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
    <div id="container">
      <div class="full_width big">
        
      </div>
      
    
      <div id="demo">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
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
      </div>
      <div class="spacer"></div>
      <div id="footer" style="text-align:center;">
      </div>
    </div>
  </body>
</html>