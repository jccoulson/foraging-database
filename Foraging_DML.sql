/* **********************************************************************************
	Group 2 Foraging for food 
	Phase 3 DML(file v) 
	Members: Alexander Alfaro, Jesse Coulson, Steven Mendez, and Nicholas Shaddox
	For CSCI370 Team Project for Professor Renner
/* **********************************************************************************/

DELETE FROM Resides_in;
DELETE FROM Contains;
DELETE FROM Medicinal_uses;
DELETE FROM Has;
DELETE FROM Suggestion;
DELETE FROM User;
DELETE FROM States;
DELETE FROM Region;
DELETE FROM Water;
DELETE FROM Animal;
DELETE FROM Plant;


#Rname
INSERT INTO Region VALUES 
('N'), ('S'), ('E'), ('W');

#sci_name, com_name, fam_name, desc, prep, parts, cult, type, tox
#type: ['fruit', 'seed', 'herb', 'fungi', 'nut', 'cactus']
INSERT INTO Plant(Pscientific_name, Common_name, Family_name, Description, Preparation, Parts_edible, Cultivating, Type, Toxicity, Picture_url) 
VALUES
#1
(
    'Amaranthus hybridus',
    'Amaranth',
    'Amaranthaceae',
    'An annual herb.  It is an upright plant.  It grows 80 cm to 2 m tall.  It is often green but can be dark red.  The leaves are simple and alternate.  The leaves are oval shaped and can be 15 cm long.  The flowers can be red, yellow or white.  They are in spikes at the top of the plant and in the axils of leaves.  The seeds are small and shiny and black.',
    'Vegetable like: Boil until soft, Tea like: Dry and then use about 1 ouce per 8 ounces of water', 
    'Leaves, Seeds, Vegetable',
    'Cultivation: Adapts to most soil. Needs full sun. Plant two inches away from eachother', 
    'herb', 
    'toxic',
    'https://upload.wikimedia.org/wikipedia/commons/1/10/Amarant_gr%C3%BCn.jpg'

 ),
 #2
(
    'Angelica archangelica',
    'Angelica',
    'Apiaceae',
    'A plant which keeps growing from year to year.  It grows to 2 m tall and spreads 1.5 m across.  It has stout stems.  They are long, thick and hollow and like celery.  The leaves are large and have teeth around the edge.  The leaves are made of several leaflets.  The flowers are small and greenish-yellow.  They are produced in clusters.  They occur during the second year of growth.',
    'The root, leaves, and stem can be boiled an eaten like a vegetable. Leaves can be used to make an herbal tea.',
    'Seeds, Leaves, Stems, Herb, Spice, Vegetable, Roots - tea',
    'Plants are grown from seeds. The seeds need to be sown fresh',
    'herb',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/3/3b/Koehler1887-GardenAngelica.jpg'
),
#3
(
    'Scirpus validus',
    'Bulrush',
    'Cyperaceae',
    'A sedge.  These grow in clumps and have grass like leaves and solid stalks.  They keep growing from year to year.  They grow 3.5 m tall.  The roots or rhizomes are tough and scaly brown.  The stems are rounded and soft.  They are not branched.  The flowers are in spikes near the stem tips.  Each flower has several stalks in clusters.  The clusters are up to 1 cm long.  They are flat and have overlapping scales.  The seeds are hard and flat.  They are 5 mm long.',
    'Boil and eat like a vegetable',
    'Leaves, Pollen, Root, Seeds',
    'Can be grown from the seed',
    'herb',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/SchoenoplectusTabernaemontani.jpg/800px-SchoenoplectusTabernaemontani.jpg'
),
#4
(
    'Arctium lappa',
    'Burdock',
    'Asteraceae',
    'A tall growing herb or shrub which takes two years from planting to flower and seed production.  Plants can be 2 m tall.  The plant forms a clump of very large, grey-green wavy-edged leaves.  The leaves can be 50 cm long.  The leaves and stems are covered with fine hairs.  The leaves are paler underneath.  In the second year a tall branched flower stalk 2 m tall grows from the centre of the clump.  There are many flowers which are small and purple or white.  They have a bract around them that is longer than the flower.  The fruit is a spiky seed pod.  This burr attaches itself to clothes.  The burdock roots are long and slender and resemble parsnips.  They can be a metre long and 3 cm wide.  The skin is brown and the flesh is white.',
    'Boil until roots can be peeled, change water and boil again for 1.5 hours changing the water every half hour',
    'Seeds, Roots, Leaves, Flower stalk, Vegetable',
    'Plants are grown from seed. Soak seeds for 12 hours before sowing. 20cm spacing',
    'herb',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/ArctiumLappa1.jpg/800px-ArctiumLappa1.jpg'
),
#5
(
    'Typha domingensis',
    'Cattail',
    'Typhacaea',
    'A tall reed-like plant.  It grows in water and keeps growing from year to year.  They grow up to 4.5 m high.  They form dense thickets around swamps.  The leaves are long and blade-like and enclosed in a sheath.  They are grass-green.  They grow in two opposite rows.  The flowers are brown.  They are produced in long cylindrical spikes.  These look like sausages on spikes.  These are up to 20 mm wide.  The flowers are usually separated into male (above) and female (below) sections.  When mature they turn into a mass of fluff.',
    'Can be used as a flour.',
    'Leaves, Shoots, Rhizome, Root, Pollen, Pith, Vegetable, Flowers',
    'Plants can be grown by divistion',
    'herb',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8b/Typha_domingensis_4.jpg/800px-Typha_domingensis_4.jpg'
),
#6
(
    'Stellaria media',
    'Chickweed',
    'Caryophyllaceae',
    'An annual herb.  It lies along the ground.  It has lax slender stems.  There is a single line of white hairs which run up the stems until they reach a joint.  The stems are round in cross section.  The leaves occur opposite.  The lower leaves have stalks.  The upper leaves do not have stalks.  Leaves are oval and taper to a short point.  The leaves are 1-3 cm long and 5-10 mm wide.  Leaves are pale underneath.  The flowers are purple in a flat topped arrangement with central flowers opening first.  The fruit is an oval capsule.  The seeds are red-brown.',
    'Only the new leaves and succulent tops of the plant can be eaten raw and added to salads. The rest should be boiled until tender.',
    'Leaves, Seeds, Vegetable,Flowers',
    'Plants are grown from seed. It can be grown from a root transplant as well.',
    'herb',
    'toxic',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Kaldari_Stellaria_media_01.jpg/1024px-Kaldari_Stellaria_media_01.jpg'
),
#7
(
    'Cichorium intybus',
    'Chicory',
    'Asteraceae',
    'A perennial herb up to 1 m high.  It forms clumps.  It has white, milky sap when parts are broken off.   Kinds have been selected either for their fattened edible roots or for their edible leaves.  The plant has a large taproot.  The leaves are sword shaped and have teeth along the edge.  The leaves form a cluster around the base of the plant.  They can be 12 cm long.  The leaves up the stem clasp the stem.  The highest leaves are reduced to bracts.  It has a bright blue, pink or white flowers on a branched stem.  The flowers are dandelion-like.  The flower heads can be 3.5 cm across.  Several cultivated varieties have been produced.',
    'As a Tea:Roast the roots until brown and brittle. Ground them until granulated. You can also boil like any other vegetable. ',
    'Leaves, Stems, Roots, Herb, Spice, Vegetable',
    'Plants are grown from seed. Plan 15mm apart.',
    'herb',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Cichorium_intybus-alvesgaspar1.jpg/1024px-Cichorium_intybus-alvesgaspar1.jpg'
),
#8
(
    'Taraxacum officinale',
    'Dandelion',
    'Asteraceae',
    'A herb.  It keeps growing from year to year.  It grows to 10 cm high.  The leaves are at the base.  They grow in a ring.  The leaves vary in shape.  They are narrowly oblong but divided into irregular leaflets along the stalk.  They have teeth along the edge.  The lobes point backwards towards the leaf bases.  The flower heads are yellow.  They occur singly.  They are on a hollow leafless stalk.  It is unbranched.  The fruit is dry.',
    'Wash the roots carefully. Dry slightly for 6 hours (in mid fall sun). Grind roots then fully dry',
    'Leaves, Roots - coffee, Flowers, Herb, Spice, Vegetable',
    'Plants are grown from the seeds. Can be grown by root division',
    'herb',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Nottuln%2C_Bauerschaft_Stevern_--_2020_--_7049.jpg/1024px-Nottuln%2C_Bauerschaft_Stevern_--_2020_--_7049.jpg'
),
#9
(
    'Sambucus canadensis',
    'Elderberry',
    'Adoxaceae',
    'A medium sized shrub.  It grows 1-4 m tall.  It forms suckers.  The branches form a wide, broad crown.  The twigs have a white pith.  Each stem lives for 4-6 years then dies down and is replaced by new shoots.  The leaves are compound and opposite.  They are like feathers.  They are 15-20 cm long and have 5-11 leaflets.  The flowers are in large groups 20-30 cm across.  They are white.  The fruit are dark purple or black berries.',
    'Can be used in jellys and cold drinks. Do not eat unripe leaves or fruit.',
    'Fruit, Flowers',
    'Can be grown by seeds, cuttlings or division of roots. Two different verieties are needed for fruit to form.',
    'fruit',
    'toxic',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Sambucus_nigra_subsp_canadensis_-_Indiana.jpg/800px-Sambucus_nigra_subsp_canadensis_-_Indiana.jpg'
 
),
#10
(
    'Asclepias syriaca',
    'Milkweed',
    'Apocynaceae',
    'A herb that keeps growing from year to year.  A plant that sprouts like asparagus.  The shoots can be 1 m tall.  It contains milky juice.  The leaves are large and opposite or in rings.  They are oblong and pointed at the tip.  They are thick and leathery.  The flowers occur in a cluster.  They are purple.  The fruit are pods that are pointed.  They occur in pairs. ',
    'Everything on the milkweed is edible except for the milky sap which is mildly poisonous. Use young milkweed as they do not have sap. Can be eating like a boiled vegetable. ',
    'Flowers, Gum, Leaves, Root, Seeds, Seeds pod, Sprouted Seeds, Vegetable',
    'Plants can be grown from seeds or cuttlings',
    'herb',
    'toxic',
    'https://upload.wikimedia.org/wikipedia/commons/2/27/Common_Milkweed_%282984595871%29.jpg'
),
#11
(
    'Carya illinoensis',
    'Pecan',
    'Juglandaceae',
    'Trees normally have male and female flowers separately on the same plant, but because the flower parts develop at separate times, cross pollination normally occurs.  Male flowers grow on catkins near the branches on the previous years growth.  The fruit are dark brown nuts that are carried in clusters of 4-12.  The fruit can be 6 cm long.  It has a thin shell.  At maturity the fruit splits into 4 valves and reveal the smooth brown kernel.  There are many cultivated varieties.',
    'Nuts can be eaten raw or cooked. Leaves of pecan tree can be used for tea',
    'Nuts, Flavouring, Leaves - tea, Seeds - oil',
    'Requires growing a pecan tree. Not nessesary for average forager.',
    'nut',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Carya_illinoinensis.jpg/800px-Carya_illinoinensis.jpg'
    
),
#12
(
    'Castanea dentata',
    'American chestnut',
    'Fagaceae',
    'A large tree.  It grows up to 35 m high.  The trunk can be 100 cm across.  The tree loses its leaves during the year.  The leaves are alternate and simple.  They taper gradually to both ends.  They are 15-28 cm long.  The leaves are yellowish green.  There are 15-20 parallel veins on each side of the leaf.  These end in a tooth with a bristle.  The flowers are separately male and female on the same tree.  The male or pollen flowers are on short stalks in erect catkins.  These are 12-20 cm long.  They are in the axils of leaves.  The female or seed flowers occur singly or in clusters or 2 or 3 at the base of some of the male flowers.  The fruit is a nut.  These occur in small clusters of 1-5 within a spiny husk.  This is 5-8 cm across and splits into 4 parts.  Each but is oval and flat on one side.  It is pointed.  The surface is brown and smooth.  The nuts are edible.',
    'Nuts can be eater raw or cooked.',
    'Nuts, Seeds',
    'Grown from a tree',
    'nut',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Castanea_dentata-field_trial2009.jpg/800px-Castanea_dentata-field_trial2009.jpg'
 
),
#13
(
    'Corylus americana',
    'Hazelnut',
    'Betulaceae',
    'A deciduous shrub.  It grows 3 m tall.  The branches are tough and flexible.  The leaf stalks and twigs are covered with gland tipped hairs.  The oval leaves are larger than Corylus avellana.  The leaves have teeth along the edge.  Male and female flowers grow on the same plant.  The fruit are nuts in a fringed, green husk.  The nuts are 12 mm long.  They occur in clusters.  ',
    'Nuts can be eating raw or cooked',
    'Nuts, Seeds',
    'These nuts come from a shrub and can be planted from the seeds or suckers',
    'nut',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Corylus_americana0.jpg/1024px-Corylus_americana0.jpg'
    
),
#14
(
    'Quercus Michauxii',
    'Cow Oak',
    'Fagaceae',
    'A large tree.  The crown is compact and rounded.  It grows to 18-24 m high.  The trunk is 60-90 cm across.  The bark is light grey and cracks into scaly plates.  The leaves are 10-23 cm long and 5-14 cm wide.  They are oval and broadest above the middle.  The edges are wavy and there are 10-14 rounded teeth on each side.  They are shiny green above and greyish green underneath with soft hairs.  The acorns are large and sweet.  They are 2.5-3 cm long and egg shaped.  About 1/3 is enclosed in a deep thick cup.',
    'Nut can be eaten raw or cooked.',
    'Nuts, Seeds',
    'Cow Oak comes from a tree.',
    'nut',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Swampchestnutoak3.JPG/1024px-Swampchestnutoak3.JPG'
    
),
#15
(
    'Acorus Calamus',
    'Calamus Root',
    'Acoraceae',
    'A marsh plant.  It is a herb with stout branched underground stems which have an aroma.  It continues growing from year to year.  It grows to 1 m high and 0.5 m across.  The underground stems can be 2 m long and 0.5-1.5 cm wide.  The leaves are flat, smooth and 25 to 60 cm long and 1 to 1.5 cm wide.  They are sword shaped but flexible.  The leaves also have a strong smell.  The veins in the leaf run along the leaf.  The mid vein is off centre.  The bract around the flower is green, long and similar to the leaves. The spike for the flowers is 3 to 5 cm long and 1 cm across and has many flowers.  The flower is like a club.  Flowers of both sexes occur.  The fruit is a greenish berry.  It rarely flowers in the tropics.',
    'The underground stems are ground and used to flavour food.  They can be eaten raw.  They have a gingery peppery taste.  It should probably only be eaten sparingly with caution.  They contain a bitter glucoside called acorin.  The forms of Acorus in Asia contain a chemical called asarone which causes cancer.  The centre of the above ground section can be eaten.  The underground stem can be washed, peeled, chopped into 1 cm long pieces and cooked for 20 minutes with several changes of water then simmered for 20 minutes in sugar syrup to produce candy.',
    'Roots, Rhizome, Leaves, Stems, Herb, Spice',
    'Can be growing by seeds or dividing rootstock.',
    'herb',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/3/37/Acorus_calamus1.jpg'
 
),
#16
(
    'Opuntia stricta',
    'Prickly pear',
    'Cactaceae',
    'A cactus.  It grows 1 m tall.  The stems are fleshy with leaf-like joints.  These have small scarred leaves on their surface.  The joints are 8-15 cm long.  It is covered with single or double yellow spines.  These can be 2.5 cm long.  The flowers are yellow and 60-70 mm long.  Flowers have several sepals, petals and stamens.  (Opuntia inermis is smaller and usually without spines.)  The fruit are red and 4-6 cm long.  ',
    'The ripe fruit are eaten. The green pads are eaten like a vegetable.  ',
    'Fruit, Leaves, Stems',
    'Full sun, can be grown by seed or propagation.',
    'cactus',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Opuntia_stricta%2C_S%C3%A8te%2C_H%C3%A9rault_01.jpg/1024px-Opuntia_stricta%2C_S%C3%A8te%2C_H%C3%A9rault_01.jpg'
    
),
#17
(
    'Auicularia auicula-judae',
    "Tree Ear",
    'Auriculariaceae',
    'A mushroom.  The fruiting bodies are 10 cm across.  They are irregular and ear shaped.',
    'The fruiting bodies are eaten.  They are dried and used in stews.  They are also used in soups.  ',
    'Fungus, Mushroom, Vegetable',
    'Store in a dark place at about 70 degrees Fahrenheit until the straw is fully colonized, approximately 10 days. Then, cold-shock the mycelium to start the fruiting process by refrigerating the bag for one day. The developing mushrooms will grow through the nail holes. Mist several times a day.',
    'fungi',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Auricularia_auricula-judae_64485.JPG/1024px-Auricularia_auricula-judae_64485.JPG'
    
),
#18
(
    'Morchella esculenta',
    'Morel',
    'Morchellaceae',
    'A mushroom or morel.  It is 5-15 cm tall.  The cap can be 8-10 cm high.  The stems are hollow.  The caps are cone shaped with irregular pits and ridges.',
    'The fruiting body is well cooked and eaten both fresh and dried.  It can be stuffed, baked, sauteed in butter, slow simmered in cream, or combined with meats, fowl, pasta, rice, potatoes, or sauces.  It is dried and used in soups.  ',
    'Fungus, Mushroom, Vegetable',
    'Store in a dark place at about 70 degrees Fahrenheit until the straw is fully colonized, approximately 10 days. Then, cold-shock the mycelium to start the fruiting process by refrigerating the bag for one day. The developing mushrooms will grow through the nail holes. Mist several times a day.',
    'fungi',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Morchella_esculenta_-_DE_-_TH_-_2013-05-01_-_01.JPG/800px-Morchella_esculenta_-_DE_-_TH_-_2013-05-01_-_01.JPG'
    
),
#19
(
    'Calvatia gigantea',
    'Giant Puffball',
    'Lycoperdiaceae',
    'A mushroom.  The fruiting body can be 25-100 cm across.  ',
    'The fruiting bodies are eaten when young and white and firm-fleshed.  They can be braised, fried, grilled, sauteed or cooked in other ways.  They can be sliced and fried like pancakes or added to soups and salads.',
    'Fungus, Mushroom,',
    'Store in a dark place at about 70 degrees Fahrenheit until the straw is fully colonized, approximately 10 days. Then, cold-shock the mycelium to start the fruiting process by refrigerating the bag for one day. The developing mushrooms will grow through the nail holes. Mist several times a day.',
    'fungi',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Giant_Puffball.jpg/1024px-Giant_Puffball.jpg'
    
),
#20
(
    'Lycoperdon perlatum',
    'Small Puffball',
    'Lycoperdiaceae',
    'Typically pear shaped and 3 to 6cm across; 4 to 9cm tall. A surface covered in tiny pearl-like attachments distinguishes the Common Puffball from its many similar relatives. (At least 13 Lycoperdon species occur in the UK.) The pyramidal warts or pearls are of different sizes, initially cream and then turning ochre before falling off to leave an olive-brown surface marked with faint scars where the warts used to be.',
    'The fruiting bodies are eaten when young and white and firm-fleshed.  They can be braised, fried, grilled, sauteed or cooked in other ways.  They can be sliced and fried like pancakes or added to soups and salads.',
    'Fungus, Mushroom, Vegetable',
    'Store in a dark place at about 70 degrees Fahrenheit until the straw is fully colonized, approximately 10 days. Then, cold-shock the mycelium to start the fruiting process by refrigerating the bag for one day. The developing mushrooms will grow through the nail holes. Mist several times a day.',
    'fungi',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Single_lycoperdon_perlatum.jpg/800px-Single_lycoperdon_perlatum.jpg'
    
),
#21
(
    'Cornus canadensis',
    'Bunchberry',
    'Cornacaea',
    'A herb which keeps growing from year to year.  It is deciduous and low and spreading.  It grows 10-20 cm tall.  The rhizomes are creeping and slender.   The leaves are in rings and are 25 mm long and oval or sword shaped.  The leaves turn red in autumn.  There are white bracts around the flower-heads.  The flowers are silvery white.  The fruit are small, bright red berries.',
    'Boil and eat like a vegetable. The seeds can be used as flour',
    'Fruit',
    'Plants can be grown from washed seed and from cuttings. Can be grown in sandy or clay soil',
    'fruit',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/0/0b/CanadianDogwoodGrowingTrailSide_cropped.jpg'
);

#email, fname, lname, Rname
INSERT INTO User(Email, First_name, Last_name, Password, Rname, Type)
VALUES
('fake@fake.com', 'fake', 'fake', 'pass', 'N', 'Regular'),
('littlejohn9999@fakeemail.com',    'John',         'Doe',          'Password1',       'N',        'Regular'),
('LabrandonSharletta7013@Lang.com', 'Labrandon',    'Sharletta',    'Password1',       'S',        'Regular'),
('KaeoKasie1102@Taletha.com',       'Kaeo',         'Kasie',        'Password2',       'E',        'Regular'),
('JairoTitiana2650@Shaquina.com',   'Jairo',        'Titiana',      'Password3',       'W',        'Regular'),
('JairusAmelia4949@Hiep.com',       'Jairus',       'Amelia',       'Password4',       'W',        'Regular'),
('ZeinabFitzgerald2809@Sumner.com', 'Zeinab',       'Fitzgerald',   'Password5',       'S',        'Regular'),
('RenikaDonal9797@Daneille.com',    'Renika',       'Donal',        'Password6',       'E',        'Regular'),
('CalibBjorn3858@Ranee.com',        'Calib',        'Bjorn',        'Password7',       'E',        'Regular'),
('YukiKeston4934@Isra.com',         'Yuki',         'Keston',       'Password8',       'W',        'Regular'),
('SandieLois5649@Flannery.com',     'Sandie',       'Lois',         'Password9',       'W',        'Regular'),
('ZennaShantoya5579@Zayra.com',     'Zenna',        'Shantoya',     'Password10',      'E',        'Regular'),
('EkaterinaEwa5487@Leslieanne.com', 'Ekaterina',    'Ewa',          'Password11',      'S',        'Regular'),
('JonieGianina6511@Thea.com',       'Jonie',        'Gianina',      'Password12',      'E',        'Regular'),
('RosaJarit4887@Justin.com',        'Rosa',         'Jarit',        'Password13',      'W',        'Regular'),
('VelenciaTatia5391@Luisa.com',     'Velencia',     'Tatia',        'Password14',      'E',        'Regular'),
('JoanSheika4930@Maurissa.com',     'Joan',         'Sheika',       'Password15',      'W',        'Regular'),
('ReginalShakira1507@Claudia.com',  'Reginal',      'Shakira',      'Password16',      'W',        'Regular'),
('KarinAurielle8924@Talena.com',    'Karin',        'Aurielle',     'Password17',      'E',        'Regular'),
('SerraDarriel4930@Yasemin.com',    'Serra',        'Darriel',      'Password18',      'E',        'Regular'),
('LoraleeManish609@Yukari.com',     'Loralee',      'Manish',       'Password19',      'E',        'Regular'),
('CelestinaTashawna6336@Thea.com',  'Celestina',    'Tashawna',     'Password20',      'W',        'Regular'),
('LinsieJeannifer7649@Anesha.com',  'Linsie',       'Jeannifer',    'Password21',      'E',        'Regular'),
('AbagailLinnea5730@Brodie.com',    'Abagail',      'Linnea',       'Password22',      'S',        'Regular'),
('MalikaLorie8344@Bijal.com',       'Malika',       'Lorie',        'Password23',      'E',        'Regular'),
('ApoloniaEmre6341@Toree.com',      'Apolonia',     'Emre',         'Password24',      'W',        'Regular'),
('ChalseaRoma397@Darnella.com',     'Chalsea',      'Roma',         'Password25',      'S',        'Regular'),
('JeanetteMonic6250@Rahmell.com',   'Jeanette',     'Monic',        'Password26',      'S',        'Regular'),
('KamishaShalie8619@Domanic.com',   'Kamisha',      'Shalie',       'Password27',      'E',        'Regular'),
('LadanaElizabethann5@Demitri.com', 'Ladana',       'Elizabethann', 'Password28',      'S',        'Regular'),
('MartenMorgana5884@Chais.com',     'Marten',       'Morgana',      'Password29',      'S',        'Regular'),
('LianAnaya785@Natacha.com',        'Lian',         'Anaya',        'Password30',      'S',        'Regular'),
('RayanDenielle3540@Kelli.com',     'Rayan',        'Denielle',     'Password31',      'E',        'Regular'),
('ElyaRandolf5760@Rui.com',         'Elya',         'Randolf',      'Password32',      'E',        'Regular'),
('SharinSean6373@Geddy.com',        'Sharin',       'Sean',         'Password33',      'E',        'Regular'),
('CapriceEstaban2856@Jacobi.com',   'Caprice',      'Estaban',      'Password34',      'S',        'Regular'),
('MarquelleMalisha571@Esi.com',     'Marquelle',    'Malisha',      'Password35',      'W',        'Regular'),
('SophyDesirie8542@Carisa.com',     'Sophy',        'Desirie',      'Password36',      'S',        'Regular'),
('BrittaDerrious8244@Joi.com',      'Britta',       'Derrious',     'Password37',      'S',        'Regular'),
('TobeyHeather2104@Kamecia.com',    'Tobey',        'Heather',      'Password38',      'E',        'Regular'),
('LeanaJonique3242@Ignatius.com',   'Leana',        'Jonique',      'Password39',      'S',        'Regular'),
('LadonNed4847@Dornell.com',        'Ladon',        'Ned',          'Password40',      'S',        'Regular'),
#inserting employees now
('Cho_Cathy@fmail.com',             'Cathy',        'Cho',          'EmployeePass1',   'N',   'Employee'),
('Smith_Bob@fmail.com',             'Bob',          'Smithh',       'EmployeePass2',   'S',   'Employee'),
('Brown_Elena@fmail.com',           'Elena',        'Brown',        'EmployeePass3',   'E',   'Employee'),
('Jones_Anthony@fmail.com',         'Anthony',      'Jones',        'EmployeePass4',   'W',   'Employee');


#sci_name, prep, side_effects, uses
INSERT INTO Medicinal_uses(Pscientific_name, Preparation, Side_effects, Uses)
VALUES
#1
(
    'Amaranthus hybridus',
    'Boil until soft', 
    'Gastralintestinal discomfort, cramps, nausea, and diarrhea if using too much',
    'Treats gastralintestinal disorders, diarrhea, cold sores, sore throats when used as a tea. Helps with skin irritation when used as a poultice'
),
#2
(
    'Angelica archangelica', 
    'Intended to be used as a tea. Dry root and leaves, then soak in hot water or ground to powder',
    NULL,
    'Used for severe cramps, vomiting or supset stomach, soother ulcers, stimulate apetite and induce kidney function'
),
#3
(
    'Scirpus validus',
    'Boiled and made into a poultice using tannic acid made from acorn boilings',
    'The poultice is not entended to be ingested. No side effect when applied to external wounds',
    'Apply poultice on severe bee stings, poison ivy blisters, and other skin irritations.'
),
#4
(
    'Cornus canadensis',
    'Intended to be used as a poultice but can also be eaten without medical effect',
    NULL,
    'Treats first and second hand burns, bee stings, poison ivy rashes, and other skin maladies'
),
#5
(
    'Arctium lappa',
    'Make tea from the leaves. Dried leaves and fresh leaves will work.',
    'May cause diarrhea.',
    'Helps with stomach and bowels (laxative).'
),
#6
(
    'Typha domingensis',
    'Make a tea using a small palmful of cattail rootstock flour to one cup of hot water',
    NULL,
    'Helps control diarrhea as a binder.'
),
#7
(
    'Stellaria media',
    'Pawlful of fresh, chopped leaves, add to a cup of hot water, and let steep for a half an hour. Strain the leaves.',
    'May cause diarrhea.',
    'Main use is as a laxative'
),
#8
(
    'Cichorium intybus',
    'Boil leaves and flowers and wrap them in a clean, cotton cloth. While still warm and way, apply to swelling inflammations and boils',
    NULL,
    'As a tea: Helps with colds sores. As a wrap: Helps with skin irritations such as poison ivy and bee stings'
),
#9
(
    'Taraxacum officinale',
    'Steep a small palmful of leaves in one cup of hot water',
    NULL,
    'Aids in digestion and can relieve stomach cramps'
),
#10
(
    'Sambucus canadensis',
    'Prepare as a tea by drying the ripened leavings and then soaking them in hot water',
    'Elderberries are a known allergy to some.',
    'Used to help with headaches.'
),
#11
(
    'Asclepias syriaca',
    'Use an adult milkweed that has milky sap',
    'Ingesting the milky sap is poisonous',
    'Used to cure warts'
);

#sci_name, Rname
INSERT INTO Resides_in(Pscientific_name, Rname, Start_month, End_month)
VALUES
('Amaranthus hybridus',     'N',  'July', 'October'),
('Amaranthus hybridus',     'S',  'July', 'October'),
('Amaranthus hybridus',     'E',  'July', 'October'),
('Amaranthus hybridus',     'W',  'July', 'October'),
('Angelica archangelica',   'S',  'June', 'October'),
('Angelica archangelica',   'E',  'June', 'October'),
('Scirpus validus',         'E',  'January', 'December'),
('Scirpus validus',         'S',  'January', 'December'),
('Scirpus validus',         'W',  'January', 'December'),
('Cornus canadensis',       'W',  'January', 'December'),
('Arctium lappa',           'S',  'January', 'December'),
('Arctium lappa',           'W',  'January', 'December'),
('Typha domingensis',       'E',  'January', 'December'),
('Typha domingensis',       'S',  'January', 'December'),
('Typha domingensis',       'W',  'January', 'December'),
('Stellaria media',         'S',  'March', 'June'),
('Stellaria media',         'W',  'March', 'June'),
('Cichorium intybus',       'N',  'March', 'July'),
('Cichorium intybus',       'W',  'March', 'July'),
('Cichorium intybus',       'E',  'March', 'July'),
('Taraxacum officinale',    'N',  'May', 'June'),
('Sambucus canadensis',     'S',  'August', 'September'),
('Asclepias syriaca',       'W',  'June', 'August'),
('Carya illinoensis',       'N',  'August', 'November'),
('Carya illinoensis',       'S',  'August', 'November'),
('Carya illinoensis',       'E',  'August', 'November'),
('Castanea dentata',        'N',  'September', 'October'),
('Castanea dentata',        'S',  'September', 'October'),
('Castanea dentata',        'E',  'September', 'October'),
('Castanea dentata',        'W',  'September', 'October'),
('Corylus americana',       'E',  'July', 'September'),
('Quercus Michauxii',       'S',  'August', 'November'),
('Acorus Calamus',          'W',  'November', 'March'),
('Opuntia stricta',         'E',  'September', 'December'),
('Auicularia auicula-judae', 'E', 'March', 'November'),
('Auicularia auicula-judae', 'S', 'March', 'November'),
('Morchella esculenta',     'N',  'March', 'November'),
('Morchella esculenta',     'W',  'March', 'November'),
('Calvatia gigantea',       'N',  'April', 'May'),
('Calvatia gigantea',       'S',  'April', 'May'),
('Calvatia gigantea',       'W',  'April', 'May'),
('Lycoperdon perlatum',     'N',  'July', 'November'),
('Lycoperdon perlatum',     'S',  'July', 'November'),
('Lycoperdon perlatum',     'E',  'July', 'November');

#sci_nam, com_name, Type,  desc, prep, size, tox
INSERT INTO Animal(Ascientific_name, Common_name, Type, Description, Preparation, Size, Toxicity, Picture_url)
VALUES
#1
(
    'Sylvilagus',
    'Cottontail Rabbit',
    'rabbit',
    'Cottontail rabbits are the leporid species in the genus Sylvilagus, found in the Americas.[1] Most Sylvilagus species have stub tails with white undersides that show when they retreat, giving them their characteristic name. However, this feature is not present in all cottontails nor is it unique to the genus.',
    'Must be cooked before ingested. Cut through the diaphragm and pull out the lungs and heart. With a knife cut out the rabbits bottom, make to cuts to form a V-shape where the tail was and remove any remaining droppings from the rectum. Give the rabbit a scrub under running water; it is now ready to be jointed or cooked.',
    'small',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Wild_rabbit_us.jpg/1024px-Wild_rabbit_us.jpg'

),
#2
(
    'Lepus americanus',
    'Showshoe Rabbit',
    'rabbit',
    'The snowshoe hare, also called the varying hare or snowshoe rabbit, is a species of hare found in North America. It has the name "snowshoe" because of the large size of its hind feet. The animals feet prevent it from sinking into the snow when it hops and walks.',
    'Must be cooked before ingested. Cut through the diaphragm and pull out the lungs and heart. With a knife cut out the rabbits bottom, make to cuts to form a V-shape where the tail was and remove any remaining droppings from the rectum. Give the rabbit a scrub under running water; it is now ready to be jointed or cooked.',
    'small',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Snowshoe_Hare%2C_Shirleys_Bay.jpg/1024px-Snowshoe_Hare%2C_Shirleys_Bay.jpg'

),
#3
(
    'Lepus',
    'Jack Rabbit',
    'rabbit',
    'Hares and jackrabbits are leporids belonging to the genus Lepus. Hares are classified in the same family as rabbits. They have similar herbivorous diets, but are generally larger in size than rabbits, have proportionately longer ears and live solitarily or in pairs. They do not dig burrows, but nest in slight depressions called forms, often in long grass. Also unlike rabbits, their young are able to fend for themselves shortly after birth rather than emerging blind and helpless. Having long, powerful hind legs, most are fast runners. Hare species are native to Africa, Eurasia, and North America.',
    'Must be cooked before ingested. Cut through the diaphragm and pull out the lungs and heart. With a knife cut out the rabbits bottom, make to cuts to form a V-shape where the tail was and remove any remaining droppings from the rectum. Give the rabbit a scrub under running water; it is now ready to be jointed or cooked.',
    'small',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Scrub_Hare_%28Lepus_saxatilis%29_close-up_%2830544290256%29_%282%29.jpg/800px-Scrub_Hare_%28Lepus_saxatilis%29_close-up_%2830544290256%29_%282%29.jpg'

),
#4
(
    'Sciurus carolinensis',
    'Easter Gray Squirrel',
    'squirrel',
    'These rodents eat a variety of foods, but naturally, their favorites are definitely nuts, such as acorns, walnuts, and hazelnuts. As winter approaches, Eastern Gray Squirrels start hiding food in many locations, which provides them nutrition through the colder months. They hide more food than they will ever find again, and some of these extra seeds will eventually grow into new trees.',
    'Lay the squirrel on a flat work surface belly down. Lift the tail. Find the anus and cut through to the tailbone. Do not cut the tail completely off. Slice down each back leg just enough to create a flap of skin.Peel the skin back and cut as you go. Make sure not to cut the meat. Step on the tail with the heel of your boot and pull off the skin almost like removing a winter coat inside out. Pull the leg skin clean off. Cut the head off. Break the legs off. Use the catfish skinner to remove the skin from the hind legs. Insert the knife at the pelvis and gently cut towards the neck. Place a finger on either side of the knife. Pull the skin up and away from guts. Careful not to cut into the guts as this could spoil the meat. Remove the entrails from the chest cavity. Pull out the organs and the esophagus. Cut off the genitals. Cut through the pelvis and rinse out any droppings with water. Put the squirrel on in a ziplock bag to prevent contamination. Store in an ice cooler.',
    'small',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Eastern_Grey_Squirrel.jpg/1024px-Eastern_Grey_Squirrel.jpg'

),
#5
(
    'Tamiasciurus hudsonicus',
    'American Red Squirrel',
    'squirrel',
    'The American Red Squirrel is widespread across the United States and easy to identify when compared to other squirrel species. As the name suggests, they have a reddish color and white belly that makes them easy to distinguish. Size-wise, they are both MUCH smaller than both gray and fox squirrels but larger than chipmunks.',
    'Lay the squirrel on a flat work surface belly down. Lift the tail. Find the anus and cut through to the tailbone. Do not cut the tail completely off. Slice down each back leg just enough to create a flap of skin.Peel the skin back and cut as you go. Make sure not to cut the meat. Step on the tail with the heel of your boot and pull off the skin almost like removing a winter coat inside out. Pull the leg skin clean off. Cut the head off. Break the legs off. Use the catfish skinner to remove the skin from the hind legs. Insert the knife at the pelvis and gently cut towards the neck. Place a finger on either side of the knife. Pull the skin up and away from guts. Careful not to cut into the guts as this could spoil the meat. Remove the entrails from the chest cavity. Pull out the organs and the esophagus. Cut off the genitals. Cut through the pelvis and rinse out any droppings with water. Put the squirrel on in a ziplock bag to prevent contamination. Store in an ice cooler.',
    'small',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Tamiasciurus_hudsonicus_CT.jpg/1024px-Tamiasciurus_hudsonicus_CT.jpg'

),
#6
(
    'Sciurus niger',
    'Fox Squirrel',
    'squirrel',
    'These squirrels, which are native to most of the eastern United States, can adapt to many different habitats. They are most often found in small patches of deciduous forests that include trees that produce their favorite foods, which are acorns, walnuts, pecans, and hickory nuts. To prepare for winter, they hide caches of these nuts all over the place to be eaten later when the weather turns cold.',
    'Lay the squirrel on a flat work surface belly down. Lift the tail. Find the anus and cut through to the tailbone. Do not cut the tail completely off. Slice down each back leg just enough to create a flap of skin.Peel the skin back and cut as you go. Make sure not to cut the meat. Step on the tail with the heel of your boot and pull off the skin almost like removing a winter coat inside out. Pull the leg skin clean off. Cut the head off. Break the legs off. Use the catfish skinner to remove the skin from the hind legs. Insert the knife at the pelvis and gently cut towards the neck. Place a finger on either side of the knife. Pull the skin up and away from guts. Careful not to cut into the guts as this could spoil the meat. Remove the entrails from the chest cavity. Pull out the organs and the esophagus. Cut off the genitals. Cut through the pelvis and rinse out any droppings with water. Put the squirrel on in a ziplock bag to prevent contamination. Store in an ice cooler.',
    'small',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Fox_Squirrel_%2814539535789%29.jpg/1024px-Fox_Squirrel_%2814539535789%29.jpg'

),
#7
(
    'Sciurus aberti',
    "Abert's Squirrel",
    'squirrel',
    'The ears on an Abert’s Squirrel, which are also called Tassel-eared Squirrels, are unique, and it’s hard to mistake if you see one. Just look for long tufts of hair on each ear (except that the tufts disappear in summer)! In addition, they have a dark gray coat, pure white underbelly, and a noticeable rusty brown patch of fur on their back. They look a lot like the adorable Eurasian Red Squirrel, except for their color.',
    'Lay the squirrel on a flat work surface belly down. Lift the tail. Find the anus and cut through to the tailbone. Do not cut the tail completely off. Slice down each back leg just enough to create a flap of skin.Peel the skin back and cut as you go. Make sure not to cut the meat. Step on the tail with the heel of your boot and pull off the skin almost like removing a winter coat inside out. Pull the leg skin clean off. Cut the head off. Break the legs off. Use the catfish skinner to remove the skin from the hind legs. Insert the knife at the pelvis and gently cut towards the neck. Place a finger on either side of the knife. Pull the skin up and away from guts. Careful not to cut into the guts as this could spoil the meat. Remove the entrails from the chest cavity. Pull out the organs and the esophagus. Cut off the genitals. Cut through the pelvis and rinse out any droppings with water. Put the squirrel on in a ziplock bag to prevent contamination. Store in an ice cooler.',
    'small',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/b/bb/Abert_collects_nesting_material.jpg'

),
#8
(
    'Tamiasciurus douglasii',
    'Douglas Squirrel',
    'squirrel',
    'The Douglas Squirrel is found only in the Pacific Northwest, along the coast from the Sierra Mountains in California to southern British Columbia. The Douglas Squirrel and the more widespread American Red Squirrel are similar and occupy the same ecological niche. It is rare to find these two squirrels in the same territory, and where one squirrel range ends, the other typically begins.',
    'Lay the squirrel on a flat work surface belly down. Lift the tail. Find the anus and cut through to the tailbone. Do not cut the tail completely off. Slice down each back leg just enough to create a flap of skin.Peel the skin back and cut as you go. Make sure not to cut the meat. Step on the tail with the heel of your boot and pull off the skin almost like removing a winter coat inside out. Pull the leg skin clean off. Cut the head off. Break the legs off. Use the catfish skinner to remove the skin from the hind legs. Insert the knife at the pelvis and gently cut towards the neck. Place a finger on either side of the knife. Pull the skin up and away from guts. Careful not to cut into the guts as this could spoil the meat. Remove the entrails from the chest cavity. Pull out the organs and the esophagus. Cut off the genitals. Cut through the pelvis and rinse out any droppings with water. Put the squirrel on in a ziplock bag to prevent contamination. Store in an ice cooler.',
    'small',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Douglas_Squirrel_DSC3742vvc.jpg/1024px-Douglas_Squirrel_DSC3742vvc.jpg'

),
#9
(
    'Tympanuchus phasianellus',
    'Sharptail',
    'grouse',
    'The sharp-tailed grouse, also known as the sharptail or fire grouse, is a medium-sized prairie grouse. One of three species in the genus Tympanuchus, the sharp-tailed grouse is found throughout Alaska, much of Northern and Western Canada, and parts of the Western and Midwestern United States.',
    'Game should be cleaned as soon as possible after it has been shot. It is important for the body heat to escape and for meat to cool. A clean, sharp knife is your main tool, and latex gloves are handy.',
    'small',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Sharp-Tailed_Grouse_%2826089894256%29_%28cropped%29.jpg/1024px-Sharp-Tailed_Grouse_%2826089894256%29_%28cropped%29.jpg'

),
#10
(
    'Tympanuchus cupido',
    'Prairie Chicken',
    'grouse',
    'Adults of both sexes are medium to large chicken-like birds, stocky with round-wings. They have short tails which are typically rounded. Adult males have orange comb-like feathers over their eyes and dark, elongated head feathers that can be raised or lain along neck. They also possess a circular, un-feathered neck patch which can be inflated while displaying; this, like their comb feathers, is also orange. As with many other bird species, the adult females have shorter head feathers and also lack the males yellow comb and orange neck patch.',
    'Game should be cleaned as soon as possible after it has been shot. It is important for the body heat to escape and for meat to cool. A clean, sharp knife is your main tool, and latex gloves are handy.',
    'small',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Tympanuchus_cupido_-Illinois%2C_USA_-male_displaying-8_%281%29.jpg/390px-Tympanuchus_cupido_-Illinois%2C_USA_-male_displaying-8_%281%29.jpg'

),
#11
(
    'Colinus virginianus',
    'Bobwhite Quail',
    'quail',
    'The northern bobwhite (Colinus virginianus), also known as the Virginia quail or (in its home range) bobwhite quail, is a ground-dwelling bird native to Canada, the United States, Mexico, and Cuba, with introduced populations elsewhere in the Caribbean, Europe, and Asia. It is a member of the group of species known as New World quails (Odontophoridae). They were initially placed with the Old World quails in the pheasant family (Phasianidae), but are not particularly closely related. The name "bobwhite" is an onomatopoeic derivation from its characteristic whistling call. ',
    'Game should be cleaned as soon as possible after it has been shot. It is important for the body heat to escape and for meat to cool. A clean, sharp knife is your main tool, and latex gloves are handy.',
    'small',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Virginiawachtel_2007-06-16_065.jpg/800px-Virginiawachtel_2007-06-16_065.jpg'

),
#12
(
    'Phasianus colchicus',
    'Rednecked Pheasent',
    'pheasant',
    'There are many colour forms of the male common pheasant, ranging in colour from nearly white to almost black in some melanistic examples. These are due to captive breeding and hybridisation between subspecies and with the green pheasant, reinforced by continual releases of stock from varying sources to the wild. For example, the "ring-necked pheasants" common in Europe, North America and Australia do not pertain to any specific taxon, they rather represent a stereotyped hybrid swarm.',
    'Game should be cleaned as soon as possible after it has been shot. It is important for the body heat to escape and for meat to cool. A clean, sharp knife is your main tool, and latex gloves are handy.',
    'small',
    'safe',
    'https://upload.wikimedia.org/wikipedia/commons/7/7c/Phasianus_colchicus_-Rutland_Water_-female-8.jpg'

);
/*
template for "Animals"
(
    'sci_name',
    'com_name',
    'type',
    'desc',
    'prep',
    'size',
    'tox',
    'url'

),
*/

#sci_name, region
INSERT INTO Contains(Ascientific_name, Rname)
VALUES
('Sylvilagus',                  'E'),
('Sylvilagus',                  'S'),
('Lepus americanus',            'N'),
('Lepus',                       'N'),
('Sciurus carolinensis',        'N'),
('Sciurus carolinensis',        'E'),
('Sciurus carolinensis',        'S'),
('Sciurus carolinensis',        'W'),
('Tamiasciurus hudsonicus',     'N'),
('Tamiasciurus hudsonicus',     'W'),
('Sciurus niger',               'W'),
('Sciurus niger',               'E'),
('Sciurus niger',               'N'),
('Sciurus aberti',              'S'),
('Tamiasciurus douglasii',      'W'),
('Tympanuchus phasianellus',    'W'),
('Tympanuchus phasianellus',    'N'),
('Tympanuchus cupido',          'S'),
('Colinus virginianus',         'N'),
('Colinus virginianus',         'E'),
('Colinus virginianus',         'S'),
('Colinus virginianus',         'W'),
('Phasianus colchicus',         'S');

# water type, preparation, method find, description 
INSERT INTO Water VALUES
('Foul', 'DO NOT DRINK! Foul water is not safe to drink, there is no method to prepare.','One way of spotting foul water is by the color of the water, and the smell.', 'Foul water can be identified by smell, taste, and color. if it smells metalic or is a color other than clear, then it should be an indication that is not safe. Some of the symptoms of drinking foul water can be diarrhea cholera dysentery, typhoid, and polio.'),
('Fresh', 'When handeling fresh water it is best to boil water at a temperature above 140 degrees fahrenheit for 30 seconds.', 'Running water and ground water is found in valleys, ravines, and is very common where vegitation is. A good rule of thumb is the faster the water is flowing the better.' , 'Freshwater can be found in many places, there are two different types of freshwater, groundwater and running water. Running water like streams and ravines are prefered over ground water, but ground water can be safe if prepared properly.'),
('Salt', 'DO NOT DRINK! Due to the complex desalintion process and equipment needed it is impractical to desalinate water.', 'Salt water can be found fairly easy on the coasts, and can be identified by taste and smell.', 'Salt water is easily found on the costal states and usually is identifiable by the taste and smell of the water. Salt water is not safe to drink unless it undergoes a desalination process which is usually costly and a timely process.');

#email, w_type
INSERT INTO Has VALUES
('N',       'Fresh' ),
('N',       'Salt'  ),
('N',       'Foul'  ),
('S',       'Fresh' ),
('S',       'Salt'  ),
('S',       'Foul ' ),
('E',       'Fresh' ),
('E',       'Salt'  ),
('E',       'Foul'  ),
('W',       'Fresh' ),
('W',       'Salt'  ),
('W',       'Foul'  );

#States insert
INSERT INTO States (Rname, State)
Values
('N', 'MT'),
('N', 'WY'),
('N', 'CO'),
('N', 'ND'),
('N', 'SD'),
('N', 'NE'),
('N', 'KS'),
('N', 'MN'),
('N', 'IA'),
('N', 'MO'),
('W', 'WA'),
('W', 'OR'),
('W', 'CA'),
('W', 'NV'),
('W', 'ID'),
('W', 'UT'),
('W', 'AZ'),
('S', 'NM'),
('S', 'OK'),
('S', 'TX'),
('S', 'AR'),
('S', 'LA'),
('S', 'MS'),
('S', 'TN'),
('S', 'AL'),
('S', 'GA'),
('S', 'FL'),
('S', 'SC'),
('S', 'NC'),
('E', 'WI'),
('E', 'IL'),
('E', 'KY'),
('E', 'IN'),
('E', 'MI'),
('E', 'OH'),
('E', 'WV'),
('E', 'VA'),
('E', 'PA'),
('E', 'DC'),
('E', 'NJ'),
('E', 'NY'),
('E', 'VT'),
('E', 'ME'),
('E', 'NH'),
('E', 'MA'),
('E', 'CT'),
('E', 'RI');

INSERT INTO Suggestion VALUES
('Can you try to make the UI of your website better?', 'CelestinaTashawna6336@Thea.com'),
('I see a plant all the time where I live that is not on the database. Can you add it in?', 'LinsieJeannifer7649@Anesha.com'),
('I cannot find the animal im looking for can you help?', 'AbagailLinnea5730@Brodie.com' ),
('Wow this website is great! Keep it up.',    'MalikaLorie8344@Bijal.com');



