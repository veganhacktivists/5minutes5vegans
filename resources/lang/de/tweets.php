<?php

require_once(app_path('generate_and_cache_shlink.php'));

return [
    [
        'icon' => 'fas fa-info-circle',
        'title' => 'Allgemeines',
        'body' => [
            [
                'Probier\'s unbedingt aus!',
                'Das freut mich zu hören!',
                'Trau dich, du bereust es nicht!',
            ],
            [
                'Die meisten sagen, sie bereuen nur, nicht früher vegan geworden zu sein. r/vegan hilft bei Fragen: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/') . ' und diese Kurzvideos klären typische Zweifel: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'Ein guter Einstieg ist die kostenlose 31-Tage-Challenge von Veganuary, die du jederzeit starten kannst. Dazu gibt\'s Essenspläne und tägliche Mails: ' . generate_and_cache_shlink('https://veganuary.com/de/'),
                'Challenge 22 ist gratis und begleitet dich 22 Tage mit Mentoring und Ernährungsfachleuten: ' . generate_and_cache_shlink('https://challenge22.com/') . ' Warum das wichtig ist, zeigt der Anfang von Dominion: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
            ],
            [
                'Schreib mir, wenn du Hilfe brauchst!',
                'Ich beantworte gern deine Fragen!',
                'Melde dich, wenn du feststeckst!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Vegan-Challenge',
        'body' => [
            [
                'Hey!',
                'Hi!',
                'Wie cool!',
            ],
            [
                'Veganuary hat eine kostenlose 31-Tage-Challenge, die du jederzeit starten kannst, mit Essensplänen und täglichen Mails: ' . generate_and_cache_shlink('https://veganuary.com/de/'),
                'Challenge 22 ist eine kostenlose 22-Tage-Challenge mit persönlichem Mentoring und Ernährungsfachleuten an deiner Seite: ' . generate_and_cache_shlink('https://challenge22.com/'),
                'Vegan Bootcamp ist kostenlos: kurze Kurse zu Essen, Ernährung und mehr, ganz in deinem Tempo: ' . generate_and_cache_shlink('https://veganbootcamp.org'),
            ],
            [
                'Du schaffst das!',
                'Das kriegst du locker hin!',
                'Wir drücken dir die Daumen!',
                'Schreib mir, wenn du Hilfe brauchst!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-bacon',
        'title' => 'Ich liebe Fleisch',
        'body' => [
            [
                'Veganes Fleisch ist richtig gut geworden!',
                'Gute Nachricht: Vermissen musst du nichts!',
                'Versteh ich total, die Alternativen sind inzwischen super!',
            ],
            [
                'Die meisten Supermärkte haben inzwischen pflanzliche Burger, Würstchen, Hack und Nuggets. Beyond Meat ist ein guter Anfang: ' . generate_and_cache_shlink('https://www.beyondmeat.com/'),
                'Du kannst heute fast alles ersetzen: Burger, Würstchen, Speck, Hack. Probier ein paar Marken, auch die Eigenmarke deines Supermarkts, und schau, was dir schmeckt.',
                'Auch viele Restaurants und Ketten haben jetzt pflanzliche Gerichte. HappyCow zeigt dir veganfreundliche Lokale in deiner Nähe: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Schreib mir, wenn du Tipps willst!',
                'Ich verrate dir gern meine Favoriten!',
                'Viel Spaß beim Ausprobieren!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-cheese',
        'title' => 'Ich liebe Käse',
        'body' => [
            [
                'Veganer Käse hat sich enorm gemacht!',
                'Veganer Käse ist so viel besser als früher!',
                'Du wirst staunen, wie gut veganer Käse heute ist!',
            ],
            [
                'Violife ist ein super Allrounder und schmilzt gut: ' . generate_and_cache_shlink('https://violifefoods.com/') . ' Auch gut: Follow Your Heart und Daiya.',
                'Hier ein Überblick über vegane Käsesorten, von Scheibenkäse bis Brie: ' . generate_and_cache_shlink('https://www.peta.de/veganleben/veganer-kaese/'),
                'Die Marken unterscheiden sich stark, also probier ein paar aus. Violife ist ein guter Anfang und schmilzt auf Pizza und Toast: ' . generate_and_cache_shlink('https://violifefoods.com/'),
            ],
            [
                'Schreib mir, wenn du mehr Ideen willst!',
                'Ich helfe dir gern beim Suchen!',
                'Lass es dir schmecken! 🧀',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-pizza-slice',
        'title' => 'Ich liebe Pizza',
        'body' => [
            [
                'Gute Nachricht: Pizza ist einfach!',
                'Auf Pizza musst du nicht verzichten!',
                'Bei Pizza ist der Umstieg super leicht!',
            ],
            [
                'Viele Ketten haben inzwischen Pizza mit veganem Käse oder ganz ohne Käse. HappyCow zeigt dir veganfreundliche Lokale in deiner Nähe: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Die meisten Supermärkte haben jetzt vegane Pizza, und hier ist eine Liste von Ketten mit veganen Optionen: ' . generate_and_cache_shlink('https://www.peta.org/lifestyle/food/pizza-places-vegan-options/'),
                'Daiya macht vegane Tiefkühlpizza: ' . generate_and_cache_shlink('https://daiyafoods.com/collections/pizza-and-flatbread') . ' Und viele Pizzerien nehmen auf Nachfrage veganen Käse.',
            ],
            [
                'Guten Appetit! 🍕',
                'Schreib mir, wenn du Hilfe bei der Suche brauchst!',
                'Lass es dir schmecken!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-egg',
        'title' => 'Ich liebe Eier',
        'body' => [
            [
                'Eier sind leichter zu ersetzen, als du denkst!',
                'Für Eier gibt\'s richtig gute Alternativen!',
                'Da hast du viele Möglichkeiten!',
            ],
            [
                'Rührtofu ist ein super Ersatz für Rührei, vor allem mit etwas Spinat: ' . generate_and_cache_shlink('https://simpleveganblog.com/simple-tofu-scramble/'),
                'JUST Egg besteht aus Mungbohnen und wird in der Pfanne genau wie Rührei: ' . generate_and_cache_shlink('https://www.ju.st/eat/eggs'),
                'Falls dir der Verzicht auf Eier schwerfällt, hilft dir dieser Guide: ' . generate_and_cache_shlink('https://chooseveg.com/blog/go-vegan-cant-give-up-eggs-help/') . ' Und so werden Legehennen behandelt: ' . generate_and_cache_shlink('https://viva.org.uk/animals/egg-laying-hens/'),
            ],
            [
                'Schreib mir, wenn du Rezepte willst!',
                'Ich teile gern noch mehr Ideen!',
                'Viel Spaß beim Ausprobieren!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-ice-cream',
        'title' => 'Ich liebe Eis',
        'body' => [
            [
                'Veganes Eis ist inzwischen so gut!',
                'Du hast Glück, veganes Eis gibt\'s überall!',
                'Da musst du auf nichts verzichten!',
            ],
            [
                'Ben & Jerry\'s hat eine ganze milchfreie Reihe: ' . generate_and_cache_shlink('https://www.benjerry.com/flavors/non-dairy'),
                'Hier ein Guide zu den besten veganen Eissorten, gekauft und selbst gemacht: ' . generate_and_cache_shlink('https://vegan.com/food/ice-cream/'),
                'Die meisten Supermärkte haben Eis aus Hafer, Soja, Mandel und Kokos, und Ben & Jerry\'s hat auch eine milchfreie Reihe: ' . generate_and_cache_shlink('https://www.benjerry.com/flavors/non-dairy'),
            ],
            [
                'Lass es dir schmecken! 🍦',
                'Verrat mir deine Lieblingssorte!',
                'Schreib mir, wenn du mehr Ideen willst!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-drumstick-bite',
        'title' => 'Ich liebe Hähnchen',
        'body' => [
            [
                'Veganes Hähnchen ist echt gut geworden!',
                'Hähnchen geht weiterhin, nur eben pflanzlich!',
                'Gute Nachricht: Es gibt jede Menge Alternativen!',
            ],
            [
                'Schau im Supermarkt mal im Kühlregal und in der Tiefkühltruhe nach pflanzlichen Nuggets, Streifen und Filets. Es gibt viele Marken zum Ausprobieren.',
                'Viele Lokale haben jetzt vegane Chicken-Burger und Wraps. HappyCow zeigt dir, was es in deiner Nähe gibt: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Hähnchen aus Seitan oder Soja ist super in Wraps und Pfannengerichten. Hier ein paar einfache Rezepte: ' . generate_and_cache_shlink('https://veganuary.com/de/rezepte/'),
            ],
            [
                'Schreib mir, wenn du Markentipps willst!',
                'Ich helfe gern!',
                'Guten Appetit!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-glass-whiskey',
        'title' => 'Pflanzenmilch',
        'body' => [
            [
                'Der Umstieg auf Pflanzenmilch ist leicht!',
                'Es gibt inzwischen so viele Sorten Pflanzenmilch!',
                'Ein super Einstieg!',
            ],
            [
                'Hafer, Soja, Mandel, Kokos, Cashew, Reis... Hafer und Soja sind super in Tee und Kaffee. Probier ein paar und schau, welche dir schmeckt!',
                'Wenn du wissen willst, warum Leute umsteigen, lohnt sich dieses kurze Video: ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI'),
                'Achte auf Sorten, die mit Calcium angereichert sind. Sojamilch hat etwa so viel Protein wie Kuhmilch.',
            ],
            [
                'Schreib mir, wenn du Fragen hast!',
                'Viel Spaß beim Ausprobieren!',
                'Ich helfe gern!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-video',
        'title' => 'Dokus',
        'body' => [
            [
                'Hier ein paar sehenswerte Dokus:',
                'Filme, die dir helfen könnten:',
                'Zwei richtig gute Dokus:',
            ],
            [
                'Dominion (gratis) zeigt, wie Tiere in der Landwirtschaft behandelt werden: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' The Game Changers handelt von Sportprofis mit pflanzlicher Ernährung: ' . generate_and_cache_shlink('https://gamechangersmovie.com/'),
                'Dominion ist kostenlos und lässt dich so schnell nicht los: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' Die kurzen Videos von Earthling Ed sind super für die üblichen Fragen: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'The Game Changers, über Spitzensport mit pflanzlicher Ernährung: ' . generate_and_cache_shlink('https://gamechangersmovie.com/') . ' Und Dominion, kostenlos, über das Leben in der Tierhaltung: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
            ],
            [
                'Sag mir, wie du sie findest! 🌱',
                'Sag Bescheid, wenn du reinschaust!',
                'Ich red gern mit dir darüber!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-sad-cry',
        'title' => 'Dominion',
        'body' => [
            [
                'Ich kann dir Dominion wirklich empfehlen.',
                'Kennst du schon Dominion?',
                'Wenn du dir nur eine Sache anschaust, dann Dominion.',
            ],
            [
                'Das ist eine kostenlose Doku darüber, wie Tiere in der Landwirtschaft wirklich behandelt werden: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' Schon die ersten 15 Minuten lohnen sich.',
                'Der Film zeigt, was in Ställen und Schlachthöfen passiert, und ist kostenlos: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
                'Die Doku ist gratis und hat schon viele zum Umdenken gebracht: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' Schwer anzuschauen, aber es lohnt sich.',
            ],
            [
                'Schreib mir, wenn du darüber reden willst!',
                'Ich beantworte gern deine Fragen!',
                'Wenn du vegan werden willst, helfe ich dir gern!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-baby',
        'title' => 'Kleine Schritte',
        'body' => [
            [
                'Toll, dass du darüber nachdenkst! 🐮',
                'Wie cool!',
                'Schön, dass du es ausprobieren willst!',
            ],
            [
                'Wenn dir das zu viel auf einmal ist, geh es Schritt für Schritt an: erst Pflanzenmilch, dann Butter, dann Fleisch. Vegan Bootcamp begleitet dich dabei: ' . generate_and_cache_shlink('https://veganbootcamp.org'),
                'Probier eine vegane Mahlzeit am Tag und steigere dich dann. Veganuary hat einfache Rezepte für den Anfang: ' . generate_and_cache_shlink('https://veganuary.com/de/rezepte/'),
                'Fang mit dem Einfachsten an, etwa Milch oder Burger, und mach dann weiter. Challenge 22 unterstützt dich dabei mit Mentoring: ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'Du schaffst das!',
                'Schreib mir, wenn du Hilfe brauchst!',
                'Jeder Schritt zählt!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Vegetarisch',
        'body' => [
            [
                'Vegetarisch ist ein toller Schritt!',
                'Super, gut gemacht!',
                'Starker Anfang!',
            ],
            [
                'Dieses Video erklärt, warum es so viel ausmacht, ganz vegan zu leben: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=uWna6-niYEg'),
                'Leider steckt auch in Milch und Eiern viel Leid. Dieses kurze Video erklärt, warum: ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI'),
                'Lust auf den nächsten Schritt? Challenge 22 ist kostenlos, mit persönlichem Mentoring: ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'Schreib mir, wenn du Fragen hast!',
                'Wenn du es probieren willst, helfe ich gern!',
                'Du bist schon fast da!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-coins',
        'title' => 'Zu teuer',
        'body' => [
            [
                'Es kann sogar günstiger sein!',
                'Veganes Essen kann richtig günstig sein!',
                'Da hab ich gute Nachrichten!',
            ],
            [
                'Bohnen, Linsen, Reis, Nudeln, Haferflocken, Kartoffeln und TK-Gemüse gehören zu den günstigsten Lebensmitteln überhaupt. Teuer sind eher die Spezialprodukte.',
                'Laut einer Oxford-Studie könnte vegane Ernährung die Lebensmittelkosten in Ländern wie Großbritannien und den USA um bis zu ein Drittel senken: ' . generate_and_cache_shlink('https://www.ox.ac.uk/news/2021-11-11-sustainable-eating-cheaper-and-healthier-oxford-study'),
                'Dieses Video erklärt das gut: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=Vs_nXVmyP1E') . ' Mit Bohnen, Linsen und Tofu bleibt das Kochen günstig.',
            ],
            [
                'Schreib mir, wenn du Rezepte für kleines Geld willst!',
                'Ich teile gern Ideen für preiswerte Gerichte!',
                'Hoffe, das hilft!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-calculator',
        'title' => 'Protein',
        'body' => [
            [
                'Protein ist einfacher, als viele denken!',
                'Gute Frage!',
                'Das fragen viele!',
            ],
            [
                'Bohnen, Linsen, Tofu, Tempeh, Seitan, Sojamilch, Nüsse und Samen stecken voller Protein. Hier ein kurzer Überblick: ' . generate_and_cache_shlink('https://viva.org.uk/materials/protein-myth-fact-sheet/'),
                'Mit abwechslungsreicher veganer Ernährung bekommst du reichlich davon. Hier ein Faktenblatt zum Protein-Mythos: ' . generate_and_cache_shlink('https://viva.org.uk/materials/protein-myth-fact-sheet/'),
                'Dieses Ein-Minuten-Video fasst es zusammen: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=1elt5YCRLbk') . ' Tofu, Linsen, Bohnen und Seitan sind super Proteinquellen.',
            ],
            [
                'Schreib mir, wenn du Fragen hast!',
                'Ich helfe dir gern mit Essensideen!',
                'Hoffe, das hilft!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-dumbbell',
        'title' => 'Fitness',
        'body' => [
            [
                'Vegan trainieren geht auf jeden Fall!',
                'Viele Sportler*innen leben vegan!',
                'Auch mit Pflanzen baust du Muskeln auf!',
            ],
            [
                'Im Spitzensport essen viele pflanzlich, vom Strongman bis zum Formel-1-Weltmeister. Mehr dazu in The Game Changers: ' . generate_and_cache_shlink('https://gamechangersmovie.com/'),
                'r/veganfitness ist voller Leute, die mit Pflanzenkost hart trainieren, dazu Essenspläne und Tipps: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/'),
                'Mit Tofu, Seitan, Linsen, Bohnen und Sojamilch kommst du leicht auf dein Protein. Jede Menge Trainingstipps gibt\'s hier: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/'),
            ],
            [
                'Schreib mir, wenn du Fragen hast!',
                'Viel Erfolg beim Training! 💪',
                'Ich helfe gern!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-comments',
        'title' => 'Community',
        'body' => [
            [
                'Du bist nicht allein!',
                'Es hilft echt, Leute zum Reden zu haben!',
                'Da draußen gibt\'s eine große Community!',
            ],
            [
                'r/vegan ist riesig und freundlich, da kannst du alles fragen: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/'),
                'Für Unterstützung und Fragen probier r/vegan: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/') . ' Und für Essensideen r/veganrecipes: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganrecipes/'),
                'Bei Challenge 22 bekommst du Mentoring und eine Gruppe, die gleichzeitig vegan ausprobiert: ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'Schreib mir auch gern, wenn du was brauchst!',
                'Ich helfe dir auch gern!',
                'Hoffe, das hilft!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-utensils',
        'title' => 'Auswärts essen',
        'body' => [
            [
                'Auswärts essen wird schnell einfacher!',
                'Das ist viel einfacher als früher!',
                'Gute Nachricht: Es wird immer einfacher!',
            ],
            [
                'HappyCow zeigt dir vegane und veganfreundliche Lokale in deiner Nähe: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Die meisten Lokale haben inzwischen was Veganes, und viele Karten kennzeichnen es. Für Ideen in deiner Nähe probier HappyCow: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Schau vorher online in die Karte und frag ruhig, ob sie was austauschen können. HappyCow hilft dir, gute Lokale zu finden: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Guten Appetit! 🐮',
                'Schreib mir, wenn du Hilfe brauchst!',
                'Lass es dir schmecken!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-tree',
        'title' => 'Umwelt',
        'body' => [
            [
                'Damit kannst du mit am meisten für den Planeten tun!',
                'Gute Frage!',
                'Das macht einen riesigen Unterschied!',
            ],
            [
                'Würden alle pflanzlich essen, bräuchten wir laut Our World in Data etwa 75 % weniger Agrarfläche: ' . generate_and_cache_shlink('https://ourworldindata.org/land-use-diets'),
                'Laut einer Oxford-Studie hat vegane Ernährung etwa 30 % der Umweltbelastung einer fleischreichen Ernährung: ' . generate_and_cache_shlink('https://www.medsci.ox.ac.uk/news/vegan-diet-has-just-30-of-the-environmental-impact-of-a-high-meat-diet-major-study-finds'),
                'Fleisch und Milchprodukte haben bei Emissionen, Landnutzung und Wasser einen viel größeren Fußabdruck als Pflanzenkost. Hier die Daten: ' . generate_and_cache_shlink('https://ourworldindata.org/environmental-impacts-of-food'),
            ],
            [
                'Schreib mir, wenn du mehr wissen willst! 🌍',
                'Ich erzähl dir gern mehr!',
                'Hoffe, das hilft!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-flask',
        'title' => 'Fachleute einig',
        'body' => [
            [
                'Die großen Gesundheitsorganisationen sind sich da einig!',
                'Gute Nachricht: Die Fachleute sind auf deiner Seite!',
                'Das ist längst geklärt!',
            ],
            [
                'Laut der British Dietetic Association unterstützt gut geplante pflanzliche Ernährung ein gesundes Leben in jedem Alter: ' . generate_and_cache_shlink('https://www.bda.uk.com/resource/vegetarian-vegan-plant-based-diet.html'),
                'Ernährungsverbände in den USA, Großbritannien, Kanada und Australien sagen, dass gut geplante vegane Ernährung in jedem Alter gesund ist. Überblick: ' . generate_and_cache_shlink('https://en.wikipedia.org/wiki/Vegan_nutrition#Positions_of_dietetic_and_government_associations'),
                'Laut dem britischen Gesundheitsdienst NHS bekommst du mit guter Planung auch vegan alle Nährstoffe, die du brauchst: ' . generate_and_cache_shlink('https://www.nhs.uk/live-well/eat-well/how-to-eat-a-balanced-diet/the-vegan-diet/'),
            ],
            [
                'Schreib mir, wenn du Fragen hast!',
                'Ich helfe gern!',
                'Hoffe, das hilft!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-heartbeat',
        'title' => 'Gesundheit',
        'body' => [
            [
                'Gute Frage!',
                'Vegan kann richtig gesund sein!',
                'Da gibt\'s gute Nachrichten!',
            ],
            [
                'Gut geplante vegane Ernährung geht mit einem geringeren Risiko für Herzkrankheiten, Typ-2-Diabetes und manche Krebsarten einher. Der NHS hat einen guten Leitfaden: ' . generate_and_cache_shlink('https://www.nhs.uk/live-well/eat-well/how-to-eat-a-balanced-diet/the-vegan-diet/'),
                'Die WHO stuft verarbeitetes Fleisch als krebserregend ein und rotes Fleisch als wahrscheinlich krebserregend: ' . generate_and_cache_shlink('https://www.who.int/news-room/questions-and-answers/item/cancer-carcinogenicity-of-the-consumption-of-red-meat-and-processed-meat'),
                'Laut der British Dietetic Association unterstützt gut geplante pflanzliche Ernährung ein gesundes Leben in jedem Alter: ' . generate_and_cache_shlink('https://www.bda.uk.com/resource/vegetarian-vegan-plant-based-diet.html'),
            ],
            [
                'Schreib mir, wenn du Fragen hast!',
                'Ich helfe dir gern bei der Essensplanung!',
                'Hoffe, das hilft!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Keine Lust zu kochen',
        'body' => [
            [
                'Geht auch ganz ohne Kochen!',
                'Das ist total okay!',
                'Gute Nachricht: Du musst nicht kochen!',
            ],
            [
                'Supermärkte sind inzwischen voll mit veganen Fertiggerichten, Sandwiches, TK-Pizzen und Snacks. Greif einfach zur veganen Version von dem, was du sonst kaufst.',
                'Viele, die vegan leben, kochen kaum! Fertiggerichte, Wraps, Brot mit Aufstrich, Müsli mit Hafermilch... das zählt alles.',
                'Auswärts essen ist auch einfach. HappyCow zeigt dir veganfreundliche Lokale in deiner Nähe: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Schreib mir, wenn du einfache Ideen willst!',
                'Ich verrate dir gern meine Faulpelz-Favoriten!',
                'Hoffe, das hilft!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-meh-blank',
        'title' => 'Essen ist langweilig',
        'body' => [
            [
                'Das muss es wirklich nicht sein!',
                'Veganes Essen kann der Hammer sein!',
                'Glaub mir, es ist alles andere als langweilig!',
            ],
            [
                'Fast jedes Gericht geht auch vegan: Currys, Burger, Pasta, Kuchen. Hier gibt\'s jede Menge Rezepte: ' . generate_and_cache_shlink('https://veganuary.com/de/rezepte/'),
                'Such mal nach deinem Lieblingsgericht plus „vegan“, von fast allem gibt\'s eine vegane Version. Fürs Auswärtsessen: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'r/veganrecipes ist voller Ideen: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganrecipes/') . ' Und mit HappyCow findest du tolle Lokale: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Schreib mir, wenn du Tipps willst!',
                'Lass es dir schmecken! 😋',
                'Viel Spaß beim Kochen!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-fist-raised',
        'title' => '30+ Argumente',
        'body' => [
            [
                'Das ist ein echter Klassiker!',
                'Gute Frage, die kommt oft!',
                'Das höre ich oft!',
            ],
            [
                'Dieser kostenlose Guide geht auf die 30 häufigsten Argumente gegen Veganismus ein: ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf'),
                'Earthling Ed nimmt sich in kurzen Videos 30 gängige Ausreden vor: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'Dieser Guide behandelt die 30 häufigsten Mythen: ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf') . ' Oder lieber als Video: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
            ],
            [
                'Schreib mir, wenn du darüber reden willst!',
                'Ich beantworte gern deine Fragen!',
                'Hoffe, das hilft!',
            ],
        ],
    ],
];
