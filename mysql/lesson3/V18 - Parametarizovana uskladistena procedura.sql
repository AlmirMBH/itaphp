/*
Potrebno je napraviti uskladištenu proceduru koja kreira korisnika prema parametrizovanom imenu.
Ukoliko korisnik sa tim imenom već postoji u tabeli, neće biti kreiran. Korisnik se unosi sa statusom user.
*/

delimiter //
	create procedure insertuser1(newname varchar(50))
		begin
        declare usersCount int;
        select count(*) from users where username = newname into usersCount;
        select usersCount;
        if usersCount<1 then
			insert into users value (null, newname);
            select '0';
		else
			select '-1';
            end if;
            end //
            delimiter ;