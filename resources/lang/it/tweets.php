<?php

require_once(app_path('generate_and_cache_shlink.php'));

return [
    [
        'icon' => 'fas fa-circle-info',
        'title' => 'Informazioni generali',
        'body' => [
            [
                'Dovresti proprio provarci!',
                'Che bella notizia!',
                'Buttati, non ti pentirai!',
            ],
            [
                'La maggior parte dei vegani dice che l\'unico rimpianto è non averlo fatto prima. Per le domande c\'è r/vegan: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/') . ' e questi brevi video sciolgono i dubbi più comuni: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'Un buon primo passo è la sfida gratuita di 31 giorni di Veganuary, che puoi iniziare quando vuoi. Ricevi ricette e un\'email al giorno: ' . generate_and_cache_shlink('https://veganuary.com/it/'),
                'Challenge 22 è gratis e ti dà un mentore e dei dietisti per 22 giorni: ' . generate_and_cache_shlink('https://challenge22.com/') . ' Per capire perché è importante, guarda l\'inizio di Dominion: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
            ],
            [
                'Scrivimi se ti serve aiuto.',
                'Se hai domande, chiedi pure.',
                'Fammi un fischio se serve!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-calendar-check',
        'title' => 'Sfida vegana',
        'body' => [
            [
                'Ehi!',
                'Ciao!',
                'Che bello!',
            ],
            [
                'Veganuary ha una sfida gratuita di 31 giorni che puoi iniziare quando vuoi, con ricette e un\'email al giorno: ' . generate_and_cache_shlink('https://veganuary.com/it/'),
                'Challenge 22 è una sfida gratuita di 22 giorni, con un mentore tutto tuo e dei dietisti a disposizione: ' . generate_and_cache_shlink('https://challenge22.com/'),
                'Vegan Bootcamp è gratuito e lo segui al tuo ritmo, con brevi corsi su cibo, nutrizione e altro: ' . generate_and_cache_shlink('https://veganbootcamp.org'),
            ],
            [
                'Ce la farai!',
                'In bocca al lupo!',
                'È più facile di quanto sembri.',
                'Scrivimi se ti serve una mano.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-bacon',
        'title' => 'Amo la carne',
        'body' => [
            [
                'La carne vegana ha fatto passi da gigante!',
                'Non devi farne a meno!',
                'Ti capisco, ma ormai le alternative sono davvero buone.',
            ],
            [
                'La maggior parte dei supermercati ora vende burger, salsicce, macinato e nuggets vegetali. Beyond Meat è un buon punto di partenza: ' . generate_and_cache_shlink('https://www.beyondmeat.com/'),
                'Oggi puoi sostituire quasi tutto: burger, salsicce, pancetta, macinato. Prova qualche marca, anche quella del tuo supermercato, e vedi cosa ti piace.',
                'Anche tanti ristoranti e catene ora hanno opzioni vegetali. HappyCow ti mostra i locali vegan-friendly vicino a te: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Scrivimi se vuoi qualche consiglio.',
                'Se vuoi, ti mando i miei preferiti.',
                'Divertiti a provarli!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-cheese',
        'title' => 'Amo il formaggio',
        'body' => [
            [
                'Il formaggio vegano ha fatto passi da gigante!',
                'Il formaggio vegano è molto più buono di una volta!',
                'Non immagini quanto sia buono oggi il formaggio vegano!',
            ],
            [
                'Violife è ottimo per tutto e si scioglie bene: ' . generate_and_cache_shlink('https://violifefoods.com/') . ' Anche Follow Your Heart e Daiya sono buoni.',
                'Ecco una guida ai formaggi vegani, da quelli a fette al brie: ' . generate_and_cache_shlink('https://www.peta.org/lifestyle/food/everything-you-need-to-know-about-vegan-cheese/'),
                'C\'è molta differenza tra le marche, quindi provane qualcuna. Violife è un buon inizio, e si scioglie su pizza e toast: ' . generate_and_cache_shlink('https://violifefoods.com/'),
            ],
            [
                'Scrivimi se vuoi altre idee.',
                'Te ne posso consigliare qualcuno.',
                'Buon appetito! 🧀',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-pizza-slice',
        'title' => 'Amo la pizza',
        'body' => [
            [
                'Con la pizza è facile!',
                'Non devi rinunciare alla pizza!',
                'Ormai la pizza vegana si trova facilmente!',
            ],
            [
                'Tante catene ora fanno pizze con formaggio vegano o senza formaggio. HappyCow ti trova i locali vegan-friendly vicino a te: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'La maggior parte dei supermercati ora vende pizze vegane, ed ecco un elenco di catene con opzioni vegane: ' . generate_and_cache_shlink('https://www.peta.org/lifestyle/food/pizza-places-vegan-options/'),
                'Daiya fa pizze vegane surgelate: ' . generate_and_cache_shlink('https://daiyafoods.com/collections/pizza-and-flatbread') . ' E tante pizzerie ti mettono il formaggio vegano se lo chiedi.',
            ],
            [
                'Buon appetito! 🍕',
                'Scrivimi se ti serve aiuto a trovarne una.',
                'Buona pizza!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-egg',
        'title' => 'Amo le uova',
        'body' => [
            [
                'Le uova sono più facili da sostituire di quanto pensi!',
                'Ci sono buone alternative alle uova.',
                'Hai un sacco di opzioni!',
            ],
            [
                'Il tofu strapazzato sostituisce benissimo le uova strapazzate, soprattutto con un po\' di spinaci: ' . generate_and_cache_shlink('https://simpleveganblog.com/simple-tofu-scramble/'),
                'JUST Egg è fatto con i fagioli mung e si strapazza proprio come l\'uovo: ' . generate_and_cache_shlink('https://www.ju.st/eat/eggs'),
                'Ecco una guida utile se fai fatica a rinunciare alle uova: ' . generate_and_cache_shlink('https://chooseveg.com/blog/go-vegan-cant-give-up-eggs-help/') . ' E qui vedi come vengono trattate le galline ovaiole: ' . generate_and_cache_shlink('https://viva.org.uk/animals/egg-laying-hens/'),
            ],
            [
                'Scrivimi se vuoi qualche ricetta.',
                'Ho altre idee, se vuoi.',
                'Prova qualche ricetta!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-ice-cream',
        'title' => 'Amo il gelato',
        'body' => [
            [
                'Il gelato vegano ormai è buonissimo!',
                'Che fortuna, il gelato vegano si trova ovunque!',
                'Non devi rinunciarci!',
            ],
            [
                'Ben & Jerry\'s ha un\'intera linea senza latticini: ' . generate_and_cache_shlink('https://www.benjerry.com/flavors/non-dairy'),
                'Ecco una guida ai migliori gelati vegani, sia confezionati che fatti in casa: ' . generate_and_cache_shlink('https://vegan.com/food/ice-cream/'),
                'Nella maggior parte dei supermercati trovi gelati all\'avena, alla soia, alle mandorle e al cocco, e anche Ben & Jerry\'s ha una linea senza latticini: ' . generate_and_cache_shlink('https://www.benjerry.com/flavors/non-dairy'),
            ],
            [
                'Buon gelato! 🍦',
                'Fammi sapere qual è il tuo preferito!',
                'Scrivimi se vuoi altre idee.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-drumstick-bite',
        'title' => 'Amo il pollo',
        'body' => [
            [
                'Il pollo vegano ormai è buonissimo!',
                'Il pollo puoi continuare a mangiarlo, solo in versione vegetale!',
                'Ci sono tantissime alternative!',
            ],
            [
                'Cerca nuggets, straccetti e filetti vegetali nel banco frigo e tra i surgelati del supermercato. Ci sono tante marche da provare.',
                'Tanti locali ora fanno burger e wrap con pollo vegano. Su HappyCow vedi cosa c\'è vicino a te: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Il seitan e il pollo a base di soia sono ottimi nei wrap e nei saltati in padella. Ecco qualche ricetta facile: ' . generate_and_cache_shlink('https://veganuary.com/recipes'),
            ],
            [
                'Se vuoi, ti consiglio qualche marca.',
                'Provane qualcuna!',
                'Buon appetito!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-glass-water',
        'title' => 'Latti vegetali',
        'body' => [
            [
                'Passare ai latti vegetali è facile!',
                'Ormai ci sono tantissimi latti vegetali!',
                'Ottimo punto di partenza!',
            ],
            [
                'Avena, soia, mandorla, cocco, anacardi, riso... Quelli di avena e soia sono ottimi nel tè e nel caffè. Provane qualcuno e vedi quale ti piace.',
                'Se vuoi sapere perché c\'è chi lascia il latte di mucca, questo breve video merita: ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI'),
                'Scegli latti arricchiti con calcio. Il latte di soia ha più o meno le stesse proteine del latte di mucca.',
            ],
            [
                'Scrivimi se hai domande.',
                'Prova finché trovi il tuo!',
                'Fammi sapere come va!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-film',
        'title' => 'Documentari',
        'body' => [
            [
                'Ecco qualche documentario da vedere:',
                'Qualche film che potrebbe aiutarti:',
                'Due film che consiglio:',
            ],
            [
                'Dominion, su come vengono trattati gli animali allevati (gratis): ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' The Game Changers, sugli atleti che mangiano vegetale: ' . generate_and_cache_shlink('https://gamechangersmovie.com/'),
                'Dominion si guarda gratis ed è difficile da dimenticare: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' I video brevi di Earthling Ed sono perfetti per le domande più comuni: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'The Game Changers, sui grandi atleti che mangiano vegetale: ' . generate_and_cache_shlink('https://gamechangersmovie.com/') . ' E Dominion, gratis, sulla vita negli allevamenti: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
            ],
            [
                'Fammi sapere cosa ne pensi! 🌱',
                'Fammi sapere se ne guardi qualcuno!',
                'Se vuoi, poi ne parliamo.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-eye',
        'title' => 'Dominion',
        'body' => [
            [
                'Ti consiglio davvero Dominion.',
                'Hai visto Dominion?',
                'Se guardi una cosa sola, che sia Dominion.',
            ],
            [
                'È un documentario gratuito su come vengono trattati davvero gli animali negli allevamenti: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' Anche solo i primi 15 minuti meritano.',
                'Mostra cosa succede negli allevamenti e nei macelli, e si può guardare gratis: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
                'È gratis e ha fatto cambiare idea a tante persone: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' È difficile da guardare, ma ne vale la pena.',
            ],
            [
                'Scrivimi se vuoi parlarne.',
                'Se hai domande, chiedi pure.',
                'Se decidi di provare a mangiare vegano, ti do una mano.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-shoe-prints',
        'title' => 'Un passo alla volta',
        'body' => [
            [
                'È bellissimo che tu ci stia pensando! 🐮',
                'Grande!',
                'Che bello che tu voglia provarci!',
            ],
            [
                'Se ti sembra tanto, fai un passo alla volta. Inizia dal latte vegetale, poi passa al burro, poi alla carne. Vegan Bootcamp può guidarti: ' . generate_and_cache_shlink('https://veganbootcamp.org'),
                'Prova con un pasto vegano al giorno, e poi aumenta pian piano. Veganuary ha ricette facili per iniziare: ' . generate_and_cache_shlink('https://veganuary.com/recipes'),
                'Parti dalle sostituzioni che ti sembrano più facili, come il latte o i burger, e vai avanti da lì. Challenge 22 ti dà un mentore che ti aiuta: ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'Ce la farai!',
                'Scrivimi se ti serve una mano.',
                'Non serve fare tutto subito.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-carrot',
        'title' => 'Vegetariano',
        'body' => [
            [
                'Essere vegetariani è già un gran passo!',
                'Complimenti, è già tanto!',
                'Ottimo inizio!',
            ],
            [
                'Questo video spiega perché diventare vegani del tutto fa una differenza così grande: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=uWna6-niYEg'),
                'Purtroppo anche latticini e uova causano tanta sofferenza. Questo breve video lo spiega: ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI'),
                'Se ti va di fare il passo successivo, Challenge 22 è gratis e ti dà un mentore: ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'Scrivimi se hai domande.',
                'Se vuoi provarci, ti do una mano.',
                'Ci sei quasi!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-piggy-bank',
        'title' => 'Troppo caro',
        'body' => [
            [
                'In realtà può costare meno!',
                'Mangiare vegano può costare davvero poco!',
                'Non per forza!',
            ],
            [
                'Fagioli, lenticchie, riso, pasta, avena, patate e verdure surgelate sono tra i cibi più economici che ci siano. A costare di più sono i prodotti di nicchia.',
                'Secondo uno studio di Oxford, un\'alimentazione vegana potrebbe ridurre la spesa alimentare fino a un terzo in paesi come Regno Unito e USA: ' . generate_and_cache_shlink('https://www.ox.ac.uk/news/2021-11-11-sustainable-eating-cheaper-and-healthier-oxford-study'),
                'Questo video lo spiega bene: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=Vs_nXVmyP1E') . ' Cucinando con fagioli, lenticchie e tofu spendi poco.',
            ],
            [
                'Scrivimi se vuoi ricette economiche.',
                'Se vuoi, ti mando qualche idea per pasti economici.',
                'Fammi sapere come va!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-bowl-food',
        'title' => 'Proteine',
        'body' => [
            [
                'Prendere abbastanza proteine è più facile di quanto si pensi!',
                'Le proteine non ti mancheranno!',
                'Questa me la chiedono spesso!',
            ],
            [
                'Fagioli, lenticchie, tofu, tempeh, seitan, latte di soia, frutta secca e semi sono ricchi di proteine. Ecco una guida veloce: ' . generate_and_cache_shlink('https://viva.org.uk/materials/protein-myth-fact-sheet/'),
                'Un\'alimentazione vegana varia ti dà proteine in abbondanza. Ecco una scheda sul mito delle proteine: ' . generate_and_cache_shlink('https://viva.org.uk/materials/protein-myth-fact-sheet/'),
                'Questo video di un minuto riassume tutto: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=1elt5YCRLbk') . ' Tofu, lenticchie, fagioli e seitan sono tutte ottime fonti.',
            ],
            [
                'Scrivimi se hai domande.',
                'Se vuoi, ti mando qualche idea per i pasti.',
                'In bocca al lupo!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-dumbbell',
        'title' => 'Sport e fitness',
        'body' => [
            [
                'Puoi allenarti benissimo con un\'alimentazione vegana!',
                'Tanti atleti sono vegani!',
                'I muscoli si fanno anche con le piante!',
            ],
            [
                'Parecchi atleti di alto livello mangiano vegetale, dagli strongman ai campioni di F1. The Game Changers ne parla: ' . generate_and_cache_shlink('https://gamechangersmovie.com/'),
                'r/veganfitness è pieno di gente che si allena sul serio mangiando vegetale, con piani alimentari e consigli: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/'),
                'Con tofu, seitan, lenticchie, fagioli e latte di soia arrivi facilmente alla tua quota di proteine. Qui trovi un sacco di consigli per allenarti: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/'),
            ],
            [
                'Scrivimi se hai domande.',
                'Buon allenamento! 💪',
                'Fammi sapere come va!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-people-group',
        'title' => 'Community',
        'body' => [
            [
                'Siamo in tanti!',
                'Aiuta tantissimo avere qualcuno con cui parlare!',
                'Là fuori c\'è una grande community!',
            ],
            [
                'r/vegan è un posto enorme e accogliente dove puoi chiedere di tutto: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/'),
                'Prova r/vegan per supporto e domande: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/') . ' E r/veganrecipes per idee in cucina: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganrecipes/'),
                'Challenge 22 ti affianca un mentore e un gruppo di persone che ci provano insieme a te: ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'Se ti serve qualcosa, scrivi anche a me.',
                'Ci sono anch\'io se vuoi parlare.',
                'In bocca al lupo!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-utensils',
        'title' => 'Mangiare fuori',
        'body' => [
            [
                'Mangiare fuori diventa presto facile!',
                'È molto più facile di una volta!',
                'È più facile di quanto pensi!',
            ],
            [
                'HappyCow ti mostra i locali vegani e vegan-friendly vicino a te: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Ormai la maggior parte dei locali ha qualcosa di vegano, e tanti menù lo indicano. Per idee in zona, prova HappyCow: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Guarda prima i menù online e non farti problemi a chiedere modifiche. HappyCow ti aiuta a trovare bei posti: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Buon appetito! 🌱',
                'Scrivimi se ti serve una mano.',
                'Buona mangiata!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Ambiente',
        'body' => [
            [
                'È una delle cose più importanti che puoi fare per il pianeta!',
                'I dati sono chiari!',
                'Fa una differenza enorme!',
            ],
            [
                'Secondo Our World in Data, se tutti mangiassimo vegetale ci servirebbe circa il 75% di terreni agricoli in meno: ' . generate_and_cache_shlink('https://ourworldindata.org/land-use-diets'),
                'Secondo uno studio di Oxford, una dieta vegana ha circa il 30% dell\'impatto ambientale di una dieta ricca di carne: ' . generate_and_cache_shlink('https://www.medsci.ox.ac.uk/news/vegan-diet-has-just-30-of-the-environmental-impact-of-a-high-meat-diet-major-study-finds'),
                'Carne e latticini hanno un impatto molto più alto dei cibi vegetali su emissioni, suolo e acqua. Ecco i dati: ' . generate_and_cache_shlink('https://ourworldindata.org/environmental-impacts-of-food'),
            ],
            [
                'Scrivimi se vuoi saperne di più 🌍',
                'Se vuoi, ti mando altre info.',
                'Dai un\'occhiata!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-user-doctor',
        'title' => 'Gli esperti concordano',
        'body' => [
            [
                'Le grandi istituzioni sanitarie sono d\'accordo!',
                'Gli esperti sono dalla tua parte!',
                'Su questo c\'è ampio consenso!',
            ],
            [
                'L\'associazione britannica dei dietisti dice che un\'alimentazione vegetale ben pianificata favorisce uno stile di vita sano a tutte le età: ' . generate_and_cache_shlink('https://www.bda.uk.com/resource/vegetarian-vegan-plant-based-diet.html'),
                'Le associazioni di dietisti di USA, Regno Unito, Canada e Australia dicono che una dieta vegana ben pianificata è sana a tutte le età. Riassunto: ' . generate_and_cache_shlink('https://en.wikipedia.org/wiki/Vegan_nutrition#Positions_of_dietetic_and_government_associations'),
                'Il servizio sanitario britannico (NHS) dice che, con una buona pianificazione, una dieta vegana ti dà tutti i nutrienti che ti servono: ' . generate_and_cache_shlink('https://www.nhs.uk/live-well/eat-well/how-to-eat-a-balanced-diet/the-vegan-diet/'),
            ],
            [
                'Scrivimi se hai domande.',
                'Buona lettura!',
                'Se vuoi altre fonti, dimmelo.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-heart-pulse',
        'title' => 'Salute',
        'body' => [
            [
                'Molti diventano vegani per la salute!',
                'Può fare davvero bene!',
                'Ci sono buone prove a favore!',
            ],
            [
                'Un\'alimentazione vegana ben pianificata è legata a un minor rischio di malattie cardiache, diabete di tipo 2 e alcuni tumori. La sanità britannica ha una buona guida: ' . generate_and_cache_shlink('https://www.nhs.uk/live-well/eat-well/how-to-eat-a-balanced-diet/the-vegan-diet/'),
                'L\'OMS classifica la carne lavorata come causa di cancro, e la carne rossa come probabile causa: ' . generate_and_cache_shlink('https://www.who.int/news-room/questions-and-answers/item/cancer-carcinogenicity-of-the-consumption-of-red-meat-and-processed-meat'),
                'L\'associazione britannica dei dietisti dice che un\'alimentazione vegetale ben pianificata favorisce uno stile di vita sano a tutte le età: ' . generate_and_cache_shlink('https://www.bda.uk.com/resource/vegetarian-vegan-plant-based-diet.html'),
            ],
            [
                'Scrivimi se hai domande.',
                'Se vuoi, ti aiuto a organizzare i pasti.',
                'Buona lettura!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-couch',
        'title' => 'Che fatica cucinare',
        'body' => [
            [
                'Non serve cucinare!',
                'Nessun problema!',
                'Puoi mangiare vegano senza cucinare!',
            ],
            [
                'Ormai i supermercati sono pieni di piatti pronti, panini, pizze surgelate e snack vegani. Prendi la versione vegana di quello che compri di solito.',
                'Un sacco di vegani cucinano pochissimo! Piatti pronti, wrap, fagioli in scatola, cereali con latte d\'avena... vale tutto.',
                'Anche mangiare fuori è facile. HappyCow ti mostra i locali vegan-friendly vicino a te: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Scrivimi se vuoi qualche idea facile.',
                'Chiedimi i miei preferiti per pigri!',
                'Buon appetito!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-pepper-hot',
        'title' => 'Cibo noioso',
        'body' => [
            [
                'Ma non deve esserlo per forza!',
                'Il cibo vegano può essere buonissimo!',
                'C\'è molto di più dell\'insalata!',
            ],
            [
                'Quasi ogni piatto si può fare vegano: curry, burger, pasta, torte. Ecco un sacco di ricette: ' . generate_and_cache_shlink('https://veganuary.com/recipes'),
                'Prova a cercare il tuo piatto preferito aggiungendo \'vegano\': c\'è una versione di quasi tutto. Per mangiare fuori: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'r/veganrecipes è pieno di idee: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganrecipes/') . ' E HappyCow ti trova ottimi posti dove mangiare: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Scrivimi se vuoi qualche consiglio.',
                'Buon appetito! 😋',
                'Buon divertimento ai fornelli!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-comments',
        'title' => '30+ argomenti',
        'body' => [
            [
                'È un\'obiezione molto comune!',
                'Domanda legittima!',
                'Questa la sento spesso!',
            ],
            [
                'Questa guida gratuita risponde ai 30 argomenti più comuni contro la scelta vegana: ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf'),
                'Earthling Ed risponde a 30 scuse comuni in brevi video: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'Questa guida affronta i 30 miti più comuni: ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf') . ' Oppure, se preferisci i video: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
            ],
            [
                'Scrivimi se vuoi parlarne.',
                'Se hai domande, chiedi pure.',
                'Dai un\'occhiata!',
            ],
        ],
    ],
];
