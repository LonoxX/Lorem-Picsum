<?php
$format = isset($_GET['format']) && in_array($_GET['format'], ['jpg', 'png', 'webp', 'gif']) ? $_GET['format'] : 'png';
header("Content-Type: image/{$format}");
list($width, $height) = explode('x', $_GET['size']);

$text = isset($_GET['text']) ? $_GET['text'] : "{$width}x{$height}";
$text_color = isset($_GET['tc']) ? getColor($_GET['tc']) : [255, 255, 255];

$bg_color = isset($_GET['bgc']) ? getColor($_GET['bgc']) : [122, 122, 122];

$image = imagecreatetruecolor($width, $height);
imagefill($image, 0, 0, imagecolorallocate($image, ...$bg_color));

$font = 'font/arial.ttf';
$font_size = 32;

do {
  $font_size--;
  $text_box = imagettfbbox($font_size, 0, $font, $text);
} while ($text_box[2] > $width - 10 || $text_box[3] > $height - 10);

$text_width = $text_box[2] - $text_box[0];
$text_height = $text_box[3] - $text_box[1];
$x = ($width - $text_width) / 2;
$y = ($height - $text_height) / 2 + $text_height;

imagettftext($image, $font_size, 0, $x, $y, imagecolorallocate($image, ...$text_color), $font, $text);

switch ($format) {
  case 'jpg':
    imagejpeg($image);
    break;
  case 'webp':
    imagewebp($image);
    break;
  case 'gif':
    imagegif($image);
    break;
  case 'png':
  default:
    imagepng($image);
    break;
}

imagedestroy($image);

function getColor($color)
{
  $colors = array(
    "black" => array(0, 0, 0),
    "white" => array(255, 255, 255),
    "red" => array(255, 0, 0),
    "green" => array(0, 255, 0),
    "blue" => array(0, 0, 255),
    "yellow" => array(255, 255, 0),
    "grey" => array(128, 128, 128)
  );
  if (isset($colors[$color])) {
    return $colors[$color];
  }
}
