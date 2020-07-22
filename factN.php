<?php 

$numFact = $_POST['numFact'];
/*$fecha = $_POST['fecha'];*/
$empresa = $_POST['empresa'];
$direccion = $_POST['direccion'];
$iva = $_POST['iva'];
$localidad = $_POST['localidad'];
$provincia = $_POST['provincia'];
$cuit = $_POST['cuit'];
/*----------------------------------*/
$ocompra = $_POST['ocompra'];
$camp = $_POST['camp'];

 ?>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<title>Factura ARCA  REM <?php echo $numFact; ?>  - <?php echo date('d-m-y'); ?></title>
	
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/print.css" media="print">
	<script src="js/jquery-1.3.2.min.js"></script>
	<link rel="icon" type="image/png" href="img/Edilu1.png"/>
<style>
	/*Estilos Generales*/
.button {
	background:#7f8c8d;
	color:#fff;
	display:inline-block;
	font-size:1.25em;
	margin:20px;
	padding:10px 0;
	text-align:center;
	width:200px;
	text-decoration:none;
	box-shadow:0px 3px 0px #373c3c;
}
 
.button span {
	margin-right:10px;
}
 
/*Colores*/
.button.blue {
	background:#3498db;
	box-shadow:0px 3px 0px #266792;
}
 
.button.yellow {
	background:#e67e22;
	box-shadow:0px 3px 0px #b55704;
}
 
 
/*Tamaños*/
.button.medium {
	width:350px;
}
 
 
.button.large {
	width:450px;
}
 
 
.button.radius {
	border-radius:50px;
}
 
/*Efectos, Hover*/
.button:hover {
	box-shadow:0px 0px 0px;
	padding-top:7px;
}

</style>
</head>

<body style="background-color: #eee; font-family: sans-serif;">
<br>
	<div id="page-wrap" style="height: 1560px; width:1000px ;">

		<textarea id="header">FACTURA </textarea> 
		<br>
		<div id="identity" style="background-color: #eee;">
		
            <div id="address" style="font-size: 12px; background-color: #eee; display: flex;">
	            <div>
		            <p>EdiluS.R.L. </p>
		            <p>Emilio Lamarca 4961 (C1419ASO) - Capital Federal</p>
		            <p>Tel:/Fax: (54-11) 4572-3010 </p>
				</div>

				<div>
		            <p>C.U.I.T.: 30-70866219-0</p>
		            <p>Ing. Brutos: 1132231-04</p>
		            <p>inicio de Actividades: 03/2004</p>
	            </div>

            </div>
			<hr>
            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value=""><br>
               <!-- (max width: 540px, max height: 100px) -->
              </div>
              <img id="image" src="img/Edilu1.png" alt="logo">
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		<hr>
		<br>
		<div id="customer" style="background-color: #eee;">

            <div id="customer-title" style="height: 100px; width: 500px; background-color: #eee; display: flex;">
            <div style="width: 250px;">
	            <p><?php echo $empresa; ?></p>
	            <p><?php echo $direccion; ?> - <?php echo $localidad; ?></p>
	            <p><?php echo $provincia; ?></p>
			</div>
			<div style="width: 250px;">
	            <p>C.U.I.T.: <?php echo $cuit; ?></p>
	            <p>IVA: <?php echo $iva; ?></p>
            </div>
            </div>
			
            <table id="meta">
                <tbody><tr>
                    <td class="meta-head">Factura Nº</td>
                    <td><!-- <textarea>0001-00004510</textarea> -->
                    	<b><?php echo $numFact; ?></b>
                    </td>
                </tr>
                <tr>

                    <td class="meta-head">Fecha</td>
                    <td><input type="hidden" id="date" value=""><b><?php echo date("d/m/y"); ?></b></td>
                </tr>
                <tr>
                    <td class="meta-head">Total</td>
                    <!-- <td><div class="total-value"><div id="total" name="total">$00.00</div></div></td> -->
                    <!-- <td colspan="2" class="blank"> </td>
                    <td colspan="2" class="total-line">Total</td> -->
		      		<td class="total-value"><div id="total" name="total">$875.00</div></td>
                </tr>

            </tbody></table>
		
		</div>
		
		<table id="items">
		
		  <tbody>
		  <tr>
		      <th>Codigo</th>
		      <th>Descripcion</th>
		      <th>Cantidad</th>
		      <th>Precio</th>
		      <th>SubTotal</th>
		  </tr>
		  
		  <tr class="item-row">
				<td class="item-name">
				<div class="delete-wpr">
					<textarea> </textarea>
					<!-- <a class="delete" href="javascript:;" title="Remove row">X</a> --></div></td>
					<td class="description">
						<textarea></textarea>
					</td>

					<td>
					<textarea class="qty">0</textarea></td>
					<td>
						<textarea class="cost">$0</textarea></td>
					
					<td><span class="price">$0</span></td>
				</tr>
					<!-- Boton Eliminar -->			
				<tr class="item-row">
				<td class="item-name">
				<div class="delete-wpr">
					<textarea> </textarea>
					<!-- <a class="delete" href="javascript:;" title="Remove row">X</a> --></div></td>
					<td class="description">
						<textarea></textarea>
					</td>

					<td>
					<textarea class="qty">0</textarea></td>
					<td>
						<textarea class="cost">$0</textarea></td>
					
					<td><span class="price">$0</span></td>
				</tr>

				<tr class="item-row">
				<td class="item-name">
				<div class="delete-wpr">
					<textarea> </textarea>
					<!-- <a class="delete" href="javascript:;" title="Remove row">X</a> --></div></td>
					<td class="description">
						<textarea></textarea>
					</td>

					<td>
					<textarea class="qty">0</textarea></td>
					<td>
						<textarea class="cost">$0</textarea></td>
					
					<td><span class="price">$0</span></td>
				</tr>

				<tr class="item-row">
				<td class="item-name">
				<div class="delete-wpr">
					<textarea> </textarea>
					<!-- <a class="delete" href="javascript:;" title="Remove row">X</a> --></div></td>
					<td class="description">
						<textarea></textarea>
					</td>

					<td>
					<textarea class="qty">0</textarea></td>
					<td>
						<textarea class="cost">$0</textarea></td>
					
					<td><span class="price">$0</span></td>
				</tr>

				<tr class="item-row">
				<td class="item-name">
				<div class="delete-wpr">
					<textarea> </textarea>
					<!-- <a class="delete" href="javascript:;" title="Remove row">X</a> --></div></td>
					<td class="description">
						<textarea></textarea>
					</td>

					<td>
					<textarea class="qty">0</textarea></td>
					<td>
						<textarea class="cost">$0</textarea></td>
					
					<td><span class="price">$0</span></td>
				</tr>

				<tr class="item-row">
				<td class="item-name">
				<div class="delete-wpr">
					<textarea> </textarea>
					<!-- <a class="delete" href="javascript:;" title="Remove row">X</a> --></div></td>
					<td class="description">
						<textarea></textarea>
					</td>

					<td>
					<textarea class="qty">0</textarea></td>
					<td>
						<textarea class="cost">$0</textarea></td>
					
					<td><span class="price">$0</span></td>
				</tr>

				<tr class="item-row">
				<td class="item-name">
				<div class="delete-wpr">
					<textarea> </textarea>
					<!-- <a class="delete" href="javascript:;" title="Remove row">X</a> --></div></td>
					<td class="description">
						<textarea></textarea>
					</td>

					<td>
					<textarea class="qty">0</textarea></td>
					<td>
						<textarea class="cost">$0</textarea></td>
					
					<td><span class="price">$0</span></td>
				</tr>

				<tr class="item-row">
				<td class="item-name">
				<div class="delete-wpr">
					<textarea> </textarea>
					<!-- <a class="delete" href="javascript:;" title="Remove row">X</a> --></div></td>
					<td class="description">
						<textarea></textarea>
					</td>

					<td>
					<textarea class="qty">0</textarea></td>
					<td>
						<textarea class="cost">$0</textarea></td>
					
					<td><span class="price">$0</span></td>
				</tr>

				<tr class="item-row">
				<td class="item-name">
				<div class="delete-wpr">
					<textarea> </textarea>
					<!-- <a class="delete" href="javascript:;" title="Remove row">X</a> --></div></td>
					<td class="description">
						<textarea></textarea>
					</td>

					<td>
					<textarea class="qty">0</textarea></td>
					<td>
						<textarea class="cost">$0</textarea></td>
					
					<td><span class="price">$0</span></td>
				</tr>

				<tr class="item-row">
				<td class="item-name">
				<div class="delete-wpr">
					<textarea> </textarea>
					<!-- <a class="delete" href="javascript:;" title="Remove row">X</a> --></div></td>
					<td class="description">
						<textarea></textarea>
					</td>

					<td>
					<textarea class="qty">0</textarea></td>
					<td>
						<textarea class="cost">$0</textarea></td>
					
					<td><span class="price">$0</span></td>
				</tr>

				<tr class="item-row">
				<td class="item-name">
				<div class="delete-wpr">
					<textarea> </textarea>
					<!-- <a class="delete" href="javascript:;" title="Remove row">X</a> --></div></td>
					<td class="description">
						<textarea></textarea>
					</td>

					<td>
					<textarea class="qty">0</textarea></td>
					<td>
						<textarea class="cost">$0</textarea></td>
					
					<td><span class="price">$0</span></td>
				</tr>

				<tr class="item-row">
				<td class="item-name">
				<div class="delete-wpr">
					<textarea> </textarea>
					<!-- <a class="delete" href="javascript:;" title="Remove row">X</a> --></div></td>
					<td class="description">
						<textarea></textarea>
					</td>

					<td>
					<textarea class="qty">0</textarea></td>
					<td>
						<textarea class="cost">$0</textarea></td>
					
					<td><span class="price">$0</span></td>
				</tr>

				<tr class="item-row">
				<td class="item-name">
				<div class="delete-wpr">
					<textarea> </textarea>
					<!-- <a class="delete" href="javascript:;" title="Remove row">X</a> --></div></td>
					<td class="description">
						<textarea></textarea>
					</td>

					<td>
					<textarea class="qty">0</textarea></td>
					<td>
						<textarea class="cost">$0</textarea></td>
					
					<td><span class="price">$0</span></td>
				</tr>

				<tr class="item-row">
				<td class="item-name">
				<div class="delete-wpr">
					<textarea> </textarea>
					<!-- <a class="delete" href="javascript:;" title="Remove row">X</a> --></div></td>
					<td class="description">
						<textarea></textarea>
					</td>

					<td>
					<textarea class="qty">0</textarea></td>
					<td>
						<textarea class="cost">$0</textarea></td>
					
					<td><span class="price">$0</span></td>
				</tr>

				<tr class="item-row">
				<td class="item-name">
				<div class="delete-wpr">
					<textarea> </textarea>
					<!-- <a class="delete" href="javascript:;" title="Remove row">X</a> --></div></td>
					<td class="description">
						<textarea></textarea>
					</td>

					<td>
					<textarea class="qty">0</textarea></td>
					<td>
						<textarea class="cost">$0</textarea></td>
					
					<td><span class="price">$0</span></td>
				</tr>

				<tr class="item-row">
				<td class="item-name">
				<div class="delete-wpr">
					<textarea> </textarea>
					<!-- <a class="delete" href="javascript:;" title="Remove row">X</a> --></div></td>
					<td class="description">
						<textarea></textarea>
					</td>

					<td>
					<textarea class="qty">0</textarea></td>
					<td>
						<textarea class="cost">$0</textarea></td>
					
					<td><span class="price">$0</span></td>
				</tr>

				<tr class="item-row">
				<td class="item-name">
				<div class="delete-wpr">
					<textarea> </textarea>
					<!-- <a class="delete" href="javascript:;" title="Remove row">X</a> --></div></td>
					<td class="description">
						<textarea></textarea>
					</td>

					<td>
					<textarea class="qty">0</textarea></td>
					<td>
						<textarea class="cost">$0</textarea></td>
					
					<td><span class="price">$0</span></td>
				</tr>

		  <tr>
		  	<td><?php  echo $ocompra; ?></td>
		  	<td><?php  echo $camp; ?></td>
		  </tr>
		  
		  
		   <tr id="hiderow">
		    <td colspan="5">
		    <a class="button blue" id="addrow" href="javascript:;" title="Add a row"> <span class="icon-house"></span>Agregar fila</a></td>
		  </tr> 
		  
		  <tr>
		      <td colspan="2" class="blank"> 
		      </td> 
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal" name="subtotal">$875.00</div></td>
		  </tr>

		   <tr>
		  
		      <!-- <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">IVA 21%</td>
		      <td class="total-value"><div id="iva" name="iva" on onchange="iva();" >$0.00</div></td> -->
		  </tr> 
		  <script>
		  	function iva(){
		  		var subtotal = document.getElementById('subtotal').value;
	  			var iva = document.getElementById('iva').value;

		  		iva = (subtotal * 1.21);

		  		iva();

		  	}

		  </script>
		  <script>
		  	iva();
		  </script>



		  <!-- <tr>
		     <td colspan="2" class="blank"> </td>
		     <td colspan="2" class="total-line">Cantidad Pagada</td>
		  		 
		     <td class="total-value"><textarea id="paid">$0.00</textarea></td>
		  		 </tr> -->
		 <tr>
		     <!--  <td colspan="2" class="blank"> 
		      </td> 
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="subtotal" name="subtotal">$875.00</div></td>-->
		  </tr> 
		
		</tbody>
		</table>
		
		 <!-- <div id="terms">
		  <h5>Condiciones</h5>
		  <textarea>Netos 30 días. Cargo financiero de 1.5% se hará en saldos impagos después de 30 días.</textarea>
		 		</div>  -->
	
	</div>
<script>
	function print_today() {
  // ***********************************************
  // AUTHOR: WWW.CGISCRIPT.NET, LLC
  // URL: http://www.cgiscript.net
  // Use the script, just leave this message intact.
  // Download your FREE CGI/Perl Scripts today!
  // ( http://www.cgiscript.net/scripts.htm )
  // ***********************************************
  var now = new Date();
  var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
  var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
  function fourdigits(number) {
    return (number < 1000) ? number + 1900 : number;
  }
  var today =  months[now.getMonth()] + " " + date + ", " + (fourdigits(now.getYear()));
  return today;
}

// from http://www.mediacollege.com/internet/javascript/number/round.html
function roundNumber(number,decimals) {
  var newString;// The new rounded number
  decimals = Number(decimals);
  if (decimals < 1) {
    newString = (Math.round(number)).toString();
  } else {
    var numString = number.toString();
    if (numString.lastIndexOf(".") == -1) {// If there is no decimal point
      numString += ".";// give it one at the end
    }
    var cutoff = numString.lastIndexOf(".") + decimals;// The point at which to truncate the number
    var d1 = Number(numString.substring(cutoff,cutoff+1));// The value of the last decimal place that we'll end up with
    var d2 = Number(numString.substring(cutoff+1,cutoff+2));// The next decimal, after the last one we want
    if (d2 >= 5) {// Do we need to round up at all? If not, the string will just be truncated
      if (d1 == 9 && cutoff > 0) {// If the last digit is 9, find a new cutoff point
        while (cutoff > 0 && (d1 == 9 || isNaN(d1))) {
          if (d1 != ".") {
            cutoff -= 1;
            d1 = Number(numString.substring(cutoff,cutoff+1));
          } else {
            cutoff -= 1;
          }
        }
      }
      d1 += 1;
    } 
    if (d1 == 10) {
      numString = numString.substring(0, numString.lastIndexOf("."));
      var roundedNum = Number(numString) + 1;
      newString = roundedNum.toString() + '.';
    } else {
      newString = numString.substring(0,cutoff) + d1.toString();
    }
  }
  if (newString.lastIndexOf(".") == -1) {// Do this again, to the new string
    newString += ".";
  }
  var decs = (newString.substring(newString.lastIndexOf(".")+1)).length;
  for(var i=0;i<decimals-decs;i++) newString += "0";
  //var newNumber = Number(newString);// make it a number if you like
  return newString; // Output the result to the form field (change for your purposes)
}

function update_total() {
  var total = 0;
  $('.price').each(function(i){
    price = $(this).html().replace("$","");
    if (!isNaN(price)) total += Number(price);
  });

  total = roundNumber(total,2);

  $('#subtotal').html("$"+total);
  $('#total').html("$"+total);
  
  update_balance();
}

function update_balance() {
  var due = $("#total").html().replace("$","") - $("#paid").val().replace("$","");
  due = roundNumber(due,2);
  
  $('.due').html("$"+due);
}

function update_price() {
  var row = $(this).parents('.item-row');
  var price = row.find('.cost').val().replace("$","") * row.find('.qty').val();
  price = roundNumber(price,2);
  isNaN(price) ? row.find('.price').html("N/A") : row.find('.price').html("$"+price);
  
  update_total();
}

function bind() {
  $(".cost").blur(update_price);
  $(".qty").blur(update_price);
}

$(document).ready(function() {

  $('input').click(function(){
    $(this).select();
  });

  $("#paid").blur(update_balance);
   
  $("#addrow").click(function(){
    $(".item-row:last")
    .after('<tr class="item-row"><td class="item-name"><div class="delete-wpr"><textarea>Codigo</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td><td class="description"><textarea>Description</textarea></td><td><textarea class="qty">0</textarea></td><td><textarea class="cost">$0</textarea></td><td><span class="price">$0</span></td></tr>');
    if ($(".delete").length > 0) $(".delete").show();
    bind();
  });
  
  bind();
  
  $(".delete").live('click',function(){
    $(this).parents('.item-row').remove();
    update_total();
    if ($(".delete").length < 2) $(".delete").hide();
  });
  
  $("#cancel-logo").click(function(){
    $("#logo").removeClass('edit');
  });
  $("#delete-logo").click(function(){
    $("#logo").remove();
  });
  $("#change-logo").click(function(){
    $("#logo").addClass('edit');
    $("#imageloc").val($("#image").attr('src'));
    $("#image").select();
  });
  $("#save-logo").click(function(){
    $("#image").attr('src',$("#imageloc").val());
    $("#logo").removeClass('edit');
  });
  
  $("#date").val(print_today());
  
});
</script>	
<div class="atras" style="">
	<footer style="background-color: grey; height: 100px;">
		<div align="center">
			<p style="padding-top: 30px;"><i>Autentificado por: </i> <b> R&B Design Web&copy</b>  <a href="www.rbcreacionesweb.com">  www.rbcreacionesweb.com</a><br>El dia <b> <?php echo date("d/m/y"); ?></b></p>
		</div>
	</footer>
</div>
<script>
	function total (){
		var subtotal = document.getElementById('subtotal').value;
		var iva = 1.21;
		var total = subtotal * iva;
		
	}
	total();
</script>
</body>

</html>