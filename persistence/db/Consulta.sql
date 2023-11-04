CREATE DATABASE IF NOT EXISTS rolegame;

USE rolegame;

CREATE TABLE creature(
	idCreature INT(11) AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(150),
	description VARCHAR(255),
	avatar VARCHAR(255),
	attackPower INT(11),
	lifeLevel INT(11),
	weapon VARCHAR(45)
);

CREATE TABLE users(
	idUser INT(11) AUTO_INCREMENT PRIMARY KEY,
	user VARCHAR(20)
);

INSERT INTO users (user) VALUES ('admin');
