<?php

    //paginacion
    $registros = 5; //Cantidad de registros que quieres que aparezcan por cada pagina
    $contador = 0; //inicio del contador
    $pagina = $_GET['baja_usuario.php']; //variable que recibe la siguente pagina a mostrar
    if(!$pagina) {
        $inicio = 0;
        $pagina = 1;
    } else {
        $inicio = ($pagina -1) * $registros;
    }
    
    
    $Server = "127.0.0.1:3306";
    $User = "root";
    $Pass = "sa";
    $Db = "yaguar";
    $SqlStatement = "select a.usuario_key, a.usuario, a.desc_usuario, a.sexo, c.perfil from yaguar.sac_usuarios a inner join yaguar.sac_usuairos_perfiles b on a.usuario_key = b.usuario_key inner join yaguar.sac_perfiles c on b.perfil_key = c.perfil_key;";
    $StatementType = 1;
    
    
    //lista de registros
    $lista = $db->query("select a.usuario_key, a.usuario, a.desc_usuario, a.sexo, c.perfil from yaguar.sac_usuarios a inner join yaguar.sac_usuairos_perfiles b on a.usuario_key = b.usuario_key inner join yaguar.sac_perfiles c on b.perfil_key = c.perfil_key;");
    $total_lista = mysqli_num_rows($lista);
    
    //lista de registros con la limitacion
    $lista = $db->query("SELECT * FROM tabla ORDER BY fecha DESC LIMIT $inicio, $registros");
    $total_paginas = ceil($total_lista / $registros);
    
    
    $conn = mysqli_connect($Server, $User, $Pass, $Db);
    include ("mysql.php");
    

    

    $retrive=MySqlSelect ("MySql",$SqlStatement,$StatementType,$conn,$Db);

        if($retrive)
        {                         
            echo '<h2>Baja de Usuarios</h2>';
            echo '<p>Lista de usuarios a Eliminar</p>';
            echo'<table class="w3-table w3-black">';
            echo '<tr><th>Usuario</th> <th>Nombre</th> <th>Sexo</th></tr>';
            while($result=mysqli_fetch_row($retrive)) 
                 {  
                
                 echo "<tr>"
                            ."<td>".$result[1]."</td>"
                            ."<td>".$result[2]."</td>"
                            ."<td>".$result[3]."</td>"                            
                            ."</tr>"; 
                }           
           echo '</table>';
        }   
        else
        {
        echo "Tabla no encontrada <br/>";
        } 

       mysqli_close($conn);



?>
