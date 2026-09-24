<?php

require_once(app_path('generate_and_cache_shlink.php'));

return [
    [
        'icon' => 'fas fa-info-circle',
        'title' => 'Informações gerais',
        'body' =>[
            [
                'Você deveria tentar! A maioria das pessoas veganas diz que o único arrependimento é não ter começado antes\.'
            ], [
                'Aqui vão alguns recursos: ' . generate_and_cache_shlink('http://reddit.com/r/Vegan') . ' \(comunidade\) ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=41') . ' \(filme\) ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2') . ' \(mitos\) 🐷 Me chama se precisar de ajuda!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Desafio vegano',
        'body' =>[
            [
                'Oi!',
                'Olá!'
            ], [
                'Você (com certeza |definitivamente )?consegue!',
                'Estamos (sempre )?aqui para ajudar!',
                'É (muito |bem )?mais fácil do que você imagina!'
            ], [
                'Você (deveria|poderia) (conhecer|experimentar) o Vegan Bootcamp Challenge!',
                'O Vegan Bootcamp Challenge (pode ser|talvez seja) (exatamente )?o que você procura\.',
                'Existe um recurso chamado Vegan Bootcamp Challenge( que você pode experimentar)?\.'
            ], [
                'É um desafio vegano de até 30 dias que te ajuda a fazer isso como um profissional!',
                'O site é um desafio vegano de até 30 dias para você aprender a virar vegano com facilidade!',
                'No site você completa 30 desafios que te ajudam a virar vegano aos poucos, é fácil!'
            ], [
                'O link é ' . generate_and_cache_shlink('https://veganbootcamp.org') . ';',
                'O endereço é ' . generate_and_cache_shlink('https://veganbootcamp.org') . ';',
                'O site fica em ' . generate_and_cache_shlink('https://veganbootcamp.org') . ';',
                'O site é ' . generate_and_cache_shlink('https://veganbootcamp.org') . ';',
            ], [
                'Boa sorte, você consegue!',
                'Você (com certeza |definitivamente )?consegue!',
                'Estamos (todos )?torcendo por você!',
                'Aguenta firme!',
                'Você vai conseguir!'
            ], [
                'Me chama se precisar de (ajuda|mais ajuda)!',
                'Me responde se precisar de (ajuda|mais ajuda)!',
                '(Fique à vontade para|Pode) entrar em contato se precisar de (ajuda|mais ajuda)!',
                'Se (algum dia )?precisar de (ajuda|mais ajuda), é só me mandar uma (mensagem|DM)!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-bacon',
        'title' => 'Eu amo carne',
        'body' =>[
            [
                'A carne vegana evoluiu MUITO nos últimos anos!'
            ], [
                'A Beyond Meat é muito boa: ' . generate_and_cache_shlink('https://www.beyondmeat.com/') . ', e a Gardein também tem vários produtos: ' . generate_and_cache_shlink('https://www.gardein.com/') . ' Dá uma olhada no seu mercado para ver o que tem, você pode se surpreender!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-cheese',
        'title' => 'Eu amo queijo',
        'body' =>[
            [
                'O queijo vegano evoluiu MUITO nos últimos anos!'
            ], [
                'Meu favorito é o da "Follow Your Heart", e o da Daiya é ótimo para derreter\.'
            ], [
                'Neste link ' . generate_and_cache_shlink('https://www.peta.org/lifestyle/food/everything-you-need-to-know-about-vegan-cheese/') . ' você encontra ainda mais marcas perto de você! Me chama se precisar de ajuda para achar mais\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-pizza-slice',
        'title' => 'Eu amo pizza',
        'body' =>[
            [
                'Normalmente tem muitas opções de pizza vegana \(e outros restaurantes\) no ' . generate_and_cache_shlink('http://HappyCow.net') . '!'
            ], [
                'Também tem a pizza da "Daiya": ' . generate_and_cache_shlink('https://daiyafoods.com/collections/pizza-and-flatbread') . ' e ainda mais lugares aqui: ' . generate_and_cache_shlink('https://www.peta.org/lifestyle/food/pizza-places-vegan-options/') . ' Me chama se precisar de ajuda para achar mais\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-egg',
        'title' => 'Eu amo ovos',
        'body' =>[
            [
                'Tem muitas receitas veganas deliciosas no lugar de ovos \(como esta, mas coloque espinafre\): ' . generate_and_cache_shlink('https://simpleveganblog.com/simple-tofu-scramble/')
            ], [
                'Você também pode comprar ovos veganos: ' . generate_and_cache_shlink('https://www.ju.st/eat/eggs') . ' Mais informações aqui: ' . generate_and_cache_shlink('https://chooseveg.com/blog/go-vegan-cant-give-up-eggs-help/') . ' e principalmente aqui: ' . generate_and_cache_shlink('https://viva.org.uk/animals/egg-laying-hens/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-ice-cream',
        'title' => 'Eu amo sorvete',
        'body' =>[
            [
                'Experimente o sorvete sem leite da Ben & Jerry\'s: ' . generate_and_cache_shlink('https://www.benjerry.com/flavors/non-dairy')
            ], [
                'Eles têm vários sabores, e existem muitas outras marcas de sorvete de soja, amêndoa ou coco!'
            ], [
                '(Veja:|Dá uma olhada em) ' . generate_and_cache_shlink('https://vegan.com/food/ice-cream/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-drumstick-bite',
        'title' => 'Eu amo frango',
        'body' =>[
            [
                'A Gardein faz um frango vegetal incrível: ' . generate_and_cache_shlink('https://www.gardein.com/') . ', procure em lojas de produtos naturais ou em outros mercados!'
            ], [
                'HappyCow para comer fora: ' . generate_and_cache_shlink('https://www.happycow.net') . '! Dá uma olhada no seu mercado para ver o que tem, você pode se surpreender!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-glass-whiskey',
        'title' => 'Leites vegetais',
        'body' =>[
            [
                'Assista "Dairy is Scary", são só 5 minutos: ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI')
            ], [
                'Hoje também tem leites vegetais deliciosos: de soja, amêndoa, aveia, coco, arroz e castanha de caju!'
            ], [
                'Esses leites não estragam fácil, são mais saudáveis e não precisam de geladeira antes de abrir\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-video',
        'title' => 'Documentários',
        'body' =>[
            [
                'Aqui vão alguns filmes para te motivar! Cowspiracy \(meio ambiente\): ' . generate_and_cache_shlink('https://www.netflix.com/title/80033772') . ' The Game Changers \(saúde\): ' . generate_and_cache_shlink('https://www.netflix.com/title/81157840') . ' Dominion \(animais\): ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43')
            ], [
                'Me conta se assistir algum! 🌱'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-sad-cry',
        'title' => 'Dominion',
        'body' =>[
            [
                'Recomendo muito este vídeo do YouTube: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43')
            ], [
                'Se tiver tempo, os primeiros 15 minutos do vídeo podem mudar a sua vida\.'
            ], [
                'Me chama se precisar de ajuda para virar vegano, vou adorar ajudar ou responder suas perguntas!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-baby',
        'title' => 'Passo a passo',
        'body' =>[
            [
                'Que legal que você tem interesse em virar vegano! 🐮'
            ], [
                'Se parecer muita coisa de uma vez e você não souber por onde começar, vá passo a passo\.'
            ], [
                'Comece comprando leite de soja, amêndoa ou aveia e se acostume\.'
            ], [
                'Depois manteiga, carne etc\. Mais informações: ' . generate_and_cache_shlink('https://veganbootcamp.org')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Vegetariano',
        'body' =>[
            [
                'Ser vegetariano é ótimo!'
            ], [
                'Mas recomendo muito que você assista este vídeo: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=uWna6-niYEg')
            ], [
                'Aqui estão alguns argumentos comuns desmentidos: ' . generate_and_cache_shlink('https://drive.google.com/file/d/1dMyS7mIrr4Fal8UKF900BbLMC11IwWRH/view') . ' e aqui está o desafio vegano de um mês: ' . generate_and_cache_shlink('https://www.challenge22.com/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-coins',
        'title' => 'Muito caro',
        'body' =>[
            [
                'Ser vegano é bem barato, só fica caro se você comprar todos aqueles produtos chiques "para veganos"!'
            ], [
                'Batata, arroz, tofu, feijão, lentilha, legumes, frutas, macarrão e aveia são muito baratos, principalmente a granel!'
            ], [
                'Tem um vídeo ótimo sobre isso: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=Vs_nXVmyP1E')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-calculator',
        'title' => 'Proteína',
        'body' =>[
            [
                'Quase todos os alimentos, legumes, frutas e sementes têm proteína, e a gente nem precisa de tanta assim\.'
            ], [
                'Aqui está um link que desmente o mito da proteína e da carne: ' . generate_and_cache_shlink('https://viva.org.uk/materials/protein-myth-fact-sheet/') . ' e um vídeo: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=1elt5YCRLbk')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-dumbbell',
        'title' => 'Fitness',
        'body' =>[
            [
                'O homem mais forte do mundo é vegano, e muitos outros recordes mundiais de força e fitness são de pessoas veganas!'
            ], [
                'Treinar com uma alimentação vegetal é melhor para o seu treino\.'
            ], [
                'Vídeos: ' . generate_and_cache_shlink('https://www.youtube.com/results?search_query=vegan+fitness') . ' e comunidade: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-comments',
        'title' => 'Comunidade',
        'body' =>[
            [
                'Se você quiser conversar com alguém, ou só precisar de apoio ou ajuda, dá uma olhada em ' . generate_and_cache_shlink('http://reddit.com/r/Vegan') . '!'
            ], [
                'É uma comunidade de cerca de 300\.000 pessoas veganas que conhecem as dificuldades e têm experiência, pergunte o que quiser\.'
            ], [
                'Também tem /r/VeganFitness, /r/VeganRecipes e outras!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-utensils',
        'title' => 'Comer fora',
        'body' =>[
            [
                'Comer fora às vezes é difícil quando você não sabe aonde ir ou o que pedir, mas fica muito mais fácil com o tempo e logo você vai saber exatamente o que escolher\.'
            ], [
                'Até lá, dá uma olhada neste site: ' . generate_and_cache_shlink('http://happycow.net') . ' para achar comida vegana perto de você! 🐮'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-tree',
        'title' => 'Meio ambiente',
        'body' =>[
            [
                'Existem estatísticas assustadoras sobre o que a indústria da carne e do leite \(a pecuária\) faz com o meio ambiente, todas com fontes e estudos: ' . generate_and_cache_shlink('https://speciesjustice.org/environment') . ' Por exemplo: a pecuária é responsável por até 91% da destruição da Amazônia\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-flask',
        'title' => 'Especialistas concordam',
        'body' =>[
            [
                'Hoje é amplamente aceito que uma alimentação vegana é mais saudável do que uma com carne\.'
            ], [
                'Aqui está uma página que cita diretamente as maiores organizações de saúde, nutrição e dietética do mundo \(ou seja, organizações imparciais\): ' . generate_and_cache_shlink('https://en.wikipedia.org/wiki/Vegan_nutrition#Positions_of_dietetic_and_government_associations')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-heartbeat',
        'title' => 'Saúde',
        'body' =>[
            [
                'Hoje é amplamente aceito que carne e laticínios são extremamente prejudiciais à saúde em comparação com uma alimentação vegana\.'
            ], [
                'A carne é cancerígena e é a causa da maioria das doenças, como câncer, doenças cardíacas, diabetes e obesidade\.'
            ], [
                'Aqui está uma página com informações e fontes: ' . generate_and_cache_shlink('https://en.wikipedia.org/wiki/Vegan_nutrition#Positions_of_dietetic_and_government_associations')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Preguiça de cozinhar',
        'body' =>[
            [
                'Muitas pessoas veganas também não cozinham, só compram as opções veganas no mercado ou nos restaurantes em vez das de origem animal\.'
            ], [
                'Você não precisa aprender a cozinhar para comer de forma saudável sendo vegano!'
            ], [
                'Comer fora também é muito fácil com o ' . generate_and_cache_shlink('http://happycow.net') . ' 🐮 Me chama se precisar de ajuda!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-meh-blank',
        'title' => 'Comida vegana é sem graça',
        'body' =>[
            [
                'Praticamente tudo que é feito com carne ou laticínios pode ser recriado e ficar tão bom quanto, você só precisa saber onde comprar ou como fazer\.'
            ], [
                'Aqui vão algumas receitas: ' . generate_and_cache_shlink('https://veganuary.com/recipes') . ', \(ou pesquise no Google sua comida favorita \+ "vegana"\)\.'
            ], [
                'E este para comer fora: ' . generate_and_cache_shlink('https://happycow.net')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-fist-raised',
        'title' => '30+ argumentos',
        'body' =>[
            [
                'Esse é um mito comum! Dá uma olhada: ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf') . '; ele fala dos 30 mitos mais comuns sobre o veganismo\.'
            ], [
                'Em vídeo aqui: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2')
            ], [
                'Me chama se precisar de ajuda ou tiver alguma dúvida!'
            ]
        ]
    ],

];
