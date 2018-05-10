<?php 
	       
        $Server = "127.0.0.1:3306";
        $User = "root";
        $Pass = "sa";
        $Db = "yaguar";        
        $conn = mysqli_connect($Server, $User, $Pass, $Db);
        include ("mysql.php");                	
        
        $usuario_key =$_POST['usuario_key'];
        $perfil_key =$_POST['perfil_key'];
        $usuario=$_POST['usuario'];	        
        $desc_usuario=$_POST['desc_usuario'];
        $sexo=$_POST['sexo'];
        $miembro_relacional=-1;
        $estado=1;                
        
                           
        $SqlStatement = "call yaguar.sp_upd_usuarios(".$usuario_key.", ".$perfil_key.",'".$usuario."', '".$desc_usuario."', '".$sexo."',".$miembro_relacional." ,".$estado.");";
        $StatementType = 0;   
                 
	 $retrive=MySqlSelect ("MySql",$SqlStatement,$StatementType,$conn,$Db) or die(mysqli_error($conn)); 
         echo $retrive;
         
         
        
 ?>
