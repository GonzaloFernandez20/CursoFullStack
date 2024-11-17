SELECT * FROM usuario;


--1) Listar los nombres de los usuarios.
SELECT nombre FROM usuario

-- 2) Listar los números de teléfono con saldo menor o igual a 300.
SELECT nombre, telefono AS 'NroDeTelefono', saldo
FROM usuario
WHERE saldo <= 300

-- 3) Listar los usuarios con nivel 2.
SELECT nombre
FROM usuario
WHERE nivel = 2

-- 4) Listar nombre y teléfono de los usuarios con teléfono NOKIA, BLACKBERRY o SONY. Investigar sobre la utilización de la función IN().
SELECT usuario, nombre, telefono, marca 
FROM usuario
WHERE marca IN('NOKIA', 'BLACKBERRY', 'SONY')

-- 5) Listar nombre y teléfono de los usuarios con teléfono LG, SAMSUNG o MOTOROLA.
SELECT usuario, nombre, telefono, marca 
FROM usuario
WHERE marca NOT IN('NOKIA', 'BLACKBERRY', 'SONY')

-- 6) Mostrar el email de los usuarios que usan gmail. Investigar sobre la utilización de la función LIKE().
SELECT usuario, nombre, email
FROM usuario
WHERE email LIKE('%@gmail%')

-- 7) Calcular el saldo máximo de los usuarios que tienen más de 30 años. Investigar sobre la utilización de la función MAX(). */
SELECT usuario, nombre, MAX(saldo), fechaNacimiento
FROM usuario
WHERE TIMESTAMPDIFF(YEAR, fechaNacimiento, CURRENT_DATE) >= 30
GROUP BY usuario, nombre, fechaNacimiento;

-- En este ultimo tenia la duda de si habia entendido bien la consigna.