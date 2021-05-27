
/*
Brisanje podataka u tabeli sa i bez uslova
*/

/* Kreiranje tabele */	
    create table users_brisanje ( id int primary key auto_increment, name varchar(50), password varchar(15) );
    
/* Unos podataka u kreiranu tabelu, tri sloga */
	insert into users_brisanje (name, password)
    values 	('Peter','123'),
			('Jenny','345'),
            ('John','567');
 /* Primetite da se za kolonu ID ne unose podaci zbog osobine auto_increment */
 /* Provera unetih podataka */
 select * from users_brisanje;

DELETE FROM
 users_brisanje 
 WHERE password = '567';

select * FROM
 users_brisanje
 WHERE password = '567';
 
 /* Brisanje bez ograničenja, struktura tabele postoji i dalje ali je tabela prazna */
 DELETE FROM
 users_brisanje 
 /*WHERE password = '567'*/;

select * FROM
 users_brisanje
 /*WHERE password = '567'*/;