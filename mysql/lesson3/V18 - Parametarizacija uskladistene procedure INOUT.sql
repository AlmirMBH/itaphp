/* Kreiranje INOUT uskladištene procedure sa parametrima */
use application_06;
/* INOUT uskladištena procedura PROBA1, p1 se definiše pre procedure, menja mu se vrednost u proceduri i prikazuje vrednost posle procedure */ 
delimiter //
create procedure proba1(inout p1 int)
begin
set p1 = p1 + 1;
end//
delimiter ;
/* Postavljanje vrednosti kroz parametar, @a, pozivanje uskladištene procedure i prikazivanje vrednosti parametra */
set @a = 1;
call proba1(@a);
select @a;