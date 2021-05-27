/*
Kreiranje funkcije
Potrebno je napraviti upit koji će prikazati glumce, ali tako da, svaki put kada se pojavi ime glumca christian,
bude napisano neko drugo ime
*/

delimiter //
create function changeName(
	p1 varchar(50),
    p2 varchar(50),
    p3 varchar(50))
    returns varchar(50)
    begin
		if p1=p2 then return p3;
        end if;
        return p1;
	end //
    delimiter ;
    
/* Proveriti u levom panelu da li je kreirana funkcija */