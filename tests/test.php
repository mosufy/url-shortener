<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Mosufy\UrlShortener\UrlShortener;

echo UrlShortener::shortenUrl('https://www.domain.com/test');
