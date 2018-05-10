function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}


function iralta() {
    window.location.href = 'alta_usuario.php';
}

function irindex() {
    window.location.href = 'index.php';
}

function irbaja() {    
    window.location.href = 'baja_usuario.php';
}


function fn_ins_usuarios(){
    
        var datos=$('#altausuario').serialize();
			$.ajax({
                            
				type:"POST",
				url:"http://localhost:8080/MiProyecto/php_ins_usuarios.php", 
				data:datos,
				success:function(r)                                   
                                        {
                                        if(r == null || r == undefined){
                                            alert('No definida')
                                        }
                                        else{
                                            alert('Si definida')
                                        }
                                        
                                            
                                        
                                        }
                			});
			return false;
    }
     
function fn_sp_del_usuarios(usuario_key){                                                                               
                       if(confirm("Esta seguro"))
                           {
                            $.ajax({                            				
				url:"http://localhost:8080/MiProyecto/php_del_usuarios.php?usuario_key="+usuario_key,                                
				success:function(r)                                
                                        {                                               
					
                                        }                                                                            
                                    });
                            window.location.href = 'baja_usuario.php';
                           }
                       else
                           {    
                            document.location.href="no.html"; 
                           }

                        
			
                                                           
			return false;
}

     

function fn_sp_upd_usuarios(usuario_key){                    
			$.ajax({                            				
				url:"http://localhost:8080/MiProyecto/php_upd_usuarios.php?usuario_key="+usuario_key, 				
				success:function(r)                                
                                        {                                               
					alert(r);
                                        }
                			});
			return false;
}
