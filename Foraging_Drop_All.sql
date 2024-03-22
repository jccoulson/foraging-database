/* **********************************************************
	Group 2 Foraging for food 
	Phase 3 Drop Script(file iv)
	Members: Alexander Alfaro, Jesse Coulson, Steven Mendez, and Nicholas Shaddox
	For CSCI370 Team Project for Professor Renner
/* **********************************************************/

/*Dropping all the foreign key constraints*/
ALTER TABLE States 
DROP CONSTRAINT IF EXISTS FK_States2Region;

ALTER TABLE User
DROP CONSTRAINT IF EXISTS FK_User2Region;

ALTER TABLE Medicinal_uses
DROP CONSTRAINT IF EXISTS FK_Medicinal2Plant;

ALTER TABLE Resides_in
DROP CONSTRAINT IF EXISTS FK_Resides2Plant;

ALTER TABLE Resides_in
DROP CONSTRAINT IF EXISTS FK_Resides2Region;

ALTER TABLE Contains
DROP CONSTRAINT IF EXISTS FK_Contains2Region;

ALTER TABLE Contains
DROP CONSTRAINT IF EXISTS FK_Contains2Animal;

ALTER TABLE Has
DROP CONSTRAINT IF EXISTS FK_Has2Region;

ALTER TABLE Has
DROP CONSTRAINT IF EXISTS FK_Has2Water;

ALTER TABLE Suggestion
DROP CONSTRAINT IF EXISTS FK_Suggestion2User;

/*Dropping all the primary key constraints*/
ALTER TABLE States 
DROP PRIMARY KEY;

ALTER TABLE User
DROP PRIMARY KEY;

ALTER TABLE Medicinal_uses
DROP PRIMARY KEY;

ALTER TABLE Resides_in
DROP PRIMARY KEY;

ALTER TABLE Contains
DROP PRIMARY KEY;

ALTER TABLE Suggestion
DROP PRIMARY KEY;




/*Dropping all the tables*/
DROP TABLE IF EXISTS Resides_in;
DROP TABLE IF EXISTS Contains;
DROP TABLE IF EXISTS Medicinal_uses;
DROP TABLE IF EXISTS Has;
DROP TABLE IF EXISTS Suggestion;
DROP TABLE IF EXISTS User;
DROP TABLE IF EXISTS States;
DROP TABLE IF EXISTS Region;
DROP TABLE IF EXISTS Water;
DROP TABLE IF EXISTS Animal;
DROP TABLE IF EXISTS Plant;




