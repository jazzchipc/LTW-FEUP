/* Restaurantes */
.bail ON
.mode columns
.headers on
.nullvalue NULL
PRAGMA foreign_keys = ON;


/* Get Restaurants' owners */
SELECT User.user_name, Restaurant.restaurant_name
FROM Restaurant_Owners
INNER JOIN Owner
ON Owner.owner_id = Restaurant_Owners.owner_id
INNER JOIN User
ON User.user_id = Owner.owner_id
INNER JOIN Restaurant
ON Restaurant.restaurant_id = Restaurant_Owners.restaurant_id;

/* Get Restaurants by Name */ 
SELECT Restaurant.restaurant_name
FROM Restaurant;


/* Get Restaurants of Owner */
SELECT Restaurant_Owners.restaurant_id 
FROM Restaurant_Owners 
WHERE Restaurant_Owners.owner_id = 1;


SELECT User.user_name FROM User WHERE User.user_name = 'Catarina';