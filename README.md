audaru
======

Public sample for audaru.kz API

$text = $_POST['text']; // Source text for translation

$from = $_POST['from']; // translation direction Rus <-> Kaz

$to = $_POST['to']; // translation direction Kaz <-> Rus

$client = new SoapClient('http://audaru.kz/server.wsdl'); // SOAP server url

$client->toKaz($text, $html, $key); // API method for russian to kazakh translation

$client->toRus($text, $key); API method for kazakh to russian translation
