/*
Potrebno je kreirati tabelu users koja će pamtiti sledeće podatke:
	- id korisnika koji će se povećavati automatski, za jedan, prilikom svakog unosa i koji će biti primarni ključ tabele,
	- ime korisnika
	- prezime korisnika.

Potrebno je kreirati i dodatni upit koji kreiranoj tabeli dodaje još jedno polje:
	- šifra/password korisnika.
*/

create table users
(
	user_id int primary key auto_increment,
	user_firstName varchar(50),
	user_lastName varchar(50)
);
 
alter table users add column password varchar(15);

/* Pogledati u levom panelu tabelu users */