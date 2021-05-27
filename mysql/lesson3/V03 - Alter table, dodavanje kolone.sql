/*
Tabeli kreiranoj u prethodnom primeru, CARS	, treba dodati NOVU kolonu car_stock, koja predstavlja broj automobila na stanju

Kolona car_stock treba da bude tip podatka takav da je:
	- celebrojna i
	- da podrazumevana vrednost bude 10
*/

use my_database;
ALTER TABLE cars ADD COLUMN car_stock int default 10;

/*
Prva komanda služi za pozicioniranje na odgovarajuću bazu u kojoj se nalazi tabela u kojoj treba izvršiti izmene
Po izvršenju ovih komandi, nova kolona car_stock bi trebala da se pojavi u levom panelu
*/