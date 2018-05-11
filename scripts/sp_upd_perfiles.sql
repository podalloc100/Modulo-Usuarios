-- =============================================
-- Autor:				Leonardo Mendoza
-- Fecha de creacion:	02/03/2018
-- Descricpcion:		Actualiza un Perfil
-- =============================================
DROP PROCEDURE IF EXISTS sp_upd_perfiles;
DELIMITER //
Create PROCEDURE sp_upd_perfiles (
									in _perfiles nvarchar(250)
								)
BEGIN

update 	sac_perfiles set 
		perfiles = _perfiles
where  perfil_key = _perfil_key;
                

END //
DELIMITER ;


  