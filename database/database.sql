CREATE DATABASE banco;
USE banco;
CREATE TABLE usuario
(
    dni         VARCHAR(9) NOT NULL,
    nombre      VARCHAR(100) NOT NULL,
    apellidos   VARCHAR(255),
    telefono    INT(9),
    email       VARCHAR(255),
    password    VARCHAR(255) NOT NULL,
    rol         VARCHAR(20),
    dinero      INT(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(dni),
    CONSTRAINT uq_email UNIQUE(email)
)
ENGINE=InnoDb;
CREATE TABLE movimientos
(
    id          INT(255) AUTO_INCREMENT NOT NULL,
    dni_usuario VARCHAR(9) NOT NULL,
    cantidad    INT(255),
    fecha       DATE,
    concepto    VARCHAR(255),
    CONSTRAINT pk_movimientos PRIMARY KEY(id),
    CONSTRAINT fk_dni_usuario FOREIGN KEY(dni_usuario) REFERENCES usuario(dni)
)
ENGINE=InnoDb;