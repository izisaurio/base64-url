<?php

require '../vendor/autoload.php';

use Inn\Base64Url;

$encoded = Base64Url::encode('izisaurio');

var_dump($encoded);

$decoded = Base64Url::decode($encoded);

var_dump($decoded);
