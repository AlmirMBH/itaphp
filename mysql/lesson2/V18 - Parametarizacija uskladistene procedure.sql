delimiter //
create procedure proba(out p1 int)
begin
set p1 = 25;
end//
delimiter ;

call proba(@a);
select @a;