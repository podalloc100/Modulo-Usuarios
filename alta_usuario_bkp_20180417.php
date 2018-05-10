<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link href="css/min.css" rel="stylesheet" type="text/css"/>
<link href="css/altausuario.css" rel="stylesheet" type="text/css"/>
<script src="jquery-3.2.1.min.js"></script>
</head>
<body>

<form  id="frmajax" style="max-width:500px;margin:auto" method="POST">
  <h2>Alta Para</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Usuario" name="Usuario">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Nombre y Apellido" name="Nombre">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>
  
 
  
  <br>
  
    <label class="container">Hombre
         <input type="checkbox" checked="checked">     
         <span class="checkmark"></span>
    </label>

    <label class="container">Mujer
      <input type="checkbox">
      <span class="checkmark"></span>   
    </label>
  
    
  <div class="input-container">
       <?php include ("comboperfiles.php"); ?>
  </div>
  
      
   
  

    
  <button class="btnguardar">Crear</button>        
   
  
</form>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btnguardar').click(function(){
			var datos=$('#frmajax').serialize();
			$.ajax({
				type:"POST",
				url:"insertar.php", 
				data:datos,
				success:function(r){
					if(r==1){
						alert("agregado con exito");
					}else{
						alert("Fallo el server");
					}
				}
			});

			return false;
		});
	});
</script>
