CREATE DATABASE if NOT EXISTS login_db;
USE login_db;

CREATE TABLE if NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR (50) NOT NULL UNIQUE,
    password VARCHAR (255)NOT NULL
);

INSERT INTO users (username,password) VALUES 
('ana','chris'),
('ana1','chris1'),
('ana2','chris2'),
('ana3','chris3');

