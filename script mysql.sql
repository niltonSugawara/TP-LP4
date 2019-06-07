CREATE DATABASE museugames;

CREATE TABLE usuario 
(
     id_usuario int NOT NULL PRIMARY KEY AUTO_INCREMENT, 
     nome varchar(100) NOT NULL, 
     sobrenome varchar(100) NOT NULL,
     endereço varchar(100)  NOT NULL,
     telefone char(8) NOT NULL,
     email varchar(100) NOT NULL,
     senha varchar(32) NOT NULL
);

CREATE TABLE empresa
(
     id_empresa int NOT NULL PRIMARY KEY AUTO_INCREMENT,
     nome varchar(100) NOT NULL
);

CREATE TABLE plataforma
( 
     id_plataforma int NOT NULL PRIMARY KEY AUTO_INCREMENT,
     nome varchar(100) NOT NULL,
     id_empresa int NOT NULL,
     CONSTRAINT fk_id_empresa FOREIGN KEY (id_empresa) REFERENCES empresa (id_empresa)
);

CREATE TABLE game
(
    id_game int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    venda_troca varchar(10) NOT NULL,
    id_plataforma int NOT NULL,
    id_usuario int NOT NULL,
    CONSTRAINT fk_id_plataforma FOREIGN KEY (id_plataforma) REFERENCES plataforma (id_plataforma),
    CONSTRAINT fk_id_usuario FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
);

INSERT INTO usuario(nome,sobrenome,endereço,telefone,email,senha)
VALUES ('Provolone', 'Pizza', 'Rua Guarnauba', '44444444', 'provolone@gmail.com', 'provolone');
INSERT INTO usuario(nome,sobrenome,endereço,telefone,email,senha)
VALUES ('Bologna', 'Gorgonzolla', 'Rua Guarnauba', '44444444', 'bologna@gmail.com', 'bologna');
INSERT INTO usuario(nome,sobrenome,endereço,telefone,email,senha)
VALUES ('Faustao', 'O loko meu', 'Rua Guarnauba', '44444444', 'faustao@gmail.com', 'faustao');

INSERT INTO empresa(nome)
VALUES ('Sony');
INSERT INTO empresa(nome)
VALUES ('Microsoft');
INSERT INTO empresa(nome)
VALUES ('Nintendo');

INSERT INTO plataforma(nome,id_empresa)
VALUES ('Playstation 1', '1');
INSERT INTO plataforma(nome,id_empresa)
VALUES ('Playstation 2', '1');
INSERT INTO plataforma(nome,id_empresa)
VALUES ('Playstation 3', '1');
INSERT INTO plataforma(nome,id_empresa)
VALUES ('Xbox360', '2');
INSERT INTO plataforma(nome,id_empresa)
VALUES ('XboxONE', '2');
INSERT INTO plataforma(nome,id_empresa)
VALUES ('XboxSCARLET', '2');
INSERT INTO plataforma(nome,id_empresa)
VALUES ('Nintendo Wii', '3');
INSERT INTO plataforma(nome,id_empresa)
VALUES ('Nintendo 64', '3');
INSERT INTO plataforma(nome,id_empresa)
VALUES ('Nintendo Switch', '3');

INSERT INTO game(nome,venda_troca,id_plataforma,id_usuario)
VALUES ('Fifa 2', 'venda', '1', '2');
INSERT INTO game(nome,venda_troca,id_plataforma,id_usuario)
VALUES ('Elder Skrolls 3', 'venda', '3', '1');
INSERT INTO game(nome,venda_troca,id_plataforma,id_usuario)
VALUES ('Mario Odissey', 'troca', '9', '3');
