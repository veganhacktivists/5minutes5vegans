<?php

require_once(app_path('generate_and_cache_shlink.php'));

return [
    [
        'icon' => 'fas fa-circle-info',
        'title' => 'Información',
        'body' => [
            [
                '¡Anímate a probarlo!',
                '¡Qué alegría leer esto!',
                '¡Lánzate, no te arrepentirás!',
            ],
            [
                'La mayoría de los veganos dice que solo lamenta no haber empezado antes. r/vegan va genial para dudas: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/') . ' Y estos vídeos cortos resuelven las más típicas: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'Un buen primer paso es el reto gratuito de 31 días de Veganuary, que puedes empezar cuando quieras. Te mandan planes de comidas y un correo diario: ' . generate_and_cache_shlink('https://veganuary.com/es/'),
                'El Desafío 22 es gratis y tienes un mentor y dietistas durante 22 días: ' . generate_and_cache_shlink('https://desafio22.com/') . ' Y para entender por qué importa, mira el principio de Dominion: ' . generate_and_cache_shlink('https://youtu.be/J_G3ZhimsMw?t=40'),
            ],
            [
                'Escríbeme si necesitas ayuda.',
                'Pregúntame lo que quieras.',
                '¡Si te atascas, dímelo!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-calendar-check',
        'title' => 'Reto vegano',
        'body' => [
            [
                '¡Buenas!',
                '¡Hola!',
                '¡Anímate!',
            ],
            [
                'Veganuary tiene un reto gratuito de 31 días que puedes empezar cuando quieras, con planes de comidas y un correo diario: ' . generate_and_cache_shlink('https://veganuary.com/es/'),
                'El Desafío 22 es un reto gratuito de 22 días, con tu propio mentor y dietistas que te echan una mano: ' . generate_and_cache_shlink('https://desafio22.com/'),
                'Vegan Bootcamp es gratis y vas a tu ritmo, con cursos cortos sobre comida, nutrición y más: ' . generate_and_cache_shlink('https://veganbootcamp.org'),
            ],
            [
                '¡Tú puedes!',
                '¡Mucha suerte!',
                'Es más fácil de lo que parece.',
                'Escríbeme si necesitas ayuda.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-bacon',
        'title' => 'Amo la carne',
        'body' => [
            [
                '¡La carne vegana ha mejorado un montón!',
                '¡No tienes por qué echarla de menos!',
                'Te entiendo, pero las alternativas ya están muy buenas.',
            ],
            [
                'La mayoría de los súper venden ya hamburguesas, salchichas, carne picada y nuggets vegetales. Heura es un buen punto de partida: ' . generate_and_cache_shlink('https://heurafoods.com/es/productos/'),
                'Ya se puede sustituir casi todo: hamburguesas, salchichas, bacon, carne picada. Prueba varias marcas, también la marca blanca del súper, a ver cuál te gusta más.',
                'Muchos restaurantes y cadenas también tienen ya opciones vegetales. En HappyCow ves sitios con opciones veganas cerca de ti: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Escríbeme si quieres recomendaciones.',
                'Si quieres, te paso mis favoritos.',
                '¡Disfruta probando!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-cheese',
        'title' => 'Amo el queso',
        'body' => [
            [
                '¡El queso vegano ha mejorado un montón!',
                '¡El queso vegano está muchísimo mejor que antes!',
                '¡Te sorprendería lo bueno que está ya el queso vegano!',
            ],
            [
                'Violife vale para todo y funde bien: ' . generate_and_cache_shlink('https://violifefoods.com/') . ' Follow Your Heart y Daiya también están muy bien.',
                'Aquí tienes un montón de quesos veganos, desde curados hasta rallados: ' . generate_and_cache_shlink('https://www.veggieroom.es/es/tipo/quesos-y-natas-vegetales'),
                'Hay mucha diferencia entre marcas, así que prueba varias. Violife es un buen comienzo y se derrite en pizzas y sándwiches: ' . generate_and_cache_shlink('https://violifefoods.com/'),
            ],
            [
                'Escríbeme si quieres más ideas.',
                'Si quieres, te recomiendo algunos.',
                '¡Disfruta! 🧀',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-pizza-slice',
        'title' => 'Amo la pizza',
        'body' => [
            [
                '¡Con la pizza lo tienes fácil!',
                '¡No tienes que renunciar a la pizza!',
                '¡Hoy es muy fácil encontrar pizza vegana!',
            ],
            [
                'Muchas cadenas ya tienen pizzas con queso vegano o sin queso. En HappyCow ves sitios con opciones veganas cerca de ti: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'La mayoría de los súper venden ya pizza vegana, y aquí tienes una lista de cadenas con opciones veganas: ' . generate_and_cache_shlink('https://www.peta.org/lifestyle/food/pizza-places-vegan-options/'),
                'Mercadona tiene pizza vegana congelada: ' . generate_and_cache_shlink('https://ideavegana.com/pizza-vegana-mercadona/') . ' Y en muchas pizzerías te ponen queso vegano si se lo pides.',
            ],
            [
                '¡Disfruta! 🍕',
                'Escríbeme si necesitas ayuda para encontrar una.',
                '¡Que aproveche!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-egg',
        'title' => 'Amo el huevo',
        'body' => [
            [
                '¡El huevo es más fácil de sustituir de lo que crees!',
                'Hay alternativas al huevo muy buenas.',
                '¡Tienes un montón de opciones!',
            ],
            [
                'El revuelto de tofu es un sustituto genial de los huevos revueltos, sobre todo con unas espinacas: ' . generate_and_cache_shlink('https://danzadefogones.com/revuelto-vegano-tofu/'),
                'Con JUST Egg, hecho de judía mungo, puedes hacer revuelto igual que con huevo: ' . generate_and_cache_shlink('https://www.ju.st/eat/eggs'),
                'Si te cuesta dejar el huevo, esta guía te puede ayudar: ' . generate_and_cache_shlink('https://chooseveg.com/blog/go-vegan-cant-give-up-eggs-help/') . ' Y así es como tratan a las gallinas ponedoras: ' . generate_and_cache_shlink('https://viva.org.uk/animals/egg-laying-hens/'),
            ],
            [
                'Escríbeme si quieres recetas.',
                'Tengo más ideas, si te interesan.',
                '¡Disfruta probando!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-ice-cream',
        'title' => 'Amo el helado',
        'body' => [
            [
                '¡El helado vegano ya está buenísimo!',
                '¡Estás de suerte, hay helado vegano en todas partes!',
                '¡No tienes por qué quedarte sin helado!',
            ],
            [
                'Ben & Jerry\'s tiene toda una gama sin lácteos: ' . generate_and_cache_shlink('https://www.ben-jerrys.es/sabores/helado-vegano'),
                'Aquí tienes un buen repaso de helados veganos, del súper y caseros: ' . generate_and_cache_shlink('https://ideavegana.com/?s=helado'),
                'La mayoría de los súper tienen helados de avena, soja, almendra y coco, y Ben & Jerry\'s también tiene una gama sin lácteos: ' . generate_and_cache_shlink('https://www.ben-jerrys.es/sabores/helado-vegano'),
            ],
            [
                '¡Disfruta! 🍦',
                '¡Ya me dirás cuál es tu favorito!',
                'Escríbeme si quieres más ideas.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-drumstick-bite',
        'title' => 'Amo el pollo',
        'body' => [
            [
                '¡El pollo vegano ya está buenísimo!',
                '¡Puedes seguir comiendo pollo, pero vegetal!',
                '¡Hay un montón de alternativas!',
            ],
            [
                'Mira en los congelados y los refrigerados de tu súper: hay nuggets, tiras y filetes vegetales. Tienes muchas marcas para probar.',
                'Muchos sitios tienen ya hamburguesas y wraps de pollo vegano. En HappyCow ves lo que hay cerca de ti: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'El seitán y el pollo de soja quedan genial en wraps y salteados. Aquí tienes recetas fáciles: ' . generate_and_cache_shlink('https://veganuary.com/es/recetas/'),
            ],
            [
                'Escríbeme si quieres ideas de marcas.',
                '¡Prueba unas cuantas!',
                '¡Disfruta!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-glass-water',
        'title' => 'Leches vegetales',
        'body' => [
            [
                '¡Pasarse a la leche vegetal es muy fácil!',
                '¡Hay un montón de leches vegetales!',
                '¡Es una forma genial de empezar!',
            ],
            [
                'Avena, soja, almendra, coco, anacardo, arroz... La de avena y la de soja van genial en el café y el té. Prueba varias y quédate con la que más te guste.',
                'Si quieres saber por qué la gente se cambia, este vídeo corto merece la pena: ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI'),
                'Busca las que estén enriquecidas con calcio. La de soja tiene más o menos la misma proteína que la de vaca.',
            ],
            [
                'Escríbeme si tienes dudas.',
                '¡Disfruta probando!',
                '¡Ya me contarás qué tal!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-film',
        'title' => 'Documentales',
        'body' => [
            [
                'Aquí tienes algunos documentales que merecen la pena:',
                'Unas pelis que te pueden ayudar:',
                'Un par de cosas que merece la pena ver:',
            ],
            [
                'Dominion, sobre cómo se trata a los animales de granja (gratis): ' . generate_and_cache_shlink('https://youtu.be/J_G3ZhimsMw?t=40') . ' The Game Changers, sobre deportistas con dieta vegetal: ' . generate_and_cache_shlink('https://gamechangersmovie.com/'),
                'Dominion es gratis y difícil de olvidar: ' . generate_and_cache_shlink('https://youtu.be/J_G3ZhimsMw?t=40') . ' Y los vídeos cortos de Earthling Ed van genial para las dudas de siempre: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'The Game Changers, sobre deportistas de élite que comen vegetal: ' . generate_and_cache_shlink('https://gamechangersmovie.com/') . ' Y Dominion, gratis, sobre la vida en las granjas: ' . generate_and_cache_shlink('https://youtu.be/J_G3ZhimsMw?t=40'),
            ],
            [
                '¡Ya me contarás qué te parecen! 🌱',
                '¡Avísame si les echas un ojo!',
                'Si quieres, luego lo comentamos.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-eye',
        'title' => 'Dominion',
        'body' => [
            [
                'Te recomiendo muchísimo Dominion.',
                '¿Has visto Dominion?',
                'Si vas a ver solo una cosa, que sea Dominion.',
            ],
            [
                'Es un documental gratuito sobre cómo se trata de verdad a los animales de granja: ' . generate_and_cache_shlink('https://youtu.be/J_G3ZhimsMw?t=40') . ' Solo con los primeros 15 minutos ya merece la pena.',
                'Enseña lo que pasa en granjas y mataderos, y se puede ver gratis: ' . generate_and_cache_shlink('https://youtu.be/J_G3ZhimsMw?t=40'),
                'Es gratis y ha hecho cambiar de opinión a mucha gente: ' . generate_and_cache_shlink('https://youtu.be/J_G3ZhimsMw?t=40') . ' Es duro de ver, pero merece la pena.',
            ],
            [
                'Escríbeme si te apetece hablarlo.',
                'Pregúntame lo que quieras.',
                'Si te decides a pasarte al veganismo, te echo una mano.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-shoe-prints',
        'title' => 'Poco a poco',
        'body' => [
            [
                '¡Qué bien que te lo estés planteando! 🐮',
                '¡Qué guay!',
                '¡Bien por animarte a probarlo!',
            ],
            [
                'Si te parece mucho, ve paso a paso. Empieza por la leche vegetal, luego la mantequilla y luego la carne. Vegan Bootcamp te puede guiar: ' . generate_and_cache_shlink('https://veganbootcamp.org'),
                'Prueba con una comida vegana al día y ve sumando a partir de ahí. Veganuary tiene recetas fáciles para empezar: ' . generate_and_cache_shlink('https://veganuary.com/es/recetas/'),
                'Empieza por los cambios que te parezcan más fáciles, como la leche o las hamburguesas, y ve avanzando. El Desafío 22 te pone un mentor para ayudarte: ' . generate_and_cache_shlink('https://desafio22.com/'),
            ],
            [
                '¡Tú puedes!',
                'Escríbeme si necesitas ayuda.',
                'No hace falta hacerlo todo de golpe.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-carrot',
        'title' => 'Vegetariano/a',
        'body' => [
            [
                '¡El vegetarianismo ya es un gran paso!',
                '¡Genial, enhorabuena!',
                '¡Buen comienzo!',
            ],
            [
                'Este vídeo explica por qué pasarse del todo al veganismo marca tanta diferencia: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=uWna6-niYEg'),
                'Por desgracia, los lácteos y el huevo también causan mucho sufrimiento. Este vídeo corto lo explica: ' . generate_and_cache_shlink('https://youtu.be/UcN7SGGoCNI'),
                'Si te apetece dar el siguiente paso, el Desafío 22 es gratis y te pone un mentor: ' . generate_and_cache_shlink('https://desafio22.com/'),
            ],
            [
                'Escríbeme si tienes dudas.',
                'Si quieres probar, te ayudo.',
                '¡Ya casi lo tienes!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-piggy-bank',
        'title' => 'Es muy caro',
        'body' => [
            [
                '¡En realidad puede salir más barato!',
                '¡La comida vegana puede ser muy barata!',
                '¡No tiene por qué serlo!',
            ],
            [
                'Alubias, lentejas, arroz, pasta, avena, patatas y verdura congelada están entre lo más barato que hay. Lo que sube el precio son los productos especiales.',
                'Un estudio de Oxford concluyó que las dietas veganas podrían reducir el gasto en comida hasta en un tercio en países como Reino Unido y EE. UU.: ' . generate_and_cache_shlink('https://www.ox.ac.uk/news/2021-11-11-sustainable-eating-cheaper-and-healthier-oxford-study'),
                'Este vídeo lo explica muy bien: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=Vs_nXVmyP1E') . ' Cocinando con alubias, lentejas y tofu, sale barato.',
            ],
            [
                'Escríbeme si quieres recetas baratas.',
                'Si quieres, te paso ideas de comidas baratas.',
                '¡Ya me contarás qué tal!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-bowl-food',
        'title' => 'Proteínas',
        'body' => [
            [
                '¡Lo de la proteína es más fácil de lo que la gente cree!',
                '¡No te va a faltar proteína!',
                '¡Eso se pregunta mucho!',
            ],
            [
                'Alubias, lentejas, tofu, tempeh, seitán, leche de soja, frutos secos y semillas tienen mucha proteína. Aquí tienes una guía: ' . generate_and_cache_shlink('https://vegetarianismo.net/nutricion/proteinas.htm'),
                'Con una dieta vegana variada tienes de sobra. Aquí se desmonta el mito de la proteína: ' . generate_and_cache_shlink('https://yourveganfallacyis.com/es/veganos-no-pueden-obtener-suficiente-proteina/fuentes'),
                'Este vídeo de un minuto lo resume: ' . generate_and_cache_shlink('https://www.youtube.com/watch?v=1elt5YCRLbk') . ' El tofu, las lentejas, las alubias y el seitán son fuentes geniales.',
            ],
            [
                'Escríbeme si tienes dudas.',
                'Si quieres, te paso ideas de comidas.',
                '¡Mucha suerte!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-dumbbell',
        'title' => 'Deporte',
        'body' => [
            [
                '¡Claro que puedes entrenar con una dieta vegana!',
                '¡Hay muchísimos deportistas veganos!',
                '¡Con plantas también se gana músculo!',
            ],
            [
                'Muchos deportistas de élite siguen una dieta vegetal, desde forzudos hasta campeones de F1. The Game Changers lo cuenta: ' . generate_and_cache_shlink('https://gamechangersmovie.com/'),
                'En r/veganfitness hay mucha gente entrenando a tope a base de plantas, con planes de comidas y consejos: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/'),
                'Con tofu, seitán, lentejas, alubias y leche de soja es fácil llegar a tu proteína diaria. Aquí tienes un montón de consejos para entrenar: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganfitness/'),
            ],
            [
                'Escríbeme si tienes dudas.',
                '¡Suerte con los entrenos! 💪',
                '¡Ya me contarás qué tal!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-people-group',
        'title' => 'Comunidad',
        'body' => [
            [
                '¡Hay mucha gente en tu misma situación!',
                '¡Ayuda mucho tener gente con quien hablar!',
                '¡Hay una comunidad enorme ahí fuera!',
            ],
            [
                'r/vegan es una comunidad gigante y muy maja donde puedes preguntar lo que sea: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/'),
                'Prueba r/vegan para apoyo y dudas: ' . generate_and_cache_shlink('https://www.reddit.com/r/vegan/') . ' Y r/veganrecipes para ideas de comida: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganrecipes/'),
                'El Desafío 22 te pone un mentor y un grupo de gente que está probando el veganismo a la vez que tú: ' . generate_and_cache_shlink('https://desafio22.com/'),
            ],
            [
                'Escríbeme a mí también si necesitas algo.',
                'Yo también estoy por aquí si quieres hablar.',
                '¡Mucha suerte!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-utensils',
        'title' => 'Comer fuera',
        'body' => [
            [
                '¡Enseguida le pillas el truco a comer fuera!',
                '¡Es mucho más fácil que antes!',
                '¡Es más fácil de lo que crees!',
            ],
            [
                'En HappyCow ves sitios veganos y con opciones veganas cerca de ti: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'La mayoría de los sitios tienen ya algo vegano, y muchas cartas lo indican. Para ideas cerca de ti, prueba HappyCow: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'Mira la carta online antes y no te cortes en pedir cambios. HappyCow te ayuda a encontrar buenos sitios: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                '¡Disfruta! 🌱',
                'Escríbeme si necesitas ayuda.',
                '¡Que aproveche!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Medio ambiente',
        'body' => [
            [
                '¡Es de lo mejor que puedes hacer por el planeta!',
                '¡Los datos lo dejan claro!',
                '¡Marca una diferencia enorme!',
            ],
            [
                'Según Our World in Data, si todo el mundo siguiera una dieta vegetal necesitaríamos alrededor de un 75% menos de superficie agrícola: ' . generate_and_cache_shlink('https://ourworldindata.org/land-use-diets'),
                'Un estudio de Oxford concluyó que una dieta vegana tiene más o menos el 30% del impacto ambiental de una dieta con mucha carne: ' . generate_and_cache_shlink('https://www.medsci.ox.ac.uk/news/vegan-diet-has-just-30-of-the-environmental-impact-of-a-high-meat-diet-major-study-finds'),
                'La carne y los lácteos tienen una huella mucho mayor que los alimentos vegetales en emisiones, tierra y agua. Aquí tienes los datos: ' . generate_and_cache_shlink('https://ourworldindata.org/environmental-impacts-of-food'),
            ],
            [
                'Escríbeme si quieres saber más 🌍',
                'Si quieres, te paso más info.',
                '¡Échale un vistazo!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-user-doctor',
        'title' => 'Consenso',
        'body' => [
            [
                '¡Los grandes organismos de salud coinciden en esto!',
                '¡Los expertos te dan la razón!',
                '¡Esto ya está más que claro!',
            ],
            [
                'La Asociación Británica de Dietética dice que las dietas vegetales bien planificadas permiten llevar una vida sana a cualquier edad: ' . generate_and_cache_shlink('https://www.bda.uk.com/resource/vegetarian-vegan-plant-based-diet.html'),
                'Las asociaciones de dietética de EE. UU., Reino Unido, Canadá y Australia dicen que una dieta vegana bien planificada es sana a cualquier edad. Resumen: ' . generate_and_cache_shlink('https://en.wikipedia.org/wiki/Vegan_nutrition#Positions_of_dietetic_and_government_associations'),
                'El NHS, la sanidad pública británica, dice que con una buena planificación puedes obtener todos los nutrientes que necesitas con una dieta vegana: ' . generate_and_cache_shlink('https://www.nhs.uk/live-well/eat-well/how-to-eat-a-balanced-diet/the-vegan-diet/'),
            ],
            [
                'Escríbeme si tienes dudas.',
                '¡Merece la pena leerlo!',
                'Si quieres más fuentes, dímelo.',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-heart-pulse',
        'title' => 'Salud',
        'body' => [
            [
                '¡Mucha gente se hace vegana por salud!',
                '¡Puede ser muy saludable!',
                '¡Hay datos que lo respaldan!',
            ],
            [
                'Las dietas veganas bien planificadas se asocian con menos riesgo de enfermedades del corazón, diabetes tipo 2 y algunos cánceres. El NHS británico tiene una buena guía: ' . generate_and_cache_shlink('https://www.nhs.uk/live-well/eat-well/how-to-eat-a-balanced-diet/the-vegan-diet/'),
                'La OMS clasifica la carne procesada como causa de cáncer, y la carne roja como causa probable: ' . generate_and_cache_shlink('https://www.who.int/news-room/questions-and-answers/item/cancer-carcinogenicity-of-the-consumption-of-red-meat-and-processed-meat'),
                'La Asociación Británica de Dietética dice que las dietas vegetales bien planificadas permiten llevar una vida sana a cualquier edad: ' . generate_and_cache_shlink('https://www.bda.uk.com/resource/vegetarian-vegan-plant-based-diet.html'),
            ],
            [
                'Escríbeme si tienes dudas.',
                'Si quieres, te ayudo con las comidas.',
                '¡Merece la pena leerlo!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-couch',
        'title' => 'Pereza de cocinar',
        'body' => [
            [
                '¡No hace falta cocinar!',
                '¡No pasa nada!',
                '¡Puedes comer vegano sin cocinar!',
            ],
            [
                'Los súper ya están llenos de platos preparados, sándwiches, pizzas congeladas y snacks veganos. Busca la versión vegana de lo que sueles comprar.',
                '¡Muchos veganos apenas cocinan! Platos preparados, wraps, legumbres de bote, cereales con leche de avena... todo vale.',
                'Comer fuera también es fácil. En HappyCow ves sitios con opciones veganas cerca de ti: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Escríbeme si quieres ideas fáciles.',
                '¡Pídeme mis favoritos para días de pereza!',
                '¡Que aproveche!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-pepper-hot',
        'title' => 'Comida aburrida',
        'body' => [
            [
                '¡Qué va, no tiene por qué serlo!',
                '¡La comida vegana puede estar buenísima!',
                '¡Hay mucho más que ensalada!',
            ],
            [
                'Casi cualquier plato se puede hacer vegano: currys, hamburguesas, pasta, tartas. Aquí tienes un montón de recetas: ' . generate_and_cache_shlink('https://veganuary.com/es/recetas/'),
                'Busca tu plato favorito y añade "vegano", hay versión de casi todo. Para comer fuera: ' . generate_and_cache_shlink('https://www.happycow.net'),
                'r/veganrecipes está lleno de ideas: ' . generate_and_cache_shlink('https://www.reddit.com/r/veganrecipes/') . ' Y HappyCow te encuentra sitios geniales para comer: ' . generate_and_cache_shlink('https://www.happycow.net'),
            ],
            [
                'Escríbeme si quieres recomendaciones.',
                '¡Que aproveche! 😋',
                '¡Disfruta cocinando!',
            ],
        ],
    ],

    [
        'icon' => 'fas fa-comments',
        'title' => '30+ argumentos',
        'body' => [
            [
                '¡Esa es muy típica!',
                '¡Es una duda lógica!',
                '¡Eso lo oigo muchísimo!',
            ],
            [
                'Esta guía gratuita responde a los 30 argumentos más comunes contra el veganismo: ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf'),
                'Earthling Ed responde a 30 excusas típicas en vídeos cortos: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
                'Esta guía repasa los 30 mitos más comunes: ' . generate_and_cache_shlink('https://www.all-creatures.org/articles2/act-earthling-ed.pdf') . ' O si prefieres vídeos: ' . generate_and_cache_shlink('https://www.youtube.com/playlist?list=PLubRo9PzBgLzTR_ElF2IQ1i-zdEB8fMs2'),
            ],
            [
                'Escríbeme si quieres que lo hablemos.',
                'Pregúntame lo que quieras.',
                '¡Échale un vistazo!',
            ],
        ],
    ],
];
