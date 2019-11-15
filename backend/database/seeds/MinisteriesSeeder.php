<?php

use Illuminate\Database\Seeder;

class MinisteriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('ministeries')->insert([
        'name' => 'Gobierno de Chile',
        'leader' => 'Sebastián Piñera',
        'image' => 'spinera.jpg',
        'description' => 'El gobierno debe contribuir a crear las condiciones sociales que permitan a todos y a cada uno de los integrantes de la comunidad chilena su mayor realización espiritual y material posible, con pleno respeto a los derechos y garantías que la Constitución establece. Junto con ello, debe resguardar la seguridad nacional, dar protección a la población y a la familia, propender al fortalecimiento de esta, promover la integración armónica de todos los sectores de la nación y asegurar el derecho de las personas a participar con igualdad de oportunidades en la vida nacional.',
        'url' => 'https://www.gob.cl/instituciones/presidencia/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio del Interior',
        'leader' => 'Gonzalo Blumel',
        'image' => 'gblumel.jpg',
        'description' => 'El Ministerio del Interior propone al Presidente de la República las normas y acciones sobre políticas internas orientadas a mantener el orden público, la seguridad y la paz social. También aplica, por medio de las autoridades de Gobierno Interior, las normas que para este efecto se dicten.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-del-interior-y-seguridad-publica/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Relaciones Exteriores',
        'leader' => 'Teodoro Ribera',
        'image' => 'tribera.jpg',
        'description' => 'Su misión es contribuir a la formulación de la política exterior de Chile, conduciendo y coordinando su implementación a través de su estructura organizacional con la interacción de actores públicos y privados, para velar por los intereses de Chile y sus connacionales en su relacionamiento con el mundo.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-relaciones-exteriores/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Defensa Nacional',
        'leader' => 'Alberto Espina',
        'image' => 'aespina.jpg',
        'description' => 'El Ministerio de Defensa Nacional es un organismo público creado a partir de los primeros ordenamientos constitucionales de nuestro país. El ejercicio de sus tareas se fundamenta en un conjunto de hombres y mujeres comprometidos con el ejercicio de las tareas que le competen a esta Secretaría de Estado en su calidad de instancia responsable de contribuir al Presidente de la República en la conducción política del sector defensa nacional, a fin de garantizar una seguridad exterior de Chile estable en beneficio de nuestro permanente progreso y desarrollo como sociedad.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-defensa-nacional/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio Secretaría General de Gobierno',
        'leader' => 'Karla Rubilar',
        'image' => 'krubilar.jpg',
        'description' => 'Entrega a las principales autoridades de Gobierno asesoría comunicacional que permita identificar necesidades estratégicas y coyunturales y orientar la toma de decisiones para apoyar coordinadamente la gestión del Ejecutivo.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-secretaria-general-de-gobierno/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Hacienda',
        'leader' => 'Ignacio Briones',
        'image' => 'ibriones.jpg',
        'description' => 'Su misión es gestionar eficientemente los recursos públicos a través de un Estado moderno al Servicio de la ciudadanía; generando condiciones de estabilidad, transparencia y competitividad en una economía integrada internacionalmente que promuevan un crecimiento sustentable e inclusivo.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-hacienda/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio Secretaría General de la Presidencia',
        'leader' => 'Felipe Ward',
        'image' => 'fward.jpg',
        'description' => 'El Ministerio Secretaría General de la Presidencia es la entidad asesora gubernamental al más alto nivel encargada de facilitar y coordinar el desarrollo y cumplimiento de la agenda programática y legislativa del gobierno a través de diferentes acciones.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-secretaria-general-de-la-presidencia/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Economía, Fomento y Turismo',
        'leader' => 'Lucas Palacios',
        'image' => 'lpalacios.jpg',
        'description' => 'La misión del Ministerio de Economía es promover la modernización y competitividad de la estructura productiva del país, la iniciativa privada y la acción eficiente de los mercados, el desarrollo de la innovación y la consolidación de la inserción internacional de la economía del país a fin de lograr un crecimiento sostenido, sustentable y con equidad.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-economia-fomento-y-turismo/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Desarrollo Social y Familia',
        'leader' => 'Sebastián Sichel',
        'image' => 'ssichel.jpg',
        'description' => 'Su misión es contribuir en el diseño y aplicación de políticas, planes y programas en materia de desarrollo social, especialmente aquellas destinadas a erradicar la pobreza y brindar protección social a las personas o grupos vulnerables, promoviendo la movilidad e integración social.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-desarrollo-social-y-familia/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Educación',
        'leader' => 'Marcela Cubillos',
        'image' => 'mcubillos.jpg',
        'description' => 'El Ministerio de Educación de Chile es el órgano rector del Estado encargado de fomentar el desarrollo de la educación en todos sus niveles, a través de una educación humanista democrática, de excelencia y abierta al mundo en todos los niveles de enseñanza; estimular la investigación científica y tecnológica y la creación artística, y la protección e incremento del patrimonio cultural de la Nación. Del mismo modo, esta institución es la llamada a velar por los derechos de todos los estudiantes, tanto de establecimientos públicos como privados.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-educacion/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Justicia y Derechos Humanos',
        'leader' => 'Hernán Larraín',
        'image' => 'hlarrain.jpg',
        'description' => 'El Ministerio de Justicia y Derechos Humanos contribuye al desarrollo del país a través de la modernización del sistema de justicia, promoviendo normas y políticas públicas orientadas a facilitar el acceso y la protección de los derechos de las personas, la reinserción social y la seguridad ciudadana, todo ello en un marco de respeto a los derechos humanos.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-justicia-y-derechos-humanos/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio del Trabajo y Previsión Social',
        'leader' => 'María José Zaldívar',
        'image' => 'mjzaldivar.jpg',
        'description' => 'Su misión es contribuir al desarrollo del país, impulsando políticas públicas que promuevan el trabajo decente, la formación para el trabajo, la seguridad y salud laboral, una mayor integración de grupos vulnerables en el mercado del trabajo así como los cambios normativos necesarios para la ampliación y ejercicio de los derechos de los trabajadores, especialmente los derechos colectivos. De igual manera, el Ministerio promoverá los cambios necesarios al sistema de previsional.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-del-trabajo-y-prevision-social/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Obras Públicas',
        'leader' => 'Alfredo Moreno',
        'image' => 'amoreno.jpg',
        'description' => 'Su misión es recuperar, fortalecer y avanzar en la provisión y gestión de obras y servicios de infraestructura para la conectividad, la protección del territorio y las personas, la edificación pública y el aprovechamiento óptimo de los recursos hídricos; asegurando la provisión y cuidado de los recursos hídricos y del medio ambiente, para contribuir en el desarrollo económico, social y cultural, promoviendo la equidad, calidad de vida e igualdad de oportunidades de las personas.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-obras-publicas/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Salud',
        'leader' => 'Jaime Mañalich',
        'image' => 'jmanalich.jpg',
        'description' => 'La misión institucional que el Ministerio de Salud es contribuir a elevar el nivel de salud de la población; desarrollar armónicamente los sistemas de salud, centrados en las personas; fortalecer el control de los factores que puedan afectar la salud y reforzar la gestión de la red nacional de atención. Todo ello para acoger oportunamente las necesidades de las personas, familias y comunidades, con la obligación de rendir cuentas a la ciudadanía y promover la participación de las mismas en el ejercicio de sus derechos y sus deberes.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-salud/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Vivienda y Urbanismo',
        'leader' => 'Cristián Monckeberg',
        'image' => 'cmonckeberg.jpg',
        'description' => 'Su misión es posibilitar el acceso a soluciones habitacionales de calidad y contribuir al desarrollo de barrios y ciudades equitativas, integradas y sustentables, todo ello bajo criterios de descentralización, participación y desarrollo, con el propósito que las personas, familias y comunidades, mejoren su calidad de vida y aumenten su bienestar.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-vivienda-y-urbanismo/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Agricultura',
        'leader' => 'Antonio Walker',
        'image' => 'awalker.jpg',
        'description' => 'El Minagri se propone reducir la desigualdad social fortaleciendo y expandiendo el alcance de los instrumentos de fomento, prioritariamente en favor de la agricultura familiar y campesina. Otra tarea fundamental es contribuir a la agregación de valor en la agricultura, lo que implica promover un desarrollo de la economía agraria basado tanto en la tecnología y la innovación, como en la profundización de los atributos que potencian la productividad y la competencia de la agricultura: la calidad, la inocuidad y la sanidad de la producción silvoagropecuaria. Al mismo tiempo, este desarrollo prioriza en forma pertinente el resguardo de los trabajadores rurales, de nuestras comunidades, de nuestra cultura y de nuestros recursos naturales.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-agricultura/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Minería',
        'leader' => 'Baldo Prokurica',
        'image' => 'bprokurica.jpg',
        'description' => 'Su misión es liderar el desarrollo de políticas públicas de minería orientadas a elevar la contribución de la actividad minera al desarrollo nacional, diversificando la actividad para aprovechar los recursos disponibles en condiciones sustentables y valoradas por la ciudadanía.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-mineria/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Transportes y Telecomunicaciones',
        'leader' => 'Gloria Hutt',
        'image' => 'ghutt.jpg',
        'description' => 'Tiene como principales funciones proponer las políticas nacionales en materias de transportes y telecomunicaciones, de acuerdo a las directrices del Gobierno y ejercer la dirección y control de su puesta en práctica; supervisar las empresas públicas y privadas que operen medios de transportes y comunicaciones en el país, y coordinar y promover el desarrollo de estas actividades y controlar el cumplimiento de las leyes, reglamentos y normas pertinentes.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-transportes-y-telecomunicaciones/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Bienes Nacionales',
        'leader' => 'Julio Isamit',
        'image' => 'jisamit.jpg',
        'description' => 'Su misión es reconocer, administrar y gestionar el patrimonio fiscal de todos los chilenos y chilenas, regularizar la pequeña propiedad raíz particular, mantener el catastro gráfico de la propiedad fiscal actualizado y la coordinación con otras entidades del Estado en materias territoriales, valorando fuertemente el patrimonio natural e histórico de nuestro país.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-bienes-nacionales/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Energía',
        'leader' => 'Juan Carlos Jobet',
        'image' => 'jcjobet.jpg',
        'description' => 'Es la institución responsable de elaborar y coordinar, de manera transparente y participativa, los distintos planes, políticas y normas para el desarrollo del sector energético del país, y así asegurar que todos los chilenos y chilenas puedan acceder a la energía de forma segura y a precios razonables.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-energia/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio del Medio Ambiente',
        'leader' => 'Carolina Schmidt',
        'image' => 'cschmidt.jpg',
        'description' => 'Es el ministerio encargado de colaborar con el presidente de la República en el diseño y aplicación de políticas, planes y programas en materia ambiental, así como en la protección y conservación de la diversidad biológica y de los recursos naturales renovables e hídricos, promoviendo el desarrollo sustentable, la integridad de la política ambiental y su regulación normativa.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-del-medio-ambiente/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio del Deporte',
        'leader' => 'Cecilia Pérez',
        'image' => 'cperez.jpg',
        'description' => 'Su misión es contribuir a desarrollar una cultura deportiva en el país, a través del diseño y ejecución de la Política Nacional del Deporte y la Actividad Física, otorgando el financiamiento para la ejecución de acciones que incentiven la práctica permanente y sistemática del deporte y la actividad física en todos los sectores de la población, garantizando una oferta amplia y diversificada, desde un enfoque de derecho.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-del-deporte/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de la Mujer y la Equidad de Género',
        'leader' => 'Isabel Plá',
        'image' => 'ipla.jpg',
        'description' => 'Su misión es crear políticas, planes y programas que beneficien a las mujeres y trabajar para eliminar cualquier tipo de discriminación de género, haciendo de Chile un país más equitativo. Su institución antecesora fue el Servicio Nacional de la Mujer (Sernam), organismo del estado de Chile destinado a promover la igualdad de oportunidades entre hombres y mujeres, según la Ley N° 19.023, publicada el 3 de enero de 1991.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-la-mujer-y-la-equidad-de-genero/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de las Culturas, las Artes y el Patrimonio',
        'leader' => 'Consuelo Valdés',
        'image' => 'cvaldes.jpg',
        'description' => 'Su objetivo es la formulación e implementación de políticas, planes y programas que contribuyan al desarrollo cultural y patrimonial de manera armónica y equitativa en todo el territorio nacional.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-las-culturas-las-artes-y-el-patrimonio/'
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Ciencia, Tecnología, Conocimiento e Innovación',
        'leader' => 'Andrés Couve',
        'image' => 'acouve.jpg',
        'description' => 'Este Ministerio está encargado de asesorar y colaborar con el Presidente de la República en el diseño, formulación, coordinación, implementación y evaluación de las políticas, planes y programas destinados a fomentar y fortalecer la ciencia, la tecnología y la innovación derivada de la investigación científico-tecnológica.',
        'url' => 'https://www.gob.cl/ministerios/ministerio-de-ciencia-tecnologia-conocimiento-e-innovacion/'
      ]);
    }
}
