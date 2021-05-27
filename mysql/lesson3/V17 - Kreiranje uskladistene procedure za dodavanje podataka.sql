/*
Kreirati proceduru za unos korisnika, sa nazivom: usp_insertuser
koja kao parametar prihvata ime korisnika. Korisnik će biti unet sa statusom user (broj 1)
*/
use application_06;
delimiter //
create procedure usp_insertuser(newname varchar(50))
begin

	insert into users (name, password) values (newname, '1');
    end //
    
