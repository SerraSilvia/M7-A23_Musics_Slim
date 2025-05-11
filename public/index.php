<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
//require '../vendor/autoload.php';

//php -S localhost:8000 -t public per obrir navegador

// Instantiate App
$app = AppFactory::create();

// Add error middleware
$app->addErrorMiddleware(true, true, true);

// Add routes:

//Ruta pel llistat de cançons
$app->get('/api/musics', function (Request $request, Response $response) {

    //conectem a la bbdd, fem el select de tot i posem en un array
     $db = new SQLite3('../database/musics.db');
     $result = $db->query('SELECT * FROM musics');

         $html = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Musics</title></head><body>';

    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $html .= '<div class="music" style="border:1px solid #ccc; padding:10px; margin-bottom:15px;">';
        $html .= '<h2>' . htmlspecialchars($row['mus_nom']) . '</h2>';
        $html .= '<img src="' . htmlspecialchars($row['mus_img']) . '" alt="' . htmlspecialchars($row['mus_nom']) . '" style="max-width:200px;"><br>';
        $html .= '<p><strong>Grup musical:</strong> ' . htmlspecialchars($row['mus_grup']) . '</p>';
        $html .= '<p><strong>Disc:</strong> ' . htmlspecialchars($row['mus_disc']) . '</p>';
        $html .= '<p><strong>Cançó:</strong> ' . htmlspecialchars($row['mus_song']) . '</p>';
        $html .= '<p><strong>Videoclip:</strong> <a href="' . htmlspecialchars($row['mus_videoclip']) . '" target="_blank">Veure</a></p>';
        $html .= '<p><strong>Biografia:</strong> ' . htmlspecialchars($row['mus_biografia']) . '</p>';
        $html .= '</div>';
    }

    $html .= '</body></html>';


 $response->getBody()->write($html);
    return $response;
});

$app->run();