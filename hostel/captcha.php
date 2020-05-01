<?php

session_start();

/*Create a 220x35 image*/
$im = imagecreatetruecolor(120, 60);

/*Color code for orange*/
$orange = imagecolorallocate($im, 0xFF, 0x8c, 0x00);

/*Color code for white*/
$white = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);

/*Generate a random string using md5*/ 
$md5_hash = md5(rand(0,999)); 

/*Trim the string down to 6 characters*/ 
$captcha_code = substr($md5_hash, 15, 6); 

/*Store the value of the generated captcha code in session*/
$_SESSION['captcha'] = $captcha_code; 


imagefilledrectangle($im, 0, 0, 120, 60, $orange);

/*Path where TTF font file is present*/
$path = getcwd();


$font_file = $path."/a.ttf";


// imagestring($im,20,5,5,$captcha_code,$white);
/* Draw our randomly generated code*/
imagettftext($im, 30, 12, 10, 53, $white, $font_file, $captcha_code);

/* Output the image to the browser*/
header('Content-Type: image/png');

imagepng($im);

/*Destroy*/
imagedestroy($im);
?>
