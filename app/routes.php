<?php

$app->get('/', function ($request, $response) {

    return $this->view->render($response, 'skeleton.twig');

});

?>
