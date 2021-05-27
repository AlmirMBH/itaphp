/*
Spajanje tabela: INNER JOIN, svi gradovi jedne države
*/
SELECT a.city, b.country 
FROM city as a
	INNER JOIN country as b
		ON a.country_id = b.country_id;

/*
Spajanje tabela: LEFT OUTER JOIN, svi gradovi jedne države i gradovi koji nisu "vezani" za države
*/
SELECT a.city, b.country 
FROM city as a
	LEFT OUTER JOIN country as b
		ON a.country_id = b.country_id;

/*
Spajanje tabela: RIGHT OUTER JOIN,svi gradovi jedne države i države bez gradova
*/
SELECT a.city, b.country 
FROM city as a
	RIGHT OUTER JOIN country as b
		ON a.country_id = b.country_id;