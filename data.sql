CREATE DATABASE foot;
USE foot;

/* CREER LA TABLE JOUEUR */
CREATE TABLE joueur (
	id INT PRIMARY KEY NOT NULL auto_increment,
    nom VARCHAR(50) NOT NULL,
    numero INT(2), 
    position VARCHAR(50) NOT NULL
);

/* AFFICHER LA LISTE DES JOUEURS*/
SELECT * FROM joueur;

/* AJOUTER UN JOUEUR */
INSERT INTO joueur (nom, numero, position)
VALUES 
("Mbappé", 10, "attaquant"),
("Lloris", 1, "gardien");

/* METTRE A JOUR UN JOUEUR */
UPDATE joueur SET numero = 2 WHERE id = 2;