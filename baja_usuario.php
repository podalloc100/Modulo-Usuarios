<?php
	require 'conexion.php';
	
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%$valor'";
		}
	}
	$sql = "select a.usuario_key, a.usuario, a.desc_usuario, a.sexo, c.perfil from yaguar.sac_usuarios a inner join yaguar.sac_usuairos_perfiles b on a.usuario_key = b.usuario_key inner join yaguar.sac_perfiles c on b.perfil_key = c.perfil_key $where;";
	$resultado = $mysqli->query($sql);	
?>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">                    
                    <link href="css/bootstrap.min.css" rel="stylesheet">
                    <link href="css/bootstrap-theme.css" rel="stylesheet">
                    <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
                    <link href="css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
                    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
                    <script src="js/jquery.dataTables.js" type="text/javascript"></script>
                    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
                    <script src="js/bootstrap.min.js"></script>	
                    <script src="js/Functions.js" type="text/javascript"></script>                                    
                    <script src="js/pagination-tda-plugin.js" type="text/javascript"></script>
                <script>
                        $(document).ready(function(){                            
                               $("#mitabla").paginationTdA({
                                elemPerPage: 20
                        });
                        });
                </script>
                
	</head>
     
            
        
	<body>
		
		<div class="container">
			<div class="row">
				<h2 style="text-align:center">Modificacion y Eliminacion de Usuairos</h2>
			</div>
			
			<div class="row">
				<a href="alta_usuario.php" class="btn btn-primary">Nuevo Registro</a>				
                                <form id="bajausuario" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nombre: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
                                        <div class="row table-responsive">                            
                                            <table class="display" id="mitabla">                            
                                                        <thead>
                                                                <tr>
                                                                        <th>ID </th>
                                                                        <th>Usuario </th>
                                                                        <th>Nombre </th>
                                                                        <th>Sexo </th>
                                                                        <th>Perfil </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                </tr>
                                                        </thead>

                                                        <tbody>
                                                                <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                                                                        <tr>
                                                                                <td><?php echo $row['usuario_key']; ?></td>
                                                                                <td><?php echo $row['usuario']; ?></td>
                                                                                <td><?php echo $row['desc_usuario']; ?></td>
                                                                                <td><?php echo $row['sexo']; ?></td>                                                                
                                                                                <td><?php echo $row['perfil']; ?></td>                                                                
                                                                                <td><a href="modificacion_ususario.php?usuario_key=<?php echo $row['usuario_key']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                                                                <td><a href="#" onclick="fn_sp_del_usuarios(<?php echo $row['usuario_key'];?>)" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
                                                                        </tr>
                                                                <?php } ?>
                                                        </tbody>
                                                </table>
                                        </div>
				</form>
			</div>
			
			<br>
			
			
		</div>
		
		
		
	</body>
        
</html>