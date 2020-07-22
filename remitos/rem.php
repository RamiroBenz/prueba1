<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Remito</title>


	<link rel="stylesheet" href="css/estiloRem.css">
	<link rel="license" href="http://www.opensource.org/licenses/mit-license/">
		<link type="text/css" href="css/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet">
		<!-- <link type="text/css" href="css/blitzer_jig/jquery-ui-1.8.15.custom.css" rel="stylesheet" /> -->
		
	<!--<![endif]-->
	<!--[if gte IE 9]>
		<link type="text/css" href="css/jig_old_ie_9.css?v=20151216" rel="stylesheet" />
		<link type="text/css" href="css/jig_ie_9.css?v=20151216" rel="stylesheet" />
	<![endif]-->
	<!--[if lt IE 9]>
		<link type="text/css" href="css/jig_old_ie_6_8.css?v=20151216" rel="stylesheet" />
		<link type="text/css" href="css/jig_ie_6_8.css?v=20151216" rel="stylesheet" />
	<![endif]-->
		<style type="text/css">@import url(../scripts/calendar/calendar-blue2.css);</style>
		<script type="text/javascript" src="../scripts/calendar/calendar.js"></script>
		<script type="text/javascript" src="../scripts/calendar/calendar-es.js"></script>
		<script type="text/javascript" src="../scripts/calendar/calendar-setup.js"></script>

		<script type="text/javascript" src="js/logout.js"></script>
		<script type="text/javascript" src="../js/jquery-1.12.2.min.js"></script>
		<script type="text/javascript" src="../js/jquery-migrate-1.3.0.min.js"></script>
		<script type="text/javascript" src="../js/jquery-ui-1.11.4.min.js"></script>
		<script type="text/javascript" src="../js/jquery.ui.datepicker-es.js"></script>
		<script type="text/javascript" src="../js/jquery.tablesorter.js"></script>
		<script type="text/javascript" src="../js/jquery.notice.js"></script>
		<script type="text/javascript" src="../js/jquery.cookie.js"></script>
		<script type="text/javascript" src="../js/jquery.validationEngine.js" charset="utf-8"></script>
		<script type="text/javascript" src="../js/jquery.validationEngine-es-jig.js" charset="utf-8"></script>
		<script type="text/javascript" src="../js/jquery.form.js"></script>
		<script type="text/javascript" src="../scripts/gen_com_datos_operacion.js?v=20160601"></script>

		<script type="text/javascript" src="../scripts/gen_com_datos_operacion_am.js?v=20160601"></script>
		<script type="text/javascript" src="../scripts/keep_alive.js?v=20160311"></script>

		<!-- Head específico (inicio) -->

		<!-- estiloFact.css -->
		<link rel="stylesheet" href="css/estiloFact.css">
		<link rel="stylesheet" href="botones.css">
		<script src="scriptRem.js"></script>
<style>
	 @media print {
		.atras {
			display: none;
		}
		

	} 
	body {
		font-size: 18px;
	}
	.rem2 {
		width: 50%;
		margin-left: 30px;
	}
	.fecha {
		font-size: 18px;
	}
	.invi2 td {
		font-size: 18px;
		width: 50px;
	}
	table .meta {
		width: 20%;
	}
	aside {
		height: 30px;
		padding-left: 20px;
	}
	input {
		font-size: 18px;
		border: 0;
	}
	th {
		color: white;
	}
</style>

</head>
<body>
<div>
	<div class="numfe" align="rigth">
		<table class="meta">
				<tr>
					<div class="atras">
						<td class="atras"><span contenteditable>0001-00004506</span></td>
					</div>
				</tr>
				<br>
				<br>
				<br>
				<tr>
					
					<div class="fecha">
						<td><input type="text" name="fecha_factura" value="<?php echo date('d-m-Y'); ?>" size="10" maxlength="10"></td>
					</div>
				</tr>
				 <tr>
					
				</tr>
			</table>
		
	</div>
	<br>
	<div class="remitente">
		<address contenteditable  style="display: flex;">
		<div style="margin-right: 40%;  width: 50%;">
			<atircle><b>Arca Distribuciones S.A.</b></atircle><br>
			<atircle><b>Francia 3553</b></atircle><br>
			<atircle><b>Resp. Inscripto</b></atircle><br>	
		</div>		
		<div class="rem2">	
			<atircle>San Martin</atircle><br>
			<atircle>Buenos Aires</atircle><br>
			<atircle>30-68630937-8</atircle><br>
		</div>
		</address>
	</div>
	<aside>
			
		<div contenteditable >
			<p>O/C N° 00.000 - Campaña 00/2018</p>
			<p></p>
		</div>
	</aside>
		
	<div class="jig_borde">
				<div class="jig_contenido" id="detalles_datos">
					
					<table class="jig_formvertical" id="idoperacion">
						<tbody>
						<div class="atras">
						<br>
							<tr>
								<th width="50px">Cant.</th>
								<th width="100px">Código</th>
								<th width="400px">Descripción</th>
								<th width="">Cant.Cajas</th>
								
							</tr>
						</div>
					<!-- 1			 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10" autocomplete="on" width="50"></td>

						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on" width="100">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40" autocomplete="on"></textarea></td>

						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12" autocomplete="on" >
						</td>

						<!-- 2			 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10" autocomplete="on"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea autocomplete="on"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12" autocomplete="on">
						</td>

						

						<!-- 3			 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10" autocomplete="on"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40" autocomplete="on"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12" autocomplete="on">
						</td>

						

						<!-- 4		 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10" autocomplete="on"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on">
						<input type="hidden" name="detalleNroLinea" autocomplete="on"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40" autocomplete="on"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12" autocomplete="on">
						</td>

						

					<!-- 5			 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10" autocomplete="on"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40" autocomplete="on"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12" autocomplete="on">
						</td>

						

					<!-- 6			 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10" autocomplete="on"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40" autocomplete="on"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12" autocomplete="on">
						</td>

						

					<!-- 7				 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10" autocomplete="on"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40" autocomplete="on"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12" autocomplete="on">
						</td>

						

				<!-- 8				 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10" autocomplete="on"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40" autocomplete="on"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12" autocomplete="on">
						</td>

						


					<!-- 9				 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10" autocomplete="on"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40" autocomplete="on"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12" autocomplete="on">
						</td>

						

					<!-- 10			 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10" autocomplete="on"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12" autocomplete="on">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40" autocomplete="on"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12" autocomplete="on">
						</td>

						

					<!-- 11				 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12">
						</td>

						<!-- 12
											 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12">
						</td>

						

					<!-- 13				 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12">
						</td>

						

						<!-- 14		 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12">
						</td>

						

					<!-- 15				 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12">
						</td>


						<!-- 16
											 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12">
						</td>


						<!-- 17
											 -->
					<tr>
					
						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>
					
						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12">
						</td> 

						<!-- 18
											 -->
					<tr>
					
						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>
					
						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="cantCajas" maxlength="12" size="12">
						</td>
					

						<!-- 19
											<tr>
						
						<td style="padding:0px 2px;">
							<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
							<input type="text" name="codigo" maxlength="12" size="12">
							<input type="hidden" name="detalleNroLinea"></td>
						
						<td style="padding:0px 4px;">
							<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
							<input type="text" name="cantCajas" maxlength="12" size="12">
						</td>
						
						
						20
											<tr>
						
						<td style="padding:0px 2px;">
							<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
							<input type="text" name="codigo" maxlength="12" size="12">
							<input type="hidden" name="detalleNroLinea"></td>
						
						<td style="padding:0px 4px;">
							<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto; height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						
						<td style="padding:0px 4px;">
							<input type="text" name="cantCajas" maxlength="12" size="12">
						</td> -->
					</tr>
							</tbody>
					</table>
		<br>
					
				</div>
			</div>
			</form>
			<!-- boton agregar Fila -->
			<!-- <a class="add">+</a> -->

			<table class="balance">
				<tr>
					<!-- <th><span contenteditable>SubTotal</span></th>
					<td><span data-prefix>$</span><span>200.00</span></td> -->
				</tr>
				<tr>
					<!-- <th><span contenteditable>Iva</span></th>
					<td><span data-prefix>$</span><span contenteditable>0.00</span></td> -->
				</tr>
				<tr>
					<!-- <th><span contenteditable>Total</span></th>
					<td><span data-prefix>$</span><span>200.00</span></td> -->
				</tr>
			</table>
		</article>
		<br>
		<br>
		<br>
		
		<div align="center">
			<h1><span contenteditable>Son 0 Cajas</span></h1>
		</div>				
</div>
<div class="atras" align="right">
	<button><a href="menu.php"> <<-Volver</a> </button>
</div>	

</body>
</html>