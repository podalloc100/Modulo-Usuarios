<?php

    $Server = "127.0.0.1:3306";
    $User = "root";
    $Pass = "sa";
    $Db = "yaguar";
    $SqlStatement = "select perfil_key,perfil from yaguar.sac_perfiles;";
    $StatementType = 1;


    $conn = mysqli_connect($Server, $User, $Pass, $Db);
    include ("mysql.php");



    $retrive=MySqlSelect ("MySql",$SqlStatement,$StatementType,$conn,$Db);

        if($retrive)
        {                         
            echo("<div class='select-style'>");
            echo '<select name ="perfil_key">';            
            while($result=mysqli_fetch_row($retrive)) 
                 {  
                 echo '<option value="'.$result[0].'">'.$result[1].'</option>';                
                }                 
                echo '</select>';  
        }   
        else
        {
        echo "Tabla no encontrada <br/>";
        } 

       mysqli_close($conn);



?>
