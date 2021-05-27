/*
Potrebno je preuzeti sve podatke:
- o svim filmovima koji u svom nazivu sadrže reč bird,
- a uz to imaju rental_duration veći od 5.
*/

SELECT * FROM sakila.film WHERE title LIKE '%bird%' AND rental_duration>5;

/* Rešenje treba da pokaže dva filma za zadate uslove */