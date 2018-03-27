<?php

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$res = $client->request('GET', 'https://www.tentacode.net');

$cat = new \Creature\Animal\Cat("Shiva");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        Status Code : <?= $res->getStatusCode() ?><br />
        Mon chat : <?= $cat ?><br />
        Body :
        <pre>
            <?= htmlspecialchars($res->getBody()); ?>
        </pre>
    </body>
</html>
