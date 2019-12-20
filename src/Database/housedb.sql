
CREATE TABLE [user]
(
	username VARCHAR PRIMARY KEY,
	password VARCHAR NOT NULL,
	name VARCHAR,
	date_of_birth DATE,
	about VARCHAR,
	photo VARCHAR
);

CREATE TABLE wrong_login
(
	username VARCHAR,
	ip_address VARCHAR,
	date_time DATETIME,
	n_times INTEGER
);

CREATE TABLE house
(
	id_house INTEGER PRIMARY KEY,
	rent INTEGER NOT NULL,
	location VARCHAR,
	title VARCHAR NOT NULL,
	max_guests INTEGER CHECK(max_guests > 0),
	classificacao INTEGER CHECK(classificacao <= 5 AND classificacao >= 0),
	description VARCHAR,
	area INTEGER,
	quartos INTEGER,
	casas_de_banho INTEGER,
	id_owner VARCHAR REFERENCES [user]
);

CREATE TABLE photo
(
	photo_id INTEGER PRIMARY KEY,
	photo VARCHAR,
	id_house INTEGER REFERENCES house
);


CREATE TABLE availability
(
	id_availability INTEGER PRIMARY KEY,
	start_date DATE,
	end_date DATE,
	id_house INTEGER REFERENCES house
);

CREATE TABLE reservation
(
	id_reservation INTEGER PRIMARY KEY,
	n_hospedes INTEGER,
	payment INTEGER,
	id_user VARCHAR REFERENCES [user],
	id_house INTEGER REFERENCES house
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
	id_user VARCHAR REFERENCES [user]
);

CREATE TABLE message
(
	id_msg INTEGER PRIMARY KEY,
	msg VARCHAR,
	timestamp DATE,
	id_sender VARCHAR REFERENCES [user],
	id_receiver VARCHAR REFERENCES [user]
);

-------------------------------------------------------------------------- USERS ------------------------------------------------------------------------
INSERT INTO [user]
VALUES
	(
		"Pedrag123",
		"$2y$12$GJvj8.qkH4hqNsyik84yU.2jGCxNI03e4BN0Inn2InarBcV6JT0JG",
		"Pedro Azevedo",
		"1998-03-10",
		"Likes to watch movies and play video games",
		"photo");

INSERT INTO [user]
VALUES
	(
		"Ricky_Ricardo",
		"Yeet",
		"Ricardo Milos",
		"1987-10-2",
		"Good memes",
		"photo1");

INSERT INTO [user]
VALUES
	(
		"OwenW",
		"WOW",
		"Owen Wilson",
		"1969-05-26",
		"Oh wow",
		"photo2");

INSERT INTO [user]
VALUES
	(
		"MnM",
		"Moms spaghetti",
		"Eminem",
		"1979-07-02",
		"Knees weak, arms heavy, there is vomit on his sweater, moms spaghetti",
		"photo3");


--------------------------------------------------------------------------HOUSES-----------------------------------------------------------------------------------
INSERT INTO house
VALUES(
		1,
		200,
		"Portugal" ,
		"Uma casa à beira do mar" ,
		3 ,
		5 ,
		"Dá para pescar peixes" ,
		30,
		3 ,
		3,
		"Pedrag123" 
	);

INSERT INTO house
VALUES(
		2,
		300,
		"Portugal" ,
		"Uma casa à beira do rio" ,
		3 ,
		5 ,
		"Dá para lavar a roupa",
		30,
		3,
		3,
		"Pedrag123" 
	);

INSERT INTO house
VALUES(
		3,
		400,
		"Portugal" ,
		"Uma casa à beira das docas" ,
		2 ,
		4 ,
		"Dá para ser roubado por gaivotas" ,
		20,
		2,
		2,
		"Pedrag123" 
	);

INSERT INTO house
VALUES(
		4,
		400,
		"Portugal" ,
		"Uma casa à beira da montanha" ,
		4 ,
		4 ,
		"Dá para rolar abaixo da montanha mas não é aconselhado",
		40,
		4,
		4,
		"MnM" 
	);

INSERT INTO house
VALUES(
		5,
		500,
		"Portugal" ,
		"Uma casa à beira do MCDonalds" ,
		1 ,
		4 ,
		"Comida barata i guess",
		10 ,
		1,
		1,
		"MnM" 
	);

INSERT INTO house
VALUES(
		6,
		600,
		"Portugal" ,
		"Uma casa à beira da lixeira" ,
		3,
		3 ,
		"Where u belong",
		30,
		3 ,
		3 ,
		"MnM" 
	);

INSERT INTO house
VALUES(
		7,
		700,
		"Portugal" ,
		"Uma casa à beira de um vulcão" ,
		6 ,
		3 ,
		"Dá jeito para sacrificar virgens",
		60,
		6,
		6,
		"Ricky_Ricardo" 
	);

--------------------------------------------------------------------------------AVAILABILITY---------------------------------------------------------
INSERT INTO availability
VALUES(
		1,
		"2019-12-03",
		"2019-12-07",
		1
	);

INSERT INTO availability
VALUES(
		2,
		"2019-12-25",
		"2019-12-31",
		1
	);

INSERT INTO availability
VALUES(
		3,
		"2019-09-12",
		"2019-11-12",
		2
	);

INSERT INTO availability
VALUES(
		4,
		"2020-01-10",
		"2020-02-10",
		3
	);

INSERT INTO availability
VALUES(
		5,
		"2020-06-20",
		"2020-08-20",
		3
	);

INSERT INTO availability
VALUES(
		6,
		"2020-11-02",
		"2020-12-31",
		4
	);

INSERT INTO availability
VALUES(
		7,
		"2019-11-12",
		"2020-03-22",
		4
	);

INSERT INTO availability
VALUES(
		8,
		"2019-11-12",
		"2020-03-22",
		5
	);

INSERT INTO availability
VALUES(
		9,
		"2019-11-15",
		"2020-06-15",
		6
	);

---------------------------------------------------------------------------Reviews--------------------------------------------------
INSERT INTO review
VALUES(
		1,
		3,
		"Could have been better",
		4,
		"Pedrag123"
);

INSERT INTO review
VALUES(
		2,
		4,
		"Good house for the price",
		1,
		"MnM"
);

INSERT INTO review
VALUES(
		3,
		5,
		"Amazing 5/5",
		1,
		"Ricky_Ricardo"
);