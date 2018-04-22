USE `db_votaciones`;

INSERT INTO `facultad`(`nombre`) VALUES
('Ingeniería'),('Ciencias de la Educación'),('Ciencias de la Salud'),
('Ciencias Empresariales y Económicas'),('Ciencias Básicas'),('Humanidades');

INSERT INTO `programa`(`nombre`, `facultad_id`) VALUES
('Ingeniería de Sistemas',1),('Ingeniería Electronica',1),
('Ingeniería Ambiental y Sanitaria',1),('Ingeniería Industrial',1),
('Ingeniería Civil',1),('Ingeniería Pesquera',1);

INSERT INTO `mesa`(`id`) VALUES ('10'),('11'),('12'),('13');

INSERT INTO `rol` (`id`,`rol`) VALUES
('A','Administrador'),('V','Votante'),('D','Delegado'),('J','Juez'),('T','Testigo');


INSERT INTO `usuario`(`codigo`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, 
`password`, `rol_id`, `mesa_id`, `programa_id`) VALUES
('2018110100','Admin','Admin','Admin','Admin','admin','A',null,null),
('2018110200','Admin2','Admin2','Admin2','Admin2','1234','A',null,null),
('2018112030','Juan','Jose','Lopez','Madera','2030','V',10,1),
('2018113040','Ernesto','Andres','Madrid','Sierra','3040','V',11,2);