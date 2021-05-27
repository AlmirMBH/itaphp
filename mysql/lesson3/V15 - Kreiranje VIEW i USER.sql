/* Kreiranje VIEW-a */

create view UzmiFilmove as
select film.*, film_actor.actor_id from film_actor
join film on film_actor.film_id = film.film_id;

/* Proveriti u levom panelu da li je kreiran view UzmiFilmove */

/* Kreirati korisnika John i dodeliti mu prava na pogled uzmifilmove */
create user 'John'@'localhost' identified by '123';
grant selection on uzmifilmove to John;

select * from uzmifilmove;
select * from film;
update uzmifilmove set title = 'ABC' where fil_id = 1;
