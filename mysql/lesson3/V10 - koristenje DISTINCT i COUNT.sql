/*
Potrebno je utvrditi koliko različitih rejtinga filmova postoji.
Reč je o Parental Guidance rejtingu, koji je definisan u koloni rating
*/
SELECT rating FROM film;
SELECT DISTINCT rating FROM film;
SELECT COUNT(DISTINCT rating) FROM film;

/* Select DISTINCT prvo izdvaja različite rejtinge, a onda ih COUNT sabere */
