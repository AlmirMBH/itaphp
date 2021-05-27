/*
U tabeli users dodeliti statuse korisnicima, tako da:
- John bude administrator,
- Jenny superadministrator, a
- Peter user.
*/

update users set status = 2 where id = 3;
update users set status = 3 where id = 2;
update users set status = 1 where id = 1;

select * from users;

/*
Potrebno je prikazati ime i naziv statusa korisnika sa ID-jem 2 (upit iz dve tabele, koje imaju kolone sa istim nazivima, 
pa se iz tog razloga koristi obeležavanje <ime_tabele>.<ime_kolone>)
*/

select users.name, statuses.name from users join statuses on users.status = statuses.id where users.id = 2;
