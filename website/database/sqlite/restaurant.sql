.bail ON
.mode columns
.headers on
.nullvalue NULL
PRAGMA foreign_keys = ON;

CREATE TABLE IF NOT EXISTS User(
    user_id integer PRIMARY KEY,
    user_name varchar NOT NULL UNIQUE,
    email varchar NOT NULL UNIQUE,
    password varchar NOT NULL
);

CREATE TABLE IF NOT EXISTS Owner(
    owner_id integer PRIMARY KEY,
    FOREIGN KEY (owner_id) REFERENCES User(user_id)
);

CREATE TABLE IF NOT EXISTS Reviewer(
    reviewer_id integer PRIMARY KEY,
    FOREIGN KEY(reviewer_id) REFERENCES User(user_id)
);

CREATE TABLE IF NOT EXISTS Restaurant(
    restaurant_id integer PRIMARY KEY,
    restaurant_name varchar NOT NULL,
    description varchar,
    photo_url varchar
);

CREATE TABLE IF NOT EXISTS Restaurant_Owners(
    restaurant_id integer,
    owner_id integer,
    PRIMARY KEY(restaurant_id, owner_id),
    FOREIGN KEY(restaurant_id) REFERENCES Restaurant(restaurant_id),
    FOREIGN KEY(owner_id) REFERENCES Owner(owner_id)
);

CREATE TABLE IF NOT EXISTS Review(
    review_id integer PRIMARY KEY,
    title varchar,
    comment varchar,
    score integer NOT NULL,
    CHECK (score > 0 AND score <= 10)
);

CREATE TABLE IF NOT EXISTS Restaurant_Review(
    review_id integer NOT NULL,
    reviewer_id integer,
    restaurant_id integer,
    PRIMARY KEY(review_id, restaurant_id),
    FOREIGN KEY (reviewer_id) REFERENCES Reviewer(reviewer_id),
    FOREIGN KEY (restaurant_id) REFERENCES Restaurant(restaurant_id)
);

CREATE TABLE IF NOT EXISTS Reply(
    reply_id integer,
    review_id integer,
    user_id integer,
    reply_comment varchar NOT NULL,
    PRIMARY KEY(reply_id, review_id, user_id),
    FOREIGN KEY(user_id) REFERENCES User(user_id)
);
