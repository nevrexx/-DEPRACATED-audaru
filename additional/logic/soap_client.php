<?php
ini_set('soap.wsdl_cache_enabled', '0');


$text = $_POST['text'];
$from = $_POST['from'];
$to = $_POST['to'];
//$theme = $_POST['theme'];


//echo 'working:'.$text.'&'.$from.'&'.$to;//.'&'.$theme;


$client = new SoapClient('http://audaru.kz/server.wsdl');

try
{
    $text = $text;
    $html = false;
    $key = 'SjLtSVc2690yZUxLEYWG';
    
if ($from == 'Rus')
{
    echo $client->toKaz($text, $html, $key);
}
if ($from == 'Kaz')
{
    echo $client->toRus($text, $key);
}
}
catch(SoapFault $e)
{
    echo $e->getMessage();
}

?>