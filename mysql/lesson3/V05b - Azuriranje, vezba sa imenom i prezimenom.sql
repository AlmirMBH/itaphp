/* Update, vežba sa izmenom imena i prezimena za odgovarajuću šifru */

/* Pozicioniranje na bazu SAKILA */
use sakila;
/* Upit tj provera imena i prezimena za odgovarajuću šifru */
select * from actor
 where actor_id = 1;
/* Izmena sadržaja kod imena i prezimena za odgovarajuću šifru */
UPDATE actor
 SET 
 first_name = 'John',
 last_name = 'Brown'
 where actor_id = 1;
 
