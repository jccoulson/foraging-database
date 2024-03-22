/* **********************************************************************************
	Group 2 Foraging for food 
	Phase 3 DDL(file iii)
	Members: Alexander Alfaro, Jesse Coulson, Steven Mendez, and Nicholas Shaddox
	For CSCI370 Team Project for Professor Renner
/* **********************************************************************************/

/* Dropping tables if they exist in the proper hierchal order */
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

/*Creating all tables for our database */
CREATE TABLE Region (
Rname          ENUM('N','S', 'E', 'W')     NOT NULL,
PRIMARY KEY(Rname)                               );

CREATE TABLE Plant (
Pscientific_name   VARCHAR(40)        NOT NULL    ,
Preparation    VARCHAR(1000)                      ,
Cultivating    VARCHAR(500)                       ,
Type           VARCHAR(10)                        ,
Parts_edible   TINYTEXT                           ,
Common_name    VARCHAR(20)            NOT NULL    ,
Toxicity       ENUM('toxic', 'safe')  NOT NULL    ,
Family_name    VARCHAR(20)                        ,
Description    VARCHAR(1000)                      ,
Picture_url    VARCHAR(2048)                      ,
PRIMARY KEY(Pscientific_name)                    );

CREATE TABLE Animal (
Ascientific_name   VARCHAR(40)        NOT NULL    ,
Preparation    VARCHAR(1000)                      ,
Common_name    VARCHAR(40)            NOT NULL    ,
Type           VARCHAR(20)                        ,
Toxicity       ENUM('toxic', 'safe')  NOT NULL    ,
Size           VARCHAR(10)                        ,
Description    VARCHAR(1000)                      ,
Picture_url    VARCHAR(2048)                      ,
PRIMARY KEY(Ascientific_name)                     );

CREATE TABLE Water (
Type          ENUM('Fresh', 'Salt', 'Foul')  NOT NULL,
Preparation    VARCHAR(1000)          NOT NULL    ,
Method_find    TINYTEXT               NOT NULL    ,
Description    VARCHAR(1000)                      ,
PRIMARY KEY(Type)                               );

CREATE TABLE States (
Rname          ENUM('N','S', 'E', 'W')     NOT NULL,
State          CHAR(2)                NOT NULL     ,
PRIMARY KEY(Rname, State)                          ,
CONSTRAINT FK_States2Region FOREIGN KEY(Rname) REFERENCES Region(Rname));


CREATE TABLE User (
Email           VARCHAR(40)           NOT NULL    ,
First_name      VARCHAR(20)                       ,
Last_name       VARCHAR(20)                       ,
Type            ENUM('Employee', 'Regular')       ,
Password        VARCHAR(50)                       ,
Rname           ENUM('N','S', 'E', 'W')           ,
PRIMARY KEY(Email)                                ,
CONSTRAINT FK_User2Region FOREIGN KEY(Rname) REFERENCES Region(Rname) ON UPDATE CASCADE);

CREATE TABLE Suggestion(
User_suggestion  VARCHAR(1000) NOT NULL,
Email  VARCHAR(40)             NOT NULL,
PRIMARY KEY(User_suggestion)           ,
CONSTRAINT FK_Suggestion2User FOREIGN KEY(Email) REFERENCES User(Email) ON DELETE CASCADE);


CREATE TABLE Medicinal_uses (
Pscientific_name  VARCHAR(40)        NOT NULL     ,
Preparation   VARCHAR(1000)                       ,
Side_effects  TINYTEXT                            ,
Uses          VARCHAR(500)               NOT NULL     ,
PRIMARY KEY(Pscientific_name)              ,
CONSTRAINT FK_Medicinal2Plant FOREIGN KEY(Pscientific_name) REFERENCES Plant(Pscientific_name) ON DELETE CASCADE ON UPDATE CASCADE);

CREATE TABLE Resides_in (
Pscientific_name     VARCHAR(40)     NOT NULL   ,
Rname        ENUM('N','S', 'E', 'W')    NOT NULL,
PRIMARY KEY(Pscientific_name, Rname)            ,
Start_month    ENUM('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
End_month      ENUM('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
CONSTRAINT FK_Resides2Plant FOREIGN KEY(Pscientific_name) REFERENCES Plant(Pscientific_name) ON DELETE CASCADE ON UPDATE CASCADE,
CONSTRAINT FK_Resides2Region FOREIGN KEY(Rname) REFERENCES Region(Rname) ON DELETE CASCADE);

CREATE TABLE Contains (
Rname        ENUM('N','S', 'E', 'W')    NOT NULL,
Ascientific_name     VARCHAR(40)     NOT NULL   ,
PRIMARY KEY(Rname, Ascientific_name)            ,
CONSTRAINT FK_Contains2Region FOREIGN KEY(Rname) REFERENCES Region(Rname) ON DELETE CASCADE ON UPDATE CASCADE,
CONSTRAINT FK_Contains2Animal FOREIGN KEY(Ascientific_name) REFERENCES Animal(Ascientific_name) ON DELETE CASCADE);

CREATE TABLE Has ( 
Rname        ENUM('N','S', 'E', 'W')    NOT NULL,
Type        ENUM('Fresh', 'Salt', 'Foul')  NOT NULL,
PRIMARY KEY(Rname, Type)                       ,
CONSTRAINT FK_Has2Region FOREIGN KEY(Rname) REFERENCES Region(Rname) ON DELETE CASCADE ON UPDATE CASCADE,
CONSTRAINT FK_Has2Water FOREIGN KEY(Type) REFERENCES Water(Type) ON DELETE CASCADE);




