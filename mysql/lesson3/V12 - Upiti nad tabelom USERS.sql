
/*
Za prethodno kreiranu tabelu (users) potrebno je kreirati upit za preuzimanje podataka.
Treba preuzeti sve podatke o korisnicima čije ima počinje slovom j.
*/
use test_db;
select * from users where name like 'j%';

/*
Za tabelu users potrebno je napraviti upit koji vraća sve korisnike čiji je ID veći od jedan i manji od pet.
*/

select * from users where id > 1 and id < 5;
