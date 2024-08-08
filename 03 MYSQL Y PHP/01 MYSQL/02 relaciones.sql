CREATE TABLE personajes (
    per_act_id INT NOT NULL,
    per_peli_id INT NOT NULL,
    per_nombre VARCHAR(100) NOT NULL
)

INSERT INTO personajes (per_act_id, per_peli_id, per_nombre) VALUES
    (1, 1, 'Opennhaimer'),
    (2, 1, 'Gen. Lesli Groves'),
    (3, 2, 'Neo'),
    (4, 2, 'Trinity'),
    (5, 3, 'Jack'),
    (6, 3, 'Rose'),
    (7, 4, 'Oscar Shindler'),
    (8, 7, 'Ripley'),
    (9, 6, 'Ed Warren'),
    (10, 6, 'Lorraine Warren')

-- ⚡⚡ JOINS ⚡⚡
SELECT * FROM personajes INNER JOIN peliculas ON personajes.per_peli_id = peliculas.peli_id

-- ⚡⚡ ALIAS PARA TABLAS

SELECT * FROM personajes a INNER JOIN peliculas b ON a.per_peli_id = b.peli_id

SELECT * FROM personajes a INNER JOIN actores b ON a.per_act_id = b.act_id

CREATE TABLE directores (
    dire_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    dire_nombres VARCHAR(100) NOT NULL,
    dire_apellidos VARCHAR(100) NOT NULL
)

INSERT INTO directores (dire_nombres, dire_apellidos) VALUES
    ('Christopher', 'Nolan'),
    ('Lana', 'Wachowsky'),
    ('James', 'Cameron'),
    ('Ridley', 'Scott'),
    ('Juan', 'Bayona')

INSERT INTO directores (dire_nombres, dire_apellidos) VALUES
    ('Peter', 'Jackson')

ALTER TABLE peliculas ADD COLUMN peli_dire_id INT AFTER peli_id

-- ⚡⚡ UPDATE
UPDATE peliculas SET peli_dire_id = 1 WHERE peli_id = 1
UPDATE peliculas SET peli_dire_id = 2 WHERE peli_id = 2
UPDATE peliculas SET peli_dire_id = 3 WHERE peli_id = 3
UPDATE peliculas SET peli_dire_id = 4 WHERE peli_id = 7
UPDATE peliculas SET peli_dire_id = 5 WHERE peli_id = 5

SELECT * FROM peliculas a INNER JOIN directores b ON a.peli_dire_id = b.dire_id

-- LEFT
SELECT * FROM peliculas a LEFT JOIN directores b ON a.peli_dire_id = b.dire_id

SELECT * FROM peliculas pel RIGHT JOIN directores dir ON pel.peli_dire_id = dir.dire_id

---------------------------------------------------------------------------------------
-- ⚡⚡ 3 TABLAS
SELECT *
    FROM directores a
        INNER JOIN peliculas b ON a.dire_id = b.peli_dire_id
        INNER JOIN personajes c ON b.peli_id = c.per_peli_id

    
SELECT *
    FROM directores a
        INNER JOIN peliculas b ON a.dire_id = b.peli_dire_id
        INNER JOIN personajes c ON b.peli_id = c.per_peli_id
        RIGHT JOIN actores d ON d.act_id = c.per_act_id