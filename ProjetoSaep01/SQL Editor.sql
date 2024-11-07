CREATE DATABASE db_Projetosaep01;

USE db_Projetosaep01;

CREATE TABLE TBL_usuarios(
       Usu_codigo INT AUTO_INCREMENT PRIMARY KEY,
       Usu_nome VARCHAR(100) NOT NULL,
       Usu_email VARCHAR(100) NOT NULL
);

CREATE TABLE TBL_tarefas(
       Tar_codigo INT AUTO_INCREMENT PRIMARY KEY,
       Tar_setor VARCHAR(15) NOT NULL,
       Tar_prioridade VARCHAR(20) NOT NULL,
       Tar_descrição VARCHAR(100) NOT NULL,
       Tar_status VARCHAR(20) NOT NULL,
       Codigo_usuario INT,
       FOREIGN KEY (Codigo_usuario) REFERENCES TBL_usuarios(Usu_codigo)
);
