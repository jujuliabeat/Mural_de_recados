CREATE TABLE `tb_recados` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `autor` varchar(45) NOT NULL,
  `frase` longtext NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `tb_recados` VALUES 
  (1,'2023-11-13','Desconhecido','Aquele que não luta pelo futuro que quer deve aceitar o futuro que vier'),
  (2,'0450-11-10','Heráclito','Nada é permanente, exceto a mudança');
