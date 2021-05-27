/*
Group by i Having
*/
SELECT 
	actor.first_name,
	actor.last_name,
count(film.film_id) AS Total 
FROM actor
INNER JOIN film_actor 
	ON actor.actor_id = film_actor.actor_id
inner join film 
	on film_actor.film_id = film.film_id
GROUP BY actor.actor_id
HAVING (((count(film.film_id)) > 30));