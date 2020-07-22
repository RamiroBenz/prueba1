<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Facturación Exclusiva</title>
		<link rel="stylesheet" href="../style.css">
		<link rel="license" href="http://www.opensource.org/licenses/mit-license/">
		<script src="../script.js"></script>
		<link rel="icon" type="image/png" href="../img/Edilu1.png" />
	</head>
	<body>
		<header>
			<h1>Factura</h1>
			<address contenteditable>
				<p>Edilu S.R.L.</p>
				<p>Emilio Lamarca 4961<br>Capital Federal, CP: 1419</p>
				<p>Tel/Fax: (54-11) 4572-3010</p>
				<br>
				<p>C.U.I.T.: 30-70866219-0</p>
				<p>Ing.Brutos: 1132231-04</p>
				<p>Inicio de Actividades: 03/2004</p>
				<p>Iva: Responsable Inscripto</p>
			</address>
			<span>
			<div><img alt="" src="img/Edilu1.png" width="200"><input type="file" accept="image/*">
			</div></span>
		</header>
		<article>
			<h1>Cliente</h1>
			<address contenteditable>
				<p><!-- <b>Cliente: </b> --> Arca Distribuciones S.A.
				<br><!-- <b>Dirección: </b> -->Francia 3553 
				<br><!-- <b>Iva: </b> -->Responsable Inscripto</p>
				<br>
				<p><!-- <b>Localidad: </b> -->San Martin 
				<br><!-- <b>Provincia: </b> -->Buenos Aires 
				<br><!-- <b>C.U.I.T.: </b> -->30-65146422-2</p>
				<br><br>
				Cuenta Corriente a 60 Dias
			</address>
			<table class="meta">
				<tr>
					<th><span contenteditable>N° Fact.</span></th>
					<td><span contenteditable>0001-00001065</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Fecha</span></th>
					<td><input type="text" name="fecha_factura" value="<?php echo date("d-m-Y"); ?>" size="15"></td>
				</tr>
				 <tr>
					<th><span contenteditable></span></th>
					<td><span id="prefix" contenteditable>$</span><span>200</span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span contenteditable>Código</span></th>
						<th style="width: 400px;"><span contenteditable>Descripción</span></th>
						
						<th><span contenteditable>Cant.</span></th>
						<th><span contenteditable>Precio</span></th>
						<th><span contenteditable>SubTotal</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
						   <!-- Boton para eliminar fila -->
							<a class="cut">-</a>
							<span contenteditable><!-- 51357 --></span></td>
						<td style="width: 400px;"><span contenteditable><!-- Short Dep. Sin Elección T.S --></span></td>
						
						<td><span contenteditable><!-- 4 --></span></td>
						<td><span data-prefix>$</span><span contenteditable><!-- 50.00 --></span></td>
						<td><span data-prefix>$</span><span><!-- 200.00 --></span></td>
					</tr>

				</tbody>
			</table>
			<!-- boton agregar Fila -->
			<a class="add">+</a>

			<table class="balance">
				<tr>
					<th><span contenteditable>SubTotal</span></th>
					<td><span data-prefix>$</span><span>200.00</span></td>
				</tr>
				<tr>
					<th><span contenteditable>IVA</span></th>
					<td><span data-prefix>$</span><span contenteditable>0.00</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Total</span></th>
					<td><span data-prefix>$</span><span>200.00</span></td>
				</tr>
			</table>
		</article>
		<aside>
		
		
			<!-- <h1><span contenteditable>Son  Cajas</span></h1> -->
			<div contenteditable align="right">
				<p></p>
			</div>
		</aside>
		<script>
		/* On Content Load
/* ========================================================================== */

function onContentLoad() {
	updateInvoice();

	var
	input = document.querySelector('input'),
	image = document.querySelector('img');

	function onClick(e) {
		var element = e.target.querySelector('[contenteditable]'), row;

		element && e.target != document.documentElement && e.target != document.body && element.focus();

		if (e.target.matchesSelector('.add')) {
			document.querySelector('table.inventory tbody').appendChild(generateTableRow());
		}
		else if (e.target.className == 'cut') {
			row = e.target.ancestorQuerySelector('tr');

			row.parentNode.removeChild(row);
		}

		updateInvoice();
	}

	function onEnterCancel(e) {
		e.preventDefault();

		image.classList.add('hover');
	}

	function onLeaveCancel(e) {
		e.preventDefault();

		image.classList.remove('hover');
	}

	function onFileInput(e) {
		image.classList.remove('hover');

		var
		reader = new FileReader(),
		files = e.dataTransfer ? e.dataTransfer.files : e.target.files,
		i = 0;

		reader.onload = onFileLoad;

		while (files[i]) reader.readAsDataURL(files[i++]);
	}

	function onFileLoad(e) {
		var data = e.target.result;

		image.src = data;
	}

	if (window.addEventListener) {
		document.addEventListener('click', onClick);

		document.addEventListener('mousewheel', updateNumber);
		document.addEventListener('keydown', updateNumber);

		document.addEventListener('keydown', updateInvoice);
		document.addEventListener('keyup', updateInvoice);

		input.addEventListener('focus', onEnterCancel);
		input.addEventListener('mouseover', onEnterCancel);
		input.addEventListener('dragover', onEnterCancel);
		input.addEventListener('dragenter', onEnterCancel);

		input.addEventListener('blur', onLeaveCancel);
		input.addEventListener('dragleave', onLeaveCancel);
		input.addEventListener('mouseout', onLeaveCancel);

		input.addEventListener('drop', onFileInput);
		input.addEventListener('change', onFileInput);
	}
}

window.addEventListener && document.addEventListener('DOMContentLoaded', onContentLoad);

</script>
	</body>
</html>