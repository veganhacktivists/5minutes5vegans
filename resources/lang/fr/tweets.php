<?php

require_once(app_path('generate_and_cache_shlink.php'));

return [
    [
        'icon' => 'fas fa-circle-info',
        'title' => 'Infos générales',
        'body' => [
            [
                'Tu devrais te lancer !',
                'Ça fait plaisir !',
                'Fonce, sans regret !',
            ],
            [
                'La plupart des vegans disent n\'avoir qu\'un regret : ne pas s\'y être mis plus tôt. Pose tes questions sur r/vegan : ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/') . ' et ces courtes vidéos répondent aux idées reçues : ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'Pour commencer, il y a le défi gratuit de 31 jours de Veganuary, que tu peux lancer n\'importe quel jour. Tu reçois des menus et un e-mail par jour : ' . generate_and_cache_shlink('https://veganuary.com/fr/'),
                'Challenge 22 est gratuit et t\'offre un mentor et des diététiciens pendant 22 jours : ' . generate_and_cache_shlink('https://challenge22.com/') . ' Pour comprendre l\'enjeu, regarde le début de Dominion : ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
            ],
            [
                'Je peux t\'aider si besoin.',
                'Une question ? Écris-moi !',
                'Fais signe si tu bloques !',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-calendar-check',
        'title' => 'Défi vegan',
        'body' => [
            [
                'Hey !',
                'Salut !',
                'Lance-toi !',
            ],
            [
                'Veganuary propose un défi gratuit de 31 jours, à commencer quand tu veux, avec des menus et un e-mail par jour : ' . generate_and_cache_shlink('https://veganuary.com/fr/'),
                'Challenge 22, c\'est un défi gratuit de 22 jours, avec ton propre mentor et des diététiciens à dispo : ' . generate_and_cache_shlink('https://challenge22.com/'),
                'Vegan Bootcamp est gratuit et à ton rythme, avec des mini-cours sur l\'alimentation, la nutrition et plus encore : ' . generate_and_cache_shlink('https://veganbootcamp.org'),
            ],
            [
                'Tu vas gérer !',
                'Bonne chance !',
                'C\'est plus simple que ça en a l\'air.',
                'Écris-moi si tu as besoin d\'aide.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-bacon',
        'title' => 'J\'adore la viande',
        'body' => [
            [
                'La viande vegan a fait d\'énormes progrès !',
                'Pas besoin de t\'en passer !',
                'Je comprends, mais les alternatives sont top maintenant.',
            ],
            [
                'La plupart des supermarchés vendent maintenant des burgers, saucisses, haché et nuggets végétaux. Beyond Meat, c\'est un bon point de départ : ' . generate_and_cache_shlink('https://www.beyondmeat.com/'),
                'Tu peux remplacer presque tout maintenant : burgers, saucisses, bacon, haché. Teste plusieurs marques, y compris celle de ton supermarché, et vois ce qui te plaît.',
                'Plein de restos et de chaînes ont aussi des options végétales maintenant. HappyCow te montre les adresses vegan-friendly près de chez toi : ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Écris-moi si tu veux des recos.',
                'Je peux t\'envoyer mes préférés si tu veux.',
                'Bonnes découvertes !',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-cheese',
        'title' => 'J\'adore le fromage',
        'body' => [
            [
                'Le fromage vegan a fait d\'énormes progrès !',
                'Le fromage vegan est bien meilleur qu\'avant !',
                'Le fromage vegan d\'aujourd\'hui va te surprendre !',
            ],
            [
                'Violife est super polyvalent et fond bien : ' . generate_and_cache_shlink('https://violifefoods.com/') . ' Follow Your Heart et Daiya sont bien aussi.',
                'Voici un guide des fromages vegan, des tranches au brie : ' . generate_and_cache_shlink('https://www.peta.org/lifestyle/food/everything-you-need-to-know-about-vegan-cheese/'),
                'Les marques varient beaucoup, alors teste-en plusieurs. Violife est un bon point de départ, et il fond sur les pizzas et les croque-monsieur : ' . generate_and_cache_shlink('https://violifefoods.com/'),
            ],
            [
                'Écris-moi si tu veux d\'autres idées.',
                'Je peux t\'en conseiller quelques-uns.',
                'Régale-toi ! 🧀',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-pizza-slice',
        'title' => 'J\'adore la pizza',
        'body' => [
            [
                'Pour la pizza, c\'est facile !',
                'Pas besoin de renoncer à la pizza !',
                'La pizza vegan, on en trouve facilement maintenant !',
            ],
            [
                'Plein de chaînes font des pizzas au fromage vegan ou sans fromage. HappyCow liste les adresses vegan-friendly près de chez toi : ' . generate_and_cache_shlink('https://www.happycow.net'),
                'La plupart des supermarchés vendent des pizzas vegan maintenant, et voici une liste de chaînes avec des options vegan : ' . generate_and_cache_shlink('https://www.peta.org/lifestyle/food/pizza-places-vegan-options/'),
                'Daiya fait des pizzas vegan surgelées : ' . generate_and_cache_shlink('https://daiyafoods.com/collections/pizza-and-flatbread') . ' Et plein de pizzerias te mettent du fromage vegan si tu demandes.',
            ],
            [
                'Régale-toi ! 🍕',
                'Écris-moi si tu veux de l\'aide pour en trouver une.',
                'Bon appétit !',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-egg',
        'title' => 'J\'adore les œufs',
        'body' => [
            [
                'Les œufs, c\'est plus facile à remplacer que tu ne crois !',
                'Il y a de bonnes alternatives aux œufs.',
                'Tu as plein d\'options !',
            ],
            [
                'Le tofu brouillé remplace super bien les œufs brouillés, surtout avec des épinards : ' . generate_and_cache_shlink('https://simpleveganblog.com/simple-tofu-scramble/'),
                'JUST Egg est à base de haricots mungo et se brouille exactement comme des œufs : ' . generate_and_cache_shlink('https://www.ju.st/eat/eggs'),
                'Voici un guide utile si tu as du mal à arrêter les œufs : ' . generate_and_cache_shlink('https://chooseveg.com/blog/go-vegan-cant-give-up-eggs-help/') . ' Et voilà comment sont traitées les poules pondeuses : ' . generate_and_cache_shlink('https://viva.org.uk/animals/egg-laying-hens/'),
            ],
            [
                'Écris-moi si tu veux des recettes.',
                'J\'ai d\'autres idées si tu veux.',
                'Amuse-toi à tester des recettes !',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-ice-cream',
        'title' => 'J\'adore les glaces',
        'body' => [
            [
                'Les glaces vegan sont trop bonnes maintenant !',
                'Tu as de la chance, il y a des glaces vegan partout !',
                'Pas besoin de t\'en priver !',
            ],
            [
                'Ben & Jerry\'s a toute une gamme sans lait : ' . generate_and_cache_shlink('https://www.benjerry.com/flavors/non-dairy'),
                'Voici un guide des meilleures glaces vegan, du commerce ou maison : ' . generate_and_cache_shlink('https://vegan.com/food/ice-cream/'),
                'La plupart des supermarchés ont des glaces à l\'avoine, au soja, à l\'amande et à la coco, et Ben & Jerry\'s a aussi une gamme sans lait : ' . generate_and_cache_shlink('https://www.benjerry.com/flavors/non-dairy'),
            ],
            [
                'Régale-toi ! 🍦',
                'Dis-moi laquelle tu préfères !',
                'Écris-moi si tu veux d\'autres idées.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-drumstick-bite',
        'title' => 'J\'adore le poulet',
        'body' => [
            [
                'Le poulet vegan est vraiment bon maintenant !',
                'Tu peux toujours manger du poulet, version végétale !',
                'Il y a plein d\'alternatives !',
            ],
            [
                'Jette un œil aux rayons surgelés et frais de ton supermarché : nuggets, aiguillettes et filets végétaux. Il y a plein de marques à tester.',
                'Plein d\'endroits font maintenant des burgers et des wraps au poulet vegan. HappyCow te montre ce qu\'il y a près de chez toi : ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Le seitan et le poulet à base de soja sont top en wrap ou au wok. Voici des recettes faciles : ' . generate_and_cache_shlink('https://veganuary.com/recipes'),
            ],
            [
                'Écris-moi si tu veux des idées de marques.',
                'Teste-en quelques-unes !',
                'Régale-toi !',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-glass-water',
        'title' => 'Laits végétaux',
        'body' => [
            [
                'Les laits végétaux, c\'est un changement facile !',
                'Il y a tellement de laits végétaux maintenant !',
                'C\'est un super point de départ !',
            ],
            [
                'Avoine, soja, amande, coco, cajou, riz... L\'avoine et le soja sont top dans le thé et le café. Teste-en plusieurs et vois lequel tu préfères.',
                'Si tu veux savoir pourquoi les gens passent au végétal, cette courte vidéo vaut le coup d\'œil : ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI'),
                'Choisis-les enrichis en calcium. Le lait de soja contient à peu près autant de protéines que le lait de vache.',
            ],
            [
                'Écris-moi si tu as des questions.',
                'Bonnes découvertes !',
                'Dis-moi comment ça se passe !',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-film',
        'title' => 'Documentaires',
        'body' => [
            [
                'Voici quelques docus qui valent le coup :',
                'Quelques films qui pourraient t\'aider :',
                'Deux super films à voir :',
            ],
            [
                'Dominion, sur le traitement des animaux d\'élevage (gratuit) : ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' The Game Changers, sur des athlètes qui mangent végétal : ' . generate_and_cache_shlink('https://gamechangersmovie.com/'),
                'Dominion est gratuit et difficile à oublier : ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' Les courtes vidéos d\'Earthling Ed répondent bien aux questions habituelles : ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'The Game Changers, sur des athlètes de haut niveau qui mangent végétal : ' . generate_and_cache_shlink('https://gamechangersmovie.com/') . ' Et Dominion, gratuit, sur la vie dans les élevages : ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
            ],
            [
                'Dis-moi ce que tu en penses ! 🌱',
                'Dis-moi si tu en regardes un !',
                'Si tu veux, on en parle après.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-eye',
        'title' => 'Dominion',
        'body' => [
            [
                'Je te recommande vraiment Dominion.',
                'Tu as vu Dominion ?',
                'Si tu ne dois regarder qu\'une chose, regarde Dominion.',
            ],
            [
                'C\'est un docu gratuit sur la façon dont les animaux d\'élevage sont vraiment traités : ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' Même les 15 premières minutes valent le coup.',
                'Il montre ce qui se passe dans les élevages et les abattoirs, et il est gratuit : ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
                'C\'est gratuit et ça a fait changer d\'avis beaucoup de gens : ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' C\'est dur à regarder, mais ça vaut le coup.',
            ],
            [
                'Écris-moi si tu veux en parler.',
                'N\'hésite pas si tu as des questions.',
                'Si tu décides de devenir vegan, je peux t\'aider.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-shoe-prints',
        'title' => 'Petit à petit',
        'body' => [
            [
                'C\'est génial que tu y penses ! 🐮',
                'Trop bien !',
                'Super que tu tentes le coup !',
            ],
            [
                'Si ça te paraît beaucoup, vas-y étape par étape. Commence par le lait végétal, puis le beurre, puis la viande. Vegan Bootcamp peut te guider : ' . generate_and_cache_shlink('https://veganbootcamp.org'),
                'Essaie un repas vegan par jour, puis augmente petit à petit. Veganuary a des recettes faciles pour commencer : ' . generate_and_cache_shlink('https://veganuary.com/recipes'),
                'Commence par ce qui te semble le plus simple à remplacer, comme le lait ou les burgers, et avance à partir de là. Challenge 22 te donne un mentor pour t\'aider : ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'Tu vas gérer !',
                'Écris-moi si tu as besoin d\'aide.',
                'Pas besoin de tout changer d\'un coup.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-carrot',
        'title' => 'Végétarien',
        'body' => [
            [
                'Le végétarisme, c\'est déjà un super pas !',
                'Bravo, c\'est déjà beaucoup !',
                'Beau début !',
            ],
            [
                'Cette vidéo explique pourquoi passer complètement vegan change tant de choses : ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=uWna6-niYEg'),
                'Malheureusement, les produits laitiers et les œufs causent aussi beaucoup de souffrance. Cette courte vidéo t\'explique pourquoi : ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI'),
                'Si tu as envie de passer à l\'étape suivante, Challenge 22 est gratuit et te donne un mentor : ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'Écris-moi si tu as des questions.',
                'Si tu veux essayer, je peux t\'aider.',
                'Tu y es presque !',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-piggy-bank',
        'title' => 'Trop cher',
        'body' => [
            [
                'Ça peut même revenir moins cher !',
                'Manger vegan peut coûter vraiment peu !',
                'Pas forcément !',
            ],
            [
                'Haricots, lentilles, riz, pâtes, flocons d\'avoine, pommes de terre et légumes surgelés font partie des aliments les moins chers. Ce sont les produits spécialisés qui coûtent plus.',
                'Selon une étude d\'Oxford, manger vegan pourrait réduire la facture de courses jusqu\'à un tiers dans des pays comme le Royaume-Uni et les États-Unis : ' . generate_and_cache_shlink('https://www.ox.ac.uk/news/2021-11-11-sustainable-eating-cheaper-and-healthier-oxford-study'),
                'Cette vidéo explique bien tout ça : ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=Vs_nXVmyP1E') . ' Cuisiner avec des haricots, des lentilles et du tofu, ça reste pas cher.',
            ],
            [
                'Écris-moi si tu veux des recettes pas chères.',
                'Je peux t\'envoyer des idées de repas pas chers.',
                'Dis-moi comment ça se passe !',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-bowl-food',
        'title' => 'Protéines',
        'body' => [
            [
                'Les protéines, c\'est plus simple qu\'on ne le croit !',
                'Tu ne manqueras pas de protéines !',
                'Celle-là revient souvent !',
            ],
            [
                'Haricots, lentilles, tofu, tempeh, seitan, lait de soja, noix et graines sont tous riches en protéines. Voici un petit guide : ' . generate_and_cache_shlink('https://viva.org.uk/materials/protein-myth-fact-sheet/'),
                'Une alimentation vegan variée t\'en apporte largement assez. Voici une fiche sur le mythe des protéines : ' . generate_and_cache_shlink('https://viva.org.uk/materials/protein-myth-fact-sheet/'),
                'Cette vidéo d\'une minute résume tout : ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=1elt5YCRLbk') . ' Tofu, lentilles, haricots et seitan sont d\'excellentes sources.',
            ],
            [
                'Écris-moi si tu as des questions.',
                'Je peux t\'envoyer des idées de repas.',
                'Bon courage !',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-dumbbell',
        'title' => 'Sport et fitness',
        'body' => [
            [
                'Tu peux tout à fait t\'entraîner en étant vegan !',
                'Beaucoup d\'athlètes sont vegan !',
                'On se muscle aussi avec des plantes !',
            ],
            [
                'Plein d\'athlètes de haut niveau mangent végétal, des strongmen aux champions de F1. The Game Changers en parle : ' . generate_and_cache_shlink('https://gamechangersmovie.com/'),
                'r/veganfitness est plein de gens qui s\'entraînent dur en mangeant végétal, avec des menus et des conseils : ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/'),
                'Tofu, seitan, lentilles, haricots et lait de soja : facile d\'atteindre ton quota de protéines. Plein de conseils d\'entraînement ici : ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/'),
            ],
            [
                'Écris-moi si tu as des questions.',
                'Bon entraînement ! 💪',
                'Dis-moi comment ça se passe !',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-people-group',
        'title' => 'Communauté',
        'body' => [
            [
                'Plein de gens sont passés par là !',
                'Ça aide vraiment d\'avoir des gens à qui parler !',
                'Il y a toute une communauté pour toi !',
            ],
            [
                'r/vegan, c\'est un énorme groupe sympa où tu peux poser toutes tes questions : ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/'),
                'Va voir r/vegan pour du soutien et tes questions : ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/') . ' Et r/veganrecipes pour des idées de repas : ' . generate_and_cache_shlink('https://www.reddit.com/r/veganrecipes/'),
                'Challenge 22 te met en contact avec un mentor et un groupe qui se lance en même temps que toi : ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'Écris-moi aussi si tu as besoin de quoi que ce soit.',
                'Je suis là aussi si tu veux en parler.',
                'Bon courage !',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-utensils',
        'title' => 'Manger dehors',
        'body' => [
            [
                'Au resto, ça devient vite plus simple !',
                'C\'est bien plus simple qu\'avant !',
                'C\'est plus simple que tu ne crois !',
            ],
            [
                'HappyCow te montre les adresses vegan et vegan-friendly près de chez toi : ' . generate_and_cache_shlink('https://www.happycow.net'),
                'La plupart des restos ont quelque chose de vegan maintenant, et plein de cartes l\'indiquent. Pour des idées près de chez toi, essaie HappyCow : ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Regarde les cartes en ligne avant, et n\'hésite pas à demander d\'adapter un plat. HappyCow t\'aide à trouver de bonnes adresses : ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Régale-toi ! 🌱',
                'Écris-moi si tu as besoin d\'aide.',
                'Bon appétit !',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Environnement',
        'body' => [
            [
                'C\'est l\'un des meilleurs gestes pour la planète !',
                'Les chiffres sont clairs !',
                'Ça fait une énorme différence !',
            ],
            [
                'Si tout le monde mangeait végétal, il faudrait environ 75 % de terres agricoles en moins, selon Our World in Data : ' . generate_and_cache_shlink('https://ourworldindata.org/land-use-diets'),
                'Selon une étude d\'Oxford, une alimentation vegan a environ 30 % de l\'impact environnemental d\'une alimentation riche en viande : ' . generate_and_cache_shlink('https://www.medsci.ox.ac.uk/news/vegan-diet-has-just-30-of-the-environmental-impact-of-a-high-meat-diet-major-study-finds'),
                'La viande et les laitages pèsent bien plus lourd que les aliments végétaux en émissions, en terres et en eau. Voici les données : ' . generate_and_cache_shlink('https://ourworldindata.org/environmental-impacts-of-food'),
            ],
            [
                'Écris-moi si tu veux en savoir plus 🌍',
                'Je peux t\'envoyer plus d\'infos si tu veux.',
                'Jette un œil !',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-user-doctor',
        'title' => 'Avis d\'experts',
        'body' => [
            [
                'Les grands organismes de santé sont d\'accord !',
                'Les experts sont de ton côté !',
                'Les diététiciens sont plutôt clairs là-dessus !',
            ],
            [
                'L\'association britannique des diététiciens dit qu\'une alimentation végétale bien planifiée permet de vivre en bonne santé à tout âge : ' . generate_and_cache_shlink('https://www.bda.uk.com/resource/vegetarian-vegan-plant-based-diet.html'),
                'Les associations de diététique des États-Unis, du Royaume-Uni, du Canada et d\'Australie disent qu\'une alimentation vegan bien planifiée est saine à tout âge. Résumé : ' . generate_and_cache_shlink('https://en.wikipedia.org/wiki/Vegan_nutrition#Positions_of_dietetic_and_government_associations'),
                'Le NHS britannique dit qu\'en t\'organisant bien, tu peux avoir tous les nutriments dont tu as besoin en mangeant vegan : ' . generate_and_cache_shlink('https://www.nhs.uk/live-well/eat-well/how-to-eat-a-balanced-diet/the-vegan-diet/'),
            ],
            [
                'Des questions ? Écris-moi !',
                'Bonne lecture !',
                'Dis-moi si tu veux d\'autres sources.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-heart-pulse',
        'title' => 'Santé',
        'body' => [
            [
                'La santé, c\'est une bonne raison !',
                'Ça peut être vraiment sain !',
                'C\'est bien documenté !',
            ],
            [
                'Une alimentation vegan bien planifiée est liée à moins de risques de maladies cardiaques, de diabète de type 2 et de certains cancers. Le NHS britannique a un bon guide : ' . generate_and_cache_shlink('https://www.nhs.uk/live-well/eat-well/how-to-eat-a-balanced-diet/the-vegan-diet/'),
                'L\'OMS classe la viande transformée comme cause de cancer, et la viande rouge comme cause probable : ' . generate_and_cache_shlink('https://www.who.int/news-room/questions-and-answers/item/cancer-carcinogenicity-of-the-consumption-of-red-meat-and-processed-meat'),
                'L\'association britannique des diététiciens dit qu\'une alimentation végétale bien planifiée permet de vivre en bonne santé à tout âge : ' . generate_and_cache_shlink('https://www.bda.uk.com/resource/vegetarian-vegan-plant-based-diet.html'),
            ],
            [
                'Écris-moi si tu as des questions.',
                'Je peux t\'aider à planifier tes repas.',
                'Bonne lecture !',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-couch',
        'title' => 'Pas envie de cuisiner',
        'body' => [
            [
                'Pas besoin de cuisiner !',
                'Aucun souci !',
                'Tu peux manger vegan sans cuisiner !',
            ],
            [
                'Les supermarchés regorgent de plats préparés, sandwichs, pizzas surgelées et snacks vegan. Prends juste la version vegan de ce que tu achètes d\'habitude.',
                'Plein de vegans cuisinent à peine ! Plats préparés, wraps, tartines, céréales au lait d\'avoine... tout ça compte.',
                'Manger dehors, c\'est facile aussi. HappyCow te montre les adresses vegan-friendly près de chez toi : ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Écris-moi si tu veux des idées faciles.',
                'Demande-moi mes classiques zéro effort !',
                'Bon appétit !',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-pepper-hot',
        'title' => 'C\'est fade',
        'body' => [
            [
                'Ça ne l\'est pas forcément !',
                'La cuisine vegan peut être vraiment bonne !',
                'Il y a bien plus que la salade !',
            ],
            [
                'Presque tous les plats peuvent se faire en version vegan : currys, burgers, pâtes, gâteaux. Voici plein de recettes : ' . generate_and_cache_shlink('https://veganuary.com/recipes'),
                'Cherche ton plat préféré en version vegan, ça existe pour presque tout. Pour manger dehors : ' . generate_and_cache_shlink('https://www.happycow.net'),
                'r/veganrecipes regorge d\'idées : ' . generate_and_cache_shlink('https://www.reddit.com/r/veganrecipes/') . ' Et HappyCow te trouve de super restos : ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Écris-moi si tu veux des recos.',
                'Régale-toi ! 😋',
                'À tes fourneaux !',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-comments',
        'title' => '30+ arguments',
        'body' => [
            [
                'C\'est un argument super courant !',
                'Question légitime !',
                'Je l\'entends souvent, celle-là !',
            ],
            [
                'Ce guide gratuit répond aux 30 arguments les plus courants contre le véganisme : ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf'),
                'Earthling Ed répond à 30 excuses courantes en courtes vidéos : ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'Ce guide passe en revue les 30 idées reçues les plus courantes : ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf') . ' Ou en vidéo, si tu préfères : ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
            ],
            [
                'Écris-moi si tu veux en discuter.',
                'N\'hésite pas si tu as des questions.',
                'Jette un œil !',
            ],
        ],
    ],
];
