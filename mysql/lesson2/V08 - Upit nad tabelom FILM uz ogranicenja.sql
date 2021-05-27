/*
Potrebno je selektovati sve nazive filmova koji imaju:
- rental_rate veći od 3,
- duži od 2, ali kraći od tri sata.
(ovaj upit se radi nad bazom SAKILA, vodite računa o pozicioniranju!!!
*/

SELECT title FROM film
 WHERE rental_rate>3
 AND length>120
 AND length<180;
 
 /*
 Ukoliko odmah ispod ovog teksta vidite naslove nekih filmova - dobro ste uradili vežbu!
 */
