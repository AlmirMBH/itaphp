/* Pozicioniranje na bazu */
use application_06;
/* Kreiranje proste uskladištene procedure */
delimiter //
CREATE PROCEDURE NK_UskladistenaProcedura01 () 
begin
SELECT * FROM computer_parts;
end //
/* Pozivanje uskladištene procedure */
call NK_UskladistenaProcedura01;