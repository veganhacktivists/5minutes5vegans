<?php

require_once(app_path('generate_and_cache_tinyurl.php'));

return [

    [
        'icon' => 'fas fa-info-circle',
        'title' => 'Información',
        'body' =>[
            [
                '¡Bien hecho! La mayoría de los veganos lamentamos no haber empezado antes\.'
            ], [
                'Aquí tienes algunos recursos: ' . generate_and_cache_tinyurl('http://reddit.com/r/Vegan') . ' \(comunidad\) ' . generate_and_cache_tinyurl('https://youtu.be/ny6aqdFy9SI?t=41') . ' \(Documental\) ' . generate_and_cache_tinyurl('https://www.youtube.com/playlist?list=PL03LZR09P2gQJyBgHk_XE8gbj8j9uFs8G') . ' \(Mitos\) 🐷 Envíame un MP si necesitas ayuda!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Desafío 22+',
        'body' =>[
            [
                'Hey!',
                '¡Hola!',
                '¡Qué bien leerlo!'
            ], [
                'Puedes hacerlo (definitivamente |absolutamente )?hazlo!',
                'Aquí estamos (siempre )?aquí para ayudar!',
                'Es (definitivamente|absolutamente )?muchísimo más fácil de lo que puedas pensar!'
            ], [
                'Deberías probar el Desafío 22\+!',
                'El Desafío 22\+ puede ser justo lo que estás buscando\.',
                'Hay un proyecto llamado Desafío 22\+ (muy interesante|que podrías probar)?\.'
            ], [
                'Te dan (un|tu propio) mentor (personal )?voluntario (en Facebook )?para ayudarte a ser vegan@ durante un mes\.',
                'Tienes acceso a un mentor (personal )?(online | en Facebook )?para ayudarte a ser vegan@ durante un mes\.',
                'Pueden ayudarte a ser vegan@ durante un mes con un mentor personal voluntario( por Facebook)?\.',
                'Contactan contigo con un mentor (personal )?(en Facebook )?para ayudarte a ser vegan@ durante un mes\.',
                'Puedes tener un mentor (personal )?voluntario (por Facebook )?para ayudarte a ser vegan@ durante un mes\.',
                'Pueden contactarte (por Facebook )?con un mentor (personal )?voluntario para ayudarte a ser vegan@ durante un mes\.'
            ], [
                'El link es ' . generate_and_cache_tinyurl('https://www.challenge22.com/es') . ';',
                'La URL es ' . generate_and_cache_tinyurl('https://www.challenge22.com/es') . ';',
                'El enlace es ' . generate_and_cache_tinyurl('https://www.challenge22.com/es') . ';',
                'La web es ' . generate_and_cache_tinyurl('https://www.challenge22.com/es') . ';',
            ], [
                '¡Buena suerte, puedes con ello!',
                'Tú puedes con ello( perfectamente)?!',
                'Estamos (todos )?contigo!',
//                 'Hang in there!',
                'Mantente fuerte!',
                '¡Vamos! (Tú )?puedes con ello( perfectamente)?!',
                'Sigue luchándolo!',
                '(No|Nunca) te rindas!',
                '¡A darlo todo!',
                'Confía en ti!'
            ], [
                '¡Contáctame si necesitas (más )?ayuda!',
                '¡Respóndeme si necesitas (más )?ayuda!',
                '(Eres libre de|Siempre puedes) contactarme si necesitas (más )?ayuda!',
                'Si necesitas (más )?ayuda dímelo!',
                'Si (alguna vez )?necesitas (más )?ayuda mándame un (mensaje|MP)!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-bacon',
        'title' => 'Amo la carne',
        'body' =>[
            [
                'Cada vez hay más carnes veganas desde estos últimos años!'
            ], [
                'Beyond Meat es excelente: ' . generate_and_cache_tinyurl('https://www.beyondmeat.com/') . ' y Heura también tienen muchos productos: ' . generate_and_cache_tinyurl('https://www.heurafoods.com/donde-encontrar-comprar-heura') . ' Echa un vistazo en tu supermercado para ver qué productos hay disponibles, podrías sorprenderte!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-cheese',
        'title' => 'Amo el queso',
        'body' =>[
            [
                'Los quesos veganos han evolucionado mucho estos últimos años, ¿los has probado?'
            ], [
                'Mi favorito es Violife, que tienen hasta para fundir, pero hay muchos más!'
            ], [
                'Si no, puedes comprarlos en ' . generate_and_cache_tinyurl('https://www.veggieroom.es/es/tipo/quesos-y-natas-vegetales') . ' o en ' . generate_and_cache_tinyurl('https://www.vegaffinity.com/tienda-vegana/44-comprar-quesos-veganos') . ' ¡Si tienes alguna duda aquí estoy! 😊'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-pizza-slice',
        'title' => 'Amo la Pizza',
        'body' =>[
            [
                'Puedes encontrar productos veganos como pizzas \(y restaurantes\) en ' . generate_and_cache_tinyurl('http://HappyCow.net') . '!'
            ], [
                'Hay muchas marcas de pizzas veganas, como las de Mercadona o Lidl: ' . generate_and_cache_tinyurl('https://ideavegana.com/pizza-vegana-mercadona/') . ' por supuesto, siempre están las caseras. Si quieres más info dímelo y te ayudo\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-egg',
        'title' => 'Amo el huevo',
        'body' =>[
            [
                'Hay muy buenas recetas con huevo veganizadas \(como esta, pero con espinaca\): ' . generate_and_cache_tinyurl('https://danzadefogones.com/revuelto-vegano-tofu/')
            ], [
                '🐣 También puedes encontrar sustitutivos en
: ' . generate_and_cache_tinyurl('https://soycomocomo.es/especialista/biogra/huevo-vegano') . ' o comprarlos directamente como los “huevos” veganos No Egg (de Orgran)\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-ice-cream',
        'title' => 'Amo el helado',
        'body' =>[
            [
                'Prueba los helados veganos de Ben&Jerry\'s: ' . generate_and_cache_tinyurl('https://www.ben-jerrys.es/sabores/vegano')
            ], [
                'Tienen muchos sabores y también hay otras marcas con helados de soja/almendras/coco/etc!'
            ], [
                '(Mira:|Échale un ojo a) ' . generate_and_cache_tinyurl('https://ideavegana.com/?s=helado')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-drumstick-bite',
        'title' => 'Amo el pollo',
        'body' =>[
            [
                'Heura tiene un pollo increíble: ' . generate_and_cache_tinyurl('https://www.heurafoods.com/donde-encontrar-comprar-heura')
            ], [
                '🐣 HappyCow para comer fuera: ' . generate_and_cache_tinyurl('https://www.happycow.net') . '! échales un ojo, seguro que encuentras sitios interesantes cerca que pueden sorprenderte! 😉 Si tienes cualquier duda dímelo! 😊 '
            ]
        ]
    ],

    [
        'icon' => 'fas fa-glass-whiskey',
        'title' => 'Leches vegetales',
        'body' =>[
            [
                'Mira este vídeo de sólo 5 min\. \(puedes activar subtítulos\) ' . generate_and_cache_tinyurl('https://youtu.be/UcN7SGGoCNI')
            ], [
                'Existen muchas leches vegetales deliciosas de: soja, almendras, avena, coco, arroz, etc!'
            ], [
                'No se ponen malas, son más saludables y no necesitan refrigeración antes de abrirlas.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-video',
        'title' => 'Documentales',
        'body' =>[
            [
                'Aquí tienes un poco de motivación! Cowspiracy \(Medio ambiente\): ' . generate_and_cache_tinyurl('https://www.netflix.com/title/80033772') . ' The Game Changers \(Salud\): ' . generate_and_cache_tinyurl('https://www.netflix.com/title/81157840') . ' Dominion \(Animales\): ' . generate_and_cache_tinyurl('https://youtu.be/ny6aqdFy9SI?t=40')
            ], [
                'Avísame si ves alguno!! 🌱'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-sad-cry',
        'title' => 'Película Dominion',
        'body' =>[
            [
                'Te recomiendo que veas este vídeo de YouTube: ' . generate_and_cache_tinyurl('https://youtu.be/J_G3ZhimsMw?t=40')
            ], [
                'Si tienes tiempo, los últimos 15 minutos te pueden cambiar la vida\.'
            ], [
                'Mándame un mensaje si quieres ayuda para hacerte vegano y te responderé lo que quieras gustosamente!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-baby',
        'title' => 'Poco a poco',
        'body' =>[
            [
                'Es fantástico que tengas interés en el veganismo! 🐮'
            ], [
                'Si crees que es muy difícil y no sabes cómo hacerlo, prueba poco a poco\.'
            ], [
                'Empieza por probar y acostumbrarte a beber leches vegetales.'
            ], [
                'Luego mantequilla, carnes, etc\. Más info \(activa subtítulos\): ' . generate_and_cache_tinyurl('https://www.youtube.com/playlist?list=PL03LZR09P2gQJyBgHk_XE8gbj8j9uFs8G')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Vegetariano/a',
        'body' =>[
            [
                'El vegetarianismo es genial 😊'
            ], [
                'pero te recomendaría ver este vídeo \(con subtítulos\): ' . generate_and_cache_tinyurl('https://www.youtube.com/watch?v=uWna6-niYEg')
            ], [
                'Algunos argumentos desmentidos \(con subs\): ' . generate_and_cache_tinyurl('https://www.youtube.com/playlist?list=PL03LZR09P2gQJyBgHk_XE8gbj8j9uFs8G') . ' y el desafío de 1 mes de veganismo: ' . generate_and_cache_tinyurl('https://www.challenge22.com/es')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-coins',
        'title' => 'Es muy caro',
        'body' =>[
            [
                'En realidad, ser vegan es muy barato! Sólo es caro si compras muchos productos “especiales”'
            ], [
                'Patatas, arroz, tofu, legumbres, verdura, fruta, pasta, avena, son todas muy baratas!'
   ], [
                'Gran vídeo \(con subtítulos\) sobre ello: ' . generate_and_cache_tinyurl('https://www.youtube.com/watch?v=Vs_nXVmyP1E')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-calculator',
        'title' => 'Las proteínas',
        'body' =>[
            [
                'Todo tipo de comida: verduras, frutas, semillas, etc tiene proteínas, de las que no necesitamos tantas\.'
            ], [
                'Este enlace trata el tema: ' . generate_and_cache_tinyurl('https://vegetarianismo.net/nutricion/proteinas.htm') . ' más en: ' . generate_and_cache_tinyurl('https://yourveganfallacyis.com/es/veganos-no-pueden-obtener-suficiente-proteina/fuentes'). ' y ' . generate_and_cache_tinyurl('https://viva.org.uk/materials/protein-myth-fact-sheet/').  ' si tienes dudas o quieres más infornación aquí estoy 😊'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-dumbbell',
        'title' => 'Dieta deportiva',
        'body' =>[
            [
                'El hombre más fuerte del mundo es vegano, y hay muchos otros récords de deportistas veganos'
            ], [
                'Una buena dieta vegetal es la mejor para tu entrenamiento!'
            ], [
                'Vídeos: ' . generate_and_cache_tinyurl('https://www.youtube.com/results?search_query=vegan+fitness') . ' y comunidad (en inglés): ' . generate_and_cache_tinyurl('https://www.reddit.com/r/veganfitness/')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-comments',
        'title' => 'Comunidad',
        'body' =>[
            [
                'Si quieres hablar con gente o simplemente ayuda, échale un ojo a: ' . generate_and_cache_tinyurl('http://reddit.com/r/Vegan') . '!'
            ], [
                'Es una comunidad de más de 300,000 veganos con experiencia, pregúntales lo que quieras\.'
            ], [
                'También existen /r/VeganFitness, /r/VeganRecipes, y muchos más!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-utensils',
        'title' => 'Comer fuera',
        'body' =>[
            [
                'Comer fuera puede ser difícil si no sabes dónde ir o qué pedir, pero se hace mucho más fácil cuando lo hayas hecho varias veces\.'
            ], [
                'Hasta entonces, te puedes ayudar de: ' . generate_and_cache_tinyurl('http://happycow.net') . ' para encontrar opciones veganas! 🐮'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-tree',
        'title' => 'Medio ambiente',
        'body' =>[
            [
                'Hay estadísticas basadas en artículos y estudios realmente agobiantes sobre lo que las industrias cárnica y láctea están haciéndole al medio ambiente: ' . generate_and_cache_tinyurl('https://speciesjustice.org/environment') . ' Ej: la ganadería es responsable de hasta un 91% de la destrucción del Amazonas\.'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-flask',
        'title' => 'Consenso',
        'body' =>[
            [
                'Hoy en día existe consenso en que el veganismo es más sano que una dieta con carnes\.'
            ], [
                'Esta página muestra las fuentes directamente de las organizaciones más importantes de salud, dietética y nutrición \(que son objetivas\): ' . generate_and_cache_tinyurl('https://youaretheirvoice.com/pages/the-clear-consensus')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-heartbeat',
        'title' => 'Salud',
        'body' =>[
            [
                'Hoy en día se sabe que una dieta vegana es mucho más saludable que una dieta tradicional\.'
            ], [
                'Las carnes rojas y procesadas causan enfermedades como: cáncer, problemas de corazón, diabetes y obesidad\.'
            ], [
                'Esta web tiene info y estudios: ' . generate_and_cache_tinyurl('https://youaretheirvoice.com/pages/the-clear-consensus')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-leaf',
        'title' => 'Cocinando',
        'body' =>[
            [
                'Muchos veganos, en vez de cocinar, compran procesados veganos o comen en restaurantes\.'
            ], [
                'No es necesario aprender a cocinar para tener una dieta saludable vegana\.'
            ], [
                'Comer fuera es muy fácil con ' . generate_and_cache_tinyurl('http://happycow.net') . ' 🐮 MP si quieres ayuda!'
            ]
        ]
    ],

    [
        'icon' => 'fas fa-meh-blank',
        'title' => 'Aburrida',
        'body' =>[
            [
                'Se puede hacer una versión vegana de casi toda la comida que conoces, sólo tienes que saber cocinarla o dónde comprarla\.'
            ], [
                'Algunas recetas: ' . generate_and_cache_tinyurl('https://veganuary.com/es/recipes') . ' \(o busca tu plato favorito \+ "Vegan"\)\.'
            ], [
                'Para comer fuera: ' . generate_and_cache_tinyurl('https://happycow.net')
            ]
        ]
    ],

    [
        'icon' => 'fas fa-fist-raised',
        'title' => '30+ razones',
        'body' =>[
            [
                '¡Ese es un mito muy común! 😅 Mira: ' . generate_and_cache_tinyurl('https://yourveganfallacyis.com/es') . '; básicamente desmiente los mitos más comunes sobre el veganismo\.'
            ], [
                'En vídeos \(con subtítulos\) para los 30 mitos más comunes: ' . generate_and_cache_tinyurl('https://earthlinged.org/30excuses/')
            ], [
                'Mándame un MP si necesitas ayuda o tienes preguntas!'
            ]
        ]
    ],

];
