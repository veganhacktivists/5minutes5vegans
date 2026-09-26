<?php

require_once(app_path('generate_and_cache_shlink.php'));

return [
    [
        'icon' => 'fas fa-info-circle',
        'title' => 'General Info',
        'body' => [
            [
                'You should go for it!',
                'That\'s great to hear!',
                'Go for it, you won\'t regret it!',
            ],
            [
                'Most vegans say their only regret is not switching sooner. r/vegan is great for questions: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/') . ' and these short videos answer the common doubts: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'A good first step is Veganuary\'s free 31-day challenge, which you can start any day. You get meal plans and daily emails: ' . generate_and_cache_shlink('https://veganuary.com/try-vegan/'),
                'Challenge 22 is free and gives you a mentor and dietitians for 22 days: ' . generate_and_cache_shlink('https://challenge22.com/') . ' For a sense of why it matters, watch the start of Dominion: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
            ],
            [
                'Message me if you need help.',
                'Any questions, just ask.',
                'Shout if you get stuck!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Vegan Challenge',
        'body' => [
            [
                'Hey!',
                'Hi!',
                'Go for it!',
            ],
            [
                'Veganuary has a free 31-day challenge you can start any day, with meal plans and daily emails: ' . generate_and_cache_shlink('https://veganuary.com/try-vegan/'),
                'Challenge 22 is a free 22-day challenge with your own mentor and dietitians on hand: ' . generate_and_cache_shlink('https://challenge22.com/'),
                'Vegan Bootcamp is free and self-paced, with short courses on food, nutrition and more: ' . generate_and_cache_shlink('https://veganbootcamp.org'),
            ],
            [
                'You\'ve got this!',
                'Good luck!',
                'It\'s easier than it looks.',
                'Message me if you need any help.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-bacon',
        'title' => 'I Love Meat',
        'body' => [
            [
                'Vegan meat has come a long way!',
                'You don\'t have to miss it!',
                'I get it, but the swaps are really good now.',
            ],
            [
                'Most supermarkets now sell plant-based burgers, sausages, mince and nuggets. Beyond Meat is a good place to start: ' . generate_and_cache_shlink('https://www.beyondmeat.com/'),
                'You can swap almost anything now: burgers, sausages, bacon, mince. Try a few brands, including your supermarket\'s own, and see what you like.',
                'Lots of restaurants and chains have plant-based options now too. HappyCow shows vegan-friendly places near you: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Message me if you want recommendations.',
                'I can send you my favourites if you like.',
                'Have fun trying them!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-cheese',
        'title' => 'I Love Cheese',
        'body' => [
            [
                'Vegan cheese has come a long way!',
                'Vegan cheese is so much better than it used to be!',
                'You\'d be surprised how good vegan cheese is now!',
            ],
            [
                'Violife is a great all-rounder and it melts well: ' . generate_and_cache_shlink('https://violifefoods.com/') . ' Follow Your Heart and Daiya are good too.',
                'Here\'s a guide to vegan cheeses, from slices to brie: ' . generate_and_cache_shlink('https://www.peta.org/lifestyle/food/everything-you-need-to-know-about-vegan-cheese/'),
                'Brands vary a lot, so try a few. Violife is a good place to start, and it melts on pizza and toasties: ' . generate_and_cache_shlink('https://violifefoods.com/'),
            ],
            [
                'Message me if you want more ideas.',
                'I can suggest a few.',
                'Enjoy! 🧀',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-pizza-slice',
        'title' => 'I Love Pizza',
        'body' => [
            [
                'Pizza\'s an easy one!',
                'You don\'t have to give up pizza!',
                'Vegan pizza is easy to find now!',
            ],
            [
                'Lots of chains now do vegan cheese or cheese-free pizzas. HappyCow lists vegan-friendly places near you: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Most supermarkets sell vegan pizzas now, and here\'s a list of chains with vegan options: ' . generate_and_cache_shlink('https://www.peta.org/lifestyle/food/pizza-places-vegan-options/'),
                'Daiya makes frozen vegan pizzas: ' . generate_and_cache_shlink('https://daiyafoods.com/collections/pizza-and-flatbread') . ' And plenty of pizzerias will swap in vegan cheese if you ask.',
            ],
            [
                'Enjoy! 🍕',
                'Message me if you need help finding one.',
                'Happy eating!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-egg',
        'title' => 'I Love Eggs',
        'body' => [
            [
                'Eggs are easier to replace than you\'d think!',
                'There are some good swaps for eggs.',
                'You\'ve got lots of options!',
            ],
            [
                'Tofu scramble is a great swap for scrambled eggs, especially with some spinach: ' . generate_and_cache_shlink('https://simpleveganblog.com/simple-tofu-scramble/'),
                'JUST Egg is made from mung beans and scrambles just like egg: ' . generate_and_cache_shlink('https://www.ju.st/eat/eggs'),
                'Here\'s a helpful guide if you\'re struggling to give up eggs: ' . generate_and_cache_shlink('https://chooseveg.com/blog/go-vegan-cant-give-up-eggs-help/') . ' And this is how laying hens are treated: ' . generate_and_cache_shlink('https://viva.org.uk/animals/egg-laying-hens/'),
            ],
            [
                'Message me if you want recipes.',
                'I\'ve got more ideas if you want them.',
                'Enjoy experimenting!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-ice-cream',
        'title' => 'I Love Ice Cream',
        'body' => [
            [
                'Vegan ice cream is so good now!',
                'You\'re in luck, vegan ice cream is everywhere!',
                'You can still have ice cream!',
            ],
            [
                'Ben & Jerry\'s has a whole non-dairy range: ' . generate_and_cache_shlink('https://www.benjerry.com/flavors/non-dairy'),
                'Here\'s a guide to the best vegan ice creams, shop-bought and homemade: ' . generate_and_cache_shlink('https://vegan.com/food/ice-cream/'),
                'Most supermarkets stock oat, soy, almond and coconut ice creams, and Ben & Jerry\'s has a non-dairy range too: ' . generate_and_cache_shlink('https://www.benjerry.com/flavors/non-dairy'),
            ],
            [
                'Enjoy! 🍦',
                'Let me know your favourite!',
                'Message me if you want more ideas.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-drumstick-bite',
        'title' => 'I Love Chicken',
        'body' => [
            [
                'Vegan chicken is really good now!',
                'You can still have chicken, just plant-based!',
                'There are loads of swaps!',
            ],
            [
                'Have a look in your supermarket\'s freezer and chilled aisles for plant-based nuggets, strips and fillets. There are lots of brands to try.',
                'Lots of places now do vegan chicken burgers and wraps. HappyCow shows what\'s near you: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Seitan and soy-based chicken are great in wraps and stir-fries. Here are some easy recipes: ' . generate_and_cache_shlink('https://veganuary.com/recipes'),
            ],
            [
                'Message me if you want brand ideas.',
                'Give a few a go!',
                'Enjoy!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-glass-whiskey',
        'title' => 'Plant Milks',
        'body' => [
            [
                'Plant milks are an easy switch!',
                'There are so many plant milks now!',
                'Great place to start!',
            ],
            [
                'Oat, soy, almond, coconut, cashew, rice... Oat and soy are great in tea and coffee. Try a few and see which you like.',
                'If you want to know why people switch, this short video is worth a look: ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI'),
                'Look for ones fortified with calcium. Soy milk has about as much protein as cow\'s milk.',
            ],
            [
                'Message me if you have questions.',
                'Enjoy experimenting!',
                'Let me know how you get on!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-video',
        'title' => 'Documentaries',
        'body' => [
            [
                'Here are a few documentaries worth watching:',
                'Some films that might help:',
                'Two good ones:',
            ],
            [
                'Dominion, about how farmed animals are treated (free): ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' The Game Changers, about athletes on plant-based diets: ' . generate_and_cache_shlink('https://gamechangersmovie.com/'),
                'Dominion is free to watch and hard to forget: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' Earthling Ed\'s short videos are great for the usual questions: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'The Game Changers, about top athletes who eat plant-based: ' . generate_and_cache_shlink('https://gamechangersmovie.com/') . ' And Dominion, free, about life on farms: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
            ],
            [
                'Let me know what you think! 🌱',
                'Let me know if you watch any!',
                'Message me after if you want to talk.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-sad-cry',
        'title' => 'Dominion',
        'body' => [
            [
                'I\'d really recommend Dominion.',
                'Have you seen Dominion?',
                'If you watch one thing, make it Dominion.',
            ],
            [
                'It\'s a free documentary about how farmed animals are really treated: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' Even the first 15 minutes are worth it.',
                'It shows what happens on farms and in slaughterhouses, and it\'s free to watch: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
                'It\'s free and it\'s changed a lot of minds: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' It\'s hard to watch, but worth it.',
            ],
            [
                'Message me if you want to talk about it.',
                'Feel free to ask me anything.',
                'I can help if you decide to go vegan.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-baby',
        'title' => 'Baby Steps',
        'body' => [
            [
                'It\'s great that you\'re thinking about it! 🐮',
                'Nice one!',
                'Good on you for giving it a go!',
            ],
            [
                'If it feels like a lot, take it one step at a time. Start with plant milk, then butter, then meat. Vegan Bootcamp can guide you: ' . generate_and_cache_shlink('https://veganbootcamp.org'),
                'Try one vegan meal a day, then build up from there. Veganuary has easy recipes to start with: ' . generate_and_cache_shlink('https://veganuary.com/recipes'),
                'Start with the swaps that feel easiest, like milk or burgers, and go from there. Challenge 22 gives you a mentor to help: ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'You\'ve got this!',
                'Message me if you need help.',
                'No need to do it all at once.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Vegetarian',
        'body' => [
            [
                'Vegetarian is a great step!',
                'Well done on going veggie!',
                'Great start!',
            ],
            [
                'This video explains why going fully vegan makes such a difference: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=uWna6-niYEg'),
                'Sadly dairy and eggs cause a lot of suffering too. This short video explains: ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI'),
                'If you fancy taking the next step, Challenge 22 is free and gives you a mentor: ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'Message me if you have questions.',
                'I can help if you want to try.',
                'You\'re nearly there!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-coins',
        'title' => 'Too Expensive',
        'body' => [
            [
                'It can actually be cheaper!',
                'Vegan food can be really cheap!',
                'It doesn\'t have to be!',
            ],
            [
                'Beans, lentils, rice, pasta, oats, potatoes and frozen veg are some of the cheapest foods there are. It\'s the speciality products that cost more.',
                'An Oxford study found vegan diets could cut food bills by up to a third in countries like the UK and US: ' . generate_and_cache_shlink('https://www.ox.ac.uk/news/2021-11-11-sustainable-eating-cheaper-and-healthier-oxford-study'),
                'This video goes through it well: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=Vs_nXVmyP1E') . ' Cooking with beans, lentils and tofu keeps it cheap.',
            ],
            [
                'Message me if you want budget recipes.',
                'I can send you some cheap meal ideas.',
                'Let me know how you get on!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-calculator',
        'title' => 'Protein',
        'body' => [
            [
                'Protein is easier than people think!',
                'You won\'t struggle for protein!',
                'That one comes up a lot!',
            ],
            [
                'Beans, lentils, tofu, tempeh, seitan, soy milk, nuts and seeds are all high in protein. Here\'s a quick guide: ' . generate_and_cache_shlink('https://viva.org.uk/materials/protein-myth-fact-sheet/'),
                'A varied vegan diet gives you plenty. Here\'s a factsheet on the protein myth: ' . generate_and_cache_shlink('https://viva.org.uk/materials/protein-myth-fact-sheet/'),
                'This one-minute video sums it up: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=1elt5YCRLbk') . ' Tofu, lentils, beans and seitan are all great sources.',
            ],
            [
                'Message me if you have questions.',
                'I can send you some meal ideas.',
                'Good luck with it!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-dumbbell',
        'title' => 'Fitness',
        'body' => [
            [
                'You can definitely train on a vegan diet!',
                'Lots of athletes are vegan!',
                'Plants build muscle too!',
            ],
            [
                'Plenty of top athletes eat plant-based, from strongmen to F1 champions. The Game Changers covers it: ' . generate_and_cache_shlink('https://gamechangersmovie.com/'),
                'r/veganfitness is full of people training hard on plants, with meal plans and advice: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/'),
                'Tofu, seitan, lentils, beans and soy milk make it easy to hit your protein. Loads of training tips here: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/'),
            ],
            [
                'Message me if you have questions.',
                'Good luck with your training! 💪',
                'Let me know how you get on!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-comments',
        'title' => 'Community',
        'body' => [
            [
                'You\'re not alone!',
                'It really helps to have people to talk to!',
                'There\'s a big community out there!',
            ],
            [
                'r/vegan is a huge, friendly community where you can ask anything: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/'),
                'Try r/vegan for support and questions: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/') . ' And r/veganrecipes for food ideas: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganrecipes/'),
                'Challenge 22 pairs you with a mentor and a group trying vegan at the same time: ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'Message me too if you need anything.',
                'I\'m around too if you want to chat.',
                'Good luck!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-utensils',
        'title' => 'Eating Out',
        'body' => [
            [
                'Eating out gets easier fast!',
                'It\'s much easier than it used to be!',
                'It\'s easier than you\'d think!',
            ],
            [
                'HappyCow shows vegan and vegan-friendly places near you: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Most places have something vegan now, and lots of menus mark it. For ideas nearby, try HappyCow: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Check menus online first, and don\'t be afraid to ask for swaps. HappyCow helps you find good spots: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Enjoy! 🌱',
                'Message me if you need help.',
                'Happy eating!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-tree',
        'title' => 'Environment',
        'body' => [
            [
                'It\'s one of the biggest things you can do for the planet!',
                'The data backs this up!',
                'It makes a huge difference!',
            ],
            [
                'If everyone ate plant-based, we\'d need about 75% less farmland, according to Our World in Data: ' . generate_and_cache_shlink('https://ourworldindata.org/land-use-diets'),
                'An Oxford study found a vegan diet has about 30% of the environmental impact of a high-meat diet: ' . generate_and_cache_shlink('https://www.medsci.ox.ac.uk/news/vegan-diet-has-just-30-of-the-environmental-impact-of-a-high-meat-diet-major-study-finds'),
                'Meat and dairy have a much bigger footprint than plant foods on emissions, land and water. Here\'s the data: ' . generate_and_cache_shlink('https://ourworldindata.org/environmental-impacts-of-food'),
            ],
            [
                'Message me if you want to know more 🌍',
                'I can send you more if you\'re interested.',
                'Have a look!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-flask',
        'title' => 'Experts Agree',
        'body' => [
            [
                'The big health bodies agree on this!',
                'The experts are on your side here!',
                'Dietitians are pretty clear on this one!',
            ],
            [
                'The British Dietetic Association says well-planned plant-based diets support healthy living at every age: ' . generate_and_cache_shlink('https://www.bda.uk.com/resource/vegetarian-vegan-plant-based-diet.html'),
                'Dietetic associations in the US, UK, Canada and Australia say well-planned vegan diets are healthy for all ages. Summary: ' . generate_and_cache_shlink('https://en.wikipedia.org/wiki/Vegan_nutrition#Positions_of_dietetic_and_government_associations'),
                'The NHS says that with good planning, you can get all the nutrients you need on a vegan diet: ' . generate_and_cache_shlink('https://www.nhs.uk/live-well/eat-well/how-to-eat-a-balanced-diet/the-vegan-diet/'),
            ],
            [
                'Message me if you have questions.',
                'Have a read!',
                'Let me know if you want more sources.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-heartbeat',
        'title' => 'Health',
        'body' => [
            [
                'Health is a big reason people go vegan!',
                'It can be really healthy!',
                'There\'s good evidence for it!',
            ],
            [
                'Well-planned vegan diets are linked to lower risks of heart disease, type 2 diabetes and some cancers. The NHS has a good guide: ' . generate_and_cache_shlink('https://www.nhs.uk/live-well/eat-well/how-to-eat-a-balanced-diet/the-vegan-diet/'),
                'The WHO classes processed meat as a cause of cancer, and red meat as a probable one: ' . generate_and_cache_shlink('https://www.who.int/news-room/questions-and-answers/item/cancer-carcinogenicity-of-the-consumption-of-red-meat-and-processed-meat'),
                'The British Dietetic Association says well-planned plant-based diets support healthy living at every age: ' . generate_and_cache_shlink('https://www.bda.uk.com/resource/vegetarian-vegan-plant-based-diet.html'),
            ],
            [
                'Message me if you have questions.',
                'I can help you plan meals.',
                'Have a read!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Too Lazy to Cook',
        'body' => [
            [
                'No cooking needed!',
                'Fair enough!',
                'You really don\'t have to cook!',
            ],
            [
                'Supermarkets are full of vegan ready meals, sandwiches, frozen pizzas and snacks now. Just grab the vegan version of what you\'d usually buy.',
                'Plenty of vegans barely cook! Ready meals, wraps, beans on toast, cereal with oat milk... it all counts.',
                'Eating out is easy too. HappyCow shows vegan-friendly places near you: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Message me if you want easy ideas.',
                'Ask me for my lazy favourites!',
                'Enjoy!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-meh-blank',
        'title' => 'Food Is Boring',
        'body' => [
            [
                'It really doesn\'t have to be!',
                'Vegan food can be really good!',
                'There\'s so much more to it than salad!',
            ],
            [
                'Almost any dish can be made vegan: curries, burgers, pasta, cakes. Here are loads of recipes: ' . generate_and_cache_shlink('https://veganuary.com/recipes'),
                'Try searching for your favourite dish plus \'vegan\', there\'s a version of almost everything. For eating out: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'r/veganrecipes is full of ideas: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganrecipes/') . ' And HappyCow finds great places to eat: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Message me if you want recommendations.',
                'Enjoy! 😋',
                'Happy cooking!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-fist-raised',
        'title' => '30+ Arguments',
        'body' => [
            [
                'That\'s a really common one!',
                'Fair question!',
                'I hear that one a lot!',
            ],
            [
                'This free guide answers the 30 most common arguments against going vegan: ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf'),
                'Earthling Ed answers 30 common excuses in short videos: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'This guide covers the 30 most common myths: ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf') . ' Or if you prefer videos: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
            ],
            [
                'Message me if you want to talk it through.',
                'Any questions, just ask.',
                'Have a look!',
            ],
        ],
    ],
];
