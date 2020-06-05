CREATE DATABASE MR;



CREATE TABLE MR.users(
id         INTEGER AUTO_INCREMENT PRIMARY KEY,  
username    VARCHAR(256) NOT NULL,
email       VARCHAR(256) NOT NULL,
password    VARCHAR(256) NOT NULL,
role        VARCHAR(256) NOT NULL
);

INSERT INTO users(fname, lname, address, mobile, email, role, department)
VALUES('Mihail', "Petrov", 'Plovdiv', '0886504011', 'mail@mihail-petrov.me', 'Dev', 'IT');

CREATE TABLE MR.user_personal_data(
user_id     INTEGER  PRIMARY KEY, 
fname       VARCHAR(256),
lname       VARCHAR(256),
city        VARCHAR(256),
age         VARCHAR(256),
education   VARCHAR(256)

);

CREATE TABLE MR.hr_personal_data(
hr_id       INTEGER  PRIMARY KEY, 
fname       VARCHAR(256),
lname       VARCHAR(256),
city        VARCHAR(256),
age         VARCHAR(256),
company     VARCHAR(256)

);
DROP TABLE MR.employer;


CREATE TABLE MR.employer(
id          INTEGER AUTO_INCREMENT PRIMARY KEY,
company     VARCHAR(256) NOT NULL,
industry    VARCHAR(256) NOT NULL,
description TEXT         NOT NULL,
password    VARCHAR(256) NOT NULL,
role        VARCHAR(256) NOT NULL
);

CREATE TABLE MR.job_posts(
id           INTEGER AUTO_INCREMENT PRIMARY KEY,
industry     VARCHAR(256) NOT NULL,
position     VARCHAR(256) NOT NULL,
company      VARCHAR(256) NOT NULL,
city         VARCHAR(256) NOT NULL,
description  TEXT         NOT NULL,
company_id   INTEGER      NOT NULL
);  

CREATE TABLE MR.job_candidates(
id             INTEGER AUTO_INCREMENT PRIMARY KEY,
user_id        INTEGER,
fname          VARCHAR(256),
lname          VARCHAR(256),
age            VARCHAR(256),
address        text,
zip            VARCHAR(100),
city           VARCHAR(256),
phone          VARCHAR(100),
email          VARCHAR(256),
web            TEXT,
birth          DATE,
education      VARCHAR(256),
experience     TEXT,
languages      TEXT,
computerskills TEXT,
otherskills    TEXT,
status         VARCHAR(256),
job_id         INTEGER,
company_id     INTEGER ,
role        VARCHAR(256) NOT NULL
);
