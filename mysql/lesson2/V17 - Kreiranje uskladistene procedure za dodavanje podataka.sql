/*
Kreirati proceduru za unos korisnika, sa nazivom: usp_insertuser
koja kao parametar prihvata ime korisnika. Korisnik će biti unet sa statusom user (broj 1)
*/

delimiter //
create procedure insertuser(newname varchar(50))
begin
	insert into users (name, status) values (newname, 1);
    end //
    
