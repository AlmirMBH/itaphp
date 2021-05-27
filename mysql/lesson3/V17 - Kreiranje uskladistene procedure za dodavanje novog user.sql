delimiter //

use application_06;
create procedure insertuser(newname varchar(50))
begin
	insert into users (name, password) values (newname, '1');
end //
