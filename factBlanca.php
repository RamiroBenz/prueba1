<?php 

/* 

*/

$numFact = $_POST['numFact'];
$fecha = $_POST['fecha'];


$cliente = $_POST['cliente'];
$direccion = $_POST['direccion'];
$resp = $_POST['iva'];

$localidad = $_POST['localidad'];
$provincia = $_POST['provincia'];
$cuit = $_POST['cuit'];

$cant1 = $_POST['cantidad1'];  $cant2 = $_POST['cantidad2'];  $cant3 = $_POST['cantidad3'];  $cant4 = $_POST['cantidad4'];  $cant5 = $_POST['cantidad5'];  $cant6 = $_POST['cantidad6'];  $cant7 = $_POST['cantidad7'];  $cant8 = $_POST['cantidad8'];  $cant9 = $_POST['cantidad9'];  $cant10 = $_POST['cantidad10'];  $cant11 = $_POST['cantidad11'];  $cant12 = $_POST['cantidad12'];  $cant13 = $_POST['cantidad13'];  $cant14 = $_POST['cantidad14'];  $cant15 = $_POST['cantidad15'];  $cant16 = $_POST['cantidad16'];  $cant17 = $_POST['cantidad17'];  $cant18 = $_POST['cantidad18'];

$cod1 = $_POST['codigo1']; $cod2 = $_POST['codigo2']; $cod3 = $_POST['codigo3']; $cod4 = $_POST['codigo4']; $cod5 = $_POST['codigo5']; $cod6 = $_POST['codigo6']; $cod7 = $_POST['codigo7']; $cod8 = $_POST['codigo8']; $cod9 = $_POST['codigo9']; $cod10 = $_POST['codigo10']; $cod11 = $_POST['codigo11']; $cod12 = $_POST['codigo12']; $cod13 = $_POST['codigo13']; $cod14 = $_POST['codigo14']; $cod15 = $_POST['codigo15']; $cod16 = $_POST['codigo16']; $cod17 = $_POST['codigo17']; $cod18 = $_POST['codigo18']; 

$desc1 = $_POST['descripcion1']; $desc2 = $_POST['descripcion2']; $desc3 = $_POST['descripcion3']; $desc4 = $_POST['descripcion4']; $desc5 = $_POST['descripcion5']; $desc6 = $_POST['descripcion6']; $desc7 = $_POST['descripcion7']; $desc8 = $_POST['descripcion8']; $desc9 = $_POST['descripcion9']; $desc10 = $_POST['descripcion10']; $desc11 = $_POST['descripcion11']; $desc12 = $_POST['descripcion12']; $desc13 = $_POST['descripcion13']; $desc14 = $_POST['descripcion14']; $desc15 = $_POST['descripcion15']; $desc6 = $_POST['descripcion16']; $desc7 = $_POST['descripcion17']; $desc8 = $_POST['descripcion18']; 


$pre1 = $_POST['precio1']; $pre2 = $_POST['precio2']; $pre3 = $_POST['precio3']; $pre4 = $_POST['precio4']; $pre5 = $_POST['precio5']; $pre6 = $_POST['precio6']; $pre7 = $_POST['precio7']; $pre8 = $_POST['precio8']; $pre9 = $_POST['precio9']; $pre10 = $_POST['precio10']; $pre11 = $_POST['precio11']; $pre12 = $_POST['precio12']; $pre13 = $_POST['precio13']; $pre14 = $_POST['precio14']; $pre15 = $_POST['precio15']; $pre16 = $_POST['precio16']; $pre17 = $_POST['precio17']; $pre18 = $_POST['precio18']; 

$iva1 = $_POST['detalleImporteIVA1']; $iva2 = $_POST['detalleImporteIVA2']; $iva3 = $_POST['detalleImporteIVA3']; $iva4 = $_POST['detalleImporteIVA4']; $iva5 = $_POST['detalleImporteIVA5']; $iva6 = $_POST['detalleImporteIVA6']; $iva7 = $_POST['detalleImporteIVA7']; $iva8 = $_POST['detalleImporteIVA8']; $iva9 = $_POST['detalleImporteIVA9']; $iva10 = $_POST['detalleImporteIVA10']; $iva11 = $_POST['detalleImporteIVA11']; $iva12 = $_POST['detalleImporteIVA12']; $iva13 = $_POST['detalleImporteIVA13']; $iva14 = $_POST['detalleImporteIVA14']; $iva15 = $_POST['detalleImporteIVA15']; $iva16 = $_POST['detalleImporteIVA16']; $iva17 = $_POST['detalleImporteIVA17']; $iva18 = $_POST['detalleImporteIVA18']; 

$subtotal1 = $_POST['detalleSubtotal1']; $subtotal2 = $_POST['detalleSubtotal2']; $subtotal3 = $_POST['detalleSubtotal3']; $subtotal4 = $_POST['detalleSubtotal4']; $subtotal5 = $_POST['detalleSubtotal5']; $subtotal6 = $_POST['detalleSubtotal6']; $subtotal7 = $_POST['detalleSubtotal7']; $subtotal8 = $_POST['detalleSubtotal8']; $subtotal9 = $_POST['detalleSubtotal9']; $subtotal10 = $_POST['detalleSubtotal10']; $subtotal11 = $_POST['detalleSubtotal11']; $subtotal12 = $_POST['detalleSubtotal12']; $subtotal13 = $_POST['detalleSubtotal13']; $subtotal14 = $_POST['detalleSubtotal14']; $subtotal15 = $_POST['detalleSubtotal15']; $subtotal16 = $_POST['detalleSubtotal16']; $subtotal17 = $_POST['detalleSubtotal17']; $subtotal18 = $_POST['detalleSubtotal18']; 

$subtotal = $subtotal1+$subtotal2+$subtotal3+$subtotal4+$subtotal5+$subtotal6+$subtotal7+$subtotal8+$subtotal9+$subtotal10+$subtotal11+$subtotal12+$subtotal13+$subtotal14+$subtotal15+$subtotal16+$subtotal17+$subtotal18;

$iva = $_POST['impIVA21'];
/*$iva1+$iva2+$iva3+$iva4+$iva5+$iva6+$iva7+$iva8+$iva9+$iva10+$iva11+$iva12+$iva13+$iva14+$iva15+$iva16+$iva17+$iva18;*/

$total = $_POST['impTotal'];

 ?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Factura</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="http://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>


		<!-- <link type="text/css" href="css/jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet" /> -->
		<link type="text/css" href="css/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet" />
		<!-- <link type="text/css" href="css/blitzer_jig/jquery-ui-1.8.15.custom.css" rel="stylesheet" /> -->
		<link type="text/css" href="css/jquery.notice.css" rel="stylesheet" />
		<link type="text/css" href="css/jquery.jBreadCrumb.css" rel="stylesheet" />
		<link type="text/css" href="css/validationEngine.jquery.css" rel="stylesheet" />
		<link type="text/css" href="css/jquery.notice.css" rel="stylesheet" />
		<link type="text/css" href="css/jquery.jBreadCrumb.css" rel="stylesheet" />
		<link type="text/css" href="css/validationEngine.jquery.css" rel="stylesheet" />
	<!--[if !IE]><!-->
		<link type="text/css" href="jig_old.css" rel="stylesheet" />
		<link type="text/css" href="jig.css" rel="stylesheet" />
	<!--<![endif]-->
	<!--[if gte IE 9]>
		<link type="text/css" href="css/jig_old_ie_9.css?v=20151216" rel="stylesheet" />
		<link type="text/css" href="css/jig_ie_9.css?v=20151216" rel="stylesheet" />
	<![endif]-->
	<!--[if lt IE 9]>
		<link type="text/css" href="css/jig_old_ie_6_8.css?v=20151216" rel="stylesheet" />
		<link type="text/css" href="css/jig_ie_6_8.css?v=20151216" rel="stylesheet" />
	<![endif]-->
		<style type="text/css">@import url(scripts/calendar/calendar-blue2.css);</style>
		<script type="text/javascript" src="scripts/calendar/calendar.js"></script>
		<script type="text/javascript" src="scripts/calendar/calendar-es.js"></script>
		<script type="text/javascript" src="scripts/calendar/calendar-setup.js"></script>

		<script type="text/javascript" src="js/logout.js"></script>
		<script type="text/javascript" src="js/jquery-1.12.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-migrate-1.3.0.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.4.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.datepicker-es.js"></script>
		<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
		<script type="text/javascript" src="js/jquery.notice.js"></script>
		<script type="text/javascript" src="js/jquery.cookie.js"></script>
		<script type="text/javascript" src="js/jquery.validationEngine.js" charset="utf-8"></script>
		<script type="text/javascript" src="js/jquery.validationEngine-es-jig.js" charset="utf-8"></script>
		<script type="text/javascript" src="js/jquery.form.js"></script>
	</head>
	<body>
		<div >
			<div class="numfe" align="rigth" style="width: 100%; height: 180px;">
				<table class="meta">
						<tr>
							<div class="atras">
								<td class="atras"><?php echo $numFact; ?></td>
							</div>
						</tr>
						<br>
						<br>
						<br>
						<tr>
							
							<div class="fecha">
								<td><?php echo $fecha; ?></td>
							</div>
						</tr>
						 <tr>
							
						</tr>
					</table>
				
			</div>
	<br>
	<div class="remitente" style="width: 100%;">
		<address contenteditable  style="display: flex;">
			<div style="margin-right: 20%;  width: 50%;">
				<p><b><?php echo $cliente; ?></b></p><br>
				<p><b><?php echo $direccion; ?></b></p><br>
				<p><b><?php echo $resp; ?></b></p><br>	
			</div>		
			<div class="rem2">	
				<p><b><?php echo $localidad; ?></b></p><br>
				<p><b><?php echo $provincia; ?></b></p><br>
				<p><b><?php echo $cuit; ?></b></p><br>
			</div>
		</address>
	</div>
	<br>
	<aside>
			
		<div contenteditable >
			<p>Cuenta Corriente 60 dias</p>
			<p></p>
		</div>
		<br>
	</aside>
			<!-- <table class="meta">
				<tr>
					<th><span contenteditable>Num</span></th>
					<td><span contenteditable>X0001-00004438</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Fecha</span></th>
					<td><span contenteditable><?php //echo date('d-m-y'); ?></span></td>
				</tr>
				<tr>
					<th><span contenteditable>Total:</span></th>
					<td><span id="prefix" contenteditable>$</span><span>600.00</span></td>
				</tr>
			</table> -->
			<table class="inventory">
				<thead>
					<tr>
						<th width="20"><b>Cantidad</b></th>
						<th width="20"><b>Codigo</b></th>
						<th width="220"><b>Descripcion</b></th>
						<th width="30"><b>Precio</b></th>
						<th width="20"><b>Iva</b></th>
						<th width="80"><b>Subtotal</b></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant1; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod1; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc1; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre1; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva1; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal1; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>


					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant2; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod2; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc2; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre2; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva2; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal2; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>



					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant3; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod3; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc3; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre3; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva3; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal3; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>


					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant4; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod4; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc4; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre4; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva4; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal4; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>


					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant5; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod5; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc5; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre5; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva5; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal5; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>


					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant6; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod6; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc6; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre6; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva6; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal6; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>


					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant7; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod7; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc7; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre7; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva7; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal7; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>


					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant8; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod8; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc8; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre8; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva8; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal8; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>


					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant9; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod9; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc9; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre9; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva9; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal9; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>


					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant10; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod10; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc10; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre10; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva10; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal10; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>


					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant11; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod11; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc11; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre11; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva11; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal11; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>


					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant12; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod12; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc12; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre12; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva12; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal12; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>


					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant13; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod13; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc13; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre13; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva13; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal13; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>



					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant14; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod14; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc14; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre14; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva14; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal14; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>



					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant156; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod156; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc156; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre156; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva156; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal156; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>


					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant16; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod16; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc16; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre16; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva16; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal16; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>



					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant17; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod17; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc17; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre17; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva17; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal17; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>



					<tr>
						<td style="padding:0px 2px;">
							<!--<input type="text" name="cantidad" maxlength="6" id="cant" value="" size="10" autocomplete="on" width="10"> -->
							 <label><?php echo $cant18; ?></label> 
						</td>

						<td style="padding:0px 4px;">
							 <label><?php echo $cod18; ?></label> 
							<!--<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="10" id="codigo">
							<input type="hidden" name="detalleNroLinea"> </td>-->
						</td>
						<td style="padding:0px 4px;">
							 <label><?php echo $desc18; ?></label> 
							<!-- <textarea name="descripcion" id="detalle_descripcion1" style="width:330px;overflow:auto;height:19px;" rows="1" size="45" maxlength="320" autocomplete="on"></textarea> </td>-->
						</td>
						<td style="padding:0px 4px;">
							> <label><?php echo $pre18; ?></label> 
						 	<!--<input type="text" name="precio" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $iva18; ?></label> 
						 	<!-- <input type="text" name="iva" maxlength="12" size="12" autocomplete="on" width="10" id="precio" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value=""> -->
						</td>

						<td style="padding:0px 4px;">
							<label><?php echo $subtotal18; ?></label> 
						 	<!-- 
							<input type="text" name="subtotal" maxlength="50" size="12" autocomplete="on" width="50" id="subtotal" onchange="subtotal();">--> 
						</td>
					</tr>
	
					
				</tbody>
			</table>
			 <!-- <a class="add">+</a>  -->
				<table class="balance">
					<tr>
						<th><span contenteditable>SubTotal</span></th>
						<td><span data-prefix>$</span><span><?php echo $subtotal; ?></span></td>
					</tr>
					<tr>
						<th><span contenteditable>Iva</span></th>
						<td><span data-prefix>$</span><span contenteditable><?php echo $iva; ?></span></td>
					</tr>
					<tr>
						<th><span contenteditable>Total</span></th>
						<td><span data-prefix>$</span><span><?php echo $total; ?></span></td>
					</tr>
				</table>
		</article>
		<aside>
			<h1><span contenteditable></span></h1>
			<div contenteditable>
				<p></p>
			</div>
		</aside>
		
	</body>
</html>