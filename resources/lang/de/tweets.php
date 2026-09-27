<?php

require_once(app_path('generate_and_cache_shlink.php'));

return [
    [
        'icon' => 'info',
        'title' => 'Allgemeines',
        'body' => [
            [
                'Probier\'s unbedingt aus!',
                'Das freut mich zu hören!',
                'Trau dich, du bereust es nicht!',
            ],
            [
                'Die meisten sagen, sie bereuen nur, nicht früher vegan geworden zu sein. r/vegan hilft bei Fragen: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/') . ' und diese Kurzvideos klären typische Zweifel: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'Ein guter Einstieg ist die kostenlose 31-Tage-Challenge von Veganuary, die du jederzeit starten kannst. Dazu gibt\'s Essenspläne und tägliche Mails: ' . generate_and_cache_shlink('https://veganuary.com/de/jetzt-mitmachen/'),
                'Veganstart von PETA ist gratis und begleitet dich 30 Tage mit Rezepten und Tipps: ' . generate_and_cache_shlink('https://www.veganstart.de/') . ' Warum das wichtig ist, zeigt der Anfang von Dominion (auf Deutsch): ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=V7DrljVAaYk'),
            ],
            [
                'Schreib mir, wenn du Hilfe brauchst.',
                'Frag mich gern, wenn was unklar ist.',
                'Melde dich, wenn du feststeckst!',
            ],
        ],
    ],

    [
        'icon' => 'calendar-check',
        'title' => 'Vegan-Challenge',
        'body' => [
            [
                'Hey!',
                'Hi!',
                'Wie cool!',
            ],
            [
                'Veganuary hat eine kostenlose 31-Tage-Challenge, die du jederzeit starten kannst, mit Essensplänen und täglichen Mails: ' . generate_and_cache_shlink('https://veganuary.com/de/jetzt-mitmachen/'),
                'Veganstart ist eine kostenlose 30-Tage-Challenge von PETA mit Rezepten, Tipps und einem Team, das deine Fragen beantwortet: ' . generate_and_cache_shlink('https://www.veganstart.de/'),
                'Vegan Bootcamp ist kostenlos: kurze Kurse zu Essen, Ernährung und mehr, ganz in deinem Tempo: ' . generate_and_cache_shlink('https://veganbootcamp.org'),
            ],
            [
                'Du schaffst das!',
                'Viel Erfolg!',
                'Ich drück dir die Daumen!',
                'Schreib mir, wenn du Hilfe brauchst.',
            ],
        ],
    ],

    [
        'icon' => 'hamburger',
        'title' => 'Ich liebe Fleisch',
        'body' => [
            [
                'Veganes Fleisch ist richtig gut geworden!',
                'Vermissen musst du nichts!',
                'Versteh ich, aber die Alternativen sind inzwischen echt gut.',
            ],
            [
                'Die meisten Supermärkte haben inzwischen pflanzliche Burger, Würstchen, Hack und Nuggets. Beyond Meat ist ein guter Anfang: ' . generate_and_cache_shlink('https://www.beyondmeat.com/de-DE/'),
                'Du kannst heute fast alles ersetzen: Burger, Würstchen, Speck, Hack. Probier ein paar Marken, auch die Eigenmarke deines Supermarkts, und schau, was dir schmeckt.',
                'Auch viele Restaurants und Ketten haben jetzt pflanzliche Gerichte. HappyCow zeigt dir veganfreundliche Lokale in deiner Nähe: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Schreib mir, wenn du Tipps willst.',
                'Ich kann dir meine Favoriten schicken.',
                'Viel Spaß beim Ausprobieren!',
            ],
        ],
    ],

    [
        'icon' => 'cheese',
        'title' => 'Ich liebe Käse',
        'body' => [
            [
                'Veganer Käse hat sich enorm gemacht!',
                'Veganer Käse ist so viel besser als früher!',
                'Du wirst staunen, wie gut veganer Käse heute ist!',
            ],
            [
                'Violife ist ein super Allrounder und schmilzt gut: ' . generate_and_cache_shlink('https://www.violife.com/de-de/') . ' Auch gut: Simply V und Bedda.',
                'Hier ein Überblick über vegane Käsesorten, von Scheibenkäse bis Brie: ' . generate_and_cache_shlink('https://www.peta.de/veganleben/veganer-kaese/'),
                'Die Marken unterscheiden sich stark, also probier ein paar aus. Violife ist ein guter Anfang und schmilzt auf Pizza und Toast: ' . generate_and_cache_shlink('https://www.violife.com/de-de/'),
            ],
            [
                'Schreib mir, wenn du mehr Ideen willst.',
                'Ich kann dir ein paar empfehlen.',
                'Lass es dir schmecken! 🧀',
            ],
        ],
    ],

    [
        'icon' => 'pizza',
        'title' => 'Ich liebe Pizza',
        'body' => [
            [
                'Pizza ist ganz einfach!',
                'Auf Pizza musst du nicht verzichten!',
                'Vegane Pizza findest du inzwischen leicht!',
            ],
            [
                'Viele Ketten haben inzwischen Pizza mit veganem Käse oder ganz ohne Käse. HappyCow zeigt dir veganfreundliche Lokale in deiner Nähe: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Die meisten Supermärkte haben jetzt vegane Pizza, hier eine Übersicht: ' . generate_and_cache_shlink('https://www.peta.de/veganleben/vegane-tiefkuehlpizza/'),
                'Wagner hat vegane und vegetarische Tiefkühlpizzen: ' . generate_and_cache_shlink('https://www.original-wagner.de/produkte/vegan-vegetarisch') . ' Und viele Pizzerien nehmen auf Nachfrage veganen Käse.',
            ],
            [
                'Guten Appetit! 🍕',
                'Schreib mir, wenn du Hilfe bei der Suche brauchst.',
                'Lass es dir schmecken!',
            ],
        ],
    ],

    [
        'icon' => 'egg',
        'title' => 'Ich liebe Eier',
        'body' => [
            [
                'Eier sind leichter zu ersetzen, als du denkst!',
                'Für Eier gibt\'s gute Alternativen.',
                'Da hast du viele Möglichkeiten!',
            ],
            [
                'Rührtofu ist ein super Ersatz für Rührei, vor allem mit etwas Spinat: ' . generate_and_cache_shlink('https://www.vegan-taste-week.de/rezepte/ruhrtofu-vegane-alternative-zu-ruhrei'),
                'JUST Egg besteht aus Mungbohnen und wird in der Pfanne genau wie Rührei: ' . generate_and_cache_shlink('https://www.ju.st/just-egg-de'),
                'Falls dir der Verzicht auf Eier schwerfällt, hilft dir dieser Guide: ' . generate_and_cache_shlink('https://proveg.org/de/5-pros/pro-genuss/veganer-ei-ersatz') . ' Und so werden Legehennen behandelt: ' . generate_and_cache_shlink('https://albert-schweitzer-stiftung.de/massentierhaltung/huehner/legehennen'),
            ],
            [
                'Schreib mir, wenn du Rezepte willst.',
                'Ich hab noch mehr Ideen, wenn du magst.',
                'Viel Spaß beim Ausprobieren!',
            ],
        ],
    ],

    [
        'icon' => 'ice-cream',
        'title' => 'Ich liebe Eis',
        'body' => [
            [
                'Veganes Eis ist inzwischen so gut!',
                'Du hast Glück, veganes Eis gibt\'s überall!',
                'Auf Eis musst du nicht verzichten!',
            ],
            [
                'Ben & Jerry\'s hat auch vegane Sorten: ' . generate_and_cache_shlink('https://www.benjerry.de/sorten/non-dairy'),
                'Hier ein Guide zu den besten veganen Eissorten, gekauft und selbst gemacht: ' . generate_and_cache_shlink('https://www.peta.de/veganleben/veganes-eis/'),
                'Die meisten Supermärkte haben Eis aus Hafer, Soja, Mandel und Kokos, und Ben & Jerry\'s hat auch vegane Sorten: ' . generate_and_cache_shlink('https://www.benjerry.de/sorten/non-dairy'),
            ],
            [
                'Lass es dir schmecken! 🍦',
                'Verrat mir deine Lieblingssorte!',
                'Schreib mir, wenn du mehr Ideen willst.',
            ],
        ],
    ],

    [
        'icon' => 'bird',
        'title' => 'Ich liebe Hähnchen',
        'body' => [
            [
                'Veganes Hähnchen ist echt gut geworden!',
                'Hähnchen geht weiterhin, nur eben pflanzlich!',
                'Es gibt jede Menge Alternativen!',
            ],
            [
                'Schau im Supermarkt mal im Kühlregal und in der Tiefkühltruhe nach pflanzlichen Nuggets, Streifen und Filets. Es gibt viele Marken zum Ausprobieren.',
                'Viele Lokale haben jetzt vegane Chicken-Burger und Wraps. HappyCow zeigt dir, was es in deiner Nähe gibt: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Hähnchen aus Seitan oder Soja ist super in Wraps und Pfannengerichten. Hier ein paar einfache Rezepte: ' . generate_and_cache_shlink('https://veganuary.com/de/rezepte/'),
            ],
            [
                'Schreib mir, wenn du Markentipps willst.',
                'Probier einfach ein paar aus!',
                'Guten Appetit!',
            ],
        ],
    ],

    [
        'icon' => 'pint-glass',
        'title' => 'Pflanzenmilch',
        'body' => [
            [
                'Der Umstieg auf Pflanzenmilch ist leicht!',
                'Es gibt inzwischen so viele Sorten Pflanzenmilch!',
                'Ein super Einstieg!',
            ],
            [
                'Hafer, Soja, Mandel, Kokos, Cashew, Reis... Hafer und Soja sind super in Tee und Kaffee. Probier ein paar und schau, welche dir schmeckt.',
                'Wenn du wissen willst, warum Leute umsteigen, lohnt sich dieses kurze Video: ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI'),
                'Achte auf Sorten, die mit Calcium angereichert sind. Sojamilch hat etwa so viel Protein wie Kuhmilch.',
            ],
            [
                'Schreib mir, wenn du Fragen hast.',
                'Viel Spaß beim Ausprobieren!',
                'Erzähl mal, wie es läuft!',
            ],
        ],
    ],

    [
        'icon' => 'film-slate',
        'title' => 'Dokus',
        'body' => [
            [
                'Hier ein paar sehenswerte Dokus:',
                'Filme, die dir helfen könnten:',
                'Zwei richtig gute Dokus:',
            ],
            [
                'Dominion (gratis) zeigt, wie Tiere in der Landwirtschaft behandelt werden: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=V7DrljVAaYk') . ' The Game Changers handelt von Sportprofis mit pflanzlicher Ernährung: ' . generate_and_cache_shlink('https://gamechangersmovie.com/'),
                'Dominion ist kostenlos und lässt dich so schnell nicht los: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=V7DrljVAaYk') . ' Die kurzen Videos von Earthling Ed sind super für die üblichen Fragen: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'The Game Changers, über Spitzensport mit pflanzlicher Ernährung: ' . generate_and_cache_shlink('https://gamechangersmovie.com/') . ' Und Dominion, kostenlos, über das Leben in der Tierhaltung: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=V7DrljVAaYk'),
            ],
            [
                'Sag mir, wie du sie findest! 🌱',
                'Sag Bescheid, wenn du reinschaust!',
                'Wenn du magst, reden wir danach drüber.',
            ],
        ],
    ],

    [
        'icon' => 'eye',
        'title' => 'Dominion',
        'body' => [
            [
                'Ich kann dir Dominion wirklich empfehlen.',
                'Kennst du schon Dominion?',
                'Wenn du dir nur eine Sache anschaust, dann Dominion.',
            ],
            [
                'Das ist eine kostenlose Doku darüber, wie Tiere in der Landwirtschaft wirklich behandelt werden: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=V7DrljVAaYk') . ' Schon die ersten 15 Minuten lohnen sich.',
                'Der Film zeigt, was in Ställen und Schlachthöfen passiert, und ist kostenlos: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=V7DrljVAaYk'),
                'Die Doku ist gratis und hat schon viele zum Umdenken gebracht: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=V7DrljVAaYk') . ' Schwer anzuschauen, aber es lohnt sich.',
            ],
            [
                'Schreib mir, wenn du darüber reden willst.',
                'Frag mich ruhig alles.',
                'Wenn du vegan werden willst, helfe ich dir dabei.',
            ],
        ],
    ],

    [
        'icon' => 'footprints',
        'title' => 'Kleine Schritte',
        'body' => [
            [
                'Toll, dass du darüber nachdenkst! 🐮',
                'Find ich super!',
                'Schön, dass du es ausprobieren willst!',
            ],
            [
                'Wenn dir das zu viel auf einmal ist, geh es Schritt für Schritt an: erst Pflanzenmilch, dann Butter, dann Fleisch. Vegan Bootcamp begleitet dich dabei: ' . generate_and_cache_shlink('https://veganbootcamp.org'),
                'Probier eine vegane Mahlzeit am Tag und steigere dich dann. Veganuary hat einfache Rezepte für den Anfang: ' . generate_and_cache_shlink('https://veganuary.com/de/rezepte/'),
                'Fang mit dem Einfachsten an, etwa Milch oder Burger, und mach dann weiter. Veganstart unterstützt dich dabei 30 Tage lang mit Rezepten und Tipps: ' . generate_and_cache_shlink('https://www.veganstart.de/'),
            ],
            [
                'Du schaffst das!',
                'Schreib mir, wenn du Hilfe brauchst.',
                'Du musst nicht alles auf einmal machen.',
            ],
        ],
    ],

    [
        'icon' => 'carrot',
        'title' => 'Vegetarisch',
        'body' => [
            [
                'Vegetarisch ist ein toller Schritt!',
                'Schon vegetarisch? Super!',
                'Starker Anfang!',
            ],
            [
                'Dieses Video erklärt, warum es so viel ausmacht, ganz vegan zu leben: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=uWna6-niYEg'),
                'Leider steckt auch in Milch und Eiern viel Leid. Dieses kurze Video erklärt, warum: ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI'),
                'Lust auf den nächsten Schritt? Veganstart ist kostenlos und begleitet dich 30 Tage: ' . generate_and_cache_shlink('https://www.veganstart.de/'),
            ],
            [
                'Schreib mir, wenn du Fragen hast.',
                'Wenn du es probieren willst, helfe ich dir.',
                'Du bist schon fast da!',
            ],
        ],
    ],

    [
        'icon' => 'piggy-bank',
        'title' => 'Zu teuer',
        'body' => [
            [
                'Es kann sogar günstiger sein!',
                'Veganes Essen kann richtig günstig sein!',
                'Muss es gar nicht sein!',
            ],
            [
                'Bohnen, Linsen, Reis, Nudeln, Haferflocken, Kartoffeln und TK-Gemüse gehören zu den günstigsten Lebensmitteln überhaupt. Teuer sind eher die Spezialprodukte.',
                'Laut einer Oxford-Studie könnte vegane Ernährung die Lebensmittelkosten in Ländern wie Großbritannien und den USA um bis zu ein Drittel senken: ' . generate_and_cache_shlink('https://www.ox.ac.uk/news/2021-11-11-sustainable-eating-cheaper-and-healthier-oxford-study'),
                'Dieses Video erklärt das gut: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=Vs_nXVmyP1E') . ' Mit Bohnen, Linsen und Tofu bleibt das Kochen günstig.',
            ],
            [
                'Schreib mir, wenn du Rezepte für kleines Geld willst.',
                'Ich kann dir ein paar günstige Gerichte schicken.',
                'Erzähl mal, wie es läuft!',
            ],
        ],
    ],

    [
        'icon' => 'bowl-food',
        'title' => 'Protein',
        'body' => [
            [
                'Protein ist einfacher, als viele denken!',
                'Protein bekommst du locker genug!',
                'Das fragen viele!',
            ],
            [
                'Bohnen, Linsen, Tofu, Tempeh, Seitan, Sojamilch, Nüsse und Samen haben alle viel Protein. Hier ein kurzer Überblick: ' . generate_and_cache_shlink('https://proveg.org/de/5-pros/pro-gesundheit/eiweiss-proteinmangel-vegan-vorbeugen'),
                'Mit abwechslungsreicher veganer Ernährung bekommst du reichlich davon. Hier ein Überblick von ProVeg: ' . generate_and_cache_shlink('https://proveg.org/de/5-pros/pro-gesundheit/eiweiss-proteinmangel-vegan-vorbeugen'),
                'Dieses Ein-Minuten-Video fasst es zusammen: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=1elt5YCRLbk') . ' Tofu, Linsen, Bohnen und Seitan sind super Proteinquellen.',
            ],
            [
                'Schreib mir, wenn du Fragen hast.',
                'Ich kann dir ein paar Essensideen schicken.',
                'Viel Erfolg!',
            ],
        ],
    ],

    [
        'icon' => 'barbell',
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
                'Schreib mir, wenn du Fragen hast.',
                'Viel Erfolg beim Training! 💪',
                'Erzähl mal, wie es läuft!',
            ],
        ],
    ],

    [
        'icon' => 'users-three',
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
                'Schreib mir auch gern, wenn du was brauchst.',
                'Ich bin auch da, wenn du reden willst.',
                'Viel Erfolg!',
            ],
        ],
    ],

    [
        'icon' => 'fork-knife',
        'title' => 'Auswärts essen',
        'body' => [
            [
                'Auswärts essen wird schnell einfacher!',
                'Das ist viel einfacher als früher!',
                'Einfacher, als du denkst!',
            ],
            [
                'HappyCow zeigt dir vegane und veganfreundliche Lokale in deiner Nähe: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Die meisten Lokale haben inzwischen was Veganes, und viele Karten kennzeichnen es. Für Ideen in deiner Nähe probier HappyCow: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Schau vorher online in die Karte und frag ruhig, ob sie was austauschen können. HappyCow hilft dir, gute Lokale zu finden: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Guten Appetit! 🌱',
                'Schreib mir, wenn du Hilfe brauchst.',
                'Lass es dir schmecken!',
            ],
        ],
    ],

    [
        'icon' => 'globe-hemisphere-west',
        'title' => 'Umwelt',
        'body' => [
            [
                'Damit kannst du mit am meisten für den Planeten tun!',
                'Die Daten sind da ziemlich eindeutig!',
                'Das macht einen riesigen Unterschied!',
            ],
            [
                'Würden alle pflanzlich essen, bräuchten wir laut einer großen Oxford-Studie rund 75 % weniger Agrarfläche: ' . generate_and_cache_shlink('https://de.wikipedia.org/wiki/Veganismus#Umweltvertr%C3%A4glichkeit'),
                'Laut einer Oxford-Studie hat vegane Ernährung etwa 30 % der Umweltbelastung einer fleischreichen Ernährung: ' . generate_and_cache_shlink('https://www.medsci.ox.ac.uk/news/vegan-diet-has-just-30-of-the-environmental-impact-of-a-high-meat-diet-major-study-finds'),
                'Fleisch und Milchprodukte haben bei Emissionen, Landnutzung und Wasser einen viel größeren Fußabdruck als Pflanzenkost. Hier die Daten (PDF): ' . generate_and_cache_shlink('https://www.umweltbundesamt.de/system/files/medien/6232/dokumente/ifeu_2020_oekologische-fussabdruecke-von-lebensmitteln.pdf'),
            ],
            [
                'Schreib mir, wenn du mehr wissen willst 🌍',
                'Ich kann dir gern mehr schicken.',
                'Schau mal rein!',
            ],
        ],
    ],

    [
        'icon' => 'stethoscope',
        'title' => 'Fachleute einig',
        'body' => [
            [
                'Die großen Gesundheitsorganisationen sind sich da einig!',
                'Die Fachleute sind da auf deiner Seite!',
                'Da ist die Lage ziemlich klar!',
            ],
            [
                'Laut der British Dietetic Association unterstützt gut geplante pflanzliche Ernährung ein gesundes Leben in jedem Alter: ' . generate_and_cache_shlink('https://www.bda.uk.com/resource/vegetarian-vegan-plant-based-diet.html'),
                'Ernährungsverbände in den USA, Großbritannien, Kanada und Australien sagen, dass gut geplante vegane Ernährung in jedem Alter gesund ist. Überblick: ' . generate_and_cache_shlink('https://en.wikipedia.org/wiki/Vegan_nutrition#Positions_of_dietetic_and_government_associations'),
                'Laut dem britischen Gesundheitsdienst NHS bekommst du mit guter Planung auch vegan alle Nährstoffe, die du brauchst: ' . generate_and_cache_shlink('https://www.nhs.uk/live-well/eat-well/how-to-eat-a-balanced-diet/the-vegan-diet/'),
            ],
            [
                'Schreib mir, wenn du Fragen hast.',
                'Lohnt sich, reinzulesen!',
                'Sag Bescheid, wenn du mehr Quellen willst.',
            ],
        ],
    ],

    [
        'icon' => 'heartbeat',
        'title' => 'Gesundheit',
        'body' => [
            [
                'Viele werden aus gesundheitlichen Gründen vegan!',
                'Vegan kann richtig gesund sein!',
                'Dafür gibt\'s gute Belege!',
            ],
            [
                'Gut geplante vegane Ernährung geht mit einem geringeren Risiko für Herzkrankheiten, Typ-2-Diabetes und manche Krebsarten einher. Der NHS hat einen guten Leitfaden: ' . generate_and_cache_shlink('https://www.nhs.uk/live-well/eat-well/how-to-eat-a-balanced-diet/the-vegan-diet/'),
                'Die WHO stuft verarbeitetes Fleisch als krebserregend ein und rotes Fleisch als wahrscheinlich krebserregend: ' . generate_and_cache_shlink('https://www.who.int/news-room/questions-and-answers/item/cancer-carcinogenicity-of-the-consumption-of-red-meat-and-processed-meat'),
                'Laut der British Dietetic Association unterstützt gut geplante pflanzliche Ernährung ein gesundes Leben in jedem Alter: ' . generate_and_cache_shlink('https://www.bda.uk.com/resource/vegetarian-vegan-plant-based-diet.html'),
            ],
            [
                'Schreib mir, wenn du Fragen hast.',
                'Ich kann dir bei der Essensplanung helfen.',
                'Lohnt sich, reinzulesen!',
            ],
        ],
    ],

    [
        'icon' => 'couch',
        'title' => 'Keine Lust zu kochen',
        'body' => [
            [
                'Geht auch ganz ohne Kochen!',
                'Verständlich!',
                'Du musst echt nicht kochen!',
            ],
            [
                'Supermärkte sind inzwischen voll mit veganen Fertiggerichten, Sandwiches, TK-Pizzen und Snacks. Greif einfach zur veganen Version von dem, was du sonst kaufst.',
                'Viele, die vegan leben, kochen kaum! Fertiggerichte, Wraps, Brot mit Aufstrich, Müsli mit Hafermilch... das zählt alles.',
                'Auswärts essen ist auch einfach. HappyCow zeigt dir veganfreundliche Lokale in deiner Nähe: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Schreib mir, wenn du einfache Ideen willst.',
                'Frag mich nach meinen Faulpelz-Favoriten!',
                'Guten Appetit!',
            ],
        ],
    ],

    [
        'icon' => 'pepper',
        'title' => 'Essen ist langweilig',
        'body' => [
            [
                'Das muss es wirklich nicht sein!',
                'Veganes Essen kann der Hammer sein!',
                'Da gibt\'s so viel mehr als Salat!',
            ],
            [
                'Fast jedes Gericht geht auch vegan: Currys, Burger, Pasta, Kuchen. Hier gibt\'s jede Menge Rezepte: ' . generate_and_cache_shlink('https://veganuary.com/de/rezepte/'),
                'Such mal nach deinem Lieblingsgericht plus „vegan“, von fast allem gibt\'s eine vegane Version. Fürs Auswärtsessen: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'r/veganrecipes ist voller Ideen: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganrecipes/') . ' Und mit HappyCow findest du tolle Lokale: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Schreib mir, wenn du Tipps willst.',
                'Lass es dir schmecken! 😋',
                'Viel Spaß beim Kochen!',
            ],
        ],
    ],

    [
        'icon' => 'chats-circle',
        'title' => '30+ Argumente',
        'body' => [
            [
                'Das ist ein echter Klassiker!',
                'Berechtigte Frage!',
                'Das höre ich oft!',
            ],
            [
                'Dieser kostenlose Guide geht auf die 30 häufigsten Argumente gegen Veganismus ein: ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf'),
                'Earthling Ed nimmt sich in kurzen Videos 30 gängige Ausreden vor: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'Dieser Guide behandelt die 30 häufigsten Mythen: ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf') . ' Oder lieber als Video: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
            ],
            [
                'Schreib mir, wenn du darüber reden willst.',
                'Frag mich gern, wenn was unklar ist.',
                'Schau mal rein!',
            ],
        ],
    ],
];
