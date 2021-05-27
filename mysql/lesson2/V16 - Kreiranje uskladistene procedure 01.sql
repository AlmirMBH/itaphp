create table orders
(id int primary key auto_increment, 
code varchar(5));

create table basket
(id int primary key auto_increment, 
code varchar(5));

insert into basket (code) values ('aaa'); 

delimiter //
create procedure submitOrder (inout newcode varchar(5))
begin
start transaction;
	insert into orders (code) 
		select code from basket where code = newcode;
        delete from basket where code = newcode;
        commit;
        end;
        
select * from orders;
select * from basket;