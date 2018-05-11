-- =============================================
-- Autor:				Leonardo Mendoza
-- Fecha de creacion:	02/03/2018
-- Descricpcion:		Inserta un Nuevos Pefiles
-- =============================================
DROP PROCEDURE IF EXISTS sp_ins_perfiles;
DELIMITER //
Create PROCEDURE sp_ins_perfiles (
									in _perfiles nvarchar(250)
								)
                                
BEGIN
	declare _perfil_key int;
	set _perfil_key = (select max(perfil_key) + 1  from sac_perfiles);

INSERT INTO sac_perfiles 	(
							perfil_key,
							perfil
                            )
                             VALUES 
                            (
                            _perfil_key,
							_perfiles                         
                            );
END //
DELIMITER ;


  