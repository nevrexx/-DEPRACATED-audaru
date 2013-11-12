audaru
======

Public sample for audaru.kz API:

Source text for translation
<code>
$text = $_POST['text']; 
</code>

Translation direction Rus <-> Kaz
<code>
$from = $_POST['from'];
</code>

Translation direction Kaz <-> Rus
<code>
$to = $_POST['to'];  
</code>


SOAP server url
<code>
$client = new SoapClient('http://audaru.kz/server.wsdl'); 
</code>

API method for russian to kazakh translation
<code>
$client->toKaz($text, $html, $key);
</code>

API method for kazakh to russian translation
<code>
$client->toRus($text, $key); 
</code>
