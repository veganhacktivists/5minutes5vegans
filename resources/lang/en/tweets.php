<?php

require_once(app_path('generate_and_cache_tinyurl.php'));

return [
    [
        'icon' => 'fas fa-info-circle',
        'title' => 'General info',
        'body' =>[
            [
                'You should do it! Most vegans say the only regret they have is that they didn\'t do it earlier\.'
            ], [
                'Here\'s some resources: ' . generate_and_cache_tinyurl('http://reddit.com/r/Vegan') . ' \(community\) ' . generate_and_cache_tinyurl('https://youtu.be/ny6aqdFy9SI?t=41') . ' \(Movie\) ' . generate_and_cache_tinyurl('https://www.youtube.com/playlist?list=PL03LZR09P2gQJyBgHk_XE8gbj8j9uFs8G') . ' \(Myths\) 🐷 Message me if you need help!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Vegan Challenge',
        'body' =>[
            [
                'Hey!',
                'Hi!'
            ], [
                'You can (definitely |absolutely )?do it!',
                'We\'re (always )?here to help!',
                'It\'s (definitely |absolutely )?easier than you might think!'
            ], [
                'You (should|could|might want to) (check|try checking) out the Vegan Bootcamp Challenge!',
                'The Vegan Bootcamp Challenge (might|could) be (just )?what you\'re looking for\.',
                'There\'s a resource called the Vegan Bootcamp Challenge( that\'s available| that you could try)?\.'
            ], [
                'You can do a 30 days or less vegan challenge and they help you figure out how to do it like a pro!',
                'The site is a 30 days or less vegan challenge where you can learn how to easily be vegan!',
                'You complete 30 challenges on the website as it helps you slowly become vegan, it\'s easy!'
            ], [
                'The link is ' . generate_and_cache_tinyurl('https://veganbootcamp.org') . ';',
                'The URL is ' . generate_and_cache_tinyurl('https://veganbootcamp.org') . ';',
                'The site is at ' . generate_and_cache_tinyurl('https://veganbootcamp.org') . ';',
                'The website is ' . generate_and_cache_tinyurl('https://veganbootcamp.org') . ';',
            ], [
                'Good luck, (you|you\'ve) got this!',
                'You can (totally |definitely |absolutely )?do it!',
                'We\'re (all )?rooting for you!',
                'Hang in there!',
                'You can (totally |definitely |absolutely )?do it!',
                'You got it!'
            ], [
                'Message me (back )?if you need (any( more)?|extra) help!',
                'Reply (back )?to me if you need (any( more)?|extra) help!',
                '(Feel free to|Go ahead and) (reach out|get in contact) if you need (any( more)?|extra) help!',
                'Reach out if you need (any( more)?|extra) help!',
                'If you (ever )?need (any( more)?|extra) help feel free to (reach out|get in contact)!',
                'If you (ever )?need (any( more)?|extra) help just (send|shoot) me a (message|DM)!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-bacon',
        'title' => 'I Love Meat',
        'body' =>[
            [
                'Vegan meat has come a LONG way in just the past few years!'
            ], [
                'Beyond Meat is really good: ' . generate_and_cache_tinyurl('https://www.beyondmeat.com/') . ', and Gardein also has a ton of products: ' . generate_and_cache_tinyurl('https://www.gardein.com/') . ' Take a look around your grocery store to see what\'s available, you might be surprised!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-cheese',
        'title' => 'I Love Cheese',
        'body' =>[
            [
                'Vegan cheese has come a LONG way in just the past few years!'
            ], [
                'My favorite is "Follow Your Heart" cheese, and Daiya is great for melted cheese\.'
            ], [
                'Use this link ' . generate_and_cache_tinyurl('https://www.peta.org/living/food/everything-you-need-to-know-about-vegan-cheese/') . ' to find even more brands near you! Message me if you need help finding more\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-pizza-slice',
        'title' => 'I Love Pizza',
        'body' =>[
            [
                'There\'s usually a lot of Vegan pizza options (and other restaurants) on ' . generate_and_cache_tinyurl('http://HappyCow.net') . '!'
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
                '(See:|Check out) ' . generate_and_cache_tinyurl('https://www.vegan.com/ice-cream/')
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
                'Here are some movies for motivation! Cowspiracy \(Environment\): ' . generate_and_cache_tinyurl('https://www.netflix.com/title/80033772') . ' The Game Changers \(Health\): ' . generate_and_cache_tinyurl('https://www.netflix.com/title/81157840') . ' Dominion \(Animals\): ' . generate_and_cache_tinyurl('https://youtu.be/ny6aqdFy9SI?t=43') . '\.'
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
                'Here\'s a link that goes over the protein/meat myth: ' . generate_and_cache_tinyurl('https://viva.org.uk/materials/protein-myth-fact-sheet/') . ' and video: ' . generate_and_cache_tinyurl('https://www.youtube.com/watch?v=1elt5YCRLbk')
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
                'There\'s really daunting statistics on what Meat and Dairy industry \(Animal Agriculture\) is doing to the Environment, all backed up with sources & studies: ' . generate_and_cache_tinyurl('https://speciesjustice.org/environment') . ' Example: Animal agriculture is responsible for up to 91% of Amazon destruction\.'
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
                'Here\'s a page that pulls sources directly from the world\'s largest Health, Nutrition and Dietary organizations \(so from non\-biased organizations\): ' . generate_and_cache_tinyurl('https://youaretheirvoice.com/pages/the-clear-consensus')
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
