CREATE DATABASE IF NOT EXISTS formcadastro;
USE formcadastro;

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
