SELECT first_name, last_name, address
FROM customer, address;

SELECT first_name, last_name, address 
FROM customer, address 
WHERE address.address_id = customer.address_id;

SELECT customer.first_name, customer.last_name, address.address
FROM customer
JOIN address
ON address.address_id = customer.address_id;

SELECT customer.first_name,
customer.last_name, address.address,
address.district
FROM customer LEFT JOIN address
ON address.address_id = customer.address_id;

SELECT customer.first_name,
customer.last_name, address.address,
address.district
FROM customer RIGHT JOIN address
ON address.address_id = customer.address_id;

SELECT *
FROM customer cross JOIN address;

SELECT customer.first_name,
customer.last_name, address.address,
address.district, city.city,
country.country
FROM customer
JOIN address ON address.address_id =
customer.address_id
JOIN city ON city.city_id =
address.city_id
JOIN country ON country.country_id =
city.country_id;

show index from customer;