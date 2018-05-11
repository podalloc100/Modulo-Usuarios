-- =============================================
-- Autor:				Leonardo Mendoza
-- Fecha de creacion:	01/03/2018
-- Descricpcion:		Inserta un Nuevo usuarios
-- =============================================
DROP PROCEDURE IF EXISTS sp_ins_usuarios;
DELIMITER //
Create PROCEDURE sp_ins_usuarios (
									in _usuario nvarchar(50),
                                    in _perfil_key int,
                                    in _password nvarchar(50),
                                    in _desc_usuario nvarchar(250),
                                    in _sexo char(1),
                                    in _miembro_relacional int,
                                    in _Estado int                                    
								)
BEGIN
  declare _usuario_key int;
set _usuario_key = (select max(usuario_key) + 1  from sac_usuarios);

INSERT INTO sac_usuarios 	(
							usuario_key,
							usuario,
                            password,
                            fecha_password,
                            desc_usuario,
                            sexo,
                            miembro_relacional,
                            Estado,
                            Timestamp
							)  
                            VALUES 
                            (
                            _usuario_key,
                            _usuario,
                            _password,
                            now(),
                            _desc_usuario,
                            _sexo,
                            _miembro_relacional,
                            _Estado,
                            now()
                            );
                                                        
INSERT INTO sac_usuairos_perfiles	values (_perfil_key,_usuario_key);                            
                            
END //
DELIMITER ;


  