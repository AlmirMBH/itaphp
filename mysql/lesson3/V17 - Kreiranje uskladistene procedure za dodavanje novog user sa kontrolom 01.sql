/* Pozicioniranje na bazu */
use application_06;
/* Kreiranje uskladištene procedure */
delimiter //
create procedure NK_UskladistenaProcedura02(newname varchar(50))
begin
	declare userCount int;
		insert into users (Name)
        values (newname);
	end //
delimiter ;
/* Pozivanje uskladištene procedure */
call NK_UskladistenaProcedura02('UsklPro');

select * from users;