<?php

require_once(app_path('generate_and_cache_tinyurl.php'));

return [
    [
        'icon' => 'fas fa-info-circle',
        'title' => 'Allgemeine',
        'body' =>[
            [
                'Du solltest es tun! Die meisten Veganer sagen, dass das einzige, was sie bereuen ist, dass sie nicht schon füher angefangen haben\.'
            ], [
                'Hier ein paar Infos: ' . generate_and_cache_tinyurl('http://reddit.com/r/Vegan') . ' (community) ' . generate_and_cache_tinyurl('https://youtu.be/ny6aqdFy9SI?t=41') . ' (Movie) ' . generate_and_cache_tinyurl('https://www.youtube.com/playlist?list=PL03LZR09P2gQJyBgHk_XE8gbj8j9uFs8G') . ' (Myths) 🐷 Schreib\' mir, wenn du Hilfe brauchst!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Challenge 22+',
        'body' =>[
            [
                'Hey!',
                'Hi!',
                'Hallo!',
                'Freut mich zu hören!'
            ], [
                'Du kannst es (sicher|auf jeden Fall)? schaffen!',
                'Wir sind (immer)? hier um zu helfen!',
                'Es ist (vielleicht|auf jeden Fall)? einfacher als du denkst!'
            ], [
                'Du (solltest|könntest|willst vielleicht) die Vegan 22\+\-Tage\-Challenge ausprobieren!',
                'Die Vegan 22\+\-Tage\-Challenge (könnte|ist vielleicht) (genau)? das sein, (was|wonach) du suchst\.',
                'Es gibt da etwas, was sich die Vegan 22\+\-Tage\-Challenge nennt\.'
            ], [
                'Dort hast du (einen|deinen eigenen) kostenlosen (persönlichen)? Mentor (bei Facebook)?, der dir hilft für einen Monat vegan zu leben\.',
                'Du hast Zugriff auf einen (persönlichen)? Mentor (online|bei Facebook)?, der dir hilft für einen Monat vegan zu leben\.',
                'Sie können dir helfen einen Monat lang mithilfe eines kostenlosen (persönlichen)? Mentor (bei Facebook)? vegan zu leben\.',
                'Sie vermitteln dir einen kostenlosen (persönlichen)? Mentor (auf Facebook)? um dir dabei zu helfen einen Monat lang vegan zu leben\.',
                'Du kannst einen kostenlosen (persönlichen)? Mentor (auf Facebook)? bekommen, der dir hilft einen Monat lang vegan zu leben\.',
                'Sie verbinden dich (über Facebook)? mit einem kostenlosen (persönlichen)? Mentor, der dir hilft einen Monat lang vegan zu leben\.'
            ], [
                'Der link ist ' . generate_and_cache_tinyurl('https://www.challenge22.com/challenge22') . ';',
                'Die URL ist ' . generate_and_cache_tinyurl('https://www.challenge22.com/challenge22') . ';',
                'Die Seite findest du unter ' . generate_and_cache_tinyurl('https://www.challenge22.com/challenge22') . ';',
                'Die Website lautet ' . generate_and_cache_tinyurl('https://www.challenge22.com/challenge22') . ';',
            ], [
                'Viel Glück, du schaffst (das|es)!',
                'Du kannst es (auf jeden Fall|definitiv|absolut)? schaffen!',
                'Wir (alle)? drücken dir die Daumen!',
                'Bleib dran!',
                'Halte durch!',
                'Bleib stark!',
                'Los geht\'s! Du kannst es (auf jeden Fall|definitiv|absolut)? schaffen!',
                'Kämpf weiter!',
                'Gib\' niemals auf!',
                'Glaub\' an dich!'
            ], [
                'Schreib mir (zurück)?, wenn du (irgendwie|zusätzliche) Hilfe brauchst!',
                'Antworte (mir)?, wenn du (irgendwie|zusätzliche) Hilfe brauchst!',
                '(Zögere nicht|scheue nicht zurück) (dich zu melden|Kontakt aufzunehmen), wenn du (irgendwie|zusätzliche) Hilfe brauchst!',
                'Melde dich, wenn du (irgendwie|zusätzliche) Hilfe brauchst!',
                'Falls du (jemals)? (irgendwie|zusätzliche) Hilfe brauchst, zögere nicht (dich zu melden|Kontakt aufzunehmen)!',
                'Falls du (jemals)? (irgendwie|zusätzliche) Hilfe brauchst, schick mir einfach eine (Nachricht|PM)?!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-bacon',
        'title' => 'Ich liebe Fleisch',
        'body' =>[
            [
                'Veganes Fleisch hat es in den letzten Jahren weit gebracht!'
            ], [
                'Beyond Meat ist wirklich gut: ' . generate_and_cache_tinyurl('https://www.beyondmeat.com/') . '\. Sieh dich in deinem (Supermarkt|Discounter)? um! Du könntest überrascht werden!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-cheese',
        'title' => 'Ich liebe Käse',
        'body' =>[
            [
                'Veganer Käse hat es in den letzten Jahren weit gebracht!'
            ], [
                'Mein Favorit ist "Simply V"\-Käse\.'
            ], [
                'Unter folgendem Link ' . generate_and_cache_tinyurl('https://www.peta.de/veganer-kaese') . ' findest du noch mehr vegane Käsesorten! Schreib mir, wenn du Hilfe brauchst\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-pizza-slice',
        'title' => 'Ich liebe Pizza',
        'body' =>[
            [
                'Normalerweise findest du viele vegane Pizza\-Angebote (und andere Speisen) auf ' . generate_and_cache_tinyurl('http://HappyCow.net') . '!'
            ], [
                'There\'s also "Daiya" Pizza: ' . generate_and_cache_tinyurl('https://daiyafoods.com/our-foods/pizza/') . ' and even more places listed here: ' . generate_and_cache_tinyurl('https://www.peta.org/living/food/pizza-places-vegan-options/') . ' Message me if you need help finding more\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-egg',
        'title' => 'I Love Eggs',
        'body' =>[
            [
                'There\'s a lot of really good Vegan egg recipes (like this one, but add spinach): ' . generate_and_cache_tinyurl('https://simpleveganblog.com/simple-tofu-scramble/')
            ], [
                'You can buy Vegan eggs here too: ' . generate_and_cache_tinyurl('https://followyourheart.com/products/veganegg/') . ' And even more info here: ' . generate_and_cache_tinyurl('https://chooseveg.com/blog/go-vegan-cant-give-up-eggs-help/') . ' and especially here: ' . generate_and_cache_tinyurl('https://youaretheirvoice.com/resources/viva-eggs.pdf')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-ice-cream',
        'title' => 'I Love Ice Cream',
        'body' =>[
            [
                'Check out Ben & Jerry\'s Non\-Dairy Icecream here: ' . generate_and_cache_tinyurl('https://www.benjerry.com/flavors/non-dairy')
            ], [
                'They have a lot of different flavors and there\'s a lot of other soy/almond/coconut based icecream brands too!'
            ], [
                '(See:|Check out) ' . generate_and_cache_tinyurl('https://www.vegan.com/ice\-cream/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-drumstick-bite',
        'title' => 'I Love Chicken',
        'body' =>[
            [
                'Gardein makes some incredible chicken: ' . generate_and_cache_tinyurl('https://www.gardein.com/') . ', look around at Whole Foods or other stores!'
            ], [
                'HappyCow to eat out: ' . generate_and_cache_tinyurl('https://www.happycow.net') . '! Take a look around your grocery store to see what\'s available, you might be surprised!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-glass-whiskey',
        'title' => 'Plant Milks',
        'body' =>[
            [
                'Check out "Dairy is Scary", it\'s only 5 minutes long: ' . generate_and_cache_tinyurl('https://youtu.be/UcN7SGGoCNI')
            ], [
                'There\'s also tasty plant milks now like: Soy, Almond, Oat, Coconut, Rice & Cashew milk!'
            ], [
                'These milks don\'t get gross or bad, they\'re healthier, and no refrigeration is needed before opening\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-video',
        'title' => 'Documentaries',
        'body' =>[
            [
                'Here are some movies for motivation! Cowspiracy (Environment): ' . generate_and_cache_tinyurl('https://www.netflix.com/title/80033772') . ' Forks Over Knifes (Health): ' . generate_and_cache_tinyurl('https://www.netflix.com/title/70185045') . ' Dominion (Animals): ' . generate_and_cache_tinyurl('https://youtu.be/ny6aqdFy9SI?t=43')
            ], [
                'Let me know if you watch any of them! 🌱'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-sad-cry',
        'title' => 'Dominion Movie',
        'body' =>[
            [
                'I highly recommend this Youtube video: ' . generate_and_cache_tinyurl('https://youtu.be/ny6aqdFy9SI?t=43')
            ], [
                'If you have the time, the first 15 minutes of the video is pretty life\-changing\.'
            ], [
                'Message me back if you need any help going Vegan and I\'d be happy to help or answer any questions you may have!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-baby',
        'title' => 'Baby Steps',
        'body' =>[
            [
                'It\'s awesome that you\'re interested in being Vegan! 🐮'
            ], [
                'If it\'s too overwhelming and you don\'t know what to do, try taking baby steps\.'
            ], [
                'First just start buying soy/almond/oat milks and get used to that\.'
            ], [
                'Then do butter, meats, etc\. More info: ' . generate_and_cache_tinyurl('http://earthlinged.com/ebook')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Vegetarian',
        'body' =>[
            [
                'Vegetarian is awesome!'
            ], [
                'But I\'d really recommend you check this video out: ' . generate_and_cache_tinyurl('https://www.youtube.com/watch?v=uWna6-niYEg')
            ], [
                'Here\'s some common arguments debunked: ' . generate_and_cache_tinyurl('https://drive.google.com/file/d/1dMyS7mIrr4Fal8UKF900BbLMC11IwWRH/view') . ' and here\'s the 1 month vegan challenge: ' . generate_and_cache_tinyurl('https://www.challenge22.com/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-coins',
        'title' => 'Too Expensive',
        'body' =>[
            [
                'Vegan is actually really cheap, only expensive if you buy all the fancy "sold to vegans" stuff!'
            ], [
                'Potatoes, Rice, Tofu, Beans, Lentils, Veggies, Fruits, Pasta, Oats, are incredibly cheap, especially in bulk!'
            ], [
                'This guy has a great video on it: ' . generate_and_cache_tinyurl('https://www.youtube.com/watch?v=Vs_nXVmyP1E')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-calculator',
        'title' => 'Protein Issue',
        'body' =>[
            [
                'Almost all foods, vegetables, fruits, seeds, all have protein, which we don\'t need a lot of\.'
            ], [
                'Here\'s a link that goes over the protein/meat myth: ' . generate_and_cache_tinyurl('https://www.vivahealth.org.uk/resources/protein-myth-fact-sheet') . ' and video: ' . generate_and_cache_tinyurl('https://www.youtube.com/watch?v=1elt5YCRLbk')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-dumbbell',
        'title' => 'Fitness Info',
        'body' =>[
            [
                'The worlds strongest man is a Vegan and there\'s so many more world records in fitness/strength held by Vegans!'
            ], [
                'Working out on a plant\-based diet is better for your training\.'
            ], [
                'Videos: ' . generate_and_cache_tinyurl('https://www.youtube.com/results?search_query=vegan+fitness') . ' and Community: ' . generate_and_cache_tinyurl('https://www.reddit.com/r/veganfitness/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-comments',
        'title' => 'Community',
        'body' =>[
            [
                'If you need people to talk to, or just get support/help, check out ' . generate_and_cache_tinyurl('http://reddit.com/r/Vegan') . '!'
            ], [
                'It\'s a community of around 300,000 Vegans that know the struggle and have the experience, ask them anything\.'
            ], [
                'There\'s also /r/VeganFitness, /r/VeganRecipes, and more!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-utensils',
        'title' => 'Eating Out',
        'body' =>[
            [
                'Eating out is sometimes hard when you don\'t know where to go or what to eat but it does get much easier as time goes on & pretty soon you\'ll be an expert on what to get\.'
            ], [
                'Until then check this site out: ' . generate_and_cache_tinyurl('http://happycow.net') . ' for Vegan food around your area! 🐮'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-tree',
        'title' => 'Environment',
        'body' =>[
            [
                'There\'s really daunting statistics on what Meat and Dairy industry (Animal Agriculture) is doing to the Environment, all backed up with sources & studies: ' . generate_and_cache_tinyurl('https://youaretheirvoice.com/pages/the-daunting-facts') . ' Example: Animal agriculture is responsible for up to 91% of Amazon destruction\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-flask',
        'title' => 'Everyone Agrees',
        'body' =>[
            [
                'In today\'s age it\'s widely accepted that Veganism is healthier than a meat\-eating diet\.'
            ], [
                'Here\'s a page that pulls sources directly from the world\'s largest Health, Nutrition and Dietary organizations (so from non\-biased organizations): ' . generate_and_cache_tinyurl('https://youaretheirvoice.com/pages/the-clear-consensus')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-heartbeat',
        'title' => 'Is It Healthy',
        'body' =>[
            [
                'In today\'s age it\'s widely accepted that Meat & Dairy is extremely unhealthy compared to a Vegan diet\.'
            ], [
                'Meat is carcinogenic, the cause of the majority diseases, cancer, heart disease & diabetes, and obesity\.'
            ], [
                'Here\'s a page with info & sources: ' . generate_and_cache_tinyurl('https://youaretheirvoice.com/pages/the-clear-consensus')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Lazy to Cook',
        'body' =>[
            [
                'A lot of Vegans don\'t cook either, just buy the Vegan options at the store or at restaurants instead of the animal options\.'
            ], [
                'You don\'t need to learn to cook to eat healthy as a Vegan!'
            ], [
                'Eating out is also really easy with ' . generate_and_cache_tinyurl('http://happycow.net') . ' 🐮 Message me for help!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-meh-blank',
        'title' => 'Food Is boring',
        'body' =>[
            [
                'Pretty much anything made with meat/dairy can be replicated and be just as awesome, you just have to learn where to buy it or cook it\.'
            ], [
                'Here\'s some recipes: ' . generate_and_cache_tinyurl('https://veganuary.com/recipes') . ', \(or google your favorite food \+ "Vegan"\)\.'
            ], [
                'This for eating out: ' . generate_and_cache_tinyurl('https://happycow.net')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-fist-raised',
        'title' => '30+ Arguments',
        'body' =>[
            [
                'That\'s a common myth! Check this out: ' . generate_and_cache_tinyurl('http://earthlinged.com/ebook') . '; it basically goes over the 30 most common myths about Veganism\.'
            ], [
                'Video format here: ' . generate_and_cache_tinyurl('https://earthlinged.org/30excuses/')
            ], [
                'Message me back if you need any help or have any questions!'
            ]
        ]
    ],

];
