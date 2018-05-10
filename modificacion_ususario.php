<!DOCTYPE html>
<!-- Add icon library -->
<html>  
  <?php
	require 'conexion.php';
	
	$usuario_key = $_GET['usuario_key'];	 
	$sql = "select a.usuario_key, a.usuario, a.desc_usuario, a.sexo, c.perfil from yaguar.sac_usuarios a inner join yaguar.sac_usuairos_perfiles b on a.usuario_key = b.usuario_key inner join yaguar.sac_perfiles c on b.perfil_key = c.perfil_key where  a.usuario_key = $usuario_key;";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);  	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="php_upd_usuarios.php" autocomplete="off">
				<div class="form-group">
					<label for="usuario" class="col-sm-2 control-label">Usuario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" value="<?php echo $row['usuario']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="usuario_key" name="usuario_key" value="<?php echo $row['usuario_key']; ?>" />
				
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre Y Apellido</label>
					<div class="col-sm-10">
						<input type="desc_usuario" class="form-control" id="email" name="desc_usuario" placeholder="Nombre Y Apellido" value="<?php echo $row['desc_usuario']; ?>"  required>
					</div>
				</div>
																
                                
                                <div class="form-group">
					<label for="perfil" class="col-sm-2 control-label">Perfil Actual</label>
					<div class="col-sm-10">
						<select class="form-control" id="estado_civil" name="perfil">
							<option value="Perfil"><?php echo $row['perfil']; ?></option>							
						</select>
					</div>S
				</div>
                                
                                <div class="form-group">
					<label for="nvoperfil" class="col-sm-2 control-label">Nuevo Perfil</label>
					<div class="col-sm-10">
						<?php include ("comboperfiles.php"); ?>
					</div>
                                            <div class="form-group">
                                                    <label for="sexo" class="col-sm-2 control-label">SEXO</label>

                                                    <div class="col-sm-2 control-label">

                                                        <label class="container">Hombre
                                                            <input class="w3-radio" type="radio" name="sexo" value="M" <?php if(strpos($row['sexo'], "M")!== false) echo 'checked'; ?> >
                                                        <span class="checkmark"></span>
                                                        </label>    

                                                        <label class="container">Mujer
                                                            <input class="w3-radio" type="radio" name="sexo" value="F" <?php if(strpos($row['sexo'], "F")!== false) echo 'checked'; ?> >
                                                        <span class="checkmark"></span>
                                                        </label>

                                                        <label class="container">Desconocido
                                                            <input class="w3-radio" type="radio" name="sexo" value="D" <?php if(strpos($row['sexo'], "D")!== false) echo 'checked'; ?> >
                                                        <span class="checkmark"></span>
                                                        </label> 

                                                    </div>
                                            </div>
				</div>
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="baja_usuario.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Actualizar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>