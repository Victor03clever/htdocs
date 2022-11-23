Create database	 `bd_taxi` 
DEFAULT CHARACTER SET utf8 
default collate utf8_general_ci;
USE `bd_taxi` ;

CREATE TABLE IF NOT EXISTS T_Usuario(
  idUsuario INT NOT NULL primary key AUTO_INCREMENT ,
  `login` VARCHAR(250) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
	admin  int(11) not null default 0
  )engine= InnoDB default charset= utf8;

INSERT INTO `bd_taxi`.`T_Usuario` (`login`, `password`, `admin`) 
  VALUES ('Miguel', '$2y$10$2zrVndLWmFE7xzhgShlBXOS7.lQOz3E8zkxj/ZlogE8wOK9ev3aYm', '0');

INSERT INTO `bd_taxi`.`T_Usuario` (`login`, `password`, `admin`) 
VALUES ('Paulo', '$2y$10$2zrVndLWmFE7xzhgShlBXOS7.lQOz3E8zkxj/ZlogE8wOK9ev3aYm', '1');
  select*from T_Usuario;
  
CREATE TABLE IF NOT EXISTS T_Cliente (
  `idCliente` INT NOT NULL primary key AUTO_INCREMENT,
  `nomecliente` VARCHAR(100) NOT NULL,
  `emailcliente` VARCHAR(100) NOT NULL,
  `contatocliente` VARCHAR(100) NOT NULL,
  FkUsuario  int not null, foreign key (FkUsuario  ) references T_Usuario (idUsuario )
)ENGINE = InnoDB default charset= utf8;

select* from T_Cliente;
  
CREATE TABLE IF NOT EXISTS T_Telefone(
  IdTelefone int not null primary key auto_increment,
  `telefone` VARCHAR(25) NOT NULL,
  FkCliente int not null,  foreign key(FkCliente) references T_Cliente(`idCliente`)
  )ENGINE = InnoDB default charset= utf8;
  
CREATE TABLE IF NOT EXISTS T_Motorista (
  `idMotorista` INT NOT NULL primary key AUTO_INCREMENT,
  `nomemotorista` VARCHAR(100) NOT NULL
  )engine= InnoDB default charset= utf8;
  
CREATE TABLE IF NOT EXISTS T_Veiculo (
   IdVeiculo int not null primary key auto_increment,
  `matriculaveiculo` VARCHAR(20) NOT NULL,
  `tipoveiculo` VARCHAR(100) NOT NULL,
  `modeloveiculo` VARCHAR(100) NOT NULL,
  `cor` VARCHAR(100) NOT NULL
  )engine= InnoDB default charset= utf8;
  
CREATE TABLE IF NOT EXISTS T_Corrida (
  `idcorrida` INT NOT NULL primary key AUTO_INCREMENT,
  `cliente` VARCHAR(100) NOT NULL,
  `enderecodesaida` VARCHAR(100) NOT NULL,
  `enderecodechegada` VARCHAR(100) NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  FkCliente int not null, constraint foreign key(FkCliente) references T_Cliente(`idCliente`),
  FkMotorista int not null, constraint foreign key(FkMotorista) references T_Motorista(`idMotorista`),
  FkVeiculo  int not null, constraint foreign key(FkVeiculo ) references T_Veiculo( IdVeiculo )
  )engine= InnoDB default charset= utf8;
  
CREATE TABLE IF NOT EXISTS T_Codicoes (
  `idCondicoes` INT NOT NULL primary key AUTO_INCREMENT,
  `descicaocondicoes` VARCHAR(100) NOT NULL,
  `veiculo_matriculaveiculo` DATETIME NOT NULL,
   FkVeiculo  int not null,  foreign key(FkVeiculo ) references T_Veiculo( IdVeiculo )
  )engine= InnoDB default charset= utf8;
  
CREATE TABLE IF NOT EXISTS T_Categoria (
  `idcategoria` INT NOT NULL primary key AUTO_INCREMENT ,
  `categoria` VARCHAR(100) NOT NULL,
  `descricao` TEXT NULL,
  `veiculo_matriculaveiculo` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FkVeiculo  int not null,  foreign key(FkVeiculo ) references T_Veiculo( IdVeiculo )
  )engine= InnoDB default charset= utf8;

