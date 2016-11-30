.bail ON
.mode columns
.headers on
.nullvalue NULL
PRAGMA foreign_keys = ON;

CREATE TABLE IF NOT EXISTS User(
    user_id integer,
    user_name VARCHAR NOT NULL,
    email VARCHAR NOT NULL,
    password VARCHAR NOT NULL,
    PRIMARY KEY (user_id)
);

CREATE TABLE IF NOT EXISTS Owner(
    owner_id INTEGER,
    PRIMARY KEY (owner_id),
    FOREIGN KEY (owner_id) REFERENCES User(user_id)
);

CREATE TABLE IF NOT EXISTS Reviewer(
    reviewer_id INTEGER,
    PRIMARY KEY(reviewer_id),
    FOREIGN KEY(reviewer_id) REFERENCES User(user_id)
);

CREATE TABLE IF NOT EXISTS Restaurant(
    restaurant_id INTEGER,
    restaurant_name VARCHAR NOT NULL,
    description VARCHAR,
    photo_url VARCHAR,
    PRIMARY KEY(restaurant_id)
);

CREATE TABLE IF NOT EXISTS Restaurant_Owners(
    restaurant_id INTEGER,
    owner_id INTEGER,
    PRIMARY KEY(restaurant_id, owner_id),
    FOREIGN KEY(restaurant_id) REFERENCES Restaurant(restaurant_id),
    FOREIGN KEY(owner_id) REFERENCES Owner(owner_id)
);

CREATE TABLE IF NOT EXISTS Review(
    review_id INTEGER,
    title VARCHAR,
    comment VARCHAR,
    score INTEGER NOT NULL,
    PRIMARY KEY (review_id),
    CHECK (score > 0 AND score <= 10)
);

CREATE TABLE IF NOT EXISTS Restaurant_Review(
    review_id INTEGER NOT NULL,
    reviewer_id INTEGER,
    restaurant_id INTEGER,
    PRIMARY KEY(review_id, restaurant_id),
    FOREIGN KEY (reviewer_id) REFERENCES Reviewer(reviewer_id),
    FOREIGN KEY (restaurant_id) REFERENCES Restaurant(restaurant_id)
);

CREATE TABLE IF NOT EXISTS Reply(
    reply_id INTEGER,
    review_id INTEGER,
    user_id INTEGER,
    reply_comment VARCHAR NOT NULL,
    PRIMARY KEY(reply_id, review_id, user_id),
    FOREIGN KEY(user_id) REFERENCES User(user_id)
);
