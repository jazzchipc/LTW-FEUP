    /* Restaurantes */
.bail ON
.mode columns
.headers on
.nullvalue NULL
PRAGMA foreign_keys = ON;


/* Get Restaurants' owners */
SELECT User.user_name
FROM User
INNER JOIN Owner
ON Owner.owner_id = User.user_id
INNER JOIN Restaurant_Owners
ON Restaurant_Owners.owner_id = Owner.owner_id
INNER JOIN Restaurant
ON Restaurant.restaurant_id = Restaurant_Owners.restaurant_id
WHERE Restaurant.restaurant_name = 'Rest1';


/* Get Restaurants of Owner */
SELECT Restaurant.restaurant_name
FROM Restaurant
INNER JOIN Restaurant_Owners
ON Restaurant_Owners.restaurant_id = Restaurant.restaurant_id
INNER JOIN Owner
ON Restaurant_Owners.owner_id = Owner.owner_id
INNER JOIN User
ON User.user_id = Owner.owner_id
WHERE User.user_name ='Catarina';


