
/*
Funkcije AVG, MAX, MIN
*/

/* Kreiranje tabele */	
    create table users_amount ( 	id int primary key auto_increment, 
									name varchar(50), 
									password varchar(15),
									amount int);
    
/* Unos podataka u kreiranu tabelu, tri sloga */
	insert into users_amount (name, password, amount)
    values 	('Peter','123', 100),
			('Jenny','345', 200),
            ('John','567', 300);

 /* Primetite da se za kolonu ID ne unose podaci zbog osobine auto_increment */
 /* Provera unetih podataka */
 select * from users_amount;

 select avg(amount) from users_amount;
 select max(amount) from users_amount;
 select min(amount) from users_amount;
