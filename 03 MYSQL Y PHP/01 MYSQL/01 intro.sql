-- CONSULTAS O QUERIES
-- 🌟🌟 NO ES KEY SENSITIVE 
-- ⚡⚡ POR BUENAS PRACTICAS Y RECOMENDACION, USAR LOS COMANDOS DE SLQ EN MAYUSCULAS

SHOW DATABASES

CREATE DATABASE stream

USE stream

-- PRIMARY Y FOREIGN KEYS

CREATE TABLE personas (
    per_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    per_nombres VARCHAR(100) NOT NULL,
    per_foto VARCHAR(100), 
    per_apellidos VARCHAR(100) NOT NULL,
    per_ciudad VARCHAR(100),
    per_dni CHAR(8),
    per_fecha_nac DATE NOT NULL
)

DESC personas

-- 💥💥 DANGER SOLO EN PRUEBAS DE DESARROLLO
DROP TABLE personas

ALTER TABLE personas ADD COLUMN per_genero VARCHAR(15) AFTER per_dni

ALTER TABLE personas DROP COLUMN per_genero

-- INSERTAR DATOS
INSERT INTO personas (per_nombres, per_foto, per_apellidos, per_ciudad, per_dni, per_fecha_nac, per_genero) VALUES
    ("Eduardo", 'perfil01.jpg', 'Arroyo', "Huancayo", '12345678', '2000-10-10', 'masculino')

SELECT * FROM personas

INSERT INTO personas (per_nombres, per_foto, per_apellidos, per_ciudad, per_dni, per_fecha_nac, per_genero) VALUES
    ("Alexa", 'perfil02.jpg', 'Ordoñez', "Lima", '11111111', '1990-10-10', 'Femenino'),
    ("Ricardo", 'perfil02.jpg', 'Perez', "Huanuco", '22222222', '2005-10-10', 'masculino'),
    ("Pedro", 'perfil03.jpg', 'Miraval', "Cuzco", '33333333', '2010-10-10', 'masculino')

-- 💥💥 DANGER SOLO EN PRUEBAS DE DESARROLLO
DELETE FROM personas WHERE per_id = 1

DROP TABLE personas

SHOW TABLES

DELETE FROM personas

TRUNCATE personas

-------------------------------------------------------------
CREATE TABLE peliculas (
    peli_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    peli_nombre VARCHAR(100) NOT NULL,
    peli_genero VARCHAR(50) NOT NULL,
    peli_fechaEstreno DATE NOT NULL,
    peli_restricciones VARCHAR(5) NOT NULL
)

INSERT INTO peliculas (peli_nombre, peli_genero, peli_fechaEstreno, peli_restricciones) VALUES
    ('Opennhaimer', 'Drama', '2023-07-21', 'PG-13'),
    ('Matrix', 'Ciencia Ficción', '1991-01-23', 'PG-13'),
    ('Titanic', 'drama', '1997-12-19', 'PG-16'),
    ('La Lista de Shindler', 'Drama', '1998-05-05', 'PG-16'),
    ('La Sociedad y la nieve', 'Suspenso', '2023-06-06', 'PG-18'),
    ('El Conjuro', 'Terror', '2010-02-02', 'PG-16')

INSERT INTO peliculas (peli_nombre, peli_genero, peli_fechaEstreno, peli_restricciones) VALUES
    ('Alien: El octavo pasajero', 'ciencia ficcion', '1990-12-12', 'PG-13')

INSERT INTO peliculas (peli_nombre, peli_genero, peli_fechaEstreno, peli_restricciones) VALUES
    ('007: Golden Eye', 'Acción', '1996-07-07', 'PG')

-- 1️⃣ WHERE
SELECT * FROM peliculas WHERE peli_id = 1
SELECT * FROM peliculas WHERE peli_nombre = 'titanic'
SELECT * FROM peliculas WHERE peli_genero = 'Drama'

-- 2️⃣ ORDER BY
SELECT * FROM peliculas ORDER BY peli_id DESC
SELECT * FROM peliculas ORDER BY peli_nombre DESC
SELECT * FROM peliculas ORDER BY peli_fechaEstreno

SELECT * FROM peliculas WHERE peli_genero = 'ciencia ficcion' ORDER BY peli_fechaEstreno

-------------------------------------------------------------------------------
CREATE TABLE actores (
    act_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    act_nombres VARCHAR(100) NOT NULL,
    act_apellidos VARCHAR(100) NOT NULL
)

INSERT INTO actores (act_nombres, act_apellidos) VALUES
    ('Cilian', 'Murphy'),
    ('Matt', 'Daemon'),
    ('Keanu', 'Reaves'),
    ('Carrie-Anne', 'Moss'),
    ('Leonardo', 'Dicaprio'),
    ('Kate', 'Winslet'),
    ('Liam', 'Neelson'),
    ('Sigourney', 'Weaver'),
    ('Patrick', 'Wilson'),
    ('Vera', 'Farmiga')

SELECT act_nombres, act_apellidos FROM actores
-- 3️⃣ CONCAT
SELECT CONCAT(act_nombres, act_apellidos) FROM actores
SELECT CONCAT(act_nombres, ' ', act_apellidos) FROM actores
SELECT CONCAT(act_nombres, ' ', act_apellidos) FROM actores ORDER BY act_apellidos

-- 4️⃣ ALIAS DE CAMPOS
SELECT CONCAT(act_nombres, ' ', act_apellidos) AS actores FROM actores ORDER BY act_apellidos
SELECT CONCAT(act_nombres, ' ', act_apellidos) AS actor_principal FROM actores ORDER BY act_apellidos
SELECT CONCAT(act_nombres, ' ', act_apellidos) AS "actor principal" FROM actores ORDER BY act_apellidos -- ALERTA

-- vfarmiga@tucorreo.com
-- 5️⃣ SUBSTRING
SELECT SUBSTRING(act_nombres, 1, 1) FROM actores
SELECT CONCAT(SUBSTRING(act_nombres, 1, 1), act_apellidos, '@tucorreo.com') AS correo FROM actores
SELECT LOWER(CONCAT(SUBSTRING(act_nombres, 1, 1), act_apellidos, '@tucorreo.com')) AS correo FROM actores
SELECT UPPER(CONCAT(SUBSTRING(act_nombres, 1, 1), act_apellidos, '@tucorreo.com')) AS correo FROM actores

-- 6️⃣ COMODINES % - LIKE
SELECT * FROM peliculas WHERE peli_nombre LIKE 'la%'

INSERT INTO peliculas (peli_nombre, peli_genero, peli_fechaEstreno, peli_restricciones) VALUES
    ('Man of steel', 'Ciencia ficcion', '1999-10-10', 'PG')
INSERT INTO peliculas (peli_nombre, peli_genero, peli_fechaEstreno, peli_restricciones) VALUES
    ('Madagascar', 'Animada', '2000-05-05', 'PG')

SELECT * FROM peliculas WHERE peli_nombre LIKE 'm%'
SELECT * FROM peliculas WHERE peli_nombre LIKE '%r'
SELECT * FROM peliculas WHERE peli_nombre LIKE '%r%'
