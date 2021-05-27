/*
*/

SELECT  first_name, last_name, count(film_actor.actor_id) as total
FROM actor inner join film_actor
	on actor.actor_id = film_actor.actor_id
	group by film_actor.actor_id
    having (total >= 10) order by last_name, first_name;
    
select first_name, last_name from actor
where last_name = "ALLEN"