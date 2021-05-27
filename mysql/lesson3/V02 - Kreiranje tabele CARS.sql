/*
Potrebno je u bazi podataka MY_DATABASE01 kreirati tabelu CARS, koja će imati kolone: car_id, car_make, car_model, car_price
Kolona car_id mora biti primarni ključ, i osobinu auto inkrement
kolone car_make i car_model moraju biti tekstualnog tipa
Kolona car_price mora biti tip podatka decimal sa mogućnošću unosa šestocifrenog broja sa dve decimale
*/

create table cars
(
car_id int primary key auto_increment,
car_make varchar(40),
car_model varchar(40),
car_price decimal(6,2)
);

/* Na levom panelu SHEMAS u bazi MY_DATABASE01 proverite postojanje tabele CARS i definiciju kolona. */