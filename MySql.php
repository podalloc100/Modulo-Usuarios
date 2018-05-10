<?php

/* 
 ============================================================
-- Autor:		Leonardo Mendoza
-- Fecha de creacion:	02/03/2018
-- Descricpcion:	Funciones para ejecutar Stored Procedures
 * PARAMETROS: 
 *              $ConnType:          Tipode Conexion ()
 *              $MySqlStatement:    Sentencia a ejecutar de tipo Select
 *              $StatementType:     Tipo de Sentencia 1 (Devuelve Resultado) <> 1 (No devuelve resultado)
 *              $ConnectionString:  String de conexion
 *              $DataBse:           Base de Datos
-- ============================================================
 */
function MySqlSelect ($ConnType,$MySqlStatement,$StatementType,$ConnectionString,$DataBse)
{
     
    switch ($ConnType) 
    {
    case "MySql":
        
        if($ConnectionString)
            {
            //echo("CONEXION EXITOSA <br/>");            
            
                  $seldb=mysqli_select_db($ConnectionString,$DataBse);
                 if($seldb)
                    {
              //      echo("BASE DE DATOS ENCONTRADA <br/>");
                    
                    if($StatementType==1)                        
                        {
                        $DataSet=mysqli_query($ConnectionString,$MySqlStatement) or die(mysqli_error($ConnectionString));
                      
                        if($DataSet)
                            {
                //            echo("CONSULTA EXITOSA <br/>");
                            return $DataSet;
                            }
                            else 
                            {
                            echo("TABLA NO ENCONTRADA <br/>");
                            }
                        }
                        else 
                            {
                            mysqli_query($ConnectionString,$MySqlStatement) or die(mysqli_error($ConnectionString));
                            }
                    }
                    else 
                    {
                    echo("BASE DE DATOS NO ENCONTRADA <br/>");
                    }
            }
            else
            {
            echo("CONEXION FALLIDA <br/>");
            }                      
        break;
    case "SqlServ":
        echo "Conexion a SqlServ en construccion";
        break;
    case "Imformix":
        echo "Conexion  Imformix en constrcucion";
        break;
    }
    
}

?>
