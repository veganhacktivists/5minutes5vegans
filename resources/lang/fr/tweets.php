<?php

require_once(app_path('generate_and_cache_shlink.php'));

return [
    [
        'icon' => 'fas fa-info-circle',
        'title' => 'Infos générales',
        'body' =>[
            [
                'Tu devrais te lancer ! La plupart des vegans disent que leur seul regret, c\'est de ne pas l\'avoir fait plus tôt\.'
            ], [
                'Voici quelques ressources : ' . generate_and_cache_shlink('http://reddit.com/r/Vegan') . ' \(communauté\) ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=41') . ' \(film\) ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2') . ' \(idées reçues\) 🐷 Écris\-moi si tu as besoin d\'aide !'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Défi vegan',
        'body' =>[
            [
                'Hey !',
                'Salut !'
            ], [
                'Tu peux (tout à fait |carrément )?y arriver !',
                'On est (toujours )?là pour t\'aider !',
                'C\'est (vraiment |bien )?plus facile que tu ne le penses !'
            ], [
                'Tu (devrais|pourrais) (jeter un œil au|essayer le) Vegan Bootcamp Challenge !',
                'Le Vegan Bootcamp Challenge (pourrait|peut) être (exactement )?ce que tu cherches\.',
                'Il existe une ressource qui s\'appelle le Vegan Bootcamp Challenge( que tu pourrais essayer)?\.'
            ], [
                'C\'est un défi vegan de 30 jours maximum qui t\'aide à t\'y mettre comme un pro !',
                'Le site propose un défi vegan de 30 jours maximum pour apprendre à devenir vegan facilement !',
                'Tu relèves 30 défis sur le site et il t\'aide à devenir vegan petit à petit, c\'est facile !'
            ], [
                'Le lien : ' . generate_and_cache_shlink('https://veganbootcamp.org') . ' ;',
                'L\'adresse : ' . generate_and_cache_shlink('https://veganbootcamp.org') . ' ;',
                'Le site est ici : ' . generate_and_cache_shlink('https://veganbootcamp.org') . ' ;',
                'Le site web : ' . generate_and_cache_shlink('https://veganbootcamp.org') . ' ;',
            ], [
                'Bonne chance, tu vas y arriver !',
                'Tu peux (totalement |vraiment |carrément )?y arriver !',
                'On est (tous )?avec toi !',
                'Tiens bon !',
                'Tu gères !'
            ], [
                'Écris\-moi si tu as besoin (d\'aide|d\'un coup de main) !',
                'Réponds\-moi si tu as besoin (d\'aide|d\'un coup de main) !',
                '(N\'hésite pas à|Tu peux) me contacter si tu as besoin (d\'aide|d\'un coup de main) !',
                'Si tu as (un jour )?besoin (d\'aide|d\'un coup de main), envoie\-moi un (message|DM) !'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-bacon',
        'title' => 'J\'adore la viande',
        'body' =>[
            [
                'La viande vegan a fait BEAUCOUP de progrès ces dernières années !'
            ], [
                'Beyond Meat est vraiment bon : ' . generate_and_cache_shlink('https://www.beyondmeat.com/') . ', et Gardein a aussi plein de produits : ' . generate_and_cache_shlink('https://www.gardein.com/') . ' Fais un tour dans ton supermarché pour voir ce qu\'il y a, ça pourrait te surprendre !'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-cheese',
        'title' => 'J\'adore le fromage',
        'body' =>[
            [
                'Le fromage vegan a fait BEAUCOUP de progrès ces dernières années !'
            ], [
                'Mon préféré, c\'est celui de "Follow Your Heart", et Daiya est top pour le fromage fondu\.'
            ], [
                'Ce lien ' . generate_and_cache_shlink('https://www.peta.org/living/food/everything-you-need-to-know-about-vegan-cheese/') . ' t\'aidera à trouver encore plus de marques près de chez toi ! Écris\-moi si tu as besoin d\'aide pour en trouver d\'autres\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-pizza-slice',
        'title' => 'J\'adore la pizza',
        'body' =>[
            [
                'Il y a souvent plein de pizzas vegan \(et d\'autres restaurants\) sur ' . generate_and_cache_shlink('http://HappyCow.net') . ' !'
            ], [
                'Il y a aussi les pizzas "Daiya" : ' . generate_and_cache_shlink('https://daiyafoods.com/collections/pizza-and-flatbread') . ' et encore plus d\'adresses ici : ' . generate_and_cache_shlink('https://www.peta.org/living/food/pizza-places-vegan-options/') . ' Écris\-moi si tu as besoin d\'aide pour en trouver d\'autres\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-egg',
        'title' => 'J\'adore les œufs',
        'body' =>[
            [
                'Il existe plein de super recettes d\'œufs vegan \(comme celle\-ci, mais ajoute des épinards\) : ' . generate_and_cache_shlink('https://simpleveganblog.com/simple-tofu-scramble/')
            ], [
                'Tu peux aussi acheter des œufs vegan : ' . generate_and_cache_shlink('https://www.ju.st/eat/eggs') . ' Plus d\'infos ici : ' . generate_and_cache_shlink('https://chooseveg.com/blog/go-vegan-cant-give-up-eggs-help/') . ' et surtout ici : ' . generate_and_cache_shlink('https://youaretheirvoice.com/resources/viva-eggs.pdf')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-ice-cream',
        'title' => 'J\'adore les glaces',
        'body' =>[
            [
                'Jette un œil aux glaces sans lait de Ben & Jerry\'s : ' . generate_and_cache_shlink('https://www.benjerry.com/flavors/non-dairy')
            ], [
                'Il y a plein de parfums différents, et beaucoup d\'autres marques de glaces au soja, à l\'amande ou à la noix de coco !'
            ], [
                '(Voir :|Jette un œil à) ' . generate_and_cache_shlink('https://www.vegan.com/ice-cream/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-drumstick-bite',
        'title' => 'J\'adore le poulet',
        'body' =>[
            [
                'Gardein fait un poulet végétal incroyable : ' . generate_and_cache_shlink('https://www.gardein.com/') . ', regarde dans les magasins bio ou ailleurs !'
            ], [
                'HappyCow pour manger dehors : ' . generate_and_cache_shlink('https://www.happycow.net') . ' ! Fais un tour dans ton supermarché pour voir ce qu\'il y a, ça pourrait te surprendre !'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-glass-whiskey',
        'title' => 'Laits végétaux',
        'body' =>[
            [
                'Regarde "Dairy is Scary", ça ne dure que 5 minutes : ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI')
            ], [
                'Il existe aussi plein de laits végétaux délicieux : soja, amande, avoine, coco, riz et cajou !'
            ], [
                'Ces laits ne tournent pas, ils sont meilleurs pour la santé et pas besoin de les mettre au frigo avant ouverture\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-video',
        'title' => 'Documentaires',
        'body' =>[
            [
                'Voici quelques films pour te motiver ! Cowspiracy \(environnement\) : ' . generate_and_cache_shlink('https://www.netflix.com/title/80033772') . ' The Game Changers \(santé\) : ' . generate_and_cache_shlink('https://www.netflix.com/title/81157840') . ' Dominion \(animaux\) : ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43')
            ], [
                'Dis\-moi si tu en regardes un ! 🌱'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-sad-cry',
        'title' => 'Le film Dominion',
        'body' =>[
            [
                'Je te recommande vivement cette vidéo YouTube : ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43')
            ], [
                'Si tu as le temps, les 15 premières minutes peuvent vraiment changer ta façon de voir les choses\.'
            ], [
                'Écris\-moi si tu as besoin d\'aide pour devenir vegan, ça me fera plaisir de t\'aider ou de répondre à tes questions !'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-baby',
        'title' => 'Petit à petit',
        'body' =>[
            [
                'C\'est génial que devenir vegan t\'intéresse ! 🐮'
            ], [
                'Si ça te paraît trop d\'un coup et que tu ne sais pas par où commencer, vas\-y petit à petit\.'
            ], [
                'Commence juste par acheter du lait de soja, d\'amande ou d\'avoine et habitue\-toi\.'
            ], [
                'Ensuite le beurre, la viande, etc\. Plus d\'infos : ' . generate_and_cache_shlink('http://earthlinged.com/ebook')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Végétarien',
        'body' =>[
            [
                'Le végétarisme, c\'est génial !'
            ], [
                'Mais je te recommande vraiment cette vidéo : ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=uWna6-niYEg')
            ], [
                'Voici quelques arguments courants démontés : ' . generate_and_cache_shlink('https://drive.google.com/file/d/1dMyS7mIrr4Fal8UKF900BbLMC11IwWRH/view') . ' et voici le défi vegan d\'un mois : ' . generate_and_cache_shlink('https://www.challenge22.com/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-coins',
        'title' => 'Trop cher',
        'body' =>[
            [
                'Être vegan, c\'est en fait vraiment pas cher, sauf si tu achètes tous les produits sophistiqués vendus "pour vegans" !'
            ], [
                'Pommes de terre, riz, tofu, haricots, lentilles, légumes, fruits, pâtes, flocons d\'avoine : tout ça coûte très peu cher, surtout en vrac !'
            ], [
                'Il y a une super vidéo là\-dessus : ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=Vs_nXVmyP1E')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-calculator',
        'title' => 'Les protéines',
        'body' =>[
            [
                'Presque tous les aliments, légumes, fruits et graines contiennent des protéines, et on n\'en a pas besoin de tant que ça\.'
            ], [
                'Voici un lien qui démonte le mythe des protéines et de la viande : ' . generate_and_cache_shlink('https://viva.org.uk/materials/protein-myth-fact-sheet/') . ' et une vidéo : ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=1elt5YCRLbk')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-dumbbell',
        'title' => 'Sport et fitness',
        'body' =>[
            [
                'L\'homme le plus fort du monde est vegan, et plein d\'autres records de force et de fitness sont détenus par des vegans !'
            ], [
                'S\'entraîner avec une alimentation végétale, c\'est mieux pour tes performances\.'
            ], [
                'Vidéos : ' . generate_and_cache_shlink('https://www.youtube.com/results?search_query=vegan+fitness') . ' et communauté : ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-comments',
        'title' => 'Communauté',
        'body' =>[
            [
                'Si tu as besoin de parler à des gens, ou juste de soutien ou d\'aide, va voir ' . generate_and_cache_shlink('http://reddit.com/r/Vegan') . ' !'
            ], [
                'C\'est une communauté d\'environ 300 000 vegans qui savent ce que c\'est et ont de l\'expérience, pose\-leur toutes tes questions\.'
            ], [
                'Il y a aussi /r/VeganFitness, /r/VeganRecipes et d\'autres !'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-utensils',
        'title' => 'Manger dehors',
        'body' =>[
            [
                'Manger au restaurant, c\'est parfois compliqué quand tu ne sais pas où aller ni quoi prendre, mais ça devient beaucoup plus facile avec le temps et tu sauras vite quoi commander\.'
            ], [
                'En attendant, jette un œil à ce site : ' . generate_and_cache_shlink('http://happycow.net') . ' pour trouver de la nourriture vegan près de chez toi ! 🐮'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-tree',
        'title' => 'Environnement',
        'body' =>[
            [
                'Il y a des statistiques vraiment effrayantes sur ce que l\'industrie de la viande et des produits laitiers \(l\'élevage\) fait à l\'environnement, toutes appuyées par des sources et des études : ' . generate_and_cache_shlink('https://speciesjustice.org/environment') . ' Par exemple : l\'élevage est responsable de jusqu\'à 91 % de la destruction de l\'Amazonie\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-flask',
        'title' => 'Tout le monde est d\'accord',
        'body' =>[
            [
                'Aujourd\'hui, il est largement admis qu\'une alimentation vegan est plus saine qu\'une alimentation avec de la viande\.'
            ], [
                'Voici une page qui cite directement les plus grandes organisations mondiales de santé, de nutrition et de diététique \(donc des organisations neutres\) : ' . generate_and_cache_shlink('https://youaretheirvoice.com/pages/the-clear-consensus')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-heartbeat',
        'title' => 'Est-ce sain ?',
        'body' =>[
            [
                'Aujourd\'hui, il est largement admis que la viande et les produits laitiers sont extrêmement mauvais pour la santé comparés à une alimentation vegan\.'
            ], [
                'La viande est cancérigène et en cause dans la majorité des maladies : cancer, maladies cardiaques, diabète et obésité\.'
            ], [
                'Voici une page avec des infos et des sources : ' . generate_and_cache_shlink('https://youaretheirvoice.com/pages/the-clear-consensus')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Pas envie de cuisiner',
        'body' =>[
            [
                'Plein de vegans ne cuisinent pas non plus, ils achètent simplement les options vegan au magasin ou au restaurant au lieu des options animales\.'
            ], [
                'Pas besoin de savoir cuisiner pour manger sainement en étant vegan !'
            ], [
                'Manger dehors, c\'est aussi très facile avec ' . generate_and_cache_shlink('http://happycow.net') . ' 🐮 Écris\-moi si tu as besoin d\'aide !'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-meh-blank',
        'title' => 'La cuisine vegan, c\'est fade',
        'body' =>[
            [
                'Presque tout ce qui est fait avec de la viande ou des produits laitiers peut être reproduit et être tout aussi bon, il faut juste savoir où l\'acheter ou comment le cuisiner\.'
            ], [
                'Voici quelques recettes : ' . generate_and_cache_shlink('https://veganuary.com/recipes') . ', \(ou cherche ton plat préféré \+ "vegan" sur Google\)\.'
            ], [
                'Et ça pour manger dehors : ' . generate_and_cache_shlink('https://happycow.net')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-fist-raised',
        'title' => '30+ arguments',
        'body' =>[
            [
                'C\'est une idée reçue courante ! Regarde ça : ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf') . ' ; ça passe en revue les 30 idées reçues les plus courantes sur le véganisme\.'
            ], [
                'En vidéo ici : ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2')
            ], [
                'Écris\-moi si tu as besoin d\'aide ou si tu as des questions !'
            ]
        ]
    ],

];
