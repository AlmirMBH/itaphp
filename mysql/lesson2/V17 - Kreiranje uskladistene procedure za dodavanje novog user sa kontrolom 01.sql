delimiter //
create procedure insertuser3(newname varchar(50), newpass varchar(50))
begin
	declare userCount int;
    select count(id) from users where name=newname into userCount;
    if usersCount <1 then
		insert into users (name, password, status)
        values (newname, password, 1);
	else
		update users set password = newpass where name = newname;
	end if;
delimiter ;
