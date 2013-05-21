<?php
  $width = 70;
	$height = 25;

	$im = imagecreatetruecolor($width, $height);

	$white = imagecolorallocate($im, 255, 255, 255);

	imageSaveAlpha($im, true);
	imageAlphaBlending($im, false);

	$transparent = imageColorAllocateAlpha($im, 0, 0, 0, 127);
	imagefilledrectangle($im, 0, 0, $width-1, $height-1, $transparent);
	imageAlphaBlending($im, true);

	$font = 'tahoma.ttf';
	$randomnr = "1234";
	imagettftext($im, 20, 0, 3, 22, $white, $font, $randomnr);
	imagepng($im,'test.png');
	imagedestroy($im);
?>
