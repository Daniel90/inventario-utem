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
        {{ HTML::style('css/jscal2.css') }}
        {{ HTML::style('css/border-radius.css') }}
        {{ HTML::style('css/steel/steel.css') }}

        <script type="text/javascript">
			     var webroot = '/cuerpo/index.blade.php';var wroot = '/Laravel/public/';var jsession_data = [];var theme = "UI Lightness";
           function formReset()
           {
              document.getElementById("altaBien").reset();
           }
           function pregunta()
           {
              if (confirm('¿Esta seguro que desea dar de alta este bien?')){
                document.altaBien.submit();
              }

            }
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
      				<h3 class="text-info" style="text-align:center;">Formulario alta de bienes</h3>
      				

      			</legend>
      		</hgroup>
      		

      		{{ Form::open('/altaBien','',array('id' => 'altaBien','style' =>'margin-left:50px;margin-right:50px;')) }}

      			<h4>Identificación del organismo</h4>
      			{{ Form::select('codigoCentro_select',array('centro de costo 1.' => 'centro de costo 1.','centro de costo 2.' => 'centro de costo 2.','centro de costo 3.' => 'centro de costo 3.','centro de costo 4.' => 'centro de costo 4.')) }}
      			</br>
      			</br>
      			
      			<h4>Identificación del bien</h4>
      			{{ Form::text('grupo_text','',array('style' => 'width:40px;','placeholder' => 'Grupo')) }}
      			/
      			{{ Form::text('subGrupo_text','',array('style' => 'width:40px;','placeholder' => 'S-G')) }}
      			/
      			{{ Form::text('tipo_text','',array('style' => 'width:40px;','placeholder' => 'Tipo')) }}
      			{{ Form::text('nombre_text','',array('style' => 'width:675px;margin-left:20px;','placeholder' => 'Nombre')) }}</br>
      			<ul class="inline">
      				<li>Grupo</li>
      				/
      				<li>Sub-grupo</li>
      				/
      				<li>Tipo</li>
      				<li style="margin-left:15px;">Nombre</li>
      			</ul>
      			</br>
      			{{ Form::text('numeroFactura_text','',array('class' => 'input-small','placeholder' => 'N° de factura','required')) }}
      			{{ Form::select('tipo_select', array('w' => 'w','x' => 'x','y' => 'y','z' => 'z'),'w',array('style' => 'width:50px;margin-left:25px;' )) }}
      			-
      			{{ Form::text('id_text','',array('class' => 'input-small','placeholder' => 'Asignación','required')) }}
      			{{ Form::text('largo_text','',array('class' => 'input-small','placeholder' => 'Largo','style' => 'margin-left:25px;')) }}
      			{{ Form::text('ancho_text','',array('class' => 'input-small','placeholder' => 'Ancho')) }}
      			{{ Form::text('alto_text','',array('class' => 'input-small','placeholder' => 'Alto')) }}
      			{{ Form::select('uMedida_select',array('mm' => 'milimetros','cm' => 'centimetros', 'mt' => 'metros'),'metros',array('style' => 'margin-left:25px;')) }}

            <ul class="inline">
              <li># Factura</li>
              <li style="margin-left: 60px;">Número de asignación(*)</li>
              <li style="margin-left: 20px;" >Largo</li>
              <li style="margin-left: 60px;">Ancho</li>
              <li style="margin-left: 55px;">Alto</li>
              <li style="margin-left: 95px;">U de medidas</li>
            </ul>
            </br>
            <h4>Características del bien</h4>
      			{{ Form::text('modelo_text','',array('placeholder' => 'Modelo')) }}
            {{ Form::text('numeroSerie_text','',array('placeholder' => 'N° de serie','style' => 'margin-left: 30px;')) }}
            <select name = "anoModelo" style="width:100px; margin-left:30px;">
                @for($i=1950;$i<=2013;$i++)
                {
                    <?php
                      echo "<option value = '$i'>$i</option>";
                    ?>
                }
                @endfor
            </select>
            {{ Form::text('marca_text','',array('placeholder' => 'Marca','style' => 'margin-left:30px;width:250px')) }}
            <ul class="inline">
              <li>Modelo</li>
              <li style="margin-left: 200px;">Número de serie(*)</li>
              <li style="margin-left: 110px;" >Año modelo</li>
              <li style="margin-left: 50px;">Marca</li>
            </ul>
          </br>
          <h4>Antecedentes contables</h4>

          {{ Form::text('folioComprobante_text','',array('placeholder' => 'Folio comprobante')) }}
          {{ Form::text('fechaComprobante_text','',array('id' => 'f_rangeStart','size' => '15','OnFocus' => 'this.blur()','style' => 'width:75px;margin-left:30px')) }}
          <button id="f_rangeStart_trigger" class="btn btn-mini">...</button>
          <script type="text/javascript">
               RANGE_CAL_1 = new Calendar({
                       inputField: "f_rangeStart",
                       dateFormat: "%d/%m/%Y",
                       trigger: "f_rangeStart_trigger",
                       bottomBar: false,
                       onSelect: function() {
                               var date = Calendar.intToDate(this.selection.get());
                               LEFT_CAL.args.min = date;
                               LEFT_CAL.redraw();
                               this.hide();
                       }
               });
          </script>
          {{ Form::text('fechaCompra_text','',array('id' => 'f_rangeStart2','size' => '15','OnFocus' => 'this.blur()','style' => 'width:75px;margin-left:30px')) }}
          <button id="f_rangeStart_trigger2" class="btn btn-mini">...</button>
          <script type="text/javascript">
               RANGE_CAL_1 = new Calendar({
                       inputField: "f_rangeStart2",
                       dateFormat: "%d/%m/%Y",
                       trigger: "f_rangeStart_trigger2",
                       bottomBar: false,
                       onSelect: function() {
                               var date = Calendar.intToDate(this.selection.get());
                               LEFT_CAL.args.min = date;
                               LEFT_CAL.redraw();
                               this.hide();
                       }
               });
          </script>
          {{ Form::text('vidaUtil_text','',array('style' => 'margin-left:30px;width:20px;','maxlength' => '2')) }} Años
          {{ Form::text('NumUnidades_text','',array('placeholder' => 'N° de unidades','style' => 'margin-left:30px;width:100px;')) }}
          <ul class="inline">
              <li>Folio Comprobante</li>
              <li style="margin-left: 100px;">Fecha comprobante</li>
              <li style="margin-left: 25px;" >Fecha compra</li>
              <li style="margin-left: 45px;">Vida útil</li>
              <li style="margin-left: 45px;">N° de unidades</li>
          </ul>
        </br>
          {{ Form::text('valorUnitario_text','',array('placeholder' => 'valor unitario')) }} pesos
          {{ Form::text('cuentaMayor_text','',array('placeholder' => 'Cuenta de mayor','style' => 'margin-left:30px;')) }} 
          {{ Form::text('valorTotal_text','',array('placeholder' => 'Valor total','style' => 'margin-left:30px;')) }} pesos
          <ul class="inline">
              <li>Valor unitario</li>
              <li style="margin-left: 200px;">Cuenta de mayor</li>
              <li style="margin-left: 130px;" >Valor total</li>
          </ul>
        </br>
        <input type = "submit" value = "Dar de alta el bien" class = "btn btn-large btn-primary" onclick = "pregunta()">
        <input class="btn btn-large btn-info" type="button" onclick="formReset()" value="Limpiar">

			{{ Form::close() }}

			
			
      		
			
			</div>
		</div>






		<footer class="ui-layout-south"></footer>
    </body>

</html>