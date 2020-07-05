<?php
use Slim\Factory\AppFactory;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterFace;

require_once($_SERVER["DOCUMENT_ROOT"]."/firstslim/vendor/autoload.php");

$app = AppFactory::create();

$app->get(
    "/firstslim/public/hello",
    function (ServerRequestInterface $request, ResponseInterFace $response, array $args): ResponseInterFace {
        print("Hello World");
        return $response;
    }
);

$app->run();
