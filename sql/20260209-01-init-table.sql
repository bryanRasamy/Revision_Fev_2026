CREATE DATABASE tp_revision_fev_2026;

use tp_revision_fev_2026;

CREATE TABLE user(
	id_user INT PRIMARY KEY AUTO_INCREMENT,
	pseudo VARCHAR(100),
	mdp VARCHAR(100),
	avatar VARCHAR(100),
	type VARCHAR(100)
);


