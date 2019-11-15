
CREATE TABLE user
(
	username VARCHAR PRIMARY KEY,
	password VARCHAR NOT NULL
	name VARCHAR,
	age INTEGER,
	date_of_birth DATE,
	about VARCHAR,
	photo VARCHAR,
);



	CREATE TABLE house
	(
		id_house INTEGER PRIMARY KEY,
		id_owner VARCHAR REFERENCES user,
		rent INTEGER NOT NULL,
		location VARCHAR,
		title VARCHAR NOT NULL,
		max_guests INTEGER CHECK(max_guests > 0),
		classificacao INTEGER CHECK(classificacao <= 5 AND classificacao >= 0),
		description VARCHAR,
		area INTEGER,
		quartos INTEGER,
		casas_de_banho INTEGER
	);

	CREATE TABLE photo
	(
		id_house INTEGER REFERENCES house,
		photo VARCHAR,
		photo_id INTEGER PRIMARY KEY
	);


	/* Ter o id_house e o id_user como primary keys 
não iria causar problemas para casas com mais que um periodo de
availabilty
 
CREATE TABLE availability(
	id_user VARCHAR REFERENCES user,
	id_house INTEGER REFERENCES house,
	start_date
);
*/

	CREATE TABLE reservation
	(
		id_reservation INTEGER PRIMARY KEY,
		id_user VARCHAR REFERENCES user,
		id_house INTEGER REFERENCES house,
		n_hospedes INTEGER,
		payment INTEGER,
		start_date DATE,
		end_date DATE
	);

	CREATE TABLE date_reservation
	(
		start_date DATE,
		end_date DATE,
		id_reservation INTEGER REFERENCES reservation,
		id_house INTEGER REFERENCES house,
		PRIMARY KEY(id_reservation,id_house)
	);

	CREATE TABLE review
	(
		id_review INTEGER PRIMARY KEY,
		rating INTEGER,
		review_c VARCHAR,
		id_house INTEGER REFERENCES house,
		id_user VARCHAR REFERENCES user
	);

	CREATE TABLE message
	(
		id_msg INTEGER PRIMARY KEY,
		msg VARCHAR,
		id_sender VARCHAR REFERENCES user,
		id_receiver VARCHAR REFERENCES user
	);


