<?php
// Connectar-se a la base de dades (o crear-la si no existeix)
$db = new SQLite3('musics.db');

// Crear la taula musics si no existeix
$db->exec("CREATE TABLE IF NOT EXISTS musics (
    mus_id INTEGER PRIMARY KEY AUTOINCREMENT,
    mus_nom TEXT NOT NULL,
    mus_img TEXT NOT NULL,
    mus_grup TEXT NOT NULL,
    mus_disc TEXT NOT NULL,
    mus_biografia TEXT NOT NULL,
    mus_song TEXT NOT NULL,
    mus_videoclip TEXT NOT NULL	
);");

// Inserir registres a la taula 
$db->exec("INSERT INTO musics (mus_nom, mus_img, mus_grup, mus_disc, mus_biografia, mus_song, mus_videoclip) VALUES 

('Chester Bennington',
'https://i1.sndcdn.com/artworks-000326366835-cig7ay-t500x500.jpg',
'Linkin Park',
'Hybrid Theory',
'Chester Bennington, nacido el 20 de marzo de 1976 en Phoenix, Arizona, fue un cantante, compositor y actor estadounidense, reconocido por ser el vocalista principal de las bandas de rock Linkin Park y Dead By Sunrise. Comenzó su carrera en la banda Grey Daze, pero luego se unió a Linkin Park después de escuchar una maqueta de la banda y ser invitado a audicionar. Su voz se adaptaba perfectamente al estilo de la banda, lo que llevó a su inclusión. Además de su éxito con Linkin Park, lanzó un álbum con su proyecto paralelo Dead By Sunrise en 2009. Fue conocido por su poderosa voz y su habilidad para combinar géneros como el rock alternativo y el nu metal. Chester tuvo una vida personal marcada por relaciones significativas, incluido su matrimonio con Talinda Bentley y su lucha contra la depresión. Trágicamente, falleció el 20 de julio de 2017.',
'In the End',
'https://www.youtube.com/watch?v=eVTXPUF4Oz4'),

('David Bowie',
'https://i1.sndcdn.com/artworks-000085309918-lmxzvq-t500x500.jpg',
'Solista',
'The Rise and Fall of Ziggy Stardust and the Spiders from Mars',
'David Bowie, nacido el 8 de enero de 1947 en Londres, fue un influyente cantante, compositor y actor británico, conocido por su capacidad para reinventarse y por su estilo musical ecléctico. A lo largo de su carrera, que abarcó varias décadas, Bowie exploró géneros como el rock, el pop, el glam, el soul y la electrónica, convirtiéndose en una figura pionera de la música. Su carrera despegó en 1969 con el éxito de \"Space Oddity\", y continuó con discos icónicos como \"The Rise and Fall of Ziggy Stardust and the Spiders from Mars\" y \"Heroes\". Además de su música, Bowie destacó por su carácter teatral y su habilidad para crear personajes como Ziggy Stardust. A lo largo de su vida, fue un referente en cuanto a innovación, moda y actitud. Bowie también tuvo una exitosa carrera en la actuación, destacando en películas como \"The Man Who Fell to Earth\" y \"Labyrinth\". Falleció el 10 de enero de 2016, dos días después de lanzar su último álbum, \"Blackstar\".',
'Heroes',
'https://www.youtube.com/watch?v=lXgkuM2NhYI'),

('Matt Bellamy',
'https://i1.sndcdn.com/artworks-sMeeOfiBhP4MRwic-uXVKzQ-t500x500.jpg',
'Muse',
'Absolution',
'Matt Bellamy, nacido el 9 de junio de 1978 en Cambridge, Inglaterra, es un cantante, compositor y guitarrista conocido por ser el líder y vocalista de la banda de rock Muse. Con su estilo único que fusiona rock alternativo, música electrónica y sinfónica, Bellamy ha sido reconocido por su poderosa voz, habilidad técnica con la guitarra y su enfoque teatral en los conciertos. Formó Muse en 1994 junto a Chris Wolstenholme y Dominic Howard, y a lo largo de los años, el grupo alcanzó el éxito mundial con álbumes como \"Origin of Symmetry\", \"Absolution\" y \"The Resistance\". Bellamy es conocido por sus letras profundas y sus innovadoras composiciones, que a menudo abordan temas como la política, la tecnología y la ciencia. Además, su estilo musical ha sido clave en el desarrollo del sonido característico de Muse, que combina elementos del rock progresivo, el glam y la música clásica.',
'Hysteria',
'https://www.youtube.com/watch?v=3dm_5qWWDV8'),

('Kurt Cobain',
'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1OxGtwUIeQBt4pLGNpjy1YLoQmCI5_hqKzg&s',
'Nirvana',
'Nevermind',
'Kurt Cobain, nacido el 20 de febrero de 1967 en Aberdeen, Washington, fue el cantante, compositor y guitarrista principal de la influyente banda de grunge Nirvana. Cobain es reconocido como una de las figuras más emblemáticas de la música alternativa de los años 90, conocido por su estilo crudo y emocional, tanto en sus letras como en sus interpretaciones. Fundó Nirvana en 1987 junto a Krist Novoselic y Dave Grohl, y su álbum \"Nevermind\" de 1991, que incluye el icónico tema \"Smells Like Teen Spirit\", catapultó al grupo a la fama mundial, convirtiéndose en un símbolo de la generación X. A pesar de su éxito, Cobain luchó con problemas personales y de salud mental, lo que finalmente llevó a su trágica muerte por suicidio el 5 de abril de 1994, a los 27 años. Su legado perdura como un referente de la música grunge y un símbolo de la autenticidad y la rebeldía en el rock.',
'Smells Like Teen Spirit',
'https://www.youtube.com/watch?v=hTWKbfoikeg'),

('Eric Adams',
'https://i1.sndcdn.com/artworks-000052228563-i9qse7-t500x500.jpg',
'Manowar',
'Kings of Metal',
'Eric Adams, nacido el 12 de julio de 1952 en Brooklyn, Nueva York, es el vocalista principal de la banda de metal Manowar, conocida por su estilo épico y pesado, a menudo centrado en temas de mitología, fantasía y la cultura del metal. Adams se unió a la banda en 1980, poco después de su formación, y su poderosa y distintiva voz se convirtió en una de las características definitorias del sonido de Manowar. La banda ganó fama en los años 80 y 90 con álbumes como \"Battle Hymns\", \"Sign of the Hammer\" y \"Kings of Metal\", donde la voz de Adams destacó por su rango vocal impresionante y su intensidad emocional. A lo largo de su carrera, ha sido reconocido por su entrega en el escenario y su dedicación al heavy metal. Además de su trabajo con Manowar, Eric Adams ha influido en generaciones de músicos y fanáticos del metal, siendo considerado uno de los mejores vocalistas de la historia del género.',
'Warriors of the World United',
'https://www.youtube.com/watch?v=6POUitQf8v8'),

('Madonna',
'https://hips.hearstapps.com/hmg-prod/images/gettyimages-628779680.jpg?crop=1.00xw:1.00xh;0,0&resize=1200:*',
'Solista',
'Like a Prayer',
'Madonna Louise Veronica Ciccone, nacida el 16 de agosto de 1958 en Bay City, Michigan, es una cantante, compositora, actriz y empresaria estadounidense. Es conocida como la \"Reina del Pop\" y es una de las artistas más influyentes y exitosas de todos los tiempos. Madonna se trasladó a Nueva York en los años 70 para perseguir una carrera en la danza, pero pronto se volcó en la música, donde encontró un enorme éxito a principios de los 80. Su estilo provocador, su constante reinvención artística y su influencia en la cultura pop la convirtieron en una figura icónica. Con álbumes como \"Like a Virgin\", \"True Blue\", \"Ray of Light\" y \"Confessions on a Dance Floor\", Madonna rompió barreras sociales y artísticas. Además de su carrera musical, ha trabajado en cine y dirigido películas. Es también conocida por su activismo y su papel en temas de derechos LGBT y empoderamiento femenino.',
'Like a Prayer',
'https://www.youtube.com/watch?v=79fzeNUqQbQ'),

('Janis Joplin',
'https://i1.sndcdn.com/artworks-000035830838-hj2b4a-t500x500.jpg',
'Solista',
'Pearl',
'Janis Joplin, nacida el 19 de enero de 1943 en Port Arthur, Texas, fue una cantante y compositora estadounidense, considerada una de las voces más poderosas e icónicas del rock y el blues. Su estilo vocal desgarrador y emocional rompió barreras en la música de los años 60, convirtiéndola en una figura central del movimiento contracultural. Saltó a la fama con la banda Big Brother and the Holding Company, y posteriormente lanzó su carrera como solista, logrando un éxito rotundo con canciones como “Piece of My Heart” y “Me and Bobby McGee”. Con el álbum “Pearl”, consolidó su legado, aunque falleció antes de su lanzamiento oficial. Janis es recordada por su autenticidad, energía escénica y su contribución a la igualdad de género en el mundo del rock. Murió trágicamente a los 27 años el 4 de octubre de 1970, siendo parte del llamado “Club de los 27”.',
'Cry Baby',
'https://www.youtube.com/watch?v=7uG2gYE5KOs'),

('Tina Turner',
'https://i1.sndcdn.com/artworks-VmdNZXZtJuvLRGfk-vqft0Q-t500x500.jpg',
'Solista',
'Private Dancer',
'Tina Turner, nacida como Anna Mae Bullock el 26 de noviembre de 1939 en Nutbush, Tennessee, fue una cantante, compositora y actriz estadounidense, considerada una de las grandes voces del rock y del soul. Comenzó su carrera junto a Ike Turner en los años 60, ganando reconocimiento con éxitos como “Proud Mary”. Tras su separación profesional y personal de Ike, Tina reconstruyó su carrera como solista, alcanzando un éxito monumental en los años 80 con su álbum “Private Dancer”, que incluyó temas icónicos como “What’s Love Got to Do with It”. Con su energía en el escenario, poderosa voz y estilo inconfundible, se convirtió en una leyenda musical. Tina fue ganadora de múltiples premios Grammy y vendió más de 100 millones de discos en todo el mundo. También incursionó en el cine, destacando en la película “Mad Max Beyond Thunderdome”. Falleció el 24 de mayo de 2023, dejando un legado eterno.',
'What’s Love Got to Do with It',
'https://www.youtube.com/watch?v=oGpFcHTxjZs'),

('Whitney Houston',
'https://i1.sndcdn.com/artworks-6A62KTS8BGZz8ilJ-HE7hdw-t500x500.png',
'Solista',
'Whitney',
'Whitney Houston, nacida el 9 de agosto de 1963 en Newark, Nueva Jersey, fue una de las cantantes más galardonadas y exitosas de la historia. Dotada de una voz poderosa y única, se destacó desde muy joven en el góspel y luego irrumpió en la escena del pop y R&B con su álbum debut homónimo en 1985. Alcanzó un éxito sin precedentes con canciones como “How Will I Know”, “I Wanna Dance with Somebody” y la balada icónica “I Will Always Love You”, incluida en la banda sonora de la película “The Bodyguard”, en la que también fue protagonista. Houston fue conocida por su técnica vocal impecable, su influencia en nuevas generaciones de cantantes y su presencia carismática. A lo largo de su carrera, ganó más de 400 premios. Sin embargo, también enfrentó dificultades personales y adicciones. Falleció el 11 de febrero de 2012, pero su legado musical permanece vivo.',
'I Will Always Love You',
'https://www.youtube.com/watch?v=3JWTaaS7LdU')
");

// Tancar la connexió
$db->close();
?>