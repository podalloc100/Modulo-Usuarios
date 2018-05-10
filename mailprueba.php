<?php
	
       
        $Server = "127.0.0.1:3306";
        $User = "root";
        $Pass = "sa";
        $Db = "yaguar";        
        $conn = mysqli_connect($Server, $User, $Pass, $Db);
        include ("mysql.php");
                
	$usuario=1;
	$nombre=2;
        $sexo='M';
	$password='11';
        $perfil_key=12;
        $miembro_relacional = -1;
        $estado = 1;
                            
        $SqlStatement = "call yaguar.sp_ins_usuarios('".$usuario."', ".$perfil_key.", '".$password."', '".$nombre."', '".$sexo."',".$miembro_relacional." ,".$estado.");";
        $StatementType = 0;        
      
      
	 $retrive=MySqlSelect ("MySql",$SqlStatement,$StatementType,$conn,$Db) or die(mysqli_error($conn)); 
         echo $retrive;	
	
?>
 
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">		                
                <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
                <script src="js/pagination-tda-plugin.js" type="text/javascript"></script>
                                
                
            <script>
                $(document).ready(function(){
                    $("#tableUserList").paginationTdA({
                        elemPerPage: 1
                    });
                });
            </script>
            
	</head>
        
        

<table id="tableUserList" style="background: white" class="table table-bordered table-hover table-responsive">
    <caption>Titulo</caption>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre usuario <?php$retrive ?> /th>
            <th colspan="2">Acciones</th>
        </tr>
    </thead>
    <tbody>
 
       

<ul class="pagination pagination-lg pager" id="myPager"></ul>

</html>