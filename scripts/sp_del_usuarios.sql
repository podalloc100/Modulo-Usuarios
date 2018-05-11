
-- =============================================
-- Autor:				Leonardo Mendoza
-- Fecha de creacion:	01/03/2018
-- Descricpcion:		Elimina un Nuevo usuarios
-- =============================================
DROP PROCEDURE IF EXISTS sp_del_usuarios;
DELIMITER $$
 
CREATE PROCEDURE sp_del_usuarios(in _usuario_key int)

BEGIN

delete from sac_usuarios where usuario_key = _usuario_key;

END $$
DELIMITER ;

# call sp_del_usuarios (250);


