delimiter //
create procedure interuser(newname varchar(50))
begin
declare userCount int;
select count(*) from users where username = newname into userCount;
select userCount;
if userCount < 1 then
	insert into users values (null, newname);
    select '0';
    else
    select '-1';
    end if;
end //
delimiter //
