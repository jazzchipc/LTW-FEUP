BEGIN TRANSACTION;
CREATE TABLE User(
    user_id INTEGER,
    user_name VARCHAR NOT NULL,
    email VARCHAR NOT NULL,
    password VARCHAR NOT NULL,
    PRIMARY KEY (user_id)
);
CREATE TABLE Reviewer(
    reviewer_id INTEGER,
    PRIMARY KEY(reviewer_id),
    FOREIGN KEY(reviewer_id) REFERENCES User(user_id)
);
CREATE TABLE "Review" (
	`review_id`	INTEGER,
	`title`	VARCHAR,
	`comment`	VARCHAR,
	`score`	INTEGER NOT NULL,
	`date`	TEXT,
	PRIMARY KEY(`review_id`)
);
CREATE TABLE Restaurant_Review(
    review_id INTEGER NOT NULL,
    reviewer_id INTEGER,
    restaurant_id INTEGER,
    PRIMARY KEY(review_id, restaurant_id),
    FOREIGN KEY (reviewer_id) REFERENCES Reviewer(reviewer_id),
    FOREIGN KEY (restaurant_id) REFERENCES Restaurant(restaurant_id)
);
CREATE TABLE Restaurant_Owners(
    restaurant_id INTEGER,
    owner_id INTEGER,
    PRIMARY KEY(restaurant_id, owner_id),
    FOREIGN KEY(restaurant_id) REFERENCES Restaurant(restaurant_id),
    FOREIGN KEY(owner_id) REFERENCES Owner(owner_id)
);
CREATE TABLE Restaurant(
    restaurant_id INTEGER,
    restaurant_name VARCHAR NOT NULL,
    description VARCHAR,
    photo_url VARCHAR,
    PRIMARY KEY(restaurant_id)
);
CREATE TABLE "Reply" (
	`reply_id`	INTEGER,
	`review_id`	INTEGER,
	`user_id`	INTEGER,
	`reply_comment`	VARCHAR NOT NULL,
	`parent_id`	INTEGER,
	`date`	TEXT,
	PRIMARY KEY(`reply_id`),
	FOREIGN KEY(`user_id`) REFERENCES `User`(`user_id`)
);
CREATE TABLE Owner(
    owner_id INTEGER,
    PRIMARY KEY (owner_id),
    FOREIGN KEY (owner_id) REFERENCES User(user_id)
);
COMMIT;
