CREATE DATABASE jobaria

USE jobaria

CREATE TABLE usuarios (
    user_id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_nombres VARCHAR(100) NOT NULL,
    user_apellidos VARCHAR(100) NOT NULL,
    user_email VARCHAR(150) NOT NULL,
    user_img VARCHAR(100),
    user_pass VARCHAR(100) NOT NULL,
    user_token TEXT,
    user_status TINYINT(1) NOT NULL DEFAULT 0 COMMENT 'status 0: no activo. status 1: activo',
    user_rol VARCHAR(50) NOT NULL DEFAULT 'cliente'
)

INSERT INTO usuarios (user_nombres, user_apellidos, user_email, user_pass) VALUES 
    ("Eduardo", "Arroyo", "eduardo@gmail.com", "123")