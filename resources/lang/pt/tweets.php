<?php

require_once(app_path('generate_and_cache_shlink.php'));

return [
    [
        'icon' => 'fas fa-circle-info',
        'title' => 'Informações gerais',
        'body' => [
            [
                'Você devia tentar!',
                'Que notícia boa!',
                'Vai fundo, não vai se arrepender!',
            ],
            [
                'A maioria dos veganos diz que só se arrepende de não ter mudado antes. O r/vegan é ótimo pra tirar dúvidas: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/') . ' e estes vídeos curtos tiram as mais comuns: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'Um bom primeiro passo é o desafio gratuito de 31 dias do Veganuary, que dá pra começar quando quiser. Vem com cardápios e e-mails diários: ' . generate_and_cache_shlink('https://veganuary.com/pt-br/'),
                'O Challenge 22 é gratuito e te dá um mentor e nutricionistas por 22 dias: ' . generate_and_cache_shlink('https://challenge22.com/') . ' Pra entender por que isso importa, veja o começo do Dominion: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
            ],
            [
                'Qualquer coisa, me chama!',
                'Pode perguntar o que quiser.',
                'Se travar, me dá um grito!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-calendar-check',
        'title' => 'Desafio vegano',
        'body' => [
            [
                'Oi!',
                'Olá!',
                'Amei!',
            ],
            [
                'O Veganuary tem um desafio gratuito de 31 dias que você pode começar quando quiser, com cardápios e e-mails diários: ' . generate_and_cache_shlink('https://veganuary.com/pt-br/'),
                'O Challenge 22 é um desafio gratuito de 22 dias, com um mentor só seu e nutricionistas à disposição: ' . generate_and_cache_shlink('https://challenge22.com/'),
                'O Vegan Bootcamp é gratuito e no seu ritmo, com cursos curtos sobre alimentação, nutrição e muito mais: ' . generate_and_cache_shlink('https://veganbootcamp.org'),
            ],
            [
                'Você consegue!',
                'Você vai tirar de letra!',
                'Tô torcendo por você!',
                'Precisando de ajuda, é só chamar!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-bacon',
        'title' => 'Eu amo carne',
        'body' => [
            [
                'A carne vegana evoluiu muito!',
                'Você não precisa sentir falta!',
                'Entendo, mas os substitutos hoje estão muito bons.',
            ],
            [
                'A maioria dos mercados já vende hambúrguer, linguiça, carne moída e nuggets à base de plantas. A Beyond Meat é um bom começo: ' . generate_and_cache_shlink('https://www.beyondmeat.com/'),
                'Hoje dá pra trocar quase tudo: hambúrguer, linguiça, bacon, carne moída. Experimente algumas marcas, inclusive a do próprio mercado, e veja do que você gosta.',
                'Muitos restaurantes e redes também já têm pratos à base de plantas. O HappyCow mostra lugares com opções veganas perto de você: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Me chama se quiser indicações.',
                'Posso te passar meus favoritos, se quiser.',
                'Aproveita pra experimentar!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-cheese',
        'title' => 'Eu amo queijo',
        'body' => [
            [
                'O queijo vegano evoluiu muito!',
                'O queijo vegano melhorou demais!',
                'Você vai se surpreender com o queijo vegano de hoje!',
            ],
            [
                'O Violife é coringa e derrete bem: ' . generate_and_cache_shlink('https://violifefoods.com/') . ' Follow Your Heart e Daiya também são bons.',
                'Aqui tem um guia de queijos veganos, do fatiado ao brie: ' . generate_and_cache_shlink('https://www.peta.org/lifestyle/food/everything-you-need-to-know-about-vegan-cheese/'),
                'As marcas variam muito, então experimente algumas. O Violife é um bom começo e derrete na pizza e no sanduíche: ' . generate_and_cache_shlink('https://violifefoods.com/'),
            ],
            [
                'Me chama se quiser mais ideias.',
                'Posso te indicar alguns.',
                'Aproveite! 🧀',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-pizza-slice',
        'title' => 'Eu amo pizza',
        'body' => [
            [
                'Pizza é fácil!',
                'Você não precisa abrir mão da pizza!',
                'Hoje é fácil achar pizza vegana!',
            ],
            [
                'Muitas redes já fazem pizza com queijo vegano ou sem queijo. O HappyCow lista lugares com opções veganas perto de você: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'A maioria dos mercados já vende pizza vegana, e aqui tem uma lista de redes com opções veganas: ' . generate_and_cache_shlink('https://www.peta.org/lifestyle/food/pizza-places-vegan-options/'),
                'A Daiya faz pizzas veganas congeladas: ' . generate_and_cache_shlink('https://daiyafoods.com/collections/pizza-and-flatbread') . ' E muita pizzaria troca pelo queijo vegano se você pedir.',
            ],
            [
                'Aproveite! 🍕',
                'Me chama se precisar de ajuda pra achar uma.',
                'Bom apetite!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-egg',
        'title' => 'Eu amo ovos',
        'body' => [
            [
                'Ovo é mais fácil de substituir do que parece!',
                'Tem bons substitutos pro ovo.',
                'Você tem várias opções!',
            ],
            [
                'Tofu mexido substitui muito bem o ovo mexido, ainda mais com espinafre: ' . generate_and_cache_shlink('https://simpleveganblog.com/simple-tofu-scramble/'),
                'O JUST Egg é feito de feijão-mungo e dá pra fazer mexido igualzinho a ovo: ' . generate_and_cache_shlink('https://www.ju.st/eat/eggs'),
                'Aqui tem um guia útil se você está com dificuldade de largar o ovo: ' . generate_and_cache_shlink('https://chooseveg.com/blog/go-vegan-cant-give-up-eggs-help/') . ' E é assim que as galinhas poedeiras são tratadas: ' . generate_and_cache_shlink('https://viva.org.uk/animals/egg-laying-hens/'),
            ],
            [
                'Me chama se quiser receitas.',
                'Tenho mais ideias, se quiser.',
                'Aproveita pra testar umas receitas!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-ice-cream',
        'title' => 'Eu amo sorvete',
        'body' => [
            [
                'O sorvete vegano está bom demais hoje em dia!',
                'Sorte sua, sorvete vegano tem em todo lugar!',
                'Não precisa ficar sem!',
            ],
            [
                'A Ben & Jerry\'s tem uma linha inteira sem leite: ' . generate_and_cache_shlink('https://www.benjerry.com/flavors/non-dairy'),
                'Aqui tem um guia dos melhores sorvetes veganos, de mercado e caseiros: ' . generate_and_cache_shlink('https://vegan.com/food/ice-cream/'),
                'A maioria dos mercados tem sorvete de aveia, soja, amêndoa e coco, e a Ben & Jerry\'s também tem uma linha sem leite: ' . generate_and_cache_shlink('https://www.benjerry.com/flavors/non-dairy'),
            ],
            [
                'Aproveite! 🍦',
                'Me conta qual é o seu favorito!',
                'Me chama se quiser mais ideias.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-drumstick-bite',
        'title' => 'Eu amo frango',
        'body' => [
            [
                'O frango vegano está muito bom hoje em dia!',
                'Dá pra continuar comendo frango, só que vegetal!',
                'Tem vários substitutos!',
            ],
            [
                'Procure nuggets, tirinhas e filés vegetais nos congelados e refrigerados do mercado. Tem muita marca pra experimentar.',
                'Muitos lugares já têm hambúrguer e wrap de frango vegano. O HappyCow mostra o que tem perto de você: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Seitan e frango de soja ficam ótimos em wraps e salteados. Aqui tem umas receitas fáceis: ' . generate_and_cache_shlink('https://veganuary.com/pt-br/receitas/'),
            ],
            [
                'Me chama se quiser dicas de marcas.',
                'Experimenta algumas!',
                'Aproveite!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-glass-water',
        'title' => 'Leites vegetais',
        'body' => [
            [
                'Leite vegetal é uma troca fácil!',
                'Hoje tem leite vegetal de tudo quanto é tipo!',
                'Ótimo jeito de começar!',
            ],
            [
                'Aveia, soja, amêndoa, coco, castanha de caju, arroz... Os de aveia e soja ficam ótimos no café e no chá. Experimente alguns e veja qual você curte.',
                'Se quiser saber por que as pessoas trocam, vale a pena ver este vídeo curto: ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI'),
                'Procure versões enriquecidas com cálcio. O leite de soja tem mais ou menos a mesma quantidade de proteína que o de vaca.',
            ],
            [
                'Me chama se tiver dúvidas.',
                'Vai testando até achar o seu!',
                'Me conta como foi!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-film',
        'title' => 'Documentários',
        'body' => [
            [
                'Aqui vão alguns documentários que valem a pena:',
                'Uns filmes que podem ajudar:',
                'Duas boas pedidas:',
            ],
            [
                'Dominion, sobre como os animais de criação são tratados (grátis): ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' The Game Changers, sobre atletas com alimentação vegetal: ' . generate_and_cache_shlink('https://gamechangersmovie.com/'),
                'Dominion é grátis e difícil de esquecer: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' Os vídeos curtos do Earthling Ed são ótimos pras dúvidas mais comuns: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'The Game Changers, sobre atletas de elite com alimentação à base de plantas: ' . generate_and_cache_shlink('https://gamechangersmovie.com/') . ' E Dominion, grátis, sobre a vida nas fazendas: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
            ],
            [
                'Me conta o que achou! 🌱',
                'Me conta se assistir algum!',
                'Se quiser, depois a gente conversa sobre eles.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-eye',
        'title' => 'Dominion',
        'body' => [
            [
                'Recomendo muito o Dominion.',
                'Já viu o Dominion?',
                'Se for assistir uma coisa só, que seja o Dominion.',
            ],
            [
                'É um documentário gratuito sobre como os animais de criação são tratados de verdade: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' Só os primeiros 15 minutos já valem a pena.',
                'Ele mostra o que acontece nas fazendas e nos matadouros, e é grátis: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43'),
                'É grátis e já fez muita gente mudar de ideia: ' . generate_and_cache_shlink('https://youtu.be/ny6aqdFy9SI?t=43') . ' É pesado de assistir, mas vale a pena.',
            ],
            [
                'Me chama se quiser conversar sobre ele.',
                'Qualquer dúvida, é só perguntar!',
                'Se quiser começar no veganismo, posso te ajudar.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-shoe-prints',
        'title' => 'Passo a passo',
        'body' => [
            [
                'Que bom que você está pensando nisso! 🐮',
                'Que demais!',
                'Adorei que você vai tentar!',
            ],
            [
                'Se parecer muita coisa, vá um passo de cada vez. Comece trocando o leite, depois a manteiga, depois a carne. O Vegan Bootcamp pode te guiar: ' . generate_and_cache_shlink('https://veganbootcamp.org'),
                'Experimente uma refeição vegana por dia e vá aumentando a partir daí. O Veganuary tem receitas fáceis pra começar: ' . generate_and_cache_shlink('https://veganuary.com/pt-br/receitas/'),
                'Comece pelas trocas que parecem mais fáceis, tipo leite ou hambúrguer, e vá seguindo. O Challenge 22 te dá um mentor pra ajudar: ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'Você consegue!',
                'Me chama se precisar de ajuda.',
                'Não precisa fazer tudo de uma vez.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-carrot',
        'title' => 'Vegetariano',
        'body' => [
            [
                'O vegetarianismo já é um ótimo passo!',
                'Que demais, parabéns!',
                'Ótimo começo!',
            ],
            [
                'Este vídeo explica por que ir de vez pro veganismo faz tanta diferença: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=uWna6-niYEg'),
                'Infelizmente, laticínios e ovos também causam muito sofrimento. Este vídeo curto explica: ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI'),
                'Se quiser dar o próximo passo, o Challenge 22 é gratuito e te dá um mentor: ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'Me chama se tiver dúvidas.',
                'Se quiser tentar, posso ajudar.',
                'Você está quase lá!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-piggy-bank',
        'title' => 'Muito caro',
        'body' => [
            [
                'Na verdade, pode sair mais barato!',
                'Comida vegana pode ser bem barata!',
                'Não precisa ser!',
            ],
            [
                'Feijão, lentilha, arroz, macarrão, aveia, batata e legumes congelados estão entre os alimentos mais baratos que existem. O que sai mais caro são os produtos especializados.',
                'Um estudo de Oxford concluiu que a alimentação vegana pode cortar o gasto com comida em até um terço em países como Reino Unido e EUA: ' . generate_and_cache_shlink('https://www.ox.ac.uk/news/2021-11-11-sustainable-eating-cheaper-and-healthier-oxford-study'),
                'Este vídeo explica bem: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=Vs_nXVmyP1E') . ' Cozinhar com feijão, lentilha e tofu sai barato.',
            ],
            [
                'Me chama se quiser receitas baratas.',
                'Posso te passar ideias de pratos baratos.',
                'Depois me conta como foi!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-bowl-food',
        'title' => 'Proteína',
        'body' => [
            [
                'Conseguir proteína é mais fácil do que o pessoal pensa!',
                'Proteína não vai faltar!',
                'Essa aparece bastante!',
            ],
            [
                'Feijão, lentilha, tofu, tempeh, seitan, leite de soja, castanhas e sementes têm bastante proteína. Aqui tem um guia rápido: ' . generate_and_cache_shlink('https://viva.org.uk/materials/protein-myth-fact-sheet/'),
                'Uma alimentação vegana variada te dá proteína de sobra. Aqui tem um resumo sobre o mito da proteína: ' . generate_and_cache_shlink('https://viva.org.uk/materials/protein-myth-fact-sheet/'),
                'Este vídeo de um minuto resume bem: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=1elt5YCRLbk') . ' Tofu, lentilha, feijão e seitan são ótimas fontes.',
            ],
            [
                'Me chama se tiver dúvidas.',
                'Posso te passar umas ideias de pratos.',
                'Boa sorte!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-dumbbell',
        'title' => 'Fitness',
        'body' => [
            [
                'Com certeza dá pra treinar com alimentação vegana!',
                'Muitos atletas são veganos!',
                'Dá pra ganhar músculo com plantas também!',
            ],
            [
                'Vários atletas de ponta têm alimentação vegetal, de competidores de strongman a campeões de F1. The Game Changers fala disso: ' . generate_and_cache_shlink('https://gamechangersmovie.com/'),
                'O r/veganfitness está cheio de gente treinando pesado com alimentação vegetal, e tem cardápios e dicas: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/'),
                'Com tofu, seitan, lentilha, feijão e leite de soja fica fácil bater a meta de proteína. Tem muita dica de treino aqui: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/'),
            ],
            [
                'Me chama se tiver dúvidas.',
                'Bons treinos! 💪',
                'Depois me conta como foi!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-people-group',
        'title' => 'Comunidade',
        'body' => [
            [
                'Você não está só nessa!',
                'Ter gente pra conversar ajuda muito!',
                'Tem uma comunidade enorme por aí!',
            ],
            [
                'O r/vegan é uma comunidade gigante e acolhedora onde você pode perguntar qualquer coisa: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/'),
                'Dá uma olhada no r/vegan pra apoio e dúvidas: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/') . ' E no r/veganrecipes pra ideias de receitas: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganrecipes/'),
                'O Challenge 22 te junta com um mentor e um grupo que está testando o veganismo ao mesmo tempo: ' . generate_and_cache_shlink('https://challenge22.com/'),
            ],
            [
                'Se precisar de qualquer coisa, me chama também!',
                'Também tô por aqui se quiser conversar.',
                'Boa sorte!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-utensils',
        'title' => 'Comer fora',
        'body' => [
            [
                'Comer fora fica fácil rapidinho!',
                'Está bem mais fácil do que antes!',
                'É mais fácil do que parece!',
            ],
            [
                'O HappyCow mostra lugares veganos e com opções veganas perto de você: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'A maioria dos lugares já tem alguma opção vegana, e muitos cardápios indicam. Pra ideias perto de você, dá uma olhada no HappyCow: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Veja o cardápio online antes e não tenha vergonha de pedir pra trocar ingredientes. O HappyCow ajuda a achar lugares bons: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Aproveite! 🌱',
                'Me chama se precisar de ajuda.',
                'Bom apetite!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Meio ambiente',
        'body' => [
            [
                'É uma das coisas que mais fazem diferença pro planeta!',
                'Os dados deixam isso claro!',
                'Faz uma diferença enorme!',
            ],
            [
                'Se todo mundo tivesse alimentação vegetal, a gente precisaria de cerca de 75% menos área agrícola, segundo o Our World in Data: ' . generate_and_cache_shlink('https://ourworldindata.org/land-use-diets'),
                'Um estudo de Oxford concluiu que a alimentação vegana tem cerca de 30% do impacto ambiental de uma dieta rica em carne: ' . generate_and_cache_shlink('https://www.medsci.ox.ac.uk/news/vegan-diet-has-just-30-of-the-environmental-impact-of-a-high-meat-diet-major-study-finds'),
                'Carne e laticínios têm uma pegada ambiental muito maior que os alimentos vegetais em emissões, uso de terra e água. Aqui estão os dados: ' . generate_and_cache_shlink('https://ourworldindata.org/environmental-impacts-of-food'),
            ],
            [
                'Me chama se quiser saber mais 🌍',
                'Posso te passar mais informações, se quiser.',
                'Vale dar uma olhada!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-user-doctor',
        'title' => 'Especialistas concordam',
        'body' => [
            [
                'As grandes entidades de saúde concordam com isso!',
                'Os especialistas estão do seu lado!',
                'Nisso os nutricionistas são bem claros!',
            ],
            [
                'A Associação Dietética Britânica diz que dietas vegetais bem planejadas favorecem uma vida saudável em qualquer idade: ' . generate_and_cache_shlink('https://www.bda.uk.com/resource/vegetarian-vegan-plant-based-diet.html'),
                'Associações de nutricionistas dos EUA, Reino Unido, Canadá e Austrália dizem que dietas veganas bem planejadas são saudáveis em todas as idades. Resumo: ' . generate_and_cache_shlink('https://en.wikipedia.org/wiki/Vegan_nutrition#Positions_of_dietetic_and_government_associations'),
                'O NHS, o SUS britânico, diz que com um bom planejamento dá pra ter todos os nutrientes que você precisa com alimentação vegana: ' . generate_and_cache_shlink('https://www.nhs.uk/live-well/eat-well/how-to-eat-a-balanced-diet/the-vegan-diet/'),
            ],
            [
                'Me chama se tiver dúvidas.',
                'Vale a leitura!',
                'Se quiser mais fontes, me fala.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-heart-pulse',
        'title' => 'Saúde',
        'body' => [
            [
                'Muita gente vira vegana pela saúde!',
                'Pode ser bem saudável!',
                'Tem boas evidências disso!',
            ],
            [
                'Dietas veganas bem planejadas estão ligadas a um menor risco de doenças cardíacas, diabetes tipo 2 e alguns tipos de câncer. O NHS, o SUS britânico, tem um bom guia: ' . generate_and_cache_shlink('https://www.nhs.uk/live-well/eat-well/how-to-eat-a-balanced-diet/the-vegan-diet/'),
                'A OMS classifica a carne processada como causa de câncer, e a carne vermelha como provável causa: ' . generate_and_cache_shlink('https://www.who.int/news-room/questions-and-answers/item/cancer-carcinogenicity-of-the-consumption-of-red-meat-and-processed-meat'),
                'A Associação Dietética Britânica diz que dietas vegetais bem planejadas favorecem uma vida saudável em qualquer idade: ' . generate_and_cache_shlink('https://www.bda.uk.com/resource/vegetarian-vegan-plant-based-diet.html'),
            ],
            [
                'Me chama se tiver dúvidas.',
                'Posso te ajudar a planejar as refeições.',
                'Vale a leitura!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-couch',
        'title' => 'Preguiça de cozinhar',
        'body' => [
            [
                'Nem precisa cozinhar!',
                'Sem problema nenhum!',
                'Dá pra comer vegano sem cozinhar!',
            ],
            [
                'Os mercados hoje estão cheios de pratos prontos, sanduíches, pizzas congeladas e snacks veganos. É só pegar a versão vegana do que você já compra.',
                'Muita gente vegana quase não cozinha! Pratos prontos, wraps, pão com pasta de amendoim, cereal com leite de aveia... vale tudo.',
                'Comer fora também é fácil. O HappyCow mostra lugares com opções veganas perto de você: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Me chama se quiser ideias fáceis.',
                'Posso te passar meus favoritos pra dia de preguiça!',
                'Bom apetite!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-pepper-hot',
        'title' => 'Comida sem graça',
        'body' => [
            [
                'Não precisa ser assim!',
                'Comida vegana pode ser muito gostosa!',
                'Tem muito mais que salada!',
            ],
            [
                'Dá pra deixar quase qualquer prato vegano: curry, hambúrguer, macarrão, bolo. Aqui tem um monte de receitas: ' . generate_and_cache_shlink('https://veganuary.com/pt-br/receitas/'),
                'Pesquise seu prato favorito + \'vegano\', tem versão de quase tudo. Pra comer fora: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'O r/veganrecipes está cheio de ideias: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganrecipes/') . ' E o HappyCow acha ótimos lugares pra comer: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Me chama se quiser indicações.',
                'Aproveite! 😋',
                'Divirta-se na cozinha!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-comments',
        'title' => '30+ argumentos',
        'body' => [
            [
                'Essa é bem comum!',
                'Pergunta justa!',
                'Sempre escuto essa!',
            ],
            [
                'Este guia gratuito responde aos 30 argumentos mais comuns contra o veganismo: ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf'),
                'O Earthling Ed responde 30 desculpas comuns em vídeos curtos: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'Este guia fala dos 30 mitos mais comuns: ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf') . ' Ou, se preferir vídeo: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
            ],
            [
                'Me chama se quiser conversar sobre isso.',
                'Qualquer dúvida, é só perguntar!',
                'Vale dar uma olhada!',
            ],
        ],
    ],
];
