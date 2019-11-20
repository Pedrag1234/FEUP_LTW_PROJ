
CREATE TABLE user
(
	username VARCHAR PRIMARY KEY,
	password VARCHAR NOT NULL
	name VARCHAR,
	age INTEGER,
	date_of_birth DATE,
	about VARCHAR,
	photo VARCHAR
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


	CREATE TABLE availability
	(
		id_house INTEGER REFERENCES house,
		start_date DATE,
		end_date DATE
	);

	CREATE TABLE reservation
	(
		id_reservation INTEGER PRIMARY KEY,
		id_user VARCHAR REFERENCES user,
		id_house INTEGER REFERENCES house,
		n_hospedes INTEGER,
		payment INTEGER
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
		timestamp DATE,
		id_sender VARCHAR REFERENCES user,
		id_receiver VARCHAR REFERENCES user
	);

	-------------------------------------------------------------------------- USERS ------------------------------------------------------------------------
	INSERT INTO user
	VALUES
		(
			"Pedrag123",
			"Goddamn",
			"Pedro Azevedo",
			21,
			"1998-03-10",
			"Likes to watch movies and play video games",
			"photo");

	INSERT INTO user
	VALUES
		(
			"Ricky_Ricardo",
			"Yeet",
			"Ricardo Milos",
			32,
			"1987-10-2",
			"Good memes",
			"photo1");

	INSERT INTO user
	VALUES
		(
			"OwenW",
			"WOW",
			"Owen Wilson",
			50,
			"1969-05-26",
			"Oh wow",
			"photo2");

	INSERT INTO user
	VALUES
		(
			"MnM",
			"Moms spaghetti",
			"Eminem",
			45,
			"1979-07-02",
			"Knees weak, arms heavy, there is vomit on his sweater, moms spaghetti",
			"photo3");


	--------------------------------------------------------------------------HOUSES-----------------------------------------------------------------------------------
	INSERT INTO house
	VALUES(
			1,
			"Pedrag123",
			100,
			"Porto",
			"Casa no Porto",
			3,
			4,
			"Uma casa no porto com vista para o rio",
			30,
			3,
			2
	);

	INSERT INTO house
	VALUES(
			2,
			"Pedrag123",
			200,
			"Lisboa",
			"Casa em Lisboa",
			4,
			5,
			"Uma casa em Lisboa com vista para o rio",
			20,
			3,
			3
	);

	INSERT INTO house
	VALUES(
			3,
			"MnM",
			300,
			"Fabrica de MnM",
			"Fabrica de MnM, that is all",
			2,
			2,
			"Cuidado com os MnM que eles mordem",
			40,
			2,
			1
	);

	INSERT INTO house
	VALUES(
			4,
			"Pedrag123",
			600,
			"New York",
			"Casa em New York",
			3,
			4,
			"Uma casa em New York com vista para o rio",
			60,
			3,
			2
	);

	INSERT INTO house
	VALUES(
			5,
			"Ricky_Ricardo",
			700,
			"Alentejo",
			"Casa no Alentejo",
			5,
			5,
			"Uma casa no Alentejo com vista para o mar",
			50,
			5,
			6
	);

	INSERT INTO house
	VALUES(
			6,
			"Ricky_Ricardo",
			600,
			"Londres",
			"Casa em Londres",
			2,
			3,
			"Uma casa em Londres com vista para o rio",
			20,
			2,
			1
	);

	INSERT INTO house
	VALUES(
			7,
			"Ricky_Ricardo",
			800,
			"Paris",
			"Casa em Paris",
			1,
			3,
			"Uma casa em Paris com vista para o rio",
			10,
			1,
			1
	);

	--------------------------------------------------------------------------------AVAILABILITY---------------------------------------------------------
	INSERT INTO availability
	VALUES(
			1,
			"2019-10-03",
			"2019-11-03"
	);

	INSERT INTO availability
	VALUES(
			1,
			"2019-12-03",
			"2020-01-03"
	);

	INSERT INTO availability
	VALUES(
			2,
			"2019-09-12",
			"2019-11-12"
	);

	INSERT INTO availability
	VALUES(
			3,
			"2020-01-10",
			"2020-02-10"
	);

	INSERT INTO availability
	VALUES(
			3,
			"2020-06-20",
			"2020-08-20"
	);

	INSERT INTO availability
	VALUES(
			3,
			"2020-11-02",
			"2020-12-31"
	);

	INSERT INTO availability
	VALUES(
			4,
			"2019-11-12",
			"2020-03-22"
	);

	INSERT INTO availability
	VALUES(
			5,
			"2019-11-12",
			"2020-03-22"
	);

	INSERT INTO availability
	VALUES(
			6,
			"2019-11-15",
			"2020-06-15"
	);
	-------------------------------------------------REVIEW----------------------------------------------
	INSERT INTO availability
	VALUES(
			6,
			"2019-11-15",
			"2020-06-15"
	);
