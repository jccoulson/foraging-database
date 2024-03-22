/* **********************************************************
	Group 2 Foraging for food 
	Phase 3 Foraging Statements (file vii)
	Members: Alexander Alfaro, Jesse Coulson, Steven Mendez, and Nicholas Shaddox
	For CSCI370 Team Project for Professor Renner
/* **********************************************************/



#1)Select region and number of plants in that region
SELECT Rname as Region, COUNT(Pscientific_name) as Number_of_plants
FROM Plant
JOIN Resides_in using (Pscientific_name)
JOIN Region using (Rname)
GROUP BY Rname
having resides_in.Rname = Rname;

#2)Select region and number of states in that region
SELECT Rname as Region, COUNT(state) as Number_of_states
FROM States
GROUP BY Rname;

#3)Select "stuff" from plant that is the the northern region
SELECT Pscientific_name, Common_name, Type, Toxicity, Parts_edible
FROM Plant
JOIN Resides_in using (Pscientific_name)
WHERE Rname = 'N';

#4)Select "stuff" from animal that is in california
SELECT Ascientific_name, Rname, state, Common_name, Size, Toxicity
FROM Animal
JOIN Contains using (Ascientific_name)
JOIN States using (Rname)
WHERE state = 'CA';

#5)Select all from water!
SELECT Type, 
SUBSTRING(Description, 1, 30) as Short_Description, 
SUBSTRING(Method_find, 1, 30) as Short_Method_find,
SUBSTRING(Preparation, 1, 30) as Short_Preparation
FROM WATER;

#6)deleteing an animal
DELETE from Animal 
where Ascientific_name = 'Amaranthus hybridus';

#7)updating one attribute(preparation) of a plant
UPDATE Plant 
SET Preparation='Boil in water.' 
WHERE Pscientific_name = 'Acorus Calamus';

#8)updating all attributes of a plant
UPDATE Plant 
SET 
Preparation = 'New preparation', 
Cultivating = 'New Cultivating',
Type = 'nuts', 
Parts_edible = 'New edible parts',
Common_name = 'New common name',
Toxicity = 'safe', 
Family_name = 'new familyname', 
Description = 'new description',
Picture_url = 'new picture_url'
WHERE Pscientific_name = 'Arctium lappa';

#9)adding an animal with only attributes that are NOT NULL
INSERT INTO Animal (Ascientific_name, Common_name, Toxicity)
VALUES ("Fakeus Animalus", "Fake Animal", "Safe");

#10)adding a user with all attributes possible
INSERT INTO User (Email, First_name, Last_name, Type, Password, Rname)
VALUES ("BobBobberson@fakemail.com", "Bob", "Bobberson", "Regular", "Password123", "N");




