/*
Potrebno je napraviti proceduru koja će unositi korisnika u bazu.
Procedura prihvata kao parametre ime i šifru korisnika. Ukoliko korisnik sa tim imenom ne postoji, uneće novog.
Ukoliko korisnik postoji, biće mu zamenjena šifra novom. Korisnik se unosi sa statusom user.
*/

delimiter //
	create procedure insertuser2(newname varchar(50), newpass varchar(50))
		begin
			declare userCount int;
            select count(id) from users where name=newname into userCount;
            if userCount<1 then
				insert into users (name, password, status) values (newname, password, 1);
			else
				update users set password=newpass where name = newname;
			end if;
		end //
delimiter ;
        