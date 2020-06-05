CREATE DATABASE MR;



CREATE TABLE MR.users(
 id          int NOT NULL,
username     VARCHAR(256) NOT NULL,
email        VARCHAR(256) NOT NULL,
password     VARCHAR(256) NOT NULL,
role         tinyint NOT NULL Default 0,
industry     VARCHAR (256) NOT NULL,
description  VARCHAR (256) NOT NULL
);



CREATE TABLE MR.user_personal_data(
user_id     INTEGER  PRIMARY KEY, 
fname       VARCHAR(256),
lname       VARCHAR(256),
city        VARCHAR(256),
age         VARCHAR(256),
education   VARCHAR(256)

);

CREATE TABLE MR.jobs_post(

  id            int NOT NULL,
  title        varchar(256) NOT NULL,
  category     varchar(128) NOT NULL,
  description  text NOT NULL,
  requirements text NOT NULL 

); 

CREATE TABLE MR.hr_personal_data(
hr_id       INTEGER  PRIMARY KEY, 
fname       VARCHAR(256),
lname       VARCHAR(256),
city        VARCHAR(256),
age         VARCHAR(256),
company     VARCHAR(256),
role        tinyint NOT NULL Default 1

);


CREATE TABLE MR.employer(
id          INTEGER AUTO_INCREMENT PRIMARY KEY,
company     VARCHAR(256) NOT NULL,
industry    VARCHAR(256) NOT NULL,
description TEXT         NOT NULL,
password    VARCHAR(256) NOT NULL,
role        tinyint NOT NULL DEFAULT 2
);