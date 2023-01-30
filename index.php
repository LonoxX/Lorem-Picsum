<?php
header("Content-Type: image/png");
list($width, $height) = explode("x", $_GET["size"]);
$image = imagecreatetruecolor($width, $height);
$color = imagecolorallocate($image, 122, 122, 122);
imagefill($image, 0, 0, $color);

$text_color = imagecolorallocate($image, 255, 255, 255);
$text = $width . "x" . $height;
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

imagettftext($image, $font_size, 0, $x, $y, $text_color, $font, $text);

imagepng($image);
imagedestroy($image);
