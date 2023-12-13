<?php
header('Content-Type: image/png');

$text = $_GET['text'] ?? 'Text fehlt';
$filename = isset($_GET['filename']) ? $_GET['filename'] : 'standardbild';
$filename = preg_replace('/[^a-zA-Z0-9-_ ]/', '', basename($filename)) . '.png';
$font = './fonts/TheNautigal.ttf';
$fontSize = 55;

$bildOrdner = "bilder/";
$bildPfad = $bildOrdner . $filename;

if (!file_exists($bildOrdner)) {
    mkdir($bildOrdner, 0777, true);
}


if (file_exists($bildPfad) && (time() - filemtime($bildPfad)) < 86400) {
    readfile($bildPfad);
    exit;
}

$image = imagecreatetruecolor(400, 100);
imagesavealpha($image, true);
$transparent = imagecolorallocatealpha($image, 0, 0, 0, 127);
imagefill($image, 0, 0, $transparent);
$textColor = imagecolorallocate($image, 85, 85, 85);

$x = 10;
$y = (100 + $fontSize) / 2;

imagettftext($image, $fontSize, 0, $x, $y, $textColor, $font, $text);

if(preg_match('/^[a-zA-Z0-9-_ ]+\.png$/', $filename)) {
    imagepng($image, $bildPfad);
    imagepng($image);
} else {
    echo 'Ungültiger Dateiname';
}

imagedestroy($image);
?>
