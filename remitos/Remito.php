<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Remito</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilosNu.css">

    <script type="text/javascript">
    /**
     * Funcion que se ejecuta cada vez que se añade una letra en un cuadro de texto
     * Suma los valores de los cuadros de texto
     */
    function sumaCant(){

        var txtCant1=verificar("txtCant1");
        var txtCant2=verificar("txtCant2");
        var txtCant3=verificar("txtCant3");
        var txtCant4=verificar("txtCant4");
        var txtCant5=verificar("txtCant5");
        var txtCant6=verificar("txtCant6");
        var txtCant7=verificar("txtCant7");
        var txtCant8=verificar("txtCant8");
        var txtCant9=verificar("txtCant9");
        var txtCant10=verificar("txtCant10");
        var txtCant11=verificar("txtCant11");
        var txtCant12=verificar("txtCant12");
        var txtCant13=verificar("txtCant13");
        var txtCant14=verificar("txtCant14");
        var txtCant15=verificar("txtCant15");
        var txtCant16=verificar("txtCant16");
        var txtCant17=verificar("txtCant17");
        // realizamos la suma de los valores y los ponemos en la casilla del
        // formulario que contiene el total
        document.getElementById("resultado").value=parseInt(txtCant1)+parseInt(txtCant2)+parseInt(txtCant3)+parseInt(txtCant4)+parseInt(txtCant5)+parseInt(txtCant6)+parseInt(txtCant7)+parseInt(txtCant8)+parseInt(txtCant9)+parseInt(txtCant10)+parseInt(txtCant11)+parseInt(txtCant12)+parseInt(txtCant13)+parseInt(txtCant14)+parseInt(txtCant15)+parseInt(txtCant16)+parseInt(txtCant17);
        
         
    }

    /**
     * Funcion para verificar los valores de los cuadros de texto. Si no es un
     * valor numerico, cambia de color el borde del cuadro de texto
     */
    function verificar(id)
    {
        var obj=document.getElementById(id);
        if(obj.value=="")
            value="0";
        else
            value=obj.value;
        if(validate_importe(value,1))
        {
            // marcamos como erroneo
            obj.style.borderColor="#808080";
            return value;
        }else{
            // marcamos como erroneo
            obj.style.borderColor="#f00";
            return 0;
        }
    }
 
    /**
     * Funcion para validar el importe
     * Tiene que recibir:
     *  El valor del importe (Ej. document.formName.operator)
     *  Determina si permite o no decimales [1-si|0-no]
     * Devuelve:
     *  true-Todo correcto
     *  false-Incorrecto
     */
    function validate_importe(value,decimal)
        {
        if(decimal==undefined)
            decimal=0;
 
        if(decimal==1)
        {
            // Permite decimales tanto por . como por ,
            var patron=new RegExp("^[0-9]+((,|\.)[0-9]{1,2})?$");
        }else{
            // Numero entero normal
            var patron=new RegExp("^([0-9])*$")
        }
 
        if(value && value.search(patron)==0)
        {
            return true;
        }
        return false;
    }      
    </script>
</head>
<body>
<br>
<br>
<br>
<br>

<div class="remito">
	<form action="" method="post">
	<div class="cabecera">
          <input class="nover" type="text" id="txtnumfact" value="FAC-000001"/>
            <br>
            <input type='date' id='txtFecha' value="<?php date('d,m,y'); ?>" /><br>
            </div>
            <br>
            <br>
		
	</form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<form action="" method="post">
	<div class="contenedor">
		<div class="izquierda">
		
			<input type="text" value="Arca Distribuciones S.A."><br><br>
			<input type="text" value="Francia 3553"><br><br>
			<input type="text" value="Resp. Inscripto"><br>
		</div>
		<div class="derecha">
			<input type="text" value="San Martin"><br><br>
			<input type="text" value="Buenos Aires"><br><br>
			<input type="text" value="30-68630937-8"><br>
		</div>
		
	</div>
	</form>
	<br>
	
	<form action="" class="oc">
		<input type="text" size="50" value="O/C N°                - CAMPAÑA    ">
	</form>

	<br>
	<form id="frmFactura">
            <br>
                <table align="center" width="80" id ="detalle" border="0" width="3" cellspacing="2" cellpadding="4">
            <thead>
                    <tr>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Cant.Cajas</th>
                        <!-- <div class="invisible">
                        	                    <th>Valor Unitario</th>
                        	                    <th>Total</th>
                        </div> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <td>  <input  class="cod" type='number' id='txtCod1' min="1"/ size="10"><br> </td>
                        <td><input class="descrip" type='text' id='txtDescrip1' value=' ' size="45" /><br></td>
                        <td><input  onkeyup="sumaCant()" name="cant1" class="cant" type='number' id="txtCant1" min="1" size="5" /><br></td>
                        <td><input type="text" min="1" size="10"></td>
                        <!-- <div class="invisible">
                        	                        <td><input class="vunit"type='number' id='txtValUni1' min="0.1" step="0.01"/><br></td>
                        	                        <td><input class="totPro" type='number' id='txtTotalPro1' value='0' disabled=""/><br></td>
                        </div> -->

                    </tr>
                   
          
                    <tr>
                        
                        <td>  <input  class="cod"type='number' id='txtCod2' min="1"/><br> </td>
                        <td><input class="descrip" type='text' id='txtDescrip2' value=' ' size="45" /><br></td>
                       <td><input  onkeyup="sumaCant()" name="cant2" class="cant" type='number' id='txtCant2' min="1"/ size="5"><br></td>
                       <td><input type="text" min="1" size="10"></td>
                       <!-- <div class="invisible">
                       	                       <td><input class="vunit" type='number' id='txtValUni2'min="0.1" step="0.01"/><br></td>
                       	                       <td><input class="totPro" type='number' id='txtTotalPro2' value='0' disabled=""/><br></td> 
                       						</div> -->
                    </tr>
                    <tr>
                         <td>  <input class="cod" type='number' id='txtCod3' min='1' /><br> </td>
                        <td><input class="descrip" type='text' id='txtDescrip3' value=' ' size="45" /><br></td>
                        <td><input  onkeyup="sumaCant()" name="cant3" class="cant" type='number' id='txtCant3' min='1'/><br></td>
                        <td><input type="text" min="1" size="10"></td>
                        <!-- <div class="invisible">
                        	                        <td><input class="vunit" type='number' id='txtValUni3' min="0.1" step="0.01"/><br></td>
                        	                        <td><input class="totPro" type='number' id='txtTotalPro3' value='0' disabled="" /><br></td>
                        </div> -->
                    </tr>
                    <tr>
     
                         <td>  <input class="cod" type='number' id='txtCod4' min='1' /><br> </td>
                        <td><input class="descrip" type='text' id='txtDescrip4' value=' ' size="45" /><br></td>
                        <td><input  onkeyup="sumaCant()" name="cant4" class="cant" type='number' id='txtCant4' min='1'/><br></td>
                        <td><input type="text" min="1" size="10"></td>
                        <!-- <div class="invisible">
                        	                        <td><input class="vunit" type='number' id='txtValUni4' min="0.1" step="0.01"/><br></td>
                        	                        <td><input class="totPro" type='number' id='txtTotalPro4' value='0' disabled="" /><br></td>
                        </div> -->
                    </tr>
                    <tr>

    
                         <td>  <input class="cod" type='number' id='txtCod5' min="1"/><br> </td>
                        <td><input class="descrip" type='text' id='txtDescrip5' value=' ' size="45" /><br></td>
                        <td><input  onkeyup="sumaCant()" name="cant5" class="cant" type='number' id='txtCant5' min="1"/><br></td>
                        <td><input type="text" min="1" size="10"></td>
                        <!-- <div class="invisible">
                        	                        <td><input class="vunit" type='number' id='txtValUni5'min="0.1" step="0.01" /><br></td>
                        	                        <td><input class="totPro" type='number' id='txtTotalPro5' value='0' disabled=""/><br></td> 
                        </div> -->
                    </tr>
                         
    
                    <tr>
                         <td>  <input class="cod" type='number' id='txtCod6' min='1'/><br> </td>
                        <td><input class="descrip" type='text' id='txtDescrip6' value=' ' size="45" /><br></td>

                        <td><input  onkeyup="sumaCant()" name="cant6" class="cant" type='number' id='txtCant6' min="1" /><br></td>
                        <td><input type="text" min="1" size="10"></td>
                        <!-- <div class="invisible">
                        	                        <td><input class="vunit" type='number' id='txtValUni6' min="0.1" step="0.01"/><br></td>
                        	                        
                        	                        <td><input class="totPro" type='number' id='txtTotalPro6'  value='0' disabled=""/><br></td>
                        	                        >
                        </div> -->
                    </tr>
                    <tr>
                         <td>  <input class="cod" type='number' id='txtCod7'min="1"/><br> </td>
                        <td><input class="descrip" type='text' id='txtDescrip7' value=' ' size="45" /><br></td>

                        <td><input  onkeyup="sumaCant()" name="cant7" class="cant" type='number' id='txtCant7' min="1"/><br></td>
                        <td><input type="text" min="1" size="10"></td>
                        <!-- <div class="invisible">
                        	                        <td><input class="vunit" type='number' id='txtValUni7' min="0.1" step="0.01"/><br></td>
                        	                        <td><input class="totPro" type='number' id='txtTotalPro7' value='0' disabled=""/><br></td>
                        </div> -->
                    </tr>
                    <tr>
     
                         <td>  <input class="cod" type='number' id='txtCod8' min='1'/><br> </td>
                        <td><input class="descrip" type='text' id='txtDescrip8' value=' ' size="45" /><br></td>
                        <td><input  onkeyup="sumaCant()" name="cant8" class="cant" type='number' id='txtCant8' min='1'/><br></td>
                        <td><input type="text" min="1" size="10"></td>
                        <!-- <div class="invisible">
                        	                         <td><input class="vunit" type='number' id='txtValUni8'min="0.1" step="0.01"/><br></td>
                        	                        <td><input class="totPro" type='number' id='txtTotalPro8' value='0' disabled="" /><br></td> 
                        </div> -->
                    </tr>
                    <tr>
     
                         <td> <input class="cod" type='number' id='txtCod9' min='1'/><br> </td>
                        <td><input class="descrip" type='text' id='txtDescrip9' value=' ' size="45" /><br></td>
                        <td><input  onkeyup="sumaCant()" name="cant9" class="cant" type='number' id='txtCant9' min='1'/><br></td>
                        <td><input type="text" min="1" size="10"></td>
                        <!-- <div class="invisible">
                        	                        <td><input class="vunit" type='number' id='txtValUni9' min="0.1" step="0.01"/><br></td>
                        	                        <td><input class="totPro" type='number' id='txtTotalPro9' value='0' disabled="" /><br></td> 
                        </div> -->
                    </tr>
                    <tr>
     
                         <td>  <input class="cod" type='number' id='txtCod10' min='1'/><br> </td>
                        <td><input class="descrip" type='text' id='txtDescrip10' value=' ' size="45" /><br></td>
                        <td><input  onkeyup="sumaCant()" name="cant10" class="cant" type='number' id='txtCant10' min='1'/><br></td>
                        <td><input type="text" min="1" size="10"></td>
                        <!-- <div class="invisible">
                        	                        <td><input class="vunit" type='number' id='txtValUni10' min="0.1" step="0.01"/><br></td>
                        	                         <td><input class="totPro" type='number' id='txtTotalPro10' value='0' disabled=""/><br></td>
                        </div> -->
                    </tr>
                    <tr>
     
                         <td>  <input class="cod" type='number' id='txtCod11' min="1"/><br> </td>
                        <td><input class="descrip" type='text' id='txtDescrip11' value=' ' size="45" /><br></td>
                        <td><input  onkeyup="sumaCant()" name="cant11" class="cant" type='number' id='txtCant11' min="1"/><br></td>
                        <td><input type="text" min="1" size="10"></td>
                        <!-- <div class="invisible">
                        	                        <td><input class="vunit" type='number' id='txtValUni11' min="0.1" step="0.01"/><br></td>
                        	                        
                        	                        <td><input class="totPro" type='number' id='txtTotalPro11' value='0' disabled="" /><br></td> 
                        </div> -->
                    </tr>
                    <tr>
                         <td>  <input class="cod" type='number' id='txtCod12' min="1"/><br> </td>
                        <td><input class="descrip" type='text' id='txtDescrip12' value=' ' size="45" /><br></td>
                        <td><input  onkeyup="sumaCant()" name="cant12" class="cant" type='number' id='txtCant12' min="1"/><br></td>
                        <td><input type="text" min="1" size="10"></td>
                        <!-- <div class="invisible">
                        	                        <td><input class="vunit" type='number' id='txtValUni11' min="0.1" step="0.01"/><br></td>
                        	                        
                        	                        <td><input class="totPro" type='number' id='txtTotalPro11' value='0' disabled="" /><br></td> 
                        </div> -->
                    </tr>
                    <tr>
                         <td>  <input class="cod" type='number' id='txtCod13' min="1"/><br> </td>
                        <td><input class="descrip" type='text' id='txtDescrip13' value=' ' size="45" /><br></td>
                        <td><input  onkeyup="sumaCant()" name="cant13" class="cant" type='number' id='txtCant13' min="1"/><br></td>
                        <td><input type="text" min="1" size="10"></td>
                        <!-- <div class="invisible">
                        	                        <td><input class="vunit" type='number' id='txtValUni11' min="0.1" step="0.01"/><br></td>
                        	                        <td><input class="totPro" type='number' id='txtTotalPro11' value='0' disabled="" /><br></td> 
                        </div> -->
                    </tr>
                    <tr>
                         <td>  <input class="cod" type='number' id='txtCod14' min="1"/><br> </td>
                        <td><input class="descrip" type='text' id='txtDescrip14' value=' ' size="45" /><br></td>
                        <td><input  onkeyup="sumaCant()" name="cant14" class="cant" type='number' id='txtCant14' min="1"/><br></td>
                        <td><input type="text" min="1" size="10"></td>
                        <!-- <div class="invisible">
                        
                        	                        <td><input class="vunit" type='number' id='txtValUni11' min="0.1" step="0.01"/><br></td>
                        	                        
                        	                        <td><input class="totPro" type='number' id='txtTotalPro11' value='0' disabled="" /><br></td> 
                        </div> -->
                    </tr>
                    <tr>
                         <td>  <input class="cod" type='number' id='txtCod15' min="1"/><br> </td>
                        <td><input class="descrip" type='text' id='txtDescrip15' value=' ' size="45" /><br></td>
                        <td><input  onkeyup="sumaCant()" name="cant15" class="cant" type='number' id='txtCant15' min="1"/><br></td>
                        <td><input type="text" min="1" size="10"></td>
                        <!-- <div class="invisible">
                        	                        <td><input class="vunit" type='number' id='txtValUni11' min="0.1" step="0.01"/><br></td>
                        	                        <td><input class="totPro" type='number' id='txtTotalPro11' value='0' disabled="" /><br></td> 
                        </div> -->
                    </tr>
                    <tr>
                         <td>  <input class="cod" type='number' id='txtCod16' min="1"/><br> </td>
                        <td><input class="descrip" type='text' id='txtDescrip16' value=' ' size="45" /><br></td>
                        <td><input  onkeyup="sumaCant()" name="cant16" class="cant" type='number' id='txtCant16' min="1"/><br></td>
                        <td><input type="text" min="1" size="10"></td>
                        <!-- <div class="invisible">
                        
                        	                        <td><input class="vunit" type='number' id='txtValUni11' min="0.1" step="0.01"/><br></td>
                        	                        <td><input class="totPro" type='number' id='txtTotalPro11' value='0' disabled="" /><br></td> 
                        </div> -->
                    </tr>
                    <tr>
                         <td>  <input class="cod" type='number' id='txtCod17' min="1"/><br> </td>
                        <td><input class="descrip" type='text' id='txtDescrip17' value=' ' size="45" /><br></td>
                        <td><input  onkeyup="sumaCant()" name="cant17" class="cant" type='number' id='txtCant17' min="1"/><br></td>
                        <td><input type="text" min="1" size="10"></td>
                        <!-- <div class="invisible">
                        	                        <td><input class="vunit" type='number' id='txtValUni11' min="0.1" step="0.01"/><br></td>
                        	                        
                        	                        <td><input class="totPro" type='number' id='txtTotalPro11' value='0' disabled="" /><br></td> 
                        </div> -->
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input name="resultado" class="resultado" type='number' id="resultado" onkeyup="sumaCant()" min="1" disabled value="0" /><br></td>
                            <td></td>
                        </tr>
                    </tr>
                   
                   
                </tbody>
                
            </table>


</script>
            
         
               <div class="Resultados">
                 <br>
                 <table align="center" class ="observaciones" border="0" width="3" cellspacing="2" cellpadding="3">

                 	<tr class="center">
                 		<td><input type="text" size="50" value="                                 "></td><br>

                 	</tr>
                 	<br>
                 	<tr>
                 		<td><input type="text" size="50"></td>
                    </tr>
                     <br>
                     <!-- <div class="invisible">
                     	                     <tr>
                     	                         <td><label id="lbl">SubTotal</label></td>
                     	                         <td><input class="totPro" id="txtSubTotal" value='0' disabled="" type ="number"> </td>
                     	                     </tr>
                     	                     
                     	                     <tr>
                     	                         <td><label id="lbl">IVA</label></td>
                     	                         <td><input class="totPro" id="txtIva" value='0' disabled="" type="number" ></td>
                     	                     </tr>
                     	                     <tr>
                     	                         <td><label id="lbl" >Descuento</label></td>
                     	                         <td><input class="totPro" id="txtDesc" value='0' min="0" type ="number"></td>
                     	                     </tr>
                     	                     <tr>
                     	                         <td>
                     	                            <label id="lbl" >Total</label> 
                     	                         </td>
                     	                     <td><input class="totPro" id="txtTotal" value='0' disabled="" type ="number"></td>
                     	                     </tr>
                     </div> -->
                 </table>
                 <br>
                 <br>
                 <br>
                 
                     
    </form>
</div>

   
<script>
    window.addEventListener("load",function() 
    { 
     
         
         
        document.querySelector("input").addEventListener("change",function()
        {
            calculoSuma();
           
            
        },false); 
         
        
        
        
        for (var i = 1; i <=11; i++) {
            document.querySelector("#txtValUni"+i).addEventListener("blur",function()
            {
                
                 calculoSuma();
            },false);         
        
        }
       
        
        
    }
    ,false);
    
    function calculoSuma()
    {   var descuento;
        
        
        var suma=0;
            for (i = 1; i <= 11; i++) {
                 document.querySelector("#txtTotalPro"+i).value=
                    ((parseFloat(document.querySelector("#txtCant"+i).value))  * (parseFloat(document.querySelector("#txtValUni"+i).value))).toFixed(2);
            
                suma+=parseFloat(document.querySelector("#txtTotalPro"+i).value );
                
            }

            document.querySelector("#txtSubTotal").value=  suma;


            document.querySelector("#txtDesc").addEventListener("blur",function(){
               descuento =suma * parseFloat(document.querySelector("#txtDesc").value)/100;
            document.querySelector("#txtSubTotal").value=  suma ;
            document.querySelector("#txtIva").value=  ((suma-descuento )*0.12) ;
            document.querySelector("#txtTotal").value=
                    (parseFloat( document.querySelector("#txtSubTotal").value)+
                    parseFloat( document.querySelector("#txtIva").value)-
                    parseFloat( document.querySelector("#txtDesc").value)).toFixed(2) ;
            },false);
            
    }
    
    
</script>

	
</body>
</html>