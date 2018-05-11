-- =============================================
-- Autor:				Leonardo Mendoza
-- Fecha de creacion:	01/03/2018
-- Descricpcion:		Inserta un Nuevo usuarios con su perfil y su relacion
-- =============================================
DROP PROCEDURE IF EXISTS sp_ins_usuarios_perfil;
DELIMITER //
Create PROCEDURE sp_ins_usuarios_perfil (
									in _usuario nvarchar(50),
                                    in _perfil nvarchar(250),
                                    in _password nvarchar(50),
                                    in _desc_usuario nvarchar(250),
                                    in _sexo char(1),
                                    in _miembro_relacional int,
                                    in _Estado int,
                                    in _Timestamp datetime	
								)
BEGIN
	declare _usuario_key int;
    declare _perfil_key int;
    
	set _usuario_key = (select max(usuario_key) + 1  from sac_usuarios);
	
	set _perfil_key = (select max(perfil_key) + 1  from sac_perfiles);

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
                            _Timestamp                            
                            );

INSERT INTO sac_usuairos_perfiles	values (_perfil_key,_usuario_key);
                            
                            
END //
DELIMITER ;


  