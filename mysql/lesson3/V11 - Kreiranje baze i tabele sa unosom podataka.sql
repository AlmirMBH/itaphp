/*
Potrebno je kreirati bazu podataka test_db. U ovoj bazi treba kreirati tabelu users, koja sadrži tri kolone:
- id,
- name i
- password.

Potrebno je uneti tri korisnika u ovu tabelu:
Peter – sa šifrom 123,
Jenny – sa šifrom 345 i
John – sa šifrom 678
*/
/* Kreiranje baze */
create database test_db;
/* Pozicioniranje na bazu */
	use test_db;
/* Kreiranje tabele */	
    create table users ( id int primary key auto_increment, name varchar(50), password varchar(15) );
    
/* Unos podataka u kreiranu tabelu */
	insert into users (name, password)
    values ('Peter','123'),('Jenny','345'),('John','567');
 
 /* Provera unetih podataka */
 select * from users;
 
 /* Kreiranje tabele za unos iz druge tabele, SELECT INTO */	
    create table users_pomocna ( id int primary key auto_increment, name varchar(50), password varchar(15), status int);
    
 /* Provera o postojanju podataka */
 select * from users_pomocna;
 
 /* Korišćenje komande SELECT INTO */
 
 insert into users_pomocna 
	select id, name, password, status from users;
 