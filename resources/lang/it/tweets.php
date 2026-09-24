<?php

require_once(app_path('generate_and_cache_shlink.php'));

return [
    [
        'icon' => 'fas fa-info-circle',
        'title' => 'Informazioni generali',
        'body' =>[
            [
                'Dovresti farlo! La maggior parte delle persone vegane dice che l\'unico rimpianto è non averlo fatto prima\.'
            ], [
                'Ecco qualche risorsa: ' . generate_and_cache_shlink('http://reddit.com/r/Vegan') . ' \(community\) ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=41') . ' \(film\) ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2') . ' \(miti\) 🐷 Scrivimi se hai bisogno di aiuto!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Sfida vegana',
        'body' =>[
            [
                'Ciao!',
                'Ehi!'
            ], [
                'Puoi (assolutamente |sicuramente )?farcela!',
                'Siamo (sempre )?qui per aiutarti!',
                'È (davvero |molto )?più facile di quanto pensi!'
            ], [
                '(Dovresti|Potresti) (dare un\'occhiata alla|provare la) Vegan Bootcamp Challenge!',
                'La Vegan Bootcamp Challenge (potrebbe essere|è) (proprio )?quello che cerchi\.',
                'C\'è una risorsa che si chiama Vegan Bootcamp Challenge( che potresti provare)?\.'
            ], [
                'È una sfida vegana di massimo 30 giorni che ti aiuta a farlo come un professionista!',
                'Il sito propone una sfida vegana di massimo 30 giorni per imparare a diventare vegano in modo facile!',
                'Sul sito completi 30 sfide che ti aiutano a diventare vegano un passo alla volta, è facile!'
            ], [
                'Il link è ' . generate_and_cache_shlink('https://veganbootcamp.org') . ';',
                'L\'indirizzo è ' . generate_and_cache_shlink('https://veganbootcamp.org') . ';',
                'Il sito è ' . generate_and_cache_shlink('https://veganbootcamp.org') . ';',
                'Trovi il sito qui: ' . generate_and_cache_shlink('https://veganbootcamp.org') . ';',
            ], [
                'In bocca al lupo, ce la farai!',
                'Puoi (davvero |assolutamente )?farcela!',
                'Facciamo (tutti )?il tifo per te!',
                'Tieni duro!',
                'Ce la puoi fare!'
            ], [
                'Scrivimi se ti serve (aiuto|una mano)!',
                'Rispondimi se ti serve (aiuto|una mano)!',
                '(Non esitare a|Puoi) contattarmi se ti serve (aiuto|una mano)!',
                'Se (mai )?ti serve (aiuto|una mano), mandami un (messaggio|DM)!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-bacon',
        'title' => 'Amo la carne',
        'body' =>[
            [
                'La carne vegana ha fatto ENORMI progressi negli ultimi anni!'
            ], [
                'Beyond Meat è davvero buona: ' . generate_and_cache_shlink('https://www.beyondmeat.com/') . ', e anche Gardein ha tantissimi prodotti: ' . generate_and_cache_shlink('https://www.gardein.com/') . ' Fai un giro al supermercato e guarda cosa c\'è, potresti rimanere sorpreso!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-cheese',
        'title' => 'Amo il formaggio',
        'body' =>[
            [
                'Il formaggio vegano ha fatto ENORMI progressi negli ultimi anni!'
            ], [
                'Il mio preferito è quello di "Follow Your Heart", e Daiya è ottimo per il formaggio fuso\.'
            ], [
                'Con questo link ' . generate_and_cache_shlink('https://www.peta.org/lifestyle/food/everything-you-need-to-know-about-vegan-cheese/') . ' trovi ancora più marche vicino a te! Scrivimi se ti serve aiuto per trovarne altre\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-pizza-slice',
        'title' => 'Amo la pizza',
        'body' =>[
            [
                'Di solito ci sono tante pizze vegane \(e altri ristoranti\) su ' . generate_and_cache_shlink('http://HappyCow.net') . '!'
            ], [
                'C\'è anche la pizza "Daiya": ' . generate_and_cache_shlink('https://daiyafoods.com/collections/pizza-and-flatbread') . ' e ancora più posti qui: ' . generate_and_cache_shlink('https://www.peta.org/lifestyle/food/pizza-places-vegan-options/') . ' Scrivimi se ti serve aiuto per trovarne altri\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-egg',
        'title' => 'Amo le uova',
        'body' =>[
            [
                'Ci sono tantissime ricette vegane buonissime al posto delle uova \(come questa, ma aggiungi gli spinaci\): ' . generate_and_cache_shlink('https://simpleveganblog.com/simple-tofu-scramble/')
            ], [
                'Puoi anche comprare uova vegane: ' . generate_and_cache_shlink('https://www.ju.st/eat/eggs') . ' Altre informazioni qui: ' . generate_and_cache_shlink('https://chooseveg.com/blog/go-vegan-cant-give-up-eggs-help/') . ' e soprattutto qui: ' . generate_and_cache_shlink('https://viva.org.uk/animals/egg-laying-hens/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-ice-cream',
        'title' => 'Amo il gelato',
        'body' =>[
            [
                'Prova il gelato senza latte di Ben & Jerry\'s: ' . generate_and_cache_shlink('https://www.benjerry.com/flavors/non-dairy')
            ], [
                'Hanno tantissimi gusti, e ci sono molte altre marche di gelato alla soia, alle mandorle o al cocco!'
            ], [
                '(Guarda:|Dai un\'occhiata a) ' . generate_and_cache_shlink('https://vegan.com/food/ice-cream/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-drumstick-bite',
        'title' => 'Amo il pollo',
        'body' =>[
            [
                'Gardein fa un pollo vegetale incredibile: ' . generate_and_cache_shlink('https://www.gardein.com/') . ', guarda nei negozi bio o in altri supermercati!'
            ], [
                'HappyCow per mangiare fuori: ' . generate_and_cache_shlink('https://www.happycow.net') . '! Fai un giro al supermercato e guarda cosa c\'è, potresti rimanere sorpreso!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-glass-whiskey',
        'title' => 'Latti vegetali',
        'body' =>[
            [
                'Guarda "Dairy is Scary", dura solo 5 minuti: ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI')
            ], [
                'Ora ci sono anche tanti latti vegetali buonissimi: soia, mandorla, avena, cocco, riso e anacardi!'
            ], [
                'Questi latti non vanno a male, sono più sani e non serve tenerli in frigo prima di aprirli\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-video',
        'title' => 'Documentari',
        'body' =>[
            [
                'Ecco qualche film per motivarti! Cowspiracy \(ambiente\): ' . generate_and_cache_shlink('https://www.netflix.com/title/80033772') . ' The Game Changers \(salute\): ' . generate_and_cache_shlink('https://www.netflix.com/title/81157840') . ' Dominion \(animali\): ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43')
            ], [
                'Fammi sapere se ne guardi uno! 🌱'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-sad-cry',
        'title' => 'Dominion',
        'body' =>[
            [
                'Ti consiglio davvero questo video su YouTube: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43')
            ], [
                'Se hai tempo, i primi 15 minuti del video possono cambiarti la vita\.'
            ], [
                'Scrivimi se ti serve aiuto per diventare vegano, sarò felice di aiutarti o di rispondere alle tue domande!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-baby',
        'title' => 'Un passo alla volta',
        'body' =>[
            [
                'È fantastico che tu voglia diventare vegano! 🐮'
            ], [
                'Se ti sembra troppo tutto insieme e non sai da dove cominciare, fai un passo alla volta\.'
            ], [
                'Inizia comprando latte di soia, mandorla o avena e abituati\.'
            ], [
                'Poi passa a burro, carne, ecc\. Altre informazioni: ' . generate_and_cache_shlink('https://veganbootcamp.org')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Vegetariano',
        'body' =>[
            [
                'Essere vegetariani è fantastico!'
            ], [
                'Però ti consiglio davvero di guardare questo video: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=uWna6-niYEg')
            ], [
                'Ecco alcuni argomenti comuni smontati: ' . generate_and_cache_shlink('https://drive.google.com/file/d/1dMyS7mIrr4Fal8UKF900BbLMC11IwWRH/view') . ' ed ecco la sfida vegana di un mese: ' . generate_and_cache_shlink('https://www.challenge22.com/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-coins',
        'title' => 'Troppo caro',
        'body' =>[
            [
                'Mangiare vegano costa pochissimo, diventa caro solo se compri tutti i prodotti di lusso "per vegani"!'
            ], [
                'Patate, riso, tofu, fagioli, lenticchie, verdura, frutta, pasta e fiocchi d\'avena costano pochissimo, soprattutto sfusi!'
            ], [
                'C\'è un ottimo video su questo: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=Vs_nXVmyP1E')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-calculator',
        'title' => 'Proteine',
        'body' =>[
            [
                'Quasi tutti gli alimenti, verdura, frutta e semi contengono proteine, e non ce ne servono poi così tante\.'
            ], [
                'Ecco un link che smonta il mito delle proteine e della carne: ' . generate_and_cache_shlink('https://viva.org.uk/materials/protein-myth-fact-sheet/') . ' e un video: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=1elt5YCRLbk')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-dumbbell',
        'title' => 'Sport e fitness',
        'body' =>[
            [
                'L\'uomo più forte del mondo è vegano, e tanti altri record mondiali di forza e fitness sono di persone vegane!'
            ], [
                'Allenarsi con un\'alimentazione vegetale fa bene ai tuoi allenamenti\.'
            ], [
                'Video: ' . generate_and_cache_shlink('https://www.youtube.com/results?search_query=vegan+fitness') . ' e community: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-comments',
        'title' => 'Community',
        'body' =>[
            [
                'Se hai bisogno di parlare con qualcuno, o solo di supporto e aiuto, dai un\'occhiata a ' . generate_and_cache_shlink('http://reddit.com/r/Vegan') . '!'
            ], [
                'È una community di circa 300\.000 persone vegane che conoscono le difficoltà e hanno esperienza, chiedi loro qualsiasi cosa\.'
            ], [
                'Ci sono anche /r/VeganFitness, /r/VeganRecipes e altre!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-utensils',
        'title' => 'Mangiare fuori',
        'body' =>[
            [
                'A volte mangiare fuori è difficile quando non sai dove andare o cosa ordinare, ma col tempo diventa molto più facile e presto saprai benissimo cosa prendere\.'
            ], [
                'Nel frattempo dai un\'occhiata a questo sito: ' . generate_and_cache_shlink('http://happycow.net') . ' per trovare cibo vegano vicino a te! 🐮'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-tree',
        'title' => 'Ambiente',
        'body' =>[
            [
                'Ci sono statistiche davvero spaventose su quello che l\'industria della carne e dei latticini \(l\'allevamento\) fa all\'ambiente, tutte supportate da fonti e studi: ' . generate_and_cache_shlink('https://speciesjustice.org/environment') . ' Per esempio: l\'allevamento è responsabile fino al 91% della distruzione dell\'Amazzonia\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-flask',
        'title' => 'Gli esperti concordano',
        'body' =>[
            [
                'Oggi è ampiamente riconosciuto che un\'alimentazione vegana è più sana di una con la carne\.'
            ], [
                'Ecco una pagina che cita direttamente le più grandi organizzazioni mondiali di salute, nutrizione e dietetica \(quindi organizzazioni imparziali\): ' . generate_and_cache_shlink('https://en.wikipedia.org/wiki/Vegan_nutrition#Positions_of_dietetic_and_government_associations')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-heartbeat',
        'title' => 'Salute',
        'body' =>[
            [
                'Oggi è ampiamente riconosciuto che carne e latticini sono estremamente dannosi per la salute rispetto a un\'alimentazione vegana\.'
            ], [
                'La carne è cancerogena ed è la causa della maggior parte delle malattie: cancro, malattie cardiache, diabete e obesità\.'
            ], [
                'Ecco una pagina con informazioni e fonti: ' . generate_and_cache_shlink('https://en.wikipedia.org/wiki/Vegan_nutrition#Positions_of_dietetic_and_government_associations')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Non ho voglia di cucinare',
        'body' =>[
            [
                'Anche tante persone vegane non cucinano, comprano semplicemente le opzioni vegane al supermercato o al ristorante al posto di quelle animali\.'
            ], [
                'Non serve saper cucinare per mangiare sano da vegano!'
            ], [
                'Anche mangiare fuori è facilissimo con ' . generate_and_cache_shlink('http://happycow.net') . ' 🐮 Scrivimi se ti serve aiuto!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-meh-blank',
        'title' => 'Il cibo vegano è noioso',
        'body' =>[
            [
                'Quasi tutto quello che si fa con carne o latticini si può rifare ed essere altrettanto buono, basta sapere dove comprarlo o come cucinarlo\.'
            ], [
                'Ecco qualche ricetta: ' . generate_and_cache_shlink('https://veganuary.com/recipes') . ', \(oppure cerca su Google il tuo piatto preferito \+ "vegano"\)\.'
            ], [
                'E questo per mangiare fuori: ' . generate_and_cache_shlink('https://happycow.net')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-fist-raised',
        'title' => '30+ argomenti',
        'body' =>[
            [
                'È un mito molto comune! Guarda qui: ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf') . '; parla dei 30 miti più comuni sul veganismo\.'
            ], [
                'In formato video qui: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2')
            ], [
                'Scrivimi se ti serve aiuto o se hai domande!'
            ]
        ]
    ],

];
