/*
Pod upit, provera da li su svi glumci snimili bar jedan film
*/

SELECT	count(actor.first_name/*, actor.last_name*/) 
FROM actor;

select count(actor.first_name/*, actor.last_name*/) 
FROM actor 
where actor.actor_id /*not*/ in 
(select actor_id from film_actor);