/*
Treba napraviti još jednu tabelu u test_db.
Tabela se zove statuses i sadrži dva polja:
- ID i
- name.
Potrebno je dodati tri naziva statusa u ovu tabelu:
- User,
- administrator i
- superadministrator.

Treba izmeniti postojeću tabelu users dodavanjem još jedne kolone. Naziv kolone je status. 
*/

/* Kreiranje tabele */
create table statuses ( id int primary key auto_increment, name varchar(30) );

/* Unos vrednosti u tabelu, ID dobija automatski vrednost */
insert into statuses (name) values ('user');
insert into statuses (name) values ('administrator');
insert into statuses (name) values ('superadministrator');

/* Izmena strukture tabele dodavanjem nove kolone */
alter table users add column status int;

