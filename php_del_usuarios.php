<?php
$usuario_key = $_GET['usuario_key']; 
echo $usuario_key;
    
        $Server = "127.0.0.1:3306";
        $User = "root";
        $Pass = "sa";
        $Db = "yaguar";        
        
        
        
        $conn = mysqli_connect($Server, $User, $Pass, $Db);
        include ("mysql.php");
                
	$usuario_key = $_GET['usuario_key'];        
        
        $SqlStatement = "call yaguar.sp_del_usuarios(".$usuario_key.");";
        $StatementType = 0;  
                
	 $retrive=MySqlSelect ("MySql",$SqlStatement,$StatementType,$conn,$Db) or die(mysqli_error($conn)); 
         echo $SqlStatement;
      
        
 ?>