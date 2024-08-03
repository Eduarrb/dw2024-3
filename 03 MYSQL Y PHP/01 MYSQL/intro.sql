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
    