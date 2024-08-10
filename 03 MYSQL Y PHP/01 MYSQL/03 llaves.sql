-- ⚡⚡ LLAVES PRIMARIAS Y LLAVES FORANEAS ⚡⚡
-- OJO: AL MOMENTO DE RELACIONAR TABLAS, LOS CAMPOS EN COMUN DEBEN SER DEL MISMO DE DATO Y CARACTERISTICAS.

-- RESTRICCIONES
-- RESTRICT:
    -- Por defecto, impide realizar modificaciones que atenten la seguridad referencial de la tablas.
    -- no permite borrar o actualizar datos

-- CASCADE:
    -- Al actualizar o borrar los datos de referencia, también se actualiza o se borra el dato de la tabla dependiente

-- SET NULL:
    -- Se establece campos nulos a la ytabla dependiente

-- NO ACTION:
    -- No hace nada.

ALTER TABLE peliculas CHANGE COLUMN peli_dire_id peli_dire_id INT UNSIGNED

ALTER TABLE peliculas
    ADD CONSTRAINT fk_direId FOREIGN KEY (peli_dire_id)
    REFERENCES directores (dire_id)
    ON DELETE RESTRICT ON UPDATE RESTRICT

DELETE FROM directores WHERE dire_id = 1

ALTER TABLE peliculas DROP CONSTRAINT fk_direId

ALTER TABLE peliculas
    ADD CONSTRAINT fk_direId FOREIGN KEY (peli_dire_id)
    REFERENCES directores (dire_id)
    ON DELETE CASCADE ON UPDATE CASCADE