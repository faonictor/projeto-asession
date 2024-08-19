CREATE DATABASE asession;
USE asession;

CREATE TABLE `asession`.`usuario` (
  `id_usuario` INT PRIMARY KEY AUTO_INCREMENT,
  `nome` VARCHAR(45),
  `cpf` VARCHAR(45),
  `email` VARCHAR(100),
  `tipo_usuario` VARCHAR(50),
  `senha` VARCHAR(45),
  `codigo_dne` INT,
  `permissao` VARCHAR(45)
  );

CREATE TABLE `asession`.`filme` (
  `id_filme` INT PRIMARY KEY AUTO_INCREMENT,
  `titulo` VARCHAR(255),
  `duracao_filme` INT,
  `sinopse` VARCHAR(255) DEFAULT 'Sem Sinopse',
  `classificacao` VARCHAR(45) DEFAULT 'Sem Classificação'
  );