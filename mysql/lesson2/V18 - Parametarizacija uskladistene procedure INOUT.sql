delimiter //
create procedure proba1(inout p1 int)
begin
set p1 = p1 + 1;
end//
delimiter ;

set @a = 1;
call proba1(@a);
select @a;