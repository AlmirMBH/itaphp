
/*
Kreiranje uskladištene procedure (stored procedure) */

delimiter //
create procedure my_procedure()
begin
	select 'Zdravo iz uskladištene procedure!';
    end;
    delimiter;
    
/* Provriti u levom panelu da li je formirana uskladištena procedura */