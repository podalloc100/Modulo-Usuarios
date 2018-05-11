


CREATE TABLE IF NOT EXISTS  `usuarios`.`sac_objetos` 
(
  `objeto_key` int(11) NOT NULL,
  `objeto` varchar(250) DEFAULT NULL,
  `tipo_objeto_key` int(11) NOT NULL,
  `desc_objeto` varchar(250) DEFAULT NULL,
  `parametro_adicional` varchar(1000) DEFAULT NULL,
  `param_query` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`objeto_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE IF NOT EXISTS `usuarios`.`sac_perfiles` 
(
  `perfil_key` int(11) NOT NULL,
  `perfil` varchar(250) NOT NULL,  
  PRIMARY KEY (`perfil_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `usuarios`.`sac_permisos_perfiles` 
(
  `perfil_key` int(11) NOT NULL,
  `objeto_key` int(11) NOT NULL,  
  PRIMARY KEY (`perfil_key`,`objeto_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `usuarios`.`sac_tipos_objetos` 
(
  `tipo_objeto_key` int(11) NOT NULL,
  `tipo_objeto` int(11) NOT NULL,  
  PRIMARY KEY (`tipo_objeto_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `usuarios`.`sac_usuarios` 
(
  `usuario_key` int(11) NOT NULL,
  `usuario` varchar(50)  NOT NULL,  
  `password` varchar(50)  NULL,  
  `fecha_password` datetime NULL,  
  `desc_usuario` varchar(250) NULL,  
  `sexo` varchar(50) NULL,  
  `miembro_relacional` varchar(50) NULL,
  `Estado` bit NULL,
  `Timestamp`datetime NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `usuarios`.`sac_usuarios_perfiles` 
(
  `perfil_key` int(11) NOT NULL,
  `usuario_key` int(11) NOT NULL,  
  PRIMARY KEY (`perfil_key`,`usuario_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
