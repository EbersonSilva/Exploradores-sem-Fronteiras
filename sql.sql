CREATE TABLE alaein48_exploradores_sem_fronteiras. exploradores_users (
    id INT(20) NULL AUTO_INCREMENT ,
    nomecompleto VARCHAR(60) NOT NULL ,
    email VARCHAR(50) NOT NULL ,
    telefone VARCHAR(15) NOT NULL ,
    cidade VARCHAR(30) NOT NULL ,
    estado VARCHAR(2) NOT NULL ,
    sexo VARCHAR(20) NOT NULL ,
    senha VARCHAR(25) NOT NULL ,
    confirm_dados VARCHAR(50) NOT NULL ,
    confirm_responsabilidade VARCHAR(50) NOT NULL ,
    confirm_comunicacao VARCHAR(50) NOT NULL PRIMARY KEY;)