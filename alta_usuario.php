<!DOCTYPE html>
<!-- Add icon library -->
<html>
    <head>
            <title>Alta de Usuarios</title>            
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="css/min.css" rel="stylesheet" type="text/css"/>
            <link href="css/altausuario.css" rel="stylesheet" type="text/css"/>
            <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
            <script src="js/Functions.js" type="text/javascript"></script>
    </head>
        <body>
            <form id="altausuario" method="POST" style="max-width:500px;margin:auto" action="insertar.php">
                <h2>Alta Para</h2>
                <div class="input-container">
                  <i class="fa fa-user icon"></i>
                  <input class="input-field" type="text" placeholder="Usuario" name="usuario">
                </div>

                <div class="input-container">
                  <i class="fa fa-envelope icon"></i>
                  <input class="input-field" type="text" placeholder="Nombre y Apellido" name="nombre">
                </div>

                <div class="input-container">
                  <i class="fa fa-key icon"></i>
                  <input class="input-field" type="password" placeholder="Password" name="psw">
                </div>             
                
                <label class="container">Hombre
                    <input class="w3-radio" type="radio" name="sexo" value="M">
                <span class="checkmark"></span>
                </label>    

                <label class="container">Mujer
                    <input class="w3-radio" type="radio" name="sexo" value="F">
                <span class="checkmark"></span>
                </label>

                <label class="container">Desconocido
                    <input class="w3-radio" type="radio" name="sexo" value="D">
                <span class="checkmark"></span>
                </label> 
                                 
                <strong class="input-container">Perfiles</strong>
                <div class="input-container">                    
                   <?php include ("comboperfiles.php"); ?>
                </div>
                
                <?php
    
                      $pagemaincontent = ob_get_contents(); 
                      ob_end_clean();
                      include('index.php');
                 ?>
                
                <br>                
              
                <button type="button" id="btnguardar" onclick="fn_ins_usuarios()">Guardar datos</button>
             
            </form>
        </body>
</html>

