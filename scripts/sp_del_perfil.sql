
-- =============================================
-- Autor:				Leonardo Mendoza
-- Fecha de creacion:	01/03/2018
-- Descricpcion:		Elimina un Perfil
-- =============================================
DROP PROCEDURE IF EXISTS sp_del_perfil;
DELIMITER $$
 
CREATE PROCEDURE sp_del_perfil(in _perfil_key int)

BEGIN

delete from sac_perfiles where perfil_key = _perfil_key;

END $$
DELIMITER ;

# call sp_del_perfil (250);


