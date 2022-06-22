<?php


session_start();

//Import the Class File
include 'vendor/autoload.php';
//$captcha = new omranjamal\RealCaptcha\RealCaptcha();


//random color function

function random_color_array(){
	$r = rand(0,255);
	$g = rand(0,255);
	$b = rand(0,255);
	return array($r, $g, $b);
}

//Initialization & Setings
$captcha = new omranjamal\RealCaptcha\RealCaptcha(array(

	//HEIGHT AND WIDTH SETTINGS (in pixels)
	"height" => 600,
	"width" => 600,

	//COLOR CHOICES

	//RANDOM COLORS
	"background_color" => random_color_array(), //Bright Red
    "text_color" => random_color_array(), //White

	//HANDPICKED COLORS
	//"background_color" => array(0,0,0), //uncomment to overwrite background colors
    //"text_color" => array(255,255,255), //uncomment to overwrite text color

	"source" => omranjamal\RealCaptcha\RealCaptcha::uFUNCTION,

	"fonts_dir" => "shwirl_captchas/vendor/omranjamal/real-captcha/resources/fonts2", //folder where you can add your own fonts (must be .ttf or .otf)
	
	"random_length" => TRUE,
));

$captcha->textFunction(function(){
    return array("stupid","idiot");
});


// Captchas Generating ----------------------------------------------------------------------------------------


//Individual Generation:
$captcha->generate()->file("OUTPUT/file.jpg" ,"jpg", 50); // you can change the jpg quality here


//Batch Generation (same color):
/*for ($x = 0; $x <= 3; $x++) {
	$captcha->generate()->file("OUTPUT/file{$x}.jpg" ,"jpg", 50);
}*/



//Batch Generation (different colors):

/*for ($x = 0; $x <= 300; $x++) {
	$captcha = new omranjamal\RealCaptcha\RealCaptcha(array(
		"height" => 400,
		"width" => 400,
		"background_color" => random_color_array(), //Bright Red
		"text_color" => random_color_array(), //White
		"source" => omranjamal\RealCaptcha\RealCaptcha::uFUNCTION,
		"fonts_dir" => "shwirl_captchas/vendor/omranjamal/real-captcha/resources/fonts2", //folder where you can add your own fonts (must be .ttf or .otf)
		"random_length" => TRUE,
	));
	
	$captcha->textFunction(function(){
		return array("stupid","idiot");
	});
	
	$captcha->generate()->file("OUTPUT/file{$x}.jpg" ,"jpg", 50);
}*/


?>