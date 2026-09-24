<?php

require_once(app_path('generate_and_cache_shlink.php'));

return [
    [
        'icon' => 'fas fa-info-circle',
        'title' => 'Algemene info',
        'body' =>[
            [
                'Je moet het gewoon doen! De meeste veganisten zeggen dat ze alleen spijt hebben dat ze niet eerder zijn begonnen\.'
            ], [
                'Hier wat informatie: ' . generate_and_cache_shlink('http://reddit.com/r/Vegan') . ' \(community\) ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=41') . ' \(film\) ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2') . ' \(mythes\) 🐷 Stuur me een bericht als je hulp nodig hebt!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Vegan challenge',
        'body' =>[
            [
                'Hoi!',
                'Hé!'
            ], [
                'Je kunt het( echt| zeker)?!',
                'We zijn (altijd )?hier om je te helpen!',
                'Het is (echt |veel )?makkelijker dan je denkt!'
            ], [
                'Je (zou|kunt) (eens kijken naar|het eens proberen met) de Vegan Bootcamp Challenge!',
                'De Vegan Bootcamp Challenge (kan|is misschien) (precies )?wat je zoekt\.',
                'Er is iets dat de Vegan Bootcamp Challenge heet( en dat je kunt proberen)?\.'
            ], [
                'Het is een vegan challenge van maximaal 30 dagen die je helpt om het als een pro te doen!',
                'De site is een vegan challenge van maximaal 30 dagen waarmee je leert hoe makkelijk vegan leven is!',
                'Op de site doe je 30 challenges die je stap voor stap helpen om vegan te worden, het is makkelijk!'
            ], [
                'De link is ' . generate_and_cache_shlink('https://veganbootcamp.org') . ';',
                'Het adres is ' . generate_and_cache_shlink('https://veganbootcamp.org') . ';',
                'Je vindt de site op ' . generate_and_cache_shlink('https://veganbootcamp.org') . ';',
                'De website is ' . generate_and_cache_shlink('https://veganbootcamp.org') . ';',
            ], [
                'Succes, je kunt het!',
                'Je kunt het( echt| zeker)?!',
                'We duimen (allemaal )?voor je!',
                'Hou vol!',
                'Het gaat je lukken!'
            ], [
                'Stuur me een bericht als je (hulp|nog meer hulp) nodig hebt!',
                'Reageer als je (hulp|nog meer hulp) nodig hebt!',
                '(Aarzel niet om|Je kunt gerust) contact op te nemen als je (hulp|nog meer hulp) nodig hebt!',
                'Als je (ooit )?(hulp|nog meer hulp) nodig hebt, stuur me dan een (bericht|DM)!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-bacon',
        'title' => 'Ik hou van vlees',
        'body' =>[
            [
                'Vegan vlees is de laatste jaren ENORM verbeterd!'
            ], [
                'Beyond Meat is echt lekker: ' . generate_and_cache_shlink('https://www.beyondmeat.com/') . ', en Gardein heeft ook heel veel producten: ' . generate_and_cache_shlink('https://www.gardein.com/') . ' Kijk eens rond in je supermarkt wat er is, misschien valt het je mee!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-cheese',
        'title' => 'Ik hou van kaas',
        'body' =>[
            [
                'Vegan kaas is de laatste jaren ENORM verbeterd!'
            ], [
                'Mijn favoriet is de kaas van "Follow Your Heart", en Daiya is heerlijk als gesmolten kaas\.'
            ], [
                'Via deze link ' . generate_and_cache_shlink('https://www.peta.org/living/food/everything-you-need-to-know-about-vegan-cheese/') . ' vind je nog meer merken bij jou in de buurt! Stuur me een bericht als je hulp nodig hebt om er meer te vinden\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-pizza-slice',
        'title' => 'Ik hou van pizza',
        'body' =>[
            [
                'Op ' . generate_and_cache_shlink('http://HappyCow.net') . ' vind je meestal veel vegan pizza \(en andere restaurants\)!'
            ], [
                'Er is ook pizza van "Daiya": ' . generate_and_cache_shlink('https://daiyafoods.com/collections/pizza-and-flatbread') . ' en nog meer plekken vind je hier: ' . generate_and_cache_shlink('https://www.peta.org/living/food/pizza-places-vegan-options/') . ' Stuur me een bericht als je hulp nodig hebt om er meer te vinden\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-egg',
        'title' => 'Ik hou van eieren',
        'body' =>[
            [
                'Er zijn veel heerlijke vegan recepten in plaats van eieren \(zoals deze, maar doe er spinazie bij\): ' . generate_and_cache_shlink('https://simpleveganblog.com/simple-tofu-scramble/')
            ], [
                'Je kunt ook vegan eieren kopen: ' . generate_and_cache_shlink('https://www.ju.st/eat/eggs') . ' Meer info vind je hier: ' . generate_and_cache_shlink('https://chooseveg.com/blog/go-vegan-cant-give-up-eggs-help/') . ' en vooral hier: ' . generate_and_cache_shlink('https://youaretheirvoice.com/resources/viva-eggs.pdf')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-ice-cream',
        'title' => 'Ik hou van ijs',
        'body' =>[
            [
                'Probeer het zuivelvrije ijs van Ben & Jerry\'s eens: ' . generate_and_cache_shlink('https://www.benjerry.com/flavors/non-dairy')
            ], [
                'Ze hebben veel verschillende smaken, en er zijn nog veel meer ijsmerken op basis van soja, amandel of kokos!'
            ], [
                '(Zie:|Kijk eens naar) ' . generate_and_cache_shlink('https://www.vegan.com/ice-cream/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-drumstick-bite',
        'title' => 'Ik hou van kip',
        'body' =>[
            [
                'Gardein maakt ongelooflijk lekkere vegan kip: ' . generate_and_cache_shlink('https://www.gardein.com/') . ', kijk eens in de natuurwinkel of andere supermarkten!'
            ], [
                'HappyCow voor uit eten: ' . generate_and_cache_shlink('https://www.happycow.net') . '! Kijk eens rond in je supermarkt wat er is, misschien valt het je mee!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-glass-whiskey',
        'title' => 'Plantaardige melk',
        'body' =>[
            [
                'Bekijk "Dairy is Scary", het duurt maar 5 minuten: ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI')
            ], [
                'Er is nu ook lekkere plantaardige melk, zoals soja\-, amandel\-, haver\-, kokos\-, rijst\- en cashewmelk!'
            ], [
                'Deze melk wordt niet vies of zuur, is gezonder en hoeft voor het openen niet in de koelkast\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-video',
        'title' => 'Documentaires',
        'body' =>[
            [
                'Hier zijn wat films voor motivatie! Cowspiracy \(milieu\): ' . generate_and_cache_shlink('https://www.netflix.com/title/80033772') . ' The Game Changers \(gezondheid\): ' . generate_and_cache_shlink('https://www.netflix.com/title/81157840') . ' Dominion \(dieren\): ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43')
            ], [
                'Laat me weten of je er een hebt gekeken! 🌱'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-sad-cry',
        'title' => 'De film Dominion',
        'body' =>[
            [
                'Ik raad je deze YouTube\-video echt aan: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43')
            ], [
                'Als je tijd hebt: de eerste 15 minuten van de video kunnen je leven veranderen\.'
            ], [
                'Stuur me een bericht als je hulp nodig hebt om vegan te worden, ik help je graag of beantwoord je vragen!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-baby',
        'title' => 'Stap voor stap',
        'body' =>[
            [
                'Wat goed dat je interesse hebt in vegan leven! 🐮'
            ], [
                'Als het te veel in één keer is en je niet weet waar je moet beginnen, doe het dan stap voor stap\.'
            ], [
                'Begin gewoon met soja\-, amandel\- of havermelk kopen en wen daaraan\.'
            ], [
                'Daarna boter, vlees, enzovoort\. Meer info: ' . generate_and_cache_shlink('http://earthlinged.com/ebook')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Vegetarisch',
        'body' =>[
            [
                'Vegetarisch is super!'
            ], [
                'Maar ik raad je echt aan om deze video te bekijken: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=uWna6-niYEg')
            ], [
                'Hier worden veelgehoorde argumenten weerlegd: ' . generate_and_cache_shlink('https://drive.google.com/file/d/1dMyS7mIrr4Fal8UKF900BbLMC11IwWRH/view') . ' en hier is de vegan challenge van een maand: ' . generate_and_cache_shlink('https://www.challenge22.com/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-coins',
        'title' => 'Te duur',
        'body' =>[
            [
                'Vegan is eigenlijk heel goedkoop, alleen duur als je alle chique producten "voor veganisten" koopt!'
            ], [
                'Aardappelen, rijst, tofu, bonen, linzen, groente, fruit, pasta en havermout zijn ontzettend goedkoop, vooral in grote hoeveelheden!'
            ], [
                'Hier is een goede video over: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=Vs_nXVmyP1E')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-calculator',
        'title' => 'Eiwitten',
        'body' =>[
            [
                'Bijna alle voeding, groente, fruit en zaden bevatten eiwitten, en we hebben er niet eens zoveel van nodig\.'
            ], [
                'Hier is een link over de mythe van eiwitten en vlees: ' . generate_and_cache_shlink('https://viva.org.uk/materials/protein-myth-fact-sheet/') . ' en een video: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=1elt5YCRLbk')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-dumbbell',
        'title' => 'Sport en fitness',
        'body' =>[
            [
                'De sterkste man ter wereld is vegan, en veel meer wereldrecords in kracht en fitness staan op naam van veganisten!'
            ], [
                'Trainen met plantaardige voeding is beter voor je training\.'
            ], [
                'Video\'s: ' . generate_and_cache_shlink('https://www.youtube.com/results?search_query=vegan+fitness') . ' en community: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-comments',
        'title' => 'Community',
        'body' =>[
            [
                'Als je met mensen wilt praten, of gewoon steun of hulp zoekt, kijk dan eens op ' . generate_and_cache_shlink('http://reddit.com/r/Vegan') . '!'
            ], [
                'Het is een community van ongeveer 300\.000 veganisten die weten hoe het is en ervaring hebben, vraag ze gerust alles\.'
            ], [
                'Er zijn ook /r/VeganFitness, /r/VeganRecipes en meer!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-utensils',
        'title' => 'Uit eten',
        'body' =>[
            [
                'Uit eten is soms lastig als je niet weet waar je heen moet of wat je moet eten, maar het wordt met de tijd veel makkelijker en al snel weet je precies wat je moet bestellen\.'
            ], [
                'Kijk tot die tijd eens op deze site: ' . generate_and_cache_shlink('http://happycow.net') . ' voor vegan eten bij jou in de buurt! 🐮'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-tree',
        'title' => 'Milieu',
        'body' =>[
            [
                'Er zijn echt schrikbarende cijfers over wat de vlees\- en zuivelindustrie \(de veehouderij\) met het milieu doet, allemaal onderbouwd met bronnen en onderzoek: ' . generate_and_cache_shlink('https://speciesjustice.org/environment') . ' Een voorbeeld: de veehouderij is verantwoordelijk voor tot 91% van de vernietiging van het Amazonegebied\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-flask',
        'title' => 'Iedereen is het eens',
        'body' =>[
            [
                'Tegenwoordig is algemeen aanvaard dat vegan eten gezonder is dan een eetpatroon met vlees\.'
            ], [
                'Hier is een pagina die bronnen direct haalt bij de grootste organisaties ter wereld op het gebied van gezondheid, voeding en diëtetiek \(dus onafhankelijke organisaties\): ' . generate_and_cache_shlink('https://youaretheirvoice.com/pages/the-clear-consensus')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-heartbeat',
        'title' => 'Is het gezond?',
        'body' =>[
            [
                'Tegenwoordig is algemeen aanvaard dat vlees en zuivel extreem ongezond zijn vergeleken met vegan eten\.'
            ], [
                'Vlees is kankerverwekkend en de oorzaak van de meeste ziekten, zoals kanker, hartziekten, diabetes en overgewicht\.'
            ], [
                'Hier is een pagina met info en bronnen: ' . generate_and_cache_shlink('https://youaretheirvoice.com/pages/the-clear-consensus')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Geen zin om te koken',
        'body' =>[
            [
                'Veel veganisten koken ook niet, ze kopen gewoon de vegan opties in de winkel of in restaurants in plaats van de dierlijke\.'
            ], [
                'Je hoeft niet te leren koken om gezond vegan te eten!'
            ], [
                'Uit eten is ook heel makkelijk met ' . generate_and_cache_shlink('http://happycow.net') . ' 🐮 Stuur me een bericht als je hulp nodig hebt!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-meh-blank',
        'title' => 'Eten is saai',
        'body' =>[
            [
                'Bijna alles wat met vlees of zuivel wordt gemaakt, kun je namaken en is net zo lekker, je moet alleen weten waar je het koopt of hoe je het maakt\.'
            ], [
                'Hier wat recepten: ' . generate_and_cache_shlink('https://veganuary.com/recipes') . ', \(of google je favoriete gerecht \+ "vegan"\)\.'
            ], [
                'En dit voor uit eten: ' . generate_and_cache_shlink('https://happycow.net')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-fist-raised',
        'title' => '30+ argumenten',
        'body' =>[
            [
                'Dat is een veelvoorkomende mythe! Kijk hier eens: ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf') . '; het gaat over de 30 meest voorkomende mythes over veganisme\.'
            ], [
                'Als video vind je het hier: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2')
            ], [
                'Stuur me een bericht als je hulp nodig hebt of vragen hebt!'
            ]
        ]
    ],

];
