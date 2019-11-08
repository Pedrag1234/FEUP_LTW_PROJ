
CREATE TABLE user(
	username VARCHAR PRIMARY KEY,
	password VARCHAR NOT NULL
	name VARCHAR,
	age INTEGER,
	date_of_birth DATE,
	about VARCHAR,
);



CREATE TABLE house(
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


CREATE TABLE reservation(
	id_reservation INTEGER PRIMARY KEY,
	id_user VARCHAR REFERENCES user,
	id_house INTEGER REFERENCES house,
	n_hospedes INTEGER
);

CREATE TABLE date_reservation(
	start_date DATE,
	end_date DATE,
	id_reservation INTEGER REFERENCES reservation,
	id_house INTEGER REFERENCES house,
	PRIMARY KEY(id_reservation,id_house)
);

CREATE TABLE review(
	id_comment INTEGER PRIMARY KEY,
	rating INTEGER,
	comment VARCHAR,
	id_house INTEGER REFERENCES house,
	id_user VARCHAR REFERENCES user
);

CREATE TABLE message(
	id_msg INTEGER PRIMARY KEY,
	msg VARCHAR,
	id_sender VARCHAR REFERENCES user,
	id_receiver VARCHAR REFERENCES user
);


--User Inserts

INSERT INTO user VALUES ("pedrag","yeet");

--User Inserts

INSERT INTO user_info VALUES ("Pedro",21,'10/03/1998',"Muito fixe","pedrag");

--House inserts

INSERT INTO house VALUES (1,"pedrag",600,"Porto","Uma casa a cair de podre",3,3);
INSERT INTO house VALUES (2,"pedrag",300,"Braga","Uma casa a cair de podre V2",3,3);
INSERT INTO house VALUES (3,"pedrag",1600,"Lisboa","Uma casa demasiado cara",3,3);
INSERT INTO house VALUES (4,"pedrag",400,"Penafiel","Uma casa a cair de podre V3",3,3);
INSERT INTO house VALUES (5,"pedrag",800,"Porto","Idem aspas",3,3);