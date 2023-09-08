CREATE DATABASE users_management;
USE users_management;



CREATE TABLE `groups` (
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
`name` VARCHAR(50) NOT NULL
);

CREATE TABLE users (
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
login VARCHAR(100) NOT NULL UNIQUE, 
password_hash VARCHAR(255) NOT NULL
);

CREATE TABLE users_groups (
id_user INT NOT NULL, 
id_group INT NOT NULL,
PRIMARY KEY(id_user,id_group)
);

ALTER TABLE users_groups
ADD CONSTRAINT fk_users_groups_id_user
FOREIGN KEY (id_user)
REFERENCES users(id);

ALTER TABLE users_groups
ADD CONSTRAINT fk_users_groups_id_group
FOREIGN KEY (id_group)
REFERENCES `groups`(id);