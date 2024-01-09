<?php
//
// *** To Email ***
$to = 'sekhongoldy840@gmail.com';
//
// *** Subject Email ***
$subject = 'hlo';
//
// *** Content Email ***
$content = 'hi';
//
//*** Head Email ***
$headers = "From: nightshades.com@gmail.com"."\r\n";
//
//*** Show the result... ***
if (mail($to, $subject, $content, $headers))
{
	echo "Success !!!";
} 
else 
{
   	echo "ERROR";
}