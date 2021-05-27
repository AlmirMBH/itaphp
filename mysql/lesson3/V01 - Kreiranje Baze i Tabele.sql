/* Kreiranje Baze i Tabele, vodite računa o tome da druga komanda vrši pozicioniranje na kreiranu bazu. Da se nismo pozicioirali, tabela bi bila kreirana u aktivnoj bazi (boldirano ime). 
Još nešto, trenutno smo u komentaru
pa su zbog toga slova zelena/siva */ 

CREATE DATABASE my_database01;
use my_database01;
CREATE TABLE mytable ( id int primary key auto_increment, name varchar(40))

/* da bi startovali ove tri komande potrebno je da kliknete na ikonicu "munja" (treća u levom gornjem uglu) */	
/* O5 smo u komentaru, pogledajte sa leve strane da li su kreirane Baza i Tabela, za svaki slučaj osvežite ekran */	

/* Šta bi se dogodilo kada bismo ponovili ove tri komande? */
/* Pokušajte i pogledajte status izvršavanja komandi u donjem panelu: baza sa tim imenom već postoji */	