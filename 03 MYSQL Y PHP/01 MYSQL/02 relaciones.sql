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