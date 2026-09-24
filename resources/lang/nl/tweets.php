<?php

require_once(app_path('generate_and_cache_shlink.php'));

return [
    [
        'icon' => 'fas fa-info-circle',
        'title' => 'Algemene info',
        'body' => [
            [
                'Ga ervoor!',
                'Wat goed om te horen!',
                'Doen! Je krijgt er geen spijt van!',
            ],
            [
                'De meeste veganisten zeggen dat ze alleen spijt hebben dat ze niet eerder begonnen. Vragen? Ga naar r/vegan: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/') . ' Twijfels? Kijk deze korte video\'s: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'Een goede eerste stap is Veganuary: een gratis challenge van 31 dagen die je kunt beginnen wanneer je wilt. Je krijgt maaltijdplannen en dagelijkse mails: ' . generate_and_cache_shlink('https://veganuary.com/try-vegan/'),
                'Challenge 22 is gratis en je krijgt 22 dagen lang een mentor en diëtisten: ' . generate_and_cache_shlink('https://challenge22.com/') . ' Waarom het belangrijk is, zie je in het begin van Dominion: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
            ],
            [
                'Hulp nodig? Stuur me een berichtje!',
                'Ik beantwoord graag je vragen!',
                'Laat het me weten als je vastloopt!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Vegan challenge',
        'body' => [
            [
                'Hé!',
                'Hoi!',
                'Wat tof!',
            ],
            [
                'Veganuary heeft een gratis challenge van 31 dagen die je kunt beginnen wanneer je wilt, met maaltijdplannen en dagelijkse mails: ' . generate_and_cache_shlink('https://veganuary.com/try-vegan/'),
                'Challenge 22 is een gratis challenge van 22 dagen, met je eigen mentor en diëtisten die voor je klaarstaan: ' . generate_and_cache_shlink('https://challenge22.com/'),
                'Vegan Bootcamp is gratis en je doet het in je eigen tempo, met korte cursussen over eten, voeding en meer: ' . generate_and_cache_shlink('https://veganbootcamp.org'),
            ],
            [
                'Je kunt het!',
                'Het gaat je zeker lukken!',
                'We duimen voor je!',
                'Hulp nodig? Stuur me een berichtje!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-bacon',
        'title' => 'Ik hou van vlees',
        'body' => [
            [
                'Vegan vlees is de laatste jaren enorm verbeterd!',
                'Goed nieuws: je hoeft het niet te missen!',
                'Snap ik helemaal, en de vervangers zijn nu echt goed!',
            ],
            [
                'De meeste supermarkten verkopen nu plantaardige burgers, worstjes, gehakt en nuggets. Beyond Meat is een goed begin: ' . generate_and_cache_shlink('https://www.beyondmeat.com/'),
                'Je kunt nu bijna alles vervangen: burgers, worstjes, bacon, gehakt. Probeer een paar merken, ook het huismerk van je supermarkt, en kijk wat je lekker vindt.',
                'Veel restaurants en ketens hebben nu ook plantaardige opties. Op HappyCow zie je veganvriendelijke plekken bij jou in de buurt: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Stuur me een berichtje als je tips wilt!',
                'Ik deel graag mijn favorieten!',
                'Veel plezier met uitproberen!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-cheese',
        'title' => 'Ik hou van kaas',
        'body' => [
            [
                'Vegan kaas is de laatste jaren enorm verbeterd!',
                'Vegan kaas is zoveel beter dan vroeger!',
                'Je zou versteld staan hoe goed vegan kaas nu is!',
            ],
            [
                'Violife is een echte allrounder en smelt mooi: ' . generate_and_cache_shlink('https://violifefoods.com/') . ' Follow Your Heart en Daiya zijn ook goed.',
                'Hier is een overzicht van vegan kazen, van plakjes tot brie: ' . generate_and_cache_shlink('https://www.peta.org/lifestyle/food/everything-you-need-to-know-about-vegan-cheese/'),
                'Merken verschillen nogal, dus probeer er een paar. Begin bijvoorbeeld met Violife, dat smelt op pizza en in tosti\'s: ' . generate_and_cache_shlink('https://violifefoods.com/'),
            ],
            [
                'Stuur me een berichtje als je meer ideeën wilt!',
                'Ik help je graag iets lekkers te vinden!',
                'Geniet ervan! 🧀',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-pizza-slice',
        'title' => 'Ik hou van pizza',
        'body' => [
            [
                'Goed nieuws: pizza is makkelijk!',
                'Je hoeft pizza niet op te geven!',
                'Pizza is een van de makkelijkste dingen om vegan te eten!',
            ],
            [
                'Veel ketens hebben nu pizza\'s met vegan kaas of zonder kaas. Op HappyCow vind je veganvriendelijke plekken bij jou in de buurt: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'De meeste supermarkten verkopen nu vegan pizza\'s, en hier is een lijst met ketens die vegan opties hebben: ' . generate_and_cache_shlink('https://www.peta.org/lifestyle/food/pizza-places-vegan-options/'),
                'Daiya maakt vegan diepvriespizza\'s: ' . generate_and_cache_shlink('https://daiyafoods.com/collections/pizza-and-flatbread') . ' En veel pizzeria\'s gebruiken vegan kaas als je erom vraagt.',
            ],
            [
                'Geniet ervan! 🍕',
                'Hulp nodig bij het zoeken? Stuur me een berichtje!',
                'Eet smakelijk!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-egg',
        'title' => 'Ik hou van eieren',
        'body' => [
            [
                'Eieren zijn makkelijker te vervangen dan je denkt!',
                'Er zijn echt goede vervangers voor eieren!',
                'Je hebt keus genoeg!',
            ],
            [
                'Tofu scramble is een heerlijk alternatief voor roerei, vooral met wat spinazie erdoor: ' . generate_and_cache_shlink('https://simpleveganblog.com/simple-tofu-scramble/'),
                'JUST Egg is gemaakt van mungbonen en je bakt er roerei van net als van echt ei: ' . generate_and_cache_shlink('https://www.ju.st/eat/eggs'),
                'Hier is een handige gids als het je moeilijk valt om eieren op te geven: ' . generate_and_cache_shlink('https://chooseveg.com/blog/go-vegan-cant-give-up-eggs-help/') . ' En zo worden legkippen behandeld: ' . generate_and_cache_shlink('https://viva.org.uk/animals/egg-laying-hens/'),
            ],
            [
                'Stuur me een berichtje als je recepten wilt!',
                'Ik deel graag meer ideeën!',
                'Veel plezier met uitproberen!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-ice-cream',
        'title' => 'Ik hou van ijs',
        'body' => [
            [
                'Vegan ijs is tegenwoordig zo lekker!',
                'Je boft, vegan ijs is overal te krijgen!',
                'Je hoeft niks te missen!',
            ],
            [
                'Ben & Jerry\'s heeft een hele zuivelvrije lijn: ' . generate_and_cache_shlink('https://www.benjerry.com/flavors/non-dairy'),
                'Hier is een gids met het beste vegan ijs, uit de winkel en zelfgemaakt: ' . generate_and_cache_shlink('https://vegan.com/food/ice-cream/'),
                'De meeste supermarkten hebben ijs van haver, soja, amandel en kokos, en Ben & Jerry\'s heeft ook een zuivelvrije lijn: ' . generate_and_cache_shlink('https://www.benjerry.com/flavors/non-dairy'),
            ],
            [
                'Geniet ervan! 🍦',
                'Laat me weten wat je favoriet is!',
                'Stuur me een berichtje als je meer ideeën wilt!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-drumstick-bite',
        'title' => 'Ik hou van kip',
        'body' => [
            [
                'Vegan kip is echt lekker tegenwoordig!',
                'Je kunt nog steeds kip eten, alleen dan plantaardig!',
                'Goed nieuws: er zijn heel veel vervangers!',
            ],
            [
                'Kijk in de supermarkt eens in de vriezer en het koelvak: daar liggen plantaardige nuggets, reepjes en filets. Er zijn veel merken om te proberen.',
                'Veel zaken hebben nu vegan kipburgers en wraps. Op HappyCow zie je wat er bij jou in de buurt is: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Seitan en sojakip zijn top in wraps en roerbakgerechten. Hier wat makkelijke recepten: ' . generate_and_cache_shlink('https://veganuary.com/recipes'),
            ],
            [
                'Stuur me een berichtje als je merktips wilt!',
                'Ik help je graag!',
                'Eet smakelijk!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-glass-whiskey',
        'title' => 'Plantaardige melk',
        'body' => [
            [
                'Plantaardige melk is een makkelijke overstap!',
                'Er zijn nu zoveel soorten plantaardige melk!',
                'Perfect om mee te beginnen!',
            ],
            [
                'Haver, soja, amandel, kokos, cashew, rijst... Haver- en sojamelk zijn top in thee en koffie. Probeer er een paar en kijk welke je lekker vindt!',
                'Wil je weten waarom mensen overstappen? Deze korte video is het bekijken waard: ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI'),
                'Kies er een met toegevoegd calcium. Sojamelk bevat ongeveer net zoveel eiwit als koemelk.',
            ],
            [
                'Vragen? Stuur me een berichtje!',
                'Veel plezier met uitproberen!',
                'Ik help je graag!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-video',
        'title' => 'Documentaires',
        'body' => [
            [
                'Een paar documentaires die de moeite waard zijn:',
                'Een paar films die kunnen helpen:',
                'Twee echte aanraders:',
            ],
            [
                'Dominion, over hoe boerderijdieren worden behandeld (gratis): ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' The Game Changers, over sporters die plantaardig eten: ' . generate_and_cache_shlink('https://gamechangersmovie.com/'),
                'Dominion kun je gratis kijken en vergeet je niet snel: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' De korte video\'s van Earthling Ed zijn top voor de standaardvragen: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'The Game Changers, over topsporters die plantaardig eten: ' . generate_and_cache_shlink('https://gamechangersmovie.com/') . ' En Dominion, gratis, over het leven op boerderijen: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
            ],
            [
                'Laat me weten wat je ervan vindt! 🌱',
                'Laat het me weten als je er een kijkt!',
                'Ik praat er graag met je over!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-sad-cry',
        'title' => 'Dominion',
        'body' => [
            [
                'Ik raad je Dominion echt aan.',
                'Heb je Dominion al gezien?',
                'Als je maar één ding kijkt, kijk dan Dominion.',
            ],
            [
                'Het is een gratis documentaire over hoe boerderijdieren echt worden behandeld: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' Zelfs de eerste 15 minuten zijn al de moeite waard.',
                'De film laat zien wat er op boerderijen en in slachthuizen gebeurt, en je kunt hem gratis kijken: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
                'Hij is gratis en heeft al veel mensen van gedachten doen veranderen: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' Zwaar om te zien, maar het is het waard.',
            ],
            [
                'Stuur me een berichtje als je erover wilt praten!',
                'Ik beantwoord graag je vragen!',
                'Ik ben er als je hulp wilt om vegan te worden!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-baby',
        'title' => 'Stap voor stap',
        'body' => [
            [
                'Wat goed dat je erover nadenkt! 🐮',
                'Wat gaaf!',
                'Leuk dat je het gaat proberen!',
            ],
            [
                'Is het veel in één keer? Doe het dan stap voor stap. Begin met plantaardige melk, dan boter, dan vlees. Vegan Bootcamp kan je daarbij helpen: ' . generate_and_cache_shlink('https://veganbootcamp.org'),
                'Probeer eerst één vegan maaltijd per dag en bouw het daarna op. Veganuary heeft makkelijke recepten om mee te beginnen: ' . generate_and_cache_shlink('https://veganuary.com/recipes'),
                'Begin met de vervangers die jou het makkelijkst lijken, zoals melk of burgers, en ga dan verder. Bij Challenge 22 krijg je een mentor die je helpt: ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'Je kunt het!',
                'Hulp nodig? Stuur me een berichtje!',
                'Elke stap telt!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Vegetarisch',
        'body' => [
            [
                'Vegetarisch is een mooie stap!',
                'Super, goed bezig!',
                'Mooi begin!',
            ],
            [
                'Deze video legt uit waarom helemaal vegan worden zo\'n verschil maakt: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=uWna6-niYEg'),
                'Helaas veroorzaken zuivel en eieren ook veel leed. Deze korte video legt het uit: ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI'),
                'Zin om de volgende stap te zetten? Challenge 22 is gratis en je krijgt een mentor: ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'Vragen? Stuur me een berichtje!',
                'Ik help je graag als je het wilt proberen!',
                'Je bent er bijna!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-coins',
        'title' => 'Te duur',
        'body' => [
            [
                'Het kan juist goedkoper zijn!',
                'Vegan eten kan heel goedkoop zijn!',
                'Daar heb ik goed nieuws over!',
            ],
            [
                'Bonen, linzen, rijst, pasta, havermout, aardappelen en diepvriesgroenten horen bij het goedkoopste eten dat er is. Het zijn de speciale producten die meer kosten.',
                'Uit een studie van Oxford bleek dat een vegan eetpatroon je boodschappenrekening tot een derde kan verlagen in landen als het VK en de VS: ' . generate_and_cache_shlink('https://www.ox.ac.uk/news/2021-11-11-sustainable-eating-cheaper-and-healthier-oxford-study'),
                'Deze video legt het goed uit: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=Vs_nXVmyP1E') . ' Koken met bonen, linzen en tofu houdt het goedkoop.',
            ],
            [
                'Stuur me een berichtje als je goedkope recepten wilt!',
                'Ik deel graag ideeën voor goedkope maaltijden!',
                'Hopelijk heb je hier wat aan!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-calculator',
        'title' => 'Eiwitten',
        'body' => [
            [
                'Aan eiwit kom je makkelijker dan mensen denken!',
                'Goede vraag!',
                'Die vraag komt vaak voorbij!',
            ],
            [
                'Bonen, linzen, tofu, tempé, seitan, sojamelk, noten en zaden zitten allemaal vol eiwit. Hier een kort overzicht: ' . generate_and_cache_shlink('https://viva.org.uk/materials/protein-myth-fact-sheet/'),
                'Met gevarieerd vegan eten krijg je ruim genoeg binnen. Hier een factsheet over de eiwitmythe: ' . generate_and_cache_shlink('https://viva.org.uk/materials/protein-myth-fact-sheet/'),
                'Deze video van een minuut vat het samen: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=1elt5YCRLbk') . ' Tofu, linzen, bonen en seitan zijn allemaal uitstekende bronnen.',
            ],
            [
                'Vragen? Stuur me een berichtje!',
                'Ik help je graag met maaltijdideeën!',
                'Hopelijk heb je hier wat aan!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-dumbbell',
        'title' => 'Sport en fitness',
        'body' => [
            [
                'Je kunt zeker trainen met vegan eten!',
                'Veel sporters zijn vegan!',
                'Met planten bouw je ook spieren!',
            ],
            [
                'Heel wat topsporters eten plantaardig, van strongmen tot F1-kampioenen. The Game Changers gaat erover: ' . generate_and_cache_shlink('https://gamechangersmovie.com/'),
                'r/veganfitness staat vol met mensen die keihard trainen op plantaardig eten, met maaltijdplannen en tips: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/'),
                'Met tofu, seitan, linzen, bonen en sojamelk haal je makkelijk je eiwitten. Hier vind je heel veel trainingstips: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/'),
            ],
            [
                'Vragen? Stuur me een berichtje!',
                'Succes met trainen! 💪',
                'Ik help je graag!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-comments',
        'title' => 'Community',
        'body' => [
            [
                'Je staat er niet alleen voor!',
                'Het helpt echt als je mensen hebt om mee te praten!',
                'Er is echt een grote community!',
            ],
            [
                'r/vegan is een enorme, vriendelijke community waar je alles kunt vragen: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/'),
                'Probeer r/vegan voor steun en vragen: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/') . ' En r/veganrecipes voor receptideeën: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganrecipes/'),
                'Bij Challenge 22 krijg je een mentor en een groep mensen die tegelijk met jou vegan proberen: ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'Stuur mij ook gerust een berichtje als je iets nodig hebt!',
                'Ik help je ook graag!',
                'Hopelijk heb je hier wat aan!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-utensils',
        'title' => 'Uit eten',
        'body' => [
            [
                'Uit eten wordt snel makkelijker!',
                'Het is veel makkelijker dan vroeger!',
                'Goed nieuws: het wordt steeds makkelijker!',
            ],
            [
                'Op HappyCow zie je vegan en veganvriendelijke plekken bij jou in de buurt: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'De meeste zaken hebben nu wel iets vegan, en op veel menukaarten staat het aangegeven. Zoek je iets in de buurt? Probeer HappyCow: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Check de menukaart eerst online, en vraag gerust of ze iets kunnen aanpassen. Met HappyCow vind je goede plekken: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Geniet ervan! 🐮',
                'Hulp nodig? Stuur me een berichtje!',
                'Eet smakelijk!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-tree',
        'title' => 'Milieu',
        'body' => [
            [
                'Het is een van de grootste dingen die je voor de planeet kunt doen!',
                'Goede vraag!',
                'Het maakt een enorm verschil!',
            ],
            [
                'Als iedereen plantaardig zou eten, hadden we volgens Our World in Data zo\'n 75% minder landbouwgrond nodig: ' . generate_and_cache_shlink('https://ourworldindata.org/land-use-diets'),
                'Volgens een studie van Oxford heeft een vegan eetpatroon ongeveer 30% van de milieu-impact van een eetpatroon met veel vlees: ' . generate_and_cache_shlink('https://www.medsci.ox.ac.uk/news/vegan-diet-has-just-30-of-the-environmental-impact-of-a-high-meat-diet-major-study-finds'),
                'Vlees en zuivel hebben qua uitstoot, land- en watergebruik een veel grotere voetafdruk dan plantaardig eten. Hier de cijfers: ' . generate_and_cache_shlink('https://ourworldindata.org/environmental-impacts-of-food'),
            ],
            [
                'Wil je meer weten? Stuur me een berichtje! 🌍',
                'Ik vertel je graag meer!',
                'Hopelijk heb je hier wat aan!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-flask',
        'title' => 'Experts zijn het eens',
        'body' => [
            [
                'De grote gezondheidsorganisaties zijn het hierover eens!',
                'Goed nieuws: de experts staan aan jouw kant!',
                'Daar is weinig twijfel over!',
            ],
            [
                'De Britse diëtistenvereniging (BDA) zegt dat een goed samengesteld plantaardig eetpatroon bijdraagt aan een gezond leven op elke leeftijd: ' . generate_and_cache_shlink('https://www.bda.uk.com/resource/vegetarian-vegan-plant-based-diet.html'),
                'Diëtistenverenigingen in de VS, het VK, Canada en Australië zeggen dat een goed samengesteld vegan eetpatroon gezond is op elke leeftijd. Overzicht: ' . generate_and_cache_shlink('https://en.wikipedia.org/wiki/Vegan_nutrition#Positions_of_dietetic_and_government_associations'),
                'De Britse NHS zegt dat je met goede planning alle voedingsstoffen die je nodig hebt uit vegan eten kunt halen: ' . generate_and_cache_shlink('https://www.nhs.uk/live-well/eat-well/how-to-eat-a-balanced-diet/the-vegan-diet/'),
            ],
            [
                'Vragen? Stuur me een berichtje!',
                'Ik help je graag!',
                'Hopelijk heb je hier wat aan!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-heartbeat',
        'title' => 'Gezondheid',
        'body' => [
            [
                'Goede vraag!',
                'Het kan heel gezond zijn!',
                'Goed nieuws op dat vlak!',
            ],
            [
                'Een goed samengesteld vegan eetpatroon wordt gelinkt aan een lager risico op hartziekten, diabetes type 2 en sommige soorten kanker. De Britse NHS legt het goed uit: ' . generate_and_cache_shlink('https://www.nhs.uk/live-well/eat-well/how-to-eat-a-balanced-diet/the-vegan-diet/'),
                'De WHO deelt bewerkt vlees in als kankerverwekkend en rood vlees als waarschijnlijk kankerverwekkend: ' . generate_and_cache_shlink('https://www.who.int/news-room/questions-and-answers/item/cancer-carcinogenicity-of-the-consumption-of-red-meat-and-processed-meat'),
                'De Britse diëtistenvereniging (BDA) zegt dat een goed samengesteld plantaardig eetpatroon bijdraagt aan een gezond leven op elke leeftijd: ' . generate_and_cache_shlink('https://www.bda.uk.com/resource/vegetarian-vegan-plant-based-diet.html'),
            ],
            [
                'Vragen? Stuur me een berichtje!',
                'Ik denk graag mee over je maaltijden!',
                'Hopelijk heb je hier wat aan!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Geen zin om te koken',
        'body' => [
            [
                'Koken hoeft niet!',
                'Helemaal prima!',
                'Goed nieuws: je hoeft niet te koken!',
            ],
            [
                'Supermarkten liggen nu vol met vegan kant-en-klaarmaaltijden, broodjes, diepvriespizza\'s en snacks. Pak gewoon de vegan versie van wat je normaal koopt.',
                'Heel wat veganisten koken amper! Kant-en-klaarmaaltijden, wraps, brood met pindakaas, muesli met havermelk... het telt allemaal.',
                'Uit eten is ook makkelijk. Op HappyCow zie je veganvriendelijke plekken bij jou in de buurt: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Stuur me een berichtje als je makkelijke ideeën wilt!',
                'Ik deel graag mijn luie favorieten!',
                'Hopelijk heb je hier wat aan!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-meh-blank',
        'title' => 'Eten is saai',
        'body' => [
            [
                'Dat hoeft echt niet!',
                'Vegan eten kan geweldig zijn!',
                'Geloof me, het is allesbehalve saai!',
            ],
            [
                'Bijna elk gerecht kun je vegan maken: curry\'s, burgers, pasta, taart. Hier vind je heel veel recepten: ' . generate_and_cache_shlink('https://veganuary.com/recipes'),
                'Zoek eens op je favoriete gerecht plus \'vegan\', er is van bijna alles een versie. Voor uit eten: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'r/veganrecipes staat vol ideeën: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganrecipes/') . ' En met HappyCow vind je toffe plekken om te eten: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Stuur me een berichtje als je tips wilt!',
                'Geniet ervan! 😋',
                'Veel kookplezier!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-fist-raised',
        'title' => '30+ argumenten',
        'body' => [
            [
                'Dat hoor je echt vaak!',
                'Goede vraag, die komt vaak voorbij!',
                'Die hoor ik heel vaak!',
            ],
            [
                'Deze gratis gids beantwoordt de 30 meest gehoorde argumenten tegen vegan worden: ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf'),
                'Earthling Ed beantwoordt 30 veelgehoorde smoesjes in korte video\'s: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'Deze gids behandelt de 30 meest voorkomende mythes: ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf') . ' Of als je liever video\'s kijkt: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
            ],
            [
                'Stuur me een berichtje als je erover wilt praten!',
                'Ik beantwoord graag je vragen!',
                'Hopelijk heb je hier wat aan!',
            ],
        ],
    ],
];
