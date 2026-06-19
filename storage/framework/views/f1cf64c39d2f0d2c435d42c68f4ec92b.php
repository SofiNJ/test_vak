

<?php $__env->startSection('contenido'); ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<style>
    body {
    background: #ffc2e5;
    background: linear-gradient(127deg,rgba(255, 194, 229, 1) 0%, rgba(214, 216, 221, 1) 54%, rgba(176, 217, 210, 1) 100%);
    }
    
    .test-vak {
        font-family: 'Bricolage Grotesque', sans-serif;
    }

    .titulo {
        font-weight: bold; 
        color: #123809; 
        margin-bottom: 15px; 
        font-size: 16px;
    }

    .pregunta-titulo {
        font-weight: bold; 
        color: #123809; 
        margin-bottom: 15px; 
        font-size: 16px;
    }

    .opcion-tarjeta {
        display: flex; 
        align-items: center; 
        margin-bottom: 12px; 
        cursor: pointer; 
        padding: 10px; 
        border-radius: 6px; 
        background: #edf0f8bd;
        transition: background 0.2s;
    }

    .opcion-tarjeta:hover {
        background: #ffbfdd;
    }
</style>

<?php
$preguntas = [
    1 => [
        'texto' => '¿Cuál de las siguientes actividades disfrutas más?',
        'a' => 'Escuchar música', 'b' => 'Ver películas', 'c' => 'Bailar con buena música'
    ],
    2 => [
        'texto' => '¿Qué programa de televisión prefieres?',
        'a' => 'Reportajes de descubrimientos y lugares', 'b' => 'Cómico y de entretenimiento', 'c' => 'Noticias del mundo'
    ],
    3 => [
        'texto' => 'Cuando conversas con otra persona, tú:',
        'a' => 'La escuchas atentamente', 'b' => 'La observas', 'c' => 'Tiendes a tocarla'
    ],
    4 => [
        'texto' => 'Si pudieras adquirir uno de los siguientes artículos, ¿cuál elegirías?',
        'a' => 'Un jacuzzi', 'b' => 'Un estéreo', 'c' => 'Un televisor'
    ],
    5 => [
        'texto' => '¿Qué prefieres hacer un sábado por la tarde?',
        'a' => 'Quedarte en casa', 'b' => 'Ir a un concierto', 'c' => 'Ir al cine'
    ],
    6 => [
        'texto' => '¿Qué tipo de exámenes se te facilitan más?',
        'a' => 'Examen oral', 'b' => 'Examen escrito', 'c' => 'Examen de opción múltiple'
    ],
    7 => [
        'texto' => '¿Cómo te orientas más fácilmente?',
        'a' => 'Mediante el uso de un mapa', 'b' => 'Pidiendo indicaciones', 'c' => 'A través de la intuición'
    ],
    8 => [
        'texto' => '¿En qué prefieres ocupar tu tiempo en un lugar de descanso?',
        'a' => 'Pensar', 'b' => 'Caminar por los alrededores', 'c' => 'Descansar'
    ],
    9 => [
        'texto' => '¿Qué te halaga más?',
        'a' => 'Que te digan que tienes buen aspecto', 'b' => 'Que te digan que tienes un trato muy agradable', 'c' => 'Que te digan que tienes una conversación interesante'
    ],
    10 => [
        'texto' => '¿Cuál de estos ambientes te atrae más?',
        'a' => 'Uno en el que se sienta un clima agradable', 'b' => 'Uno en el que se escuchen las olas del mar', 'c' => 'Uno con una hermosa vista al océano'
    ],
    11 => [
        'texto' => '¿De qué manera se te facilita aprender algo?',
        'a' => 'Repitiendo en voz alta', 'b' => 'Escribiéndolo varias veces', 'c' => 'Relacionándolo con algo divertido'
    ],
    12 => [
        'texto' => '¿A qué evento preferirías asistir?',
        'a' => 'A una reunión social', 'b' => 'A una exposición de arte', 'c' => 'A una conferencia'
    ],
    13 => [
        'texto' => '¿De qué manera te formas una opinión de otras personas?',
        'a' => 'Por la sinceridad en su voz', 'b' => 'Por la forma de estrecharte la mano', 'c' => 'Por su aspecto'
    ],
    14 => [
        'texto' => '¿Cómo te consideras?',
        'a' => 'Atlético', 'b' => 'Intelectual', 'c' => 'Sociable'
    ],
    15 => [
        'texto' => '¿Qué tipo de películas te gustan más?',
        'a' => 'Clásicas', 'b' => 'De acción', 'c' => 'De amor'
    ],
    16 => [
        'texto' => '¿Cómo prefieres mantenerte en contacto con otra persona?',
        'a' => 'Por correo electrónico', 'b' => 'Tomando un café juntos', 'c' => 'Por teléfono'
    ],
    17 => [
        'texto' => '¿Cuál de las siguientes frases se identifica más contigo?',
        'a' => 'Me gusta que mi coche se sienta bien al conducirlo', 'b' => 'Percibo hasta el mas ligero ruido que hace mi coche', 'c' => 'Es importante que mi coche esté limpio por fuera y por dentro'
    ],
    18 => [
        'texto' => '¿Cómo prefieres pasar el tiempo con tu novia o novio?',
        'a' => 'Conversando', 'b' => 'Acariciándose', 'c' => 'Mirando algo juntos'
    ],
    19 => [
        'texto' => 'Si no encuentras las llaves en una bolsa:',
        'a' => 'La buscas mirando', 'b' => 'Sacudes la bolsa para oír el ruido', 'c' => 'Buscas al tacto'
    ],
    20 => [
        'texto' => 'Cuando tratas de recordar algo, ¿cómo lo haces?',
        'a' => 'A través de imágenes', 'b' => 'A través de emociones', 'c' => 'A través de sonidos'
    ],
    21 => [
        'texto' => 'Si tuvieras dinero, ¿qué harías?',
        'a' => 'Comprar una casa', 'b' => 'Viajar y conocer el mundo', 'c' => 'Adquirir un estudio de grabación'
    ],
    22 => [
        'texto' => '¿Con qué frase te identificas más?',
        'a' => 'Reconozco a las personas por su voz', 'b' => 'No recuerdo el aspecto de la gente', 'c' => 'Recuerdo el aspecto de alguien, pero no su nombre'
    ],
    23 => [
        'texto' => 'Si tuvieras que quedarte en una isla desierta, ¿qué preferirías llevar contigo?',
        'a' => 'Algunos buenos libros', 'b' => 'Un radio portátil de alta frecuencia', 'c' => 'Golosinas y comida enlatada'
    ],
    24 => [
        'texto' => '¿Cuál de los siguientes entretenimientos prefieres?',
        'a' => 'Tocar un instrumento musical', 'b' => 'Sacar fotografías', 'c' => 'Actividades manuales'
    ],
    25 => [
        'texto' => '¿Cómo es tu forma de vestir?',
        'a' => 'Impecable', 'b' => 'Informal', 'c' => 'Muy informal'
    ],
    26 => [
        'texto' => '¿Qué es lo que más te gusta de una fogata nocturna?',
        'a' => 'El calor del fuego y los bombones asados', 'b' => 'El sonido del fuego quemando la leña', 'c' => 'Mirar el fuego y las estrellas'
    ],
    27 => [
        'texto' => '¿Cómo se te facilita entender algo?',
        'a' => 'Cuando te lo explican verbalmente', 'b' => 'Cuando utilizan medios visuales', 'c' => 'Cuando se realiza a través de alguna actividad'
    ],
    28 => [
        'texto' => '¿Por qué te distingues?',
        'a' => 'Por tener una gran intuición', 'b' => 'Por ser un buen conversador', 'c' => 'Por ser un buen observador'
    ],
    29 => [
        'texto' => '¿Qué es lo que más disfrutas de un amanecer?',
        'a' => 'La emoción de vivir un nuevo día', 'b' => 'Las tonalidades del cielo', 'c' => 'El canto de las aves'
    ],
    30 => [
        'texto' => 'Si pudieras elegir ¿qué preferirías ser?',
        'a' => 'Un gran médico', 'b' => 'Un gran músico', 'c' => 'Un gran pintor'
    ],
    31 => [
        'texto' => 'Cuando eliges tu ropa, ¿qué es lo más importante para ti?',
        'a' => 'Que sea adecuada', 'b' => 'Que luzca bien', 'c' => 'Que sea cómoda'
    ],
    32 => [
        'texto' => '¿Qué es lo que más disfrutas de una habitación?',
        'a' => 'Que sea silenciosa', 'b' => 'Que sea confortable', 'c' => 'Que esté limpia y ordenada'
    ],
    33 => [
        'texto' => '¿Qué es más atractivo para ti?',
        'a' => 'Una iluminación tenue', 'b' => 'El perfume', 'c' => 'Cierto tipo de música'
    ],
    34 => [
        'texto' => '¿A qué tipo de espectáculo preferirías asistir?',
        'a' => 'A un concierto de música', 'b' => 'A un espectáculo de magia', 'c' => 'A una muestra gastronómica'
    ],
    35 => [
        'texto' => '¿Qué te atrae más de una persona?',
        'a' => 'Su trato y forma de ser', 'b' => 'Su aspecto físico', 'c' => 'Su conversación'
    ],
    36 => [
        'texto' => 'Cuando vas de compras, ¿en dónde pasas mucho tiempo?',
        'a' => 'En una librería', 'b' => 'En una perfumería', 'c' => 'En una tienda de discos'
    ],
    37 => [
        'texto' => '¿Cuál es tu idea de una noche romántica?',
        'a' => 'A la luz de las velas', 'b' => 'Con música romántica', 'c' => 'Bailando tranquilamente'
    ],
    38 => [
        'texto' => '¿Qué es lo que más disfrutas de viajar?',
        'a' => 'Conocer personas y hacer nuevos amigos', 'b' => 'Conocer lugares nuevos', 'c' => 'Aprender sobre otras costumbres'
    ],
    39 => [
        'texto' => 'Cuando estás en la ciudad, ¿qué es lo que más echas de menos del campo?',
        'a' => 'El aire limpio y refrescante', 'b' => 'Los paisajes', 'c' => 'La tranquilidad'
    ],
    40 => [
        'texto' => 'Si te ofrecieran uno de los siguientes empleos, ¿cuál elegirías?',
        'a' => 'Director de una estación de radio', 'b' => 'Director de un club deportivo', 'c' => 'Director de una revista'
    ]
];
?>

<div class="test-vak" style="max-width: 800px; margin: 0 auto; padding: 40px 20px;">
      
    <h2 style="color: #1a234a; margin-top: 0; margin-bottom: 10px; font-size: 28px; font-weight: bold;">
        Test de Estilos de Aprendizaje (VAK)
    </h2>
    <p style="color: #1a234a; margin-bottom: 30px; font-size: 14px;">
        Por favor, responde a todas las preguntas seleccionando la opción que mejor se adapte a ti.
    </p>

    <h3 style="color: #1a234a; font-size: 18px; margin-bottom: 20px; border-bottom: 2px solid #253045; padding-bottom: 10px; font-weight: bold;">
        Preguntas del Test
    </h3>

    <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 6px rgba(18, 26, 54, 0.2); border: 1px solid #e5e7eb;">
        
        <form method="POST" action="<?php echo e(route('testvak.store')); ?>">
            <?php echo csrf_field(); ?>

            <?php $__currentLoopData = $preguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $numero => $pregunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="margin-bottom: 30px; padding-bottom: 20px; border-bottom: 1px solid #f3f4f6;">
                
                    <p class="pregunta-titulo">
                        <?php echo e($numero); ?>. <?php echo e($pregunta['texto']); ?>

                    </p>
                
                    <label class="opcion-tarjeta">
                        <input type="radio" name="pregunta<?php echo e($numero); ?>" value="A" required style="margin-right: 12px; transform: scale(1.1);">
                        <span style="color: #0e2060; font-size: 14px;">A. <?php echo e($pregunta['a']); ?></span>
                    </label>

                    <label class="opcion-tarjeta">
                        <input type="radio" name="pregunta<?php echo e($numero); ?>" value="B" style="margin-right: 12px; transform: scale(1.1);">
                        <span style="color: #0e2060; font-size: 14px;">B. <?php echo e($pregunta['b']); ?></span>
                    </label>

                    <label class="opcion-tarjeta">
                        <input type="radio" name="pregunta<?php echo e($numero); ?>" value="C" style="margin-right: 12px; transform: scale(1.1);">
                        <span style="color: #0e2060; font-size: 14px;">C. <?php echo e($pregunta['c']); ?></span>
                    </label>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div style="margin-top: 40px; text-align: right;">
                <button type="submit" style="background-color: #022135; color: white; padding: 14px 32px; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; font-size: 15px; transition: background 0.2s;">
                    Enviar Respuestas a Evaluación
                </button>
            </div>
        </form>

    </div> </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\test_vak\resources\views/mostrar_test_vak.blade.php ENDPATH**/ ?>