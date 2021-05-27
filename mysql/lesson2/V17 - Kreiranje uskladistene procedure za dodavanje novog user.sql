delimiter //
create procedure insertuser(newname varchar(50))
begin
	insert into users (name, status) values (newname, 1);
end //
