/* Uskladištena procedura sa parametrom OUT, zadaje se unutar procedure i prikazuje van procedure */

delimiter //
create procedure proba2(out p1 int)
begin
set p1 = 25;
end//
delimiter ;

/* pozivanje uskladištene procedure i prikaz vrednosti parametra */
call proba2(@a);
select @a;