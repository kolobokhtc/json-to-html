<?php
/**
 * Created by PhpStorm.
 * User: Vladimir Pavlov <kolobokhtc@gmail.com>
 * Date: 17.08.2017 11:37
 */

require_once ('bootstrap.php');

$render = new Mustache_Engine();

$json = '{"cpanel":[{"name":"playback","content":[{"id":"play"},{"id":"pause"},{"id":"stop"}]},{"name":"zoom","content":[{"id":"zoomIn"},{"id":"zoomOut"}]}]}';

$jsonArray = json_decode($json, TRUE);

if (json_last_error() || empty($jsonArray)) {
    throw new Exception('Invalid json request', 1);
}

echo $render->render(\JsonToHtml\Templates\Panel::getTemplate(), $jsonArray); // "Hello World!"
