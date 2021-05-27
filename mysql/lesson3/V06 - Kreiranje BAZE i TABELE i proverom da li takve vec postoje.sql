/*
Potrebno je kreirati skriptu za kreiranje baze podataka: application_06.
Ova skripta će brisati postojeću bazu ukoliko postoji.
Takođe, potrebno je kreirati skriptu za kreiranje tabele: computer_parts
tako da obriše postojeću istoimenu tabelu ukoliko postoji. Ova tabela treba da sadrži podatke o uređaju:
- ID
- šifra uređaja,
- tip uređaja,
- naziv uređaja i
- cena uređaja.
*/
/* brisanje baze ako postoji */
drop database if exists application_06;

/* kreiranje baze sa podrazumevanim parametrima */
create database application_06; 

/* brisanje tabele ako postoji */
drop table if exists computer_parts;

/* kreiranje tabele sa definisanim parametrima iz zadatka */
create table computer_parts 
(
	computer_part_id int primary key auto_increment, 
	computer_part_code varchar(5),
	computer_part_type int,
	computer_part_name varchar(256),
	computer_part_price decimal(7,2)
);

/* Proveriti u levom panelu da li postoji tabela computer_parts */