/*
Spajanje tabela: INNER JOIN
*/
SELECT a.name, a.password, b.name 
FROM users as a
	INNER JOIN statuses as b
		ON a.status = b.id;

/*
Spajanje tabela: LEFT OUTER JOIN
*/
SELECT a.name, a.password, b.name 
FROM users as a
	LEFT OUTER JOIN statuses as b
		ON a.status = b.id;

/*
Spajanje tabela: RIGHT OUTER JOIN
*/
SELECT a.name, a.password, b.name 
FROM users as a
	RIGHT OUTER JOIN statuses as b
		ON a.status = b.id;

select * from users;
select * from statuses;