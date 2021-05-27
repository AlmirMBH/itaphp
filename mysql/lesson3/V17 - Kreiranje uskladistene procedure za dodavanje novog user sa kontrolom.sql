USE `application_06`;
DROP procedure IF EXISTS `NK_UskladistenaProcedura03`;

DELIMITER $$
USE `application_06`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `NK_UskladistenaProcedura03`(newname varchar(50), newpass varchar(15))

BEGIN
    declare userCount int;
    select count(id) as userCount from users where Name = newname;

    if userCount < 1 then
		insert into users (Name, password)
        values (newname, newpass);
	else
		update users set password = newpass where Name = newname;
	end if;
    end$$
    
    CALL `application_06`.`NK_UskladistenaProcedura03`('NN', '999');
    
    select * from users;
