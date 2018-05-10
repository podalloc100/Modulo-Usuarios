<?php 
	$conexion=mysqli_connect('127.0.0.1:3306','root','sa','yaguar');                   
        
        $Server = "127.0.0.1:3306";
        $User = "root";
        $Pass = "sa";
        $Db = "yaguar";        
        $conn = mysqli_connect($Server, $User, $Pass, $Db);
        include ("mysql.php");
                
	$usuario=$_POST['usuario'];
	$nombre=$_POST['nombre'];
        $sexo=$_POST['sexo'];
	$password= sha1($_POST['psw']);
        $perfil=($_POST['perfil']);
        $miembro_relacional = -1;
        $estado = 1;
        $timestamp = time();
        
        $SqlStatement = "call yaguar.sp_ins_usuarios('".$usuario."', '".$password."', '".$nombre."', '".$sexo."',".$miembro_relacional." ,".$estado.");";
        $StatementType = 0;
      
	 $retrive=MySqlSelect ("MySql",$SqlStatement,$StatementType,$conn,$Db) or die(mysqli_error($conexion)); 
        echo $retrive;	
 ?>